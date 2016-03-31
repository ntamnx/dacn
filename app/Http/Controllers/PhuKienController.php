<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\PhuKien;
use App\SanPham;
use App\Http\Requests\PhuKienRequest;
use File;
use Request;

class PhuKienController extends Controller {

    public function getList() {
        $phukiens = PhuKien::select()->get()->toArray();
        return view('admin.phukien.list', compact('phukiens'));
    }

    public function getAdd() {
        $products = SanPham::select()->get()->toArray();
        return view('admin.phukien.add', compact('products'));
    }

    public function postAdd(PhuKienRequest $request) {
        $file = $request->file('anhphukien')->getClientOriginalName();
        $fileName = time() . $file;
        $phukien = new PhuKien();
        $phukien->tenpk = $request->txtPhuKien;
        $phukien->masp = $request->sl_tenpk;
        $phukien->gia = $request->txtGia;
        $phukien->bao_hanh = $request->txtThoiGianBH;
        $phukien->soluong = $request->txtSoLuong;
        $phukien->anh = $fileName;
        $phukien->mota = $request->txtMota;
        $request->file('anhphukien')->move('resources/upload/phukien/', $fileName);
        $phukien->save();
        return redirect()->route('admin.phukien.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm phụ kiện thành công!']);
    }

    public function getDelete($id) {
        $phuKien = PhuKien::find($id);
        File::delete('resources/upload/phukien' . $phuKien->anh);
        $phuKien->delete($id);
        return redirect()->route('admin.phukien.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa phụ kiện thành công!']);
    }

    public function getEdit($id) {
        $products = SanPham::select()->get()->toArray();
        $phukien = PhuKien::find($id);
        return view('admin.phukien.edit', compact('products', 'phukien'));
    }

    public function postEdit($id) {
        $phukien = PhuKien::find($id);
        $phukien->tenpk = Request::input('txtPhuKien');
        $phukien->masp = Request::input('sl_tenpk');
        $phukien->gia = Request::input('txtGia');
        $phukien->bao_hanh = Request::input('txtThoiGianBH');
        $phukien->soluong = Request::input('txtSoLuong');
        $phukien->mota = Request::input('txtMota');

        $img_curent = 'resources/upload/phukien' . Request::input('img_current');
        if (!empty(Request::file("anhphukien"))) {
            $fileName = time() . Request::file('anhphukien')->getClientOriginalName();
            $phukien->anh = $fileName;
            Request::file('anhphukien')->move('resources/upload/phukien', $fileName);
            if (File::exists($img_curent)) {
                File::delete($img_curent);
            }
        } else {
            $phukien->anh = Request::input('img_current');
        }
        $phukien->save();
        return redirect()->route('admin.phukien.list')->with(['flash_level' => 'success', 'flash_message' => 'Cập nhật phụ kiện thành công!']);
    }

}
