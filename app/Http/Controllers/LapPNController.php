<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\SanPham;
use Request;
use App\BAPN;
use App\NhaCC;
use App\PhieuNhap;
use DB;
use Auth;
use DateTime;
use App\Http\Requests\LapPNRequest;
use App\CT_PhieuNhap;

class LapPNController extends Controller {

    public function getList() {
        $phieuNhap = PhieuNhap::select()->get()->toArray();
        return view('admin.lappn.list', compact('phieuNhap'));
    }

    public function getAdd() {
        BAPN::where('id', '>=', 0)->delete();
        $nhaNCC = NhaCC::select()->get()->toArray();
        $now = date('Y-m-d', time());
        $products = SanPham::select()->get()->toArray();
        return view('admin.lappn.add', compact('products', 'nhaNCC', 'now'));
    }

    public function postAdd(LapPNRequest $request) {
        $now = date('Y-m-d', time());
        $phieuNhap = new PhieuNhap();
        $phieuNhap->ngaynhap = $now;
        $phieuNhap->mancc = $request->sl_ncc;
        $phieuNhap->manv = Auth::user()->id;
        $phieuNhap->save();
        $maPN = PhieuNhap::max('id');
        $ctPN = BAPN::select()->get()->toArray();
        foreach ($ctPN as $item) {
            $ctPhieuNhap = new CT_PhieuNhap();
            $ctPhieuNhap->mapn = $maPN;
            $ctPhieuNhap->id = $item['id'];
            $ctPhieuNhap->soluong = $item['soluong'];
            $ctPhieuNhap->dongia = $item['dongia'];
            $ctPhieuNhap->save();
            $soLuong = SanPham::find($item['id']);
            $soLuong->soluong = $soLuong['soluong'] + $item['soluong'];
            $soLuong->save();
        }
        return redirect()->route('admin.lappn.list')->with(['flash_level' => 'success', 'flash_message' => 'Lập phiếu nhập thành công!']);
    }

    public function getChange() {
        if (Request::ajax()) {
            $id = (int) Request::get('da');
            $sanPham = SanPham::find($id);
            $soluong = $sanPham['soluong'];
            return $soluong;
        }
    }

    public function getShow() {
        if (Request::ajax()) {
            $id = (int) Request::get('da');
            $sum = CT_PhieuNhap::select(DB::raw('sum(soluong*dongia) AS total'))->where('mapn', $id)->get()->first();
            $tong = $sum['total'];
            $ba_pn1 = BAPN::select()->get()->toArray();
            $ctPN = CT_PhieuNhap::where('mapn', $id)->get()->toArray();
            return view('admin.lappn.listpn', compact('$ba_pn1', 'ctPN', 'tong'));
        }
    }

    public function getClick() {
        if (Request::ajax()) {
            $max = SanPham::max('id');
            $a = $max + 1;
            $id = (int) Request::get('da');
            $sl = (int) Request::get('sl');
            $dg = (int) Request::get('dg');
            $ba_pn = new BAPN();
            $ba_pn->id = $id;
            $ba_pn->mapn = $a;
            $ba_pn->soluong = $sl;
            $ba_pn->dongia = $dg;
            $ba_pn->save();
            $sum = BAPN::select(DB::raw('sum(soluong*dongia) AS total'))->get()->first();
            $tong = $sum['total'];
            $ba_pn1 = BAPN::select('mapn', 'id', 'soluong', 'dongia')->get()->toArray();
            return view('admin.lappn.danhsach', compact('ba_pn1', 'tong'));
        }
    }

    public function getDelete() {
        if (Request::ajax()) {
            $id = (int) Request::get('da');
            $ba_pn = BAPN::find($id);
            $ba_pn->delete();
            $sum = BAPN::select(DB::raw('sum(soluong*dongia) AS total'))->get()->first();
            $tong = $sum['total'];
            $ba_pn1 = BAPN::select()->get()->toArray();
            echo '<script> alert("Xóa thành công")</script>';
            return view('admin.lappn.danhsach', compact('ba_pn1', 'tong'));
        }
    }
     public function getDel($id) {
        $user_cr = Auth::user()->level;
        if ($user_cr == 2) {
            $ct_pn = CT_PhieuNhap::select('id', 'soluong')->where('mapn', $id)->get()->toArray();
            foreach ($ct_pn as $item) {
                $product = SanPham::find($item['id']);
                $product->soluong = $product['soluong'] - $item['soluong'];
                $product->save();
            }
            $phieuNhap = PhieuNhap::find($id);
            $phieuNhap->delete($id);
            return redirect()->route('admin.laphd.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa hóa đơn thành công']);
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

}
