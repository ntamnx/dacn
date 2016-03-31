@extends('admin.master')
@section('title','Them nguoi dung')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.block.msg')
                @include('admin.block.errors')
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="txtTendn" value="{!!old('txtTendn')!!}" placeholder="Nhập tên đăng nhập" />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="txtMatKhau" value="{!!old('txtMatKhau')!!}" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="txtLaiMatKhau" value="{!!old('txtLaiMatKhau')!!}" placeholder="Nhập lại mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txtEmail" value="{!!old('txtEmail')!!}" placeholder="Nhập email" />
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <label class="radio-inline">
                            <input name="rdoQuyen" value="1" checked="checked" type="radio"> Nhân viên
                        </label>
                        <label class="radio-inline">
                            <input name="rdoQuyen" value="2" type="radio">Quản lý
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <a class="btn btn-warning" href="{!!URL::route('admin.user.list')!!}">Hủy bỏ</a></td>
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