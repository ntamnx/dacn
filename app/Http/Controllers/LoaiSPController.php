<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\LoaiSP;
use App\Http\Requests\LoaiSPRequest;
use Request;

class LoaiSPController extends Controller {

    public function getList() {
        $loaiSP = LoaiSP::select()->get()->toArray();
        return view('admin.cate.list', compact('loaiSP'));
    }

    public function getAdd() {
        return view('admin.cate.add');
    }

    public function postAdd(LoaiSPRequest $request) {
        $loaiSP = new LoaiSP();
        $loaiSP->name = $request->txtTenLoaiSP;
        $loaiSP->save();
        return redirect()->route('admin.loaisp.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm nhà cung cấp thành công']);
    }

    public function getEdit($id) {
        $loaiSP = LoaiSP::find($id);
        return view('admin.cate.edit', compact('loaiSP'));
    }

    public function getSapXep() {
        $loaiSP = LoaiSP::select('name', 'id')->orderBy('thutu')->get()->toArray();
        return view('admin.cate.sapxep', compact('loaiSP'));
    }

    public function getSapXep1() {
        if (Request::ajax()) {
            $i = 0;
            $arr = Request::get('item');
            var_dump($arr);
            foreach ($arr as $value) {
                $i++;
                $loaiSP = LoaiSP::find($value);
                $loaiSP->thutu = $i;
                $loaiSP->save();
            }
        }
    }

    public function postEdit($id) {
        
        $loaiSP = LoaiSP::find($id);
        $loaiSP->name = Request::input('txtTenLoaiSP');
        $loaiSP->save();
        return redirect()->route('admin.loaisp.list')->with(['flash_level' => 'success', 'flash_message' => 'Sửa loại sản phẩm thành công']);
    }

    public function getDelete($id) {
        $loaiSP = LoaiSP::find($id);
        $loaiSP->delete();
        return redirect()->route('admin.loaisp.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa loại sản phẩm thành công thành công']);
    }

}
