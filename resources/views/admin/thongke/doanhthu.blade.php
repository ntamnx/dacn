@extends('admin.thongke')    
@section('title','Thống kê doanh thu.')
@section('css')
<link href="{!! URL('public/flot/examples/examples.css')!!}" rel="stylesheet" type="text/css">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="{{ asset('public/flot/jquery.flot.js')}}"></script>
<style>
    body{font-size: 15px;}
</style>
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Doanh thu
                    <small>Thống kê</small>
                </h1>
            </div>
            <div id="header">
                <h2>Thống kê doanh thu</h2>
            </div>
            <div id="content">
                <div class="demo-container">
                    <div id="placeholder" class="demo-placeholder" style="float:left; width:675px;"></div>
                    <p id="choices" style="float:right; width:135px;"></p>
                </div>
                <form action="{{route('admin.thongke.doanhThu')}}" method="get">
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
                <h1>Chọn ngày bên dưới để in doanh thu</h1>
                <form action="{{route('admin.thongke.inDoanhThu')}}" method="get">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                    <div class="form-group">
                        <label>Từ ngày</label>
                        <input type="date" class="form-control" name="tungay1" value="{!!old('tungay1')!!}" placeholder="Nhập từ ngày cần thống kê" />
                    </div>
                    <div class="form-group">
                        <label>Đến ngày</label>
                        <input type="date" class="form-control" name="denngay1" value="{!!old('denngay1')!!}" placeholder="Nhập đến ngày cần thống kê"/>
                    </div>
                    <button type="submit" class="btn btn-primary">InDoanhThu</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(function () {

    var datasets = {
        "usa": {
            label: "Doanh thu",
            data: <?php echo '[' . $data . ']' ?>
        }
    };
    // hard-code color indices to prevent them from shifting as
    // countries are turned on/off
    var i = 0;
    $.each(datasets, function (key, val) {
        val.color = i;
        ++i;
    });

    // insert checkboxes 
    var choiceContainer = $("#choices");
    $.each(datasets, function (key, val) {
        choiceContainer.append("<br/><input type='checkbox' name='" + key +
                "' checked='checked' id='id" + key + "'></input>" +
                "<label for='id" + key + "'>"
                + val.label + "</label>");
    });

    choiceContainer.find("input").click(plotAccordingToChoices);

    function plotAccordingToChoices() {

        var data = [];

        choiceContainer.find("input:checked").each(function () {
            var key = $(this).attr("name");
            if (key && datasets[key]) {
                data.push(datasets[key]);
            }
        });

        if (data.length > 0) {
            $.plot("#placeholder", data, {
                yaxis: {
                    min: 0
                },
                xaxis: {
                    tickDecimals: 0
                }
            });
        }
    }

    plotAccordingToChoices();

    // Add the Flot version string to the footer

    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
});
</script>
@endsection