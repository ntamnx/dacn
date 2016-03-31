<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\SanPham;
use Request;
use App\HoaDon;
use App\BAHD;
use App\CTHoaDon;
use DB;
use Auth;
use App\Http\Requests\LapHDRequest;

class LapHDController extends Controller {

    public function getList() {
        $hoaDon = HoaDon::select()->get()->toArray();
        return view('admin.laphd.list', compact('hoaDon'));
    }

    public function getIn($id) {
        $hoaDon = HoaDon::where('id', $id)->get()->first();
        $sum    = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'))->where('mahd', $id)->get()->first();
        $tong   = $sum['total'];
        $ctHD   = CTHoaDon::where('mahd', $id)->join('sanpham', 'ct_hoadon.masp', '=', 'sanpham.id')->select('ct_hoadon.*', 'sanpham.name')->get()->toArray();
        return view('admin.laphd.inhoadon', compact('hoaDon', 'tong', 'ctHD'));
    }

    public function getAdd() {
        BAHD::where('id', '>=', 0)->delete();
        $now      = date('Y-m-d', time());
        $products = SanPham::select()->get()->toArray();
        return view('admin.laphd.add', compact('products', 'now'));
    }

    public function postAdd(LapHDRequest $request) {
        $now               = date('Y-m-d', time());
        $hoaDon            = new HoaDon();
        $hoaDon->ngaylap   = $now;
        $hoaDon->manv      = Auth::user()->id;
        $hoaDon->ten_kh    = $request->txtNameKH;
        $hoaDon->diachi    = $request->txtDiaChi;
        $hoaDon->sdt       = $request->txtSoDienThoai;
        $hoaDon->noinhan   = $request->txtNoiNhan;
        $hoaDon->tgnhan    = $request->txtThoiGianNhan;
        $hoaDon->trangthai = $request->txtTrangThai;
        $hoaDon->save();
        $maHD              = HoaDon::max('id');
        $ctHD              = BAHD::select()->get()->toArray();
        foreach ($ctHD as $item) {
            $ctHoaDon          = new CTHoaDon();
            $ctHoaDon->mahd    = $maHD;
            $ctHoaDon->masp    = $item['id'];
            $ctHoaDon->soluong = $item['soluong'];
            $ctHoaDon->dongia  = $item['dongia'];
            $ctHoaDon->tensp   = $item['tensp'];
            $ctHoaDon->save();
            $soLuong           = SanPham::find($item['id']);
            $soLuong->soluong  = $soLuong['soluong'] - $item['soluong'];
            $soLuong->save();
        }
        return redirect()->route('admin.laphd.list')->with(['flash_level' => 'success', 'flash_message' => 'Lập Hóa đơn thành công!']);
    }

    public function getChange() {
        if (Request::ajax()) {
            $id      = (int) Request::get('da');
            $sanPham = SanPham::find($id);
            $donGia  = $sanPham['gia'];
            $soLuong = $sanPham['soluong'];
            $data    = array('dongia'  => $donGia,
                'soluong' => $soLuong);
            return $data;
        }
    }

    public function getShow() {
        if (Request::ajax()) {
            $id   = (int) Request::get('da');
            $sum  = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'))->where('mahd', $id)->get()->first();
            $tong = $sum['total'];
            $ctHD = CTHoaDon::where('mahd', $id)->get()->toArray();
            return view('admin.laphd.listhd', compact('ctHD', 'tong'));
        }
    }

    public function getClick() {
        if (Request::ajax()) {
            //$max = HoaDon::max('id');
            //$a = $max + 1;
            $id             = (int) Request::get('da');
            $sanPham        = SanPham::find($id);
            $sl             = (int) Request::get('sl');
            $ba_hd          = new BAHD();
            $ba_hd->id      = $id;
            $ba_hd->soluong = $sl;
            $ba_hd->dongia  = $sanPham->gia;
            $ba_hd->tensp   = $sanPham->name;
            $ba_hd->save();
            $sum            = BAHD::select(DB::raw('sum(soluong*dongia) AS total'))->get()->first();
            $tong           = $sum['total'];
            $ba_hd1         = BAHD::select()->get()->toArray();
            return view('admin.laphd.danhsach', compact('ba_hd1', 'tong'));
        }
    }

    public function getDelete() {
        if (Request::ajax()) {
            $id     = (int) Request::get('da');
            $ba_hd  = BAHD::find($id);
            $ba_hd->delete($id);
            $sum    = BAHD::select(DB::raw('sum(soluong*dongia) AS total'))->get()->first();
            $tong   = $sum['total'];
            $ba_hd1 = BAHD::select()->get()->toArray();
            echo '<script> alert("Xóa thành công")</script>';
            return view('admin.laphd.danhsach', compact('ba_hd1', 'tong'));
        }
    }

    public function getDel($id) {
        $user_cr = Auth::user()->level;
        if ($user_cr == 2) {
            $ct_hoadon = CTHoaDon::select('masp', 'soluong')->where('mahd', $id)->get()->toArray();
            foreach ($ct_hoadon as $item) {
                $product          = SanPham::find($item['masp']);
                $product->soluong = $product['soluong'] + $item['soluong'];
                $product->save();
            }
            $hoaDon = HoaDon::find($id);
            $hoaDon->delete($id);
            return redirect()->route('admin.laphd.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa hóa đơn thành công']);
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

    public function getDonHang() {
        $time_click             = \App\TimeClick::find(1);
        $tg                     = $time_click->time_click;
        $hoaDon                 = HoaDon::where('created_at', '>=', $tg)->get()->toArray();
        $now                    = date('Y-m-d H:i:s', time());
        $time_click->time_click = $now;
        $time_click->save();
        return view('admin.laphd.list', compact('hoaDon'));
    }

}
