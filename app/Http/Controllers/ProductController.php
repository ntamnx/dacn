<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSP;
use App\AnhSP;
use File;
use Request;
use Input;
use DB;

//use Requests;

class ProductController extends Controller {

    public function getList(Request $request) {
        $name   = Request::input('tensp');
        $maloai = Request::input('select_masp');
        $cate   = LoaiSP::select()->get()->toArray();
        if ($name != "" && $maloai == 0) {
            $products = DB::table('sanpham')
                    ->join('loaisp', 'loaisp.id', '=', 'sanpham.maloai')
                    ->select('sanpham.*', 'loaisp.name as tenloai')
                    ->where('sanpham.name', 'like', '%' . $name . '%')
                    ->get();
        } else if ($name == "" && $maloai != 0) {
            $products = DB::table('sanpham')
                    ->join('loaisp', 'loaisp.id', '=', 'sanpham.maloai')
                    ->select('sanpham.*', 'loaisp.name as tenloai')
                    ->where('loaisp.id', $maloai)
                    ->get();
        } else if ($name != "" && $maloai != 0) {
            $products = DB::table('sanpham')
                    ->join('loaisp', 'loaisp.id', '=', 'sanpham.maloai')
                    ->select('sanpham.*', 'loaisp.name as tenloai')
                    ->where('sanpham.name', 'like', '%' . $name . '%')
                    ->where('loaisp.id', $maloai)
                    ->get();
        } else {
            $products = DB::table('sanpham')
                    ->join('loaisp', 'loaisp.id', '=', 'sanpham.maloai')
                    ->select('sanpham.*', 'loaisp.name as tenloai')
                    ->get();
        }
        return view('admin.product.list', compact('products', 'cate', 'name', 'maloai'));
    }

    public function getAdd() {
        $cate = LoaiSP::select()->get()->toArray();
        return view('admin.product.add', compact('cate'));
    }

    public function postAdd(ProductRequest $request) {
        $file                = $request->file('FanhSP')->getClientOriginalName();
        $fileName            = time() . $file;
        $product             = new SanPham();
        $product->name       = $request->txtTenSP;
        $product->gia        = $request->txtGiaBan;
        $product->baohanh    = $request->txtThoiGianBH;
        $product->sanxuat    = $request->txtXuatSu;
        $product->mau        = $request->txtMau;
        $product->soluong    = 0;
        $product->anh        = $fileName;
        $product->trang_thai = $request->txtTrangThai;
        $product->maloai     = $request->select_masp;
        $request->file('FanhSP')->move('resources/upload/', $fileName);
        $product->save();
        $id                  = $product->id;
        if (Input::hasFile('fProduct')) {
            foreach (Input::file('fProduct') as $file) {
                $img = new AnhSP();
                if (isset($file)) {
                    $name             = time() . $file->getClientOriginalName();
                    $img->anh         = $name;
                    $img->san_pham_id = $id;
                    $file->move('resources/upload/detail/', $name);
                    $img->save();
                }
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sản phẩm thành công!']);
    }

    public function getDelete($id) {
        $img = SanPham::find($id)->images->toArray();
        foreach ($img as $value) {
            $anh = AnhSP::find($value["id"]);
            //$anh->delete();
            File::delete('resources/upload/detail/' . $value["anh"]);
        }
        $product = SanPham::find($id);
        File::delete('resources/upload/' . $product->anh);
        $product->delete($id);
        return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa sản phẩm thành công!']);
    }

    public function getEdit($id) {
        $cate    = LoaiSP::select()->get()->toArray();
        $product = SanPham::find($id);
        $img     = SanPham::find($id)->images->toArray();
        return view('admin.product.edit', compact('cate', 'product', 'img'));
    }

    public function postEdit($id) {
        $product             = SanPham::find($id);
        $product->name       = Request::input('txtTenSP');
        $product->gia        = Request::input('txtGiaBan');
        $product->baohanh    = Request::input('txtThoiGianBH');
        $product->sanxuat    = Request::input('txtXuatSu');
        $product->mau        = Request::input('txtMau');
        $product->soluong    = $product['soluong'];
        // $product->anh = $fileName;
        $product->trang_thai = Request::input('txtTrangThai');
        $product->maloai     = Request::input('select_masp');
        $img_curent          = 'resources/upload/' . Request::input('img_current');
        if (!empty(Request::file("FanhSP"))) {
            $fileName     = time() . Request::file('FanhSP')->getClientOriginalName();
            $product->anh = $fileName;
            Request::file('FanhSP')->move('resources/upload/', $fileName);
            if (File::exists($img_curent)) {
                File::delete($img_curent);
            }
        } else {
            $product->anh = Request::input('img_current');
        }
        $product->save();
        if (!empty(Request::file('fProduct'))) {
            foreach (Request::file('fProduct') as $file) {
                if (isset($file)) {
                    $img              = new AnhSP();
                    $fileName         = time() . $file->getClientOriginalName();
                    $img->anh         = $fileName;
                    $img->san_pham_id = $id;
                    $file->move('resources/upload/detail', $fileName);
                    $img->save();
                }
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Cập nhật sản phẩm thành công!']);
    }

    public function getDelImg($id) {
        if (Request::ajax()) {
            $idImage = (int) Request::get('idHinh');
            $image   = AnhSP::find($idImage);
            //var_dump($image);
            if (!empty($image)) {
                $img = 'resources/upload/detail/' . $image->anh;
                if (File::exists($img)) {
                    File::delete($img);
                }
                $image->delete();
            }
            return "ok";
        }
    }

}
