<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\TinTuc;
use File,Input;
use Request;

class TinTucController extends Controller {

    public function getList() {
	$tinTuc = \App\TinTuc::select()->get()->toArray();
	return view('admin.tintuc.list', compact('tinTuc'));
    }

    public function getAdd() {
	return view('admin.tintuc.add');
    }

    public function postAdd() {
	$now	 = getdate();
	$year	 = $now["year"];
	$moth	 = $now["mon"];
	$day	 = $now["mday"];

	$file			 = Request::file('anh')->getClientOriginalName();
	$fileName		 = time() . $file;
	$tenhinh		 = $year . '/' . $moth . '/' . $day . '/' . $fileName;
	$tinTuc			 = new TinTuc();
	$tinTuc->tieude		 = Request::input('tieude');
	$tinTuc->mota		 = Request::input('mota');
	$tinTuc->noidung	 =  Request::input('noidung');
	$tinTuc->anh		 = $tenhinh;
	$tinTuc->luot_xem	 = 0;
	Request::file('anh')->move('resources/upload/tintuc/' . $year . '/' . $moth . '/' . $day . '/', $fileName);
	$tinTuc->save();
	return redirect()->route('admin.tintuc.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm tin tức thành công!']);
    }

    public function getDelete($id) {
	$tinTuc = TinTuc::find($id);
	File::delete('resources/upload/tintuc/' . $tinTuc->anh);
	$tinTuc->delete($id);
	return redirect()->route('admin.tintuc.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa tin tức thành công!']);
    }

    public function getEdit($id) {
	$tinTuc = TinTuc::find($id);
	return view('admin.tintuc.edit', compact('tinTuc'));
    }

    public function postEdit($id) {


	$now	 = getdate();
	$year	 = $now["year"];
	$moth	 = $now["mon"];
	$day	 = $now["mday"];

//	$file		 = $request->file('anh')->getClientOriginalName();
//	$fileName	 = time() . $file;
//	$tenhinh	 = $year . '/' . $moth . '/' . $day . '/' . $fileName;
	$tinTuc		 = TinTuc::find($id);
	$tinTuc->tieude	 = Request::input('tieude');
	$tinTuc->mota	 = Request::input('mota');
	$tinTuc->noidung = Request::input('noidung');

	$img_curent = 'resources/upload/tintuc' . Request::input('img_current');
	if (!empty(Request::file("anh"))) {
	    $file		 = Request::file('anh')->getClientOriginalName();
	    $fileName	 = time() . $file;
	    $tenhinh	 = $year . '/' . $moth . '/' . $day . '/' . $fileName;
	    // $fileName	 = time() . Request::file('anh')->getClientOriginalName();
	    $tinTuc->anh	 = $tenhinh;
	    Request::file('anh')->move('resources/upload/tintuc/'. $year . '/' . $moth . '/' . $day . '/', $fileName);
	    if (File::exists($img_curent)) {
		File::delete($img_curent);
	    }
	}
	else {
	    $tinTuc->anh = Request::input('img_current');
	}
	$tinTuc->save();
	return redirect()->route('admin.tintuc.list')->with(['flash_level' => 'success', 'flash_message' => 'Cập nhật tin tuc thành công!']);
    }

}
