<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\NhaCCRequest;
use Illuminate\Http\Request;
use App\NhaCC;
use App\DatHang;
class NhaCCController extends Controller {

    public function getList() {
        $nhaCC = NhaCC::select()->get()->toArray();
        return view('admin.nhacc.list', compact('nhaCC'));
    }

    public function getAdmin() {
        $time_click = \App\TimeClick::find(1);
        $tg         = $time_click->time_click;
        $hoaDon     = DatHang::where('created_at', '>=', $tg)->get()->toArray();
        $result = count($hoaDon);
        return view('admin.admin',  compact('result'));
    }

    public function getAdd() {
        return view('admin.nhacc.add');
    }

    public function postAdd(NhaCCRequest $request) {
        $nhaCC            = new NhaCC();
        $nhaCC->name      = $request->txtNameNCC;
        $nhaCC->diachi    = $request->txtDiaChi;
        $nhaCC->dienthoai = $request->txtDienThoai;
        $nhaCC->save();
        return redirect()->route('admin.nhacc.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm nhà cung cấp thành công']);
    }

    public function getEdit($id) {
        $nhaCC = NhaCC::find($id);
        return view('admin.nhacc.edit', compact('nhaCC'));
    }

    public function postEdit(Request $request, $id) {
        $this->validate($request, ["txtNameNCC" => "required"], ["txtNameNCC.required" => "Ban phai nhap tên nhà cung cấp"]
        );
        $nhaCC            = NhaCC::find($id);
        $nhaCC->name      = $request->txtNameNCC;
        $nhaCC->diachi    = $request->txtDiaChi;
        $nhaCC->dienthoai = $request->txtDienThoai;
        $nhaCC->save();
        return redirect()->route('admin.nhacc.list')->with(['flash_level' => 'success', 'flash_message' => 'Sửa nhà cung cấp thành công']);
    }

    public function getDelete($id) {
        $nhaCC = NhaCC::find($id);
        $nhaCC->delete();
        return redirect()->route('admin.nhacc.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa nhà cung cấp thành công']);
    }

}
