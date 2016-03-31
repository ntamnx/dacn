<?php

namespace App\Http\Controllers;

use Request;
use App\CTHoaDon;
use App\SanPham;
use App\PhuKien;
use DB;
use Cart;
use App\Http\Requests\DatHangRequest;

class HomeController extends Controller {

//    public function __construct() {
//        $this->middleware('auth');
//    }

    public function index() {
        $sanPham  = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'masp')->groupBy('masp')->orderBy('total', 'desc')->get()->toArray();
        $arr_masp = array();
        foreach ($sanPham as $value) {
            $arr_masp[] = $value['masp'];
        }
        $sanPhamBanChay = SanPham::whereIn('id', $arr_masp)->skip(0)->take(6)->get()->toArray();
        $sanPhamMoi     = SanPham::select()->skip(0)->take(6)->orderBy('id', 'desc')->get()->toArray();
        $phuKien        = PhuKien::select()->skip(0)->take(3)->orderBy('id', 'desc')->get()->toArray();
        return view('user.pages.index', compact('sanPhamMoi', 'sanPhamBanChay', 'phuKien'));
    }

    public function getHome() {
        $sanPham  = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'masp')->groupBy('masp')->orderBy('total', 'desc')->get()->toArray();
        $arr_masp = array();
        foreach ($sanPham as $value) {
            $arr_masp[] = $value['masp'];
        }
        $sanPhamBanChay = SanPham::whereIn('id', $arr_masp)->skip(0)->take(6)->get()->toArray();
        $sanPhamMoi     = SanPham::select()->skip(0)->take(6)->orderBy('id', 'desc')->get()->toArray();
        $phuKien        = PhuKien::select()->skip(0)->take(3)->orderBy('id', 'desc')->get()->toArray();
        return view('user.pages.index', compact('sanPhamMoi', 'sanPhamBanChay', 'phuKien'));
    }

    public function getListProduct() {
        $key = Request::input('name');
        if ($key != "") {
            $products = SanPham::select()->orderBy('id', 'desc')->where('name', 'like', '%' . $key . '%')->paginate(12);
        } else {
            $products = SanPham::select()->orderBy('id', 'desc')->paginate(12);
        }
        return view('user.pages.product', compact('products','key'));
    }

    public function getPrice() {
        $products = SanPham::select()->orderBy('id', 'desc')->paginate(20);
        return view('user.pages.baogia', compact('products'));
    }

    public function phuKien() {
        $phuKiens = PhuKien::select()->orderBy('id', 'desc')->paginate(12);
        return view('user.pages.phukien', compact('phuKiens'));
    }

    public function getListCate($id) {
        $products = SanPham::where('maloai', $id)->orderBy('id', 'desc')->paginate(12);
        return view('user.pages.cate', compact('products'));
    }

    public function getSoSanh() {
        if (Request::ajax()) {
            $id       = (int) Request::get('da');
            $tinhNang = \App\TinhNang::where('masp', '=', $id)->get()->first();
            return view('user.pages.cungloai', compact('tinhNang'));
        }
    }

    public function getProductDetail($id) {
        $select   = SanPham::select()->get()->toArray();
        $product  = SanPham::where('id', '=', $id)->get()->first();
        $img      = \App\AnhSP::where('san_pham_id', '=', $id)->get()->toArray();
        $maLoai   = $product->maloai;
        $phuKien  = PhuKien::where('masp', '=', $id)->get()->toArray();
        $cungLoai = SanPham::where('maloai', '=', $maLoai)->where('id', '<>', $id)->get()->toArray();
        $tinhNang = \App\TinhNang::where('masp', '=', $id)->get()->first();
        return view('user.pages.detail', compact('product', 'img', 'cungLoai', 'phuKien', 'tinhNang', 'select'));
    }

    public function getCart() {
        $products = SanPham::select()->orderBy('id', 'desc')->get()->toArray();
        return view('user.pages.cart', compact('products'));
    }

    public function muaHang($id) {
        $product_buy = SanPham::find($id);
        Cart::add(array('id' => $id, 'name' => $product_buy->name, 'qty' => 1, 'price' => $product_buy->gia));
        return redirect()->route('gioHang');
    }

    public function gioHang() {
        $content = Cart::content();
        return view('user.pages.cart', compact('content'));
    }

    public function xoaSP($id) {
        Cart::remove($id);
        return redirect()->route('gioHang');
    }

    public function updateGioHang($id) {
        $qty = Request::input('qty');
        Cart::update($id, $qty);
        return redirect()->route('gioHang');
    }

    public function phieuDatHang(DatHangRequest $request) {
        if (Cart::count() === 0) {
            echo '<script> alert("Đặt hàng không thành công! Bạn chưa chọn sản phẩm")</script>';
            header("refresh:1;url=http://localhost:81/dacn/gio-hang");
        } else {
            $now               = date('Y-m-d', time());
            $hoaDon            = new \App\DatHang();
            $hoaDon->ngaylap   = $now;
            $hoaDon->manv      = 5;
            $hoaDon->ten_kh    = $request->txtTenKhachHang;
            $hoaDon->diachi    = $request->txtDiaChi;
            $hoaDon->sdt       = $request->txtSoDT;
            $hoaDon->noinhan   = $request->txtNoiNhan;
            $hoaDon->tgnhan    = $request->txtThoiGianNhan;
            $hoaDon->trangthai = "Đặt hàng tại webstite";
            $hoaDon->save();
            $maHD              = \App\DatHang::max('id');
            $content           = Cart::content();
            foreach ($content as $item) {
                $ctHoaDon          = new CTHoaDon();
                $ctHoaDon->mahd    = $maHD;
                $ctHoaDon->masp    = $item['id'];
                $ctHoaDon->soluong = $item['qty'];
                $ctHoaDon->dongia  = $item['price'];
                $ctHoaDon->tensp   = $item['name'];
                $ctHoaDon->save();
                $soLuong           = SanPham::find($item['id']);
                $soLuong->soluong  = $soLuong['soluong'] - $item['qty'];
                $soLuong->save();
            }
            echo '<script> alert("Đặt hàng thành công! chúng tỗi sẽ liên hệ với bạn!")</script>';
            header("refresh:1;url=http://localhost:81/dacn/hinh-thuc-thanh-toan");
        }
    }

    public function hinhThucThanhToan() {
        return view('user.pages.thanhtoan');
    }

    public function thanhToanTrucTiep() {
        Cart::destroy();
        echo '<script> alert("Chúng tỗi sẽ liên hệ với bạn! Xin Cảm ơn")</script>';
        header("refresh:1;url=http://localhost:81/dacn");
    }

}
