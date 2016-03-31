@extends('admin.master')
@section('title','sap xep danh mục sản phẩm')
@section('content')
<link rel="stylesheet" href="{!! URL('public/css/newcss.css')!!}">
<script src="{!!URL('public/admin/js/jquery.js')!!}"></script>
<script src="{!!URL('public/admin/js/jquery1.js')!!}"></script>

<link rel="stylesheet" href="/resources/demos/style.css">
<style>
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #sortable li span { position: absolute; margin-left: -1.3em; }
</style>
<script>
    $(function () {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>Thêm</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.block.msg')
                @include('admin.block.errors')
                <ul id="sortable">
                    @foreach($loaiSP as $item)
                    <li id="item-{!!$item['id']!!}" class="ui-state-default" style="height: 40px;"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{!!$item['name']!!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $('#sortable').sortable({
    update: function (event, ui) {
        var data = $(this).sortable('serialize');
        $.ajax({
            data: data,
            type: 'get',
            url: 'http://localhost:81/dacn/admin/loaisp/sapxep1',
        });
    }
});
</script>
@endsection