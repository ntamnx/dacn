<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CTHoaDon;
use DB;

class ReportController extends Controller {

    public function banChay(Request $request) {
        $now     = getdate();
        $month   = $now["mon"];
        $tungay  = $request->tungay;
        $denngay = $request->denngay;
        $sanPham = array();
        if ($tungay == "") {
            $sanPham = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'tensp', 'masp')->where(DB::raw('MONTH(created_at)'), $month)->groupBy('masp')->get()->toArray();
        } else if ($denngay == "") {
            $sanPham = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'tensp', 'masp')->where(DB::raw('DATE(created_at)'), '>=', $tungay)->groupBy('masp')->get()->toArray();
        } else {
            $sanPham = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'tensp', 'masp')->where(DB::raw('DATE(created_at)'), '>=', $tungay)->where(DB::raw('DATE(created_at)'), '<=', $denngay)->groupBy('masp')->get()->toArray();
        }
        $data = '';
        foreach ($sanPham as $item) {
            $data.= ',' . '[' . '"' . $item['tensp'] . '"' . ',' . $item['total'] . ']';
        }
        $data = substr($data, 1, strlen($data));
        return view('admin.thongke.banchay', compact('data'));
    }

    public function inBanChay(Request $request) {
        $now     = getdate();
        $month   = $now["mon"];
        $tungay  = $request->tungay1;
        $denngay = $request->denngay1;
        $matHang = array();
        if ($matHang == "") {
            $matHang = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'tensp', 'masp')->where(DB::raw('MONTH(created_at)'), $month)->groupBy('masp')->get()->toArray();
        } else if ($denngay == "") {
            $matHang = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'tensp', 'masp')->where(DB::raw('DATE(created_at)'), '>=', $tungay)->groupBy('masp')->get()->toArray();
        } else {
            $matHang = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'tensp', 'masp')->where(DB::raw('DATE(created_at)'), '>=', $tungay)->where(DB::raw('DATE(created_at)'), '<=', $denngay)->groupBy('masp')->get()->toArray();
        }
        $thongke = "Thống kê sản phẩm bán chạy";
        return view('admin.thongke.inbanchay', compact('matHang', 'thongke', 'tungay', 'denngay'));
    }

    public function tonKho() {
        $products = DB::table('sanpham')
                ->join('loaisp', 'loaisp.id', '=', 'sanpham.maloai')
                ->select('sanpham.*', 'loaisp.name as tenloai')
                ->where('soluong', '>', 0)
                ->orderBy('soluong')
                ->get();
        return view('admin.thongke.tonkho', compact('products'));
    }

    public function doanhThu(Request $request) {
        $now      = getdate();
        $month    = $now["mon"];
        $tungay   = $request->tungay;
        $denngay  = $request->denngay;
        $doanhThu = array();
        if ($tungay == "") {
            $doanhThu = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->where(DB::raw('MONTH(created_at)'), $month)->groupBy('date')->get()->toArray();
        } else if ($denngay == "") {
            $doanhThu = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->where(DB::raw('DATE(created_at)'), '>=', $tungay)->groupBy('date')->get()->toArray();
        } else {
            $doanhThu = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->where(DB::raw('DATE(created_at)'), '>=', $tungay)->where(DB::raw('DATE(created_at)'), '<=', $denngay)->groupBy('date')->get()->toArray();
        }
        $data = '';
        foreach ($doanhThu as $item) {
            $data.= ',' . '[' . substr($item['date'], 8, strlen($item['date'])) . ',' . $item['total'] . ']';
        }
        $data = substr($data, 1, strlen($data));
        return view('admin.thongke.doanhthu', compact('data'));
    }

    public function inDoanhThu(Request $request) {
        $now     = getdate();
        $month   = $now["mon"];
        $tungay  = $request->tungay1;
        $denngay = $request->denngay1;
        $matHang = array();
        if ($tungay == "") {
            $matHang = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->where(DB::raw('MONTH(created_at)'), $month)->groupBy('date')->get()->toArray();
        } else if ($denngay == "") {
            $matHang = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->where(DB::raw('DATE(created_at)'), '>=', $tungay)->groupBy('date')->get()->toArray();
        } else {
            $matHang = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->where(DB::raw('DATE(created_at)'), '>=', $tungay)->where(DB::raw('DATE(created_at)'), '<=', $denngay)->groupBy('date')->get()->toArray();
        }
        $thongke = "Thống kê doanh thu";

        return view('admin.thongke.inthongke', compact('matHang', 'thongke', 'tungay', 'denngay'));
    }

    public function tungHang(Request $request) {
        $tungay  = $request->tungay;
        $denngay = $request->denngay;
        $now     = getdate();
        $month   = $now["mon"];

        if ($tungay == "" || $denngay == "") {
            $tungHang = DB::table('sanpham')
                            ->join('ct_hoadon', 'ct_hoadon.masp', '=', 'sanpham.id')
                            ->join('loaisp', 'sanpham.maloai', '=', 'loaisp.id')
                            ->select(DB::raw('sum(ct_hoadon.soluong) AS total'), 'loaisp.name')//whre  ngay nua la ok
                            ->where(DB::raw('MONTH(ct_hoadon.created_at)'), $month)
                            ->groupBy('loaisp.name')->get();
        } else {
            $tungHang = DB::table('sanpham')
                            ->join('ct_hoadon', 'ct_hoadon.masp', '=', 'sanpham.id')
                            ->join('loaisp', 'sanpham.maloai', '=', 'loaisp.id')
                            ->select(DB::raw('sum(ct_hoadon.soluong) AS total'), 'loaisp.name')//whre  ngay nua la ok
                            ->where(DB::raw('DATE(ct_hoadon.created_at)'), '>=', $tungay)
                            ->where(DB::raw('DATE(ct_hoadon.created_at)'), '<=', $denngay)
                            ->groupBy('loaisp.name')->get();
        }
        $data = '';
        foreach ($tungHang as $item) {
            $data.= ',' . '[' . '"' . $item->name . '"' . ',' . $item->total . ']';
        }
        $data = substr($data, 1, strlen($data));
        return view('admin.thongke.tunghang', compact('data'));
    }

    public function inTungHang(Request $request) {
        $tungay  = $request->tungay1;
        $denngay = $request->denngay1;
        $now     = getdate();
        $month   = $now["mon"];

        if ($tungay == "" || $denngay == "") {
            $tungHang = DB::table('sanpham')
                            ->join('ct_hoadon', 'ct_hoadon.masp', '=', 'sanpham.id')
                            ->join('loaisp', 'sanpham.maloai', '=', 'loaisp.id')
                            ->select(DB::raw('sum(ct_hoadon.soluong) AS total'), 'loaisp.name')//whre  ngay nua la ok
                            ->where(DB::raw('MONTH(ct_hoadon.created_at)'), $month)
                            ->groupBy('loaisp.name')->get();
        } else {
            $tungHang = DB::table('sanpham')
                            ->join('ct_hoadon', 'ct_hoadon.masp', '=', 'sanpham.id')
                            ->join('loaisp', 'sanpham.maloai', '=', 'loaisp.id')
                            ->select(DB::raw('sum(ct_hoadon.soluong) AS total'), 'loaisp.name')//whre  ngay nua la ok
                            ->where(DB::raw('DATE(ct_hoadon.created_at)'), '>=', $tungay)
                            ->where(DB::raw('DATE(ct_hoadon.created_at)'), '<=', $denngay)
                            ->groupBy('loaisp.name')->get();
        }
        $thongke = "Thống kê sản phẩm bán của từng hãng";
        return view('admin.thongke.intunghang', compact('tungHang', 'thongke', 'tungay', 'denngay'));
    }

}
