<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TinhNang;
use App\SanPham;
use App\Http\Requests\TinhNangRequest;
use DB;

class TinhNangController extends Controller {

    public function getList() {

        $tinhNangs = DB::table('tinhnang')
                ->join('sanpham', 'tinhnang.masp', '=', 'sanpham.id')
                ->select('tinhnang.*', 'sanpham.name')
                ->get();

        return view('admin.tinhnang.list', compact('tinhNangs'));
    }

    public function getAdd() {
        $products = SanPham::select()->get()->toArray();
        return view('admin.tinhnang.add', compact('products'));
    }

    public function postAdd(TinhNangRequest $request) {
        $tinhNang                      = new TinhNang();
        $tinhNang->masp                = $request->sl_tensp;
        $tinhNang->kichthuoc_khoiluong = $request->txtKichThuoc;
        $tinhNang->manhinh_hienthi     = $request->txtManHinh;
        $tinhNang->luutru_bonho        = $request->txtLuuTru;
        $tinhNang->dulieu_ketnoi       = $request->txtDuLieu;
        $tinhNang->ungdung_trochoi     = $request->txtUngDung;
        $tinhNang->nguon               = $request->txtNguon;
        $tinhNang->save();
        return redirect()->route('admin.tinhnang.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm tính năng cho sản phẩm thành công!']);
    }

    public function getDelete($id) {
        $tinhNang = TinhNang::find($id);
        $tinhNang->delete($id);
        return redirect()->route('admin.tinhnang.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa tính năng sản phẩm thành công!']);
    }

    public function getEdit($id) {
        $products = SanPham::select()->get()->toArray();
        $tinhNang = TinhNang::find($id);
        return view('admin.tinhnang.edit', compact('products', 'tinhNang'));
    }

    public function postEdit($id, Request $request) {
        $tinhNang                      = TinhNang::find($id);
        $tinhNang->masp                = $tinhNang->masp;
        $tinhNang->kichthuoc_khoiluong = $request->txtKichThuoc;
        $tinhNang->manhinh_hienthi     = $request->txtManHinh;
        $tinhNang->luutru_bonho        = $request->txtLuuTru;
        $tinhNang->dulieu_ketnoi       = $request->txtDuLieu;
        $tinhNang->ungdung_trochoi     = $request->txtUngDung;
        $tinhNang->nguon               = $request->txtNguon;
        $tinhNang->save();
        return redirect()->route('admin.tinhnang.list')->with(['flash_level' => 'success', 'flash_message' => 'Cập nhật tính năng sản phẩm thành công!']);
    }

}
