@extends('admin.master')   
@section('title','Sửa nhà cung cấp')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhà cung cấp
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.block.errors')
                @include('admin.block.msg')
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                    <div class="form-group">
                        <label>Tên nhà cung cấp</label>
                        <input class="form-control" name="txtNameNCC" value="{!! old('txtNameNCC',isset($nhaCC)?$nhaCC['name']:'')!!}" placeholder="Nhập tên nhà cung cấp. VD:sam sung" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="txtDiaChi" value="{!! old('txtDiaChi',isset($nhaCC)?$nhaCC['diachi']:'')!!}"/>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="txtDienThoai" value="{!! old('txtDienThoai',isset($nhaCC)?$nhaCC['dienthoai']:'')!!}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a class="btn btn-warning" href="{!!URL::route('admin.nhacc.list')!!}">Hủy bỏ</a></td>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection