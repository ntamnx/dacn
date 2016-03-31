<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Bootstrap Core CSS -->
        <link href="{!! URL('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{!! URL('public/admin/bower_components/metisMenu/dist/metisMenu.min.css')!!}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{!! URL('public/admin/dist/css/sb-admin-2.css')!!}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{!! URL('public/admin/bower_components/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="{!! URL('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')!!}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{!! URL('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css')!!}" rel="stylesheet">
        <script src="{!! URL('public/admin/bower_components/jquery/dist/jquery.min.js')!!}"></script>
        <script src="{!! URL('public/admin/js/ckeditor/ckeditor.js')!!}"></script>
        <script src="{!! URL('public/admin/js/ckfinder/ckfinder.js')!!}"></script>
        <script>
	    var baseURL = "{!! URL('/')!!}";
        </script>
        <script src="{!! URL('public/admin/js/func_ckfinder.js')!!}"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{!!URL('admin')!!}">Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down">{!! Auth::user()->username !!}</i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{!!URL::route('admin.user.getMK',Auth::user()->id)!!}"><i class="fa fa-user fa-fw"></i>Đổi mật khẩu</a>
                            </li>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{!!url('auth/logout')!!}"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="{!!URL ('admin')!!}"><i class="fa fa-dashboard fa-fw"></i>Quản lý bán điện thoại</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý loại sản phẩm<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.loaisp.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.loaisp.getAdd')!!}">Thêm</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.loaisp.getSapXep')!!}">Sắp xếp</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý sản phẩm<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.product.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.product.getAdd')!!}">Thêm</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý tính năng sản phẩm<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.tinhnang.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.tinhnang.getAdd')!!}">Thêm</a>
                                    </li> 
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản phụ kiện sản phẩm<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.phukien.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.phukien.getAdd')!!}">Thêm</a>
                                    </li> 
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
			    <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý tin tức<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.tintuc.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.tintuc.getAdd')!!}">Thêm</a>
                                    </li> 
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cube fa-fw"></i> Quản lý nhập hàng<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.lappn.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.lappn.getAdd')!!}">Lập phiếu nhập</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cube fa-fw"></i> Quản lý xuất hàng<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.laphd.list')!!}">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.laphd.getAdd')!!}">Lập phiếu xuất</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cube fa-fw"></i>Thống kê báo cáo<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.thongke.doanhThu')!!}">Doanh thu</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.thongke.banChay')!!}">Sản phẩm bán chạy</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.thongke.tungHang')!!}">Sản phẩm bán của các hãng</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.thongke.tonKho')!!}">Tồn kho</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            @if( Auth::user()->level ==2 )
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i>Quản lý người dùng<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{!!URL::route('admin.user.list')!!}">Danh sách người dùng.</a>
                                    </li>
                                    <li>
                                        <a href="{!!URL::route('admin.user.getAdd')!!}">Thêm người dùng.</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            @endif
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            @yield('content')
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->


        <!-- Bootstrap Core JavaScript -->
        <script src="{!! URL('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')!!}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{!! URL('public/admin/bower_components/metisMenu/dist/metisMenu.min.js')!!}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{!! URL('public/admin/dist/js/sb-admin-2.js')!!}"></script>

        <!-- DataTables JavaScript -->
        <script src="{!! URL('public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js')!!}"></script>
        <script src="{!! URL('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')!!}"></script>


        <script src="{!! URL('public/admin/js/myscrip.js')!!}"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    </body>

</html>
