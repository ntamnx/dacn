<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
    'auth'		 => 'Auth\AuthController',
    'password'	 => 'Auth\PasswordController',
]);

Route::get('admin', ['as' => 'admin', 'middleware' => 'auth', 'uses' => 'NhaCCController@getAdmin']);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'nhacc'], function () {
	Route::get('list', ['as' => 'admin.nhacc.list', 'uses' => 'NhaCCController@getList']);
	Route::get('add', ['as' => 'admin.nhacc.getAdd', 'uses' => 'NhaCCController@getAdd']);
	Route::post('add', ['as' => 'admin.nhacc.postAdd', 'uses' => 'NhaCCController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.nhacc.getEdit', 'uses' => 'NhaCCController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.nhacc.postEdit', 'uses' => 'NhaCCController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.nhacc.getDelete', 'uses' => 'NhaCCController@getDelete']);
    });
    Route::group(['prefix' => 'loaisp'], function () {
	Route::get('list', ['as' => 'admin.loaisp.list', 'uses' => 'LoaiSPController@getList']);
	Route::get('add', ['as' => 'admin.loaisp.getAdd', 'uses' => 'LoaiSPController@getAdd']);
	Route::post('add', ['as' => 'admin.loaisp.postAdd', 'uses' => 'LoaiSPController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.loaisp.getEdit', 'uses' => 'LoaiSPController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.loaisp.postEdit', 'uses' => 'LoaiSPController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.loaisp.getDelete', 'uses' => 'LoaiSPController@getDelete']);
	Route::get('sapxep', ['as' => 'admin.loaisp.getSapXep', 'uses' => 'LoaiSPController@getSapXep']);
	Route::get('sapxep1', ['as' => 'admin.loaisp.getSapXep1', 'uses' => 'LoaiSPController@getSapXep1']);
    });
    Route::group(['prefix' => 'user'], function () {
	Route::get('list', ['as' => 'admin.user.list', 'uses' => 'UserController@getList']);
	Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'UserController@getAdd']);
	Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'UserController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.user.getEdit', 'uses' => 'UserController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.user.postEdit', 'uses' => 'UserController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.user.getDelete', 'uses' => 'UserController@getDelete']);
	Route::get('mk/{id}', ['as' => 'admin.user.getMK', 'uses' => 'UserController@getMK']);
	Route::post('mk/{id}', ['as' => 'admin.user.postMK', 'uses' => 'UserController@postMK']);
    });
    Route::group(['prefix' => 'product'], function () {
	Route::get('list', ['as' => 'admin.product.list', 'uses' => 'ProductController@getList']);
	Route::get('add', ['as' => 'admin.product.getAdd', 'uses' => 'ProductController@getAdd']);
	Route::post('add', ['as' => 'admin.product.postAdd', 'uses' => 'ProductController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.product.getEdit', 'uses' => 'ProductController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.product.postEdit', 'uses' => 'ProductController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.product.getDelete', 'uses' => 'ProductController@getDelete']);
	Route::get('delimg/{id}', ['as' => 'admin.product.getDelImg', 'uses' => 'ProductController@getDelImg']);
    });
    Route::group(['prefix' => 'phukien'], function () {
	Route::get('list', ['as' => 'admin.phukien.list', 'uses' => 'PhuKienController@getList']);
	Route::get('add', ['as' => 'admin.phukien.getAdd', 'uses' => 'PhuKienController@getAdd']);
	Route::post('add', ['as' => 'admin.phukien.postAdd', 'uses' => 'PhuKienController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.phukien.getEdit', 'uses' => 'PhuKienController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.phukien.postEdit', 'uses' => 'PhuKienController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.phukien.getDelete', 'uses' => 'PhuKienController@getDelete']);
    });
    Route::group(['prefix' => 'tintuc'], function () {
	Route::get('list', ['as' => 'admin.tintuc.list', 'uses' => 'TinTucController@getList']);
	Route::get('add', ['as' => 'admin.tintuc.getAdd', 'uses' => 'TinTucController@getAdd']);
	Route::post('add', ['as' => 'admin.tintuc.postAdd', 'uses' => 'TinTucController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.tintuc.getEdit', 'uses' => 'TinTucController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.tintuc.postEdit', 'uses' => 'TinTucController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.tintuc.getDelete', 'uses' => 'TinTucController@getDelete']);
    });

    Route::group(['prefix' => 'tinhnang'], function () {
	Route::get('list', ['as' => 'admin.tinhnang.list', 'uses' => 'TinhNangController@getList']);
	Route::get('add', ['as' => 'admin.tinhnang.getAdd', 'uses' => 'TinhNangController@getAdd']);
	Route::post('add', ['as' => 'admin.tinhnang.postAdd', 'uses' => 'TinhNangController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.tinhnang.getEdit', 'uses' => 'TinhNangController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.tinhnang.postEdit', 'uses' => 'TinhNangController@postEdit']);
	Route::get('delete/{id}', ['as' => 'admin.tinhnang.getDelete', 'uses' => 'TinhNangController@getDelete']);
    });
    Route::group(['prefix' => 'lappn'], function () {
	Route::get('list', ['as' => 'admin.lappn.list', 'uses' => 'LapPNController@getList']);
	Route::get('add', ['as' => 'admin.lappn.getAdd', 'uses' => 'LapPNController@getAdd']);
	Route::get('change', ['as' => 'admin.lappn.getChange', 'uses' => 'LapPNController@getChange']);
	Route::get('show', ['as' => 'admin.lappn.getShow', 'uses' => 'LapPNController@getShow']);
	Route::get('click', ['as' => 'admin.lappn.getClick', 'uses' => 'LapPNController@getClick']);
	Route::post('add', ['as' => 'admin.lappn.postAdd', 'uses' => 'LapPNController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.lappn.getEdit', 'uses' => 'LapPNController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.lappn.postEdit', 'uses' => 'LapPNController@postEdit']);
	Route::get('delete', ['as' => 'admin.lappn.getDelete', 'uses' => 'LapPNController@getDelete']);
	Route::get('del/{id}', ['as' => 'admin.lappn.getDel', 'uses' => 'LapPNController@getDel']);
    });
    Route::group(['prefix' => 'laphd'], function () {
	Route::get('list', ['as' => 'admin.laphd.list', 'uses' => 'LapHDController@getList']);
	Route::get('xem-don-hang', ['as' => 'admin.laphd.getDonHang', 'uses' => 'LapHDController@getDonHang']);
	Route::get('add', ['as' => 'admin.laphd.getAdd', 'uses' => 'LapHDController@getAdd']);
	Route::get('change', ['as' => 'admin.laphd.getChange', 'uses' => 'LapHDController@getChange']);
	Route::get('show', ['as' => 'admin.laphd.getShow', 'uses' => 'LapHDController@getShow']);
	Route::get('click', ['as' => 'admin.laphd.getClick', 'uses' => 'LapHDController@getClick']);
	Route::post('add', ['as' => 'admin.laphd.postAdd', 'uses' => 'LapHDController@postAdd']);
	Route::get('edit/{id}', ['as' => 'admin.laphd.getEdit', 'uses' => 'LapHDController@getEdit']);
	Route::post('edit/{id}', ['as' => 'admin.laphd.postEdit', 'uses' => 'LapHDController@postEdit']);
	Route::get('delete', ['as' => 'admin.laphd.getDelete', 'uses' => 'LapHDController@getDelete']);
	Route::get('in/{id}', ['as' => 'admin.laphd.getIn', 'uses' => 'LapHDController@getIn']);
	Route::get('del/{id}', ['as' => 'admin.laphd.getDel', 'uses' => 'LapHDController@getDel']);
    });
    Route::group(['prefix' => 'thongke'], function () {
	Route::get('ban-chay', ['as' => 'admin.thongke.banChay', 'uses' => 'ReportController@banChay']);
	Route::get('in-b-c', ['as' => 'admin.thongke.inBanChay', 'uses' => 'ReportController@inBanChay']);
	Route::get('tung-hang', ['as' => 'admin.thongke.tungHang', 'uses' => 'ReportController@tungHang']);
	Route::get('in-tung-hang', ['as' => 'admin.thongke.inTungHang', 'uses' => 'ReportController@inTungHang']);
	Route::get('doanh-thu', ['as' => 'admin.thongke.doanhThu', 'uses' => 'ReportController@doanhThu']);
	Route::get('in', ['as' => 'admin.thongke.inDoanhThu', 'uses' => 'ReportController@inDoanhThu']);
	Route::get('ton-kho', ['as' => 'admin.thongke.tonKho', 'uses' => 'ReportController@tonkho']);
    });
});

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@getHome']);
Route::get('phu-kien', ['as' => 'phuKien', 'uses' => 'HomeController@phuKien']);
Route::get('bao-gia', ['as' => 'getPrice', 'uses' => 'HomeController@getPrice']);
Route::get('product-cart', ['as' => 'getCart', 'uses' => 'HomeController@getCart']);
Route::get('listproduct', ['as' => 'getListProduct', 'uses' => 'HomeController@getListProduct']);
Route::group(['prefix' => 'product'], function () {
    Route::get('list-product-cate/{id}', ['as' => 'product.getListCate', 'uses' => 'HomeController@getListCate']);
});
Route::get('product-deltail/{id}', ['as' => 'getProductDetail', 'uses' => 'HomeController@getProductDetail']);
Route::get('mua-hang/{id}', ['as' => 'muaHang', 'uses' => 'HomeController@muaHang']);
Route::get('gio-hang', ['as' => 'gioHang', 'uses' => 'HomeController@gioHang']);
Route::get('xao-san-pham/{id}', ['as' => 'xoaSP', 'uses' => 'HomeController@xoaSP']);
Route::post('cap-nhat-gio-hang/{id}', ['as' => 'updateGioHang', 'uses' => 'HomeController@updateGioHang']);
Route::post('lap-phieu-dat-hang', ['as' => 'phieuDatHang', 'uses' => 'HomeController@phieuDatHang']);
Route::get('so-sanh', ['as' => 'getSoSanh', 'uses' => 'HomeController@getSoSanh']);
Route::get('hinh-thuc-thanh-toan', ['as' => 'hinhThucThanhToan', 'uses' => 'HomeController@hinhThucThanhToan']);
Route::get('thanh-toan-truc-tiep', ['as' => 'thanhToanTrucTiep', 'uses' => 'HomeController@thanhToanTrucTiep']);

