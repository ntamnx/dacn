@extends('admin.thongke')    
@section('title','Thống kê bán của từng hãng.')
@section('css')
<link href="{!! URL('public/flot/examples/examples.css')!!}" rel="stylesheet" type="text/css">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="{{ asset('public/flot/jquery.flot.js')}}"></script>
<script language="javascript" type="text/javascript" src="{{ asset('public/flot/jquery.flot.categories.js')}}"></script>
<style>
    body{font-size: 15px;}
</style>
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bán chạy
                    <small>Thống kê</small>
                </h1>
            </div>
            <div id="header">
                <h2>Thống kê sản phẩm bán chạy</h2>
            </div>
            <div id="content">
                <div id="content">

                    <div class="demo-container">
                        <div id="placeholder" class="demo-placeholder"></div>
                    </div>
                </div>

                <form action="{{route('admin.thongke.tungHang')}}" method="get">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                    <div class="form-group">
                        <label>Từ ngày</label>
                        <input type="date" class="form-control" name="tungay" value="{!!old('tungay')!!}" placeholder="Nhập từ ngày cần thống kê" />
                    </div>
                    <div class="form-group">
                        <label>Đến ngày</label>
                        <input type="date" class="form-control" name="denngay" value="{!!old('txtDenNgay')!!}" placeholder="Nhập đến ngày cần thống kê"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Thống kê</button>
                </form>
                <h1>Chọn ngày bên dưới để in sản phẩm bán chạy</h1>
                <form action="{{route('admin.thongke.inTungHang')}}" method="get">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                    <div class="form-group">
                        <label>Từ ngày</label>
                        <input type="date" class="form-control" name="tungay1" value="{!!old('tungay1')!!}" placeholder="Nhập từ ngày cần thống kê" />
                    </div>
                    <div class="form-group">
                        <label>Đến ngày</label>
                        <input type="date" class="form-control" name="denngay1" value="{!!old('denngay1')!!}" placeholder="Nhập đến ngày cần thống kê"/>
                    </div>
                    <button type="submit" class="btn btn-primary">InBánChạy</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(function () {

    var data = <?php echo '[' . $data . ']' ?>;


    $.plot("#placeholder", [data], {
        series: {
            bars: {
                show: true,
                barWidth: 0.6,
                align: "center"
            }
        },
        xaxis: {
            mode: "categories",
            tickLength: 0
        }
    });

    // Add the Flot version string to the footer

    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
});
</script>
@endsection