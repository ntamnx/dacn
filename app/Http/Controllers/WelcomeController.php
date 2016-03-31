<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CTHoaDon;
use App\SanPham;
use App\PhuKien;
use DB;
use Cart;
use NL_Checkout;

class WelcomeController extends Controller {

    public function index() {
	$sanPham	 = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'masp')->groupBy('masp')->orderBy('total', 'desc')->get()->toArray();
	$arr_masp	 = array();
	foreach ($sanPham as $value) {
	    $arr_masp[] = $value['masp'];
	}
	$sanPhamBanChay	 = SanPham::whereIn('id', $arr_masp)->skip(0)->take(6)->get()->toArray();
	$sanPhamMoi	 = SanPham::select()->skip(0)->take(6)->orderBy('id', 'desc')->get()->toArray();
	$phuKien	 = PhuKien::select()->skip(0)->take(3)->orderBy('id', 'desc')->get()->toArray();
	return view('user.pages.index', compact('sanPhamMoi', 'sanPhamBanChay', 'phuKien'));
    }

    public function hoTroMuaHang() {
	return view('user.pages.hotro');
    }

    public function supportSales(Request $request) {
	$hang		 = $request->hang;
	$gia		 = $request->rdioGia;
	$fillter	 = array('hang' => $hang, 'Prices' => $gia);
	$products	 = SanPham::search($fillter);
	return view('user.pages.goiy', compact('products'));
    }

    public function tienHanhThanhToan(Request $request) {
	$maHD			 = \App\DatHang::max('id');
	$receiver		 = "tam94dk4@gmail.com";
	$return_url		 = "http://localhost:81/dacn/thanh-toan-thanh-cong";
	//Giá của cả giỏ hàng 
	$price			 = Cart::total();
	//Mã giỏ hàng 
	$order_code		 = $maHD;
	//Thông tin giao dịch
	$transaction_info	 = "Test Ban Hang";
	//Khai báo đối tượng của lớp NL_Checkout
	$nl			 = new NL_Checkout();
	Cart::destroy();
	//Tạo link thanh toán đến nganluong.vn
	$url			 = $nl->buildCheckoutUrl($return_url, $receiver, $transaction_info, $order_code, $price);
	header("refresh:1;url=$url");
    }

    public function thanhToanThanhCong() {
	//Lấy thông tin giao dịch
	$transaction_info	 = $_GET["transaction_info"];
	//Lấy mã đơn hàng 
	$order_code		 = $_GET["order_code"];
	//Lấy tổng số tiền thanh toán tại ngân lượng 
	$price			 = $_GET["price"];
	//Lấy mã giao dịch thanh toán tại ngân lượng
	$payment_id		 = $_GET["payment_id"];
	//Lấy loại giao dịch tại ngân lượng (1=thanh toán ngay ,2=thanh toán tạm giữ)
	$payment_type		 = $_GET["payment_type"];
	//Lấy thông tin chi tiết về lỗi trong quá trình giao dịch
	$error_text		 = $_GET["error_text"];
	//Lấy mã kiểm tra tính hợp lệ của đầu vào 
	$secure_code		 = $_GET["secure_code"];

	$nl	 = new NL_Checkout();
	$check	 = $nl->verifyPaymentUrl($transaction_info, $order_code, $price, $payment_id, $payment_type, $error_text, $secure_code);
	$html	 = '';
	if ($check) {
	    $DonHang		 = \App\DatHang::find($order_code);
	    $DonHang->trangthai	 = $payment_id;
	    $html .="<div align=\"center\">Cám ơn quý khách, quá trình thanh toán đã được hoàn tất. Chúng tôi sẽ kiểm tra và chuyển hàng sớm!</div>";
	}
	else
	    $html.="Quá trình thanh toán không thành công bạn vui lòng thực hiện lại";

	echo $html;
    }

    public function gioiThieu() {
	return view('user.pages.gioithieu');
    }

    public function tinTuc() {
	$tinT = \App\TinTuc::select()->paginate(5);
	return view('user.pages.tintuc', compact('tinT'));
    }

    public function chiTietTin($id) {
	$tinT		 = \App\TinTuc::find($id);
	$tinT->luot_xem	 = $tinT->luot_xem + 1;
	$tinT->save();
	$tinTuc		 = \App\TinTuc::select()->take(5)->get()->toArray();
	return view('user.pages.chitiettin', compact('tinT', 'tinTuc'));
    }

}