//wellcome controller
Route::get('ho-tro-mua-hang', ['as' => 'hoTroMuaHang', 'uses' => 'WelcomeController@hoTroMuaHang']);
Route::post('danh-sach-goi-y', ['as' => 'supportSales', 'uses' => 'WelcomeController@supportSales']);
Route::get('facebook-login', ['as' => 'facebooklogin', 'uses' => 'FaceController@redirectToProvider']);
Route::get('facebook-login-callbak', ['as' => 'facebooklogin', 'uses' => 'FaceController@handleProviderCallback']);
Route::get('thanh-toan', ['as' => 'thanhToan', 'uses' => 'WelcomeController@thanhToan']);
Route::get('tien-hanh-thanh-toan', ['as' => 'tienHanhThanhToan', 'uses' => 'WelcomeController@tienHanhThanhToan']);
Route::get('thanh-toan-thanh-cong', ['as' => 'thanhToanThanhCong', 'uses' => 'WelcomeController@thanhToanThanhCong']);
Route::get('tin-tuc', ['as' => 'tinTuc', 'uses' => 'WelcomeController@tinTuc']);
Route::get('gioi-thieu', ['as' => 'gioiThieu', 'uses' => 'WelcomeController@gioiThieu']);
Route::get('chi-tiet-tin/{id}', ['as' => 'chiTietTin', 'uses' => 'WelcomeController@chiTietTin']);
