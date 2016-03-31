@extends('admin.master')
@section('title','Sua loai san pham')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.block.msg')
                @include('admin.block.errors')
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>                     
                    <div class="form-group">
                        <label>Tên Loại sản phẩm</label>
                        <input class="form-control" name="txtTenLoaiSP" value="{!! old('txtTenLoaiSP',isset($loaiSP)?$loaiSP['name']:'')!!}" placeholder="Nhập tên loại sản phẩm. VD:sam sung" />
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                       <a class="btn btn-warning" href="{!!URL::route('admin.loaisp.list')!!}">Hủy bỏ</a></td>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection