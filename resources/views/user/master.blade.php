<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>@yield('title')</title>
        <meta property="fb:app_id" content="984724398268673" />
        <meta property="fb:admins" content="100004336094058" />
        <link href="{!! URL('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
            <link href="{!! URL('public/admin/bower_components/metisMenu/dist/metisMenu.min.css')!!}" rel="stylesheet">
                <link rel="stylesheet" media="screen" href="{!! URL('public/user/css/bootraps/bootstrap.css')!!}" />
                <link rel="stylesheet" media="screen" href="{!! URL('public/user/css/bootraps/bootstrap-responsive.css')!!}" />
                <link rel="stylesheet" media="screen" href="{!! URL('public/user/css/main.css')!!}" />
                <link rel="stylesheet" media="screen" href="{!! URL('public/user/css/style.css')!!}" />

                </head>
                <body>
                    <div class="header">
                        <div class="topheader">
                            <div class="topheader-inner w1020px marginauto">
                                <ul class="pull-right">
                                    <li>
                                        <form method="get" action="{{route('getListProduct')}}">
                                            <input type="text" value="{{isset($key)? $key :null}}" name="name" style="width: 130px; height: 20px; margin-top: -3px" placeholder="Tìm kiếm" />
                                    </li>
                                    <li>
                                        <button type="submit" style="width: 60px; height: 20px; margin-top: -9px; margin-left: -20px;" class="btn btn-info">Search</button>
                                    </li>
                                    </form>
                                    </li>
                                    <li><a href="#">Điều khoản</a></li>

                                    <li><a href="#">Liên hệ</a></li>

                                    <li><a class="4rum" href="#">Diễn đàn</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="branch">
                            <div class="w1020px marginauto">
                                <div class="pull-left">
                                    <img src="{!!asset('public/user/images/icon-logo/logo-260x90.png')!!}" />
                                </div>
                                <div class="pull-right">
                                    <img src="{!!asset('public/user/images/icon-logo/banner-top.png')!!}" />
                                </div>
                            </div>
                        </div>
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="w1020px marginauto">
                                    <ul class="nav ">
                                        <li >
                                            <a href="{{route('home')}}">Trang chủ</a>
                                        </li>
                                        <li class="divider-vertical"></li>
                                        <li><a href="{!!route('getListProduct')!!}">Điện thoại</a></li>
                                        <li><a href="{{route('phuKien')}}">Phụ kiện </a></li>
                                        <li><a href="{{route('getPrice')}}">Báo giá </a></li>
                                        <li><a href="{{url('/tin-tuc')}}">Tin tức </a></li>
                                        <li><a href="{{url('/gioi-thieu')}}">Giới thiệu</a></li>
                                        <li><a href="{{route('hoTroMuaHang')}}">Hỗ trợ mua hàng</a></li>
                                        <li><a href="{!!route('gioHang')!!}">Giỏ hàng</a></li>
                                    </ul>
                                    <ul class="nav pull-right">
                                        <li class="divider-vertical"></li>
                                        <li>
                                            <a class="link4rum" href="{{URL('admin')}}">Đăng nhập</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mainbody left-fl">
                        <div class="mainbody-content w1020px marginauto">
                            <div class="left-area w220px left-fl">
                                @include('user.block.danhmuc')
                                <div class="block menu-list accessories"><h4 class="pd5x10">Phụ kiện</h4>
                                    <ul class="nav nav-list w190px bs-docs-sidenav">
                                        <li><a href="#" >Tai nghe</a></li>
                                        <li><a href="#" >Sạc pin</a></li>
                                        <li ><a href="#">Pin</a></li>
                                        <li><a href="#" >Vỏ máy</a></li>
                                        <li><a href="#" >Ốp lưng</a></li>
                                        <li><a href="#" >Màn hình</a></li>
                                    </ul>
                                </div>
                                <div class="block menu-list supportlive"><h4 class="pd5x10 ">Hỗ trợ</h4>
                                    <ul class="nav nav-list w190px ">
                                        <li><a href="#">
                                                Kinh doanh 1:
                                                <img id="lvhelp_stt" src="http://opi.yahoo.com/online?u=myphamhoakim1&m=g&t=1">
                                            </a></li>
                                        <li><a href="ymsgr:SendIM?myphamhoakim1">
                                                Kinh doanh 2:
                                                <img id="lvhelp_stt" src="http://opi.yahoo.com/online?u=myphamhoakim1&m=g&t=1">
                                            </a></li>
                                        <li><a href="ymsgr:SendIM?myphamhoakim1">
                                                Kinh doanh 3:
                                                <img id="lvhelp_stt" src="http://opi.yahoo.com/online?u=myphamhoakim1&m=g&t=1">
                                            </a></li>
                                        <li><a href="ymsgr:SendIM?myphamhoakim1">
                                                Kinh doanh 4:
                                                <img id="lvhelp_stt" src="http://opi.yahoo.com/online?u=myphamhoakim1&m=g&t=1">
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            @yield('content')
                            <!--FOOTER-->
                            <div class="footer wp100">
                                <div class="footer-inner marginauto w1000px">
                                    <div class="pull-left">
                                        <p> Địa chỉ Showroom: 14K1 Thái Hà mới</p>
                                        <p>Cách ngã tư Thái Hà 200m Bản đồ</p>
                                        <p> Làm việc cả tuần từ 8h30”AM đến 7h30”PM</p>
                                        <p>Hotline: 0972722994</p>
                                    </div>

                                    <div class="pull-right"></div>
                                </div>
                            </div>
                            <script src="{!!asset('public/user/js/bootraps/bootstrap.min.js')!!}"></script>
                            <script type='text/javascript'>window._sbzq || function (e) {
    e._sbzq = [];
    var t = e._sbzq;
    t.push(["_setAccount", 38268]);
    var n = e.location.protocol == "https:" ? "https:" : "http:";
    var r = document.createElement("script");
    r.type = "text/javascript";
    r.async = true;
    r.src = n + "//static.subiz.com/public/js/loader.js";
    var i = document.getElementsByTagName("script")[0];
    i.parentNode.insertBefore(r, i)
}(window);</script>
                            </body>
                            </html>
