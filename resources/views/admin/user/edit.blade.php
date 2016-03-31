@extends('admin.master')
@section('title','Sua nguoi dung')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
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
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="txtTendn" readonly="readonly" value="{!! old('txtTendn',isset($user)?$user['username']:'')!!}" placeholder="Nhập tên đăng nhập" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="txtEmail" value="{!!old('txtEmail',isset($user)?$user['email']:'')!!}" placeholder="Nhập email" />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="txtMatKhau"  placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="txtLaiMatKhau" placeholder="Nhập lại mật khẩu" />
                    </div>
                    @if($user['level'] == 2)
                    <div class="form-group">
                        <label>Quyền</label>
                        <label class="radio-inline">
                            <input name="rdoQuyen" value="1" type="radio"
                                   @if ($user['level'] == 1)
                                   checked
                                   @endif
                                   > Nhân viên
                        </label>
                        <label class="radio-inline">
                            <input name="rdoQuyen" value="2"
                                   @if ($user['level'] == 2)
                                   checked
                                   @endif
                                   type="radio">Quản lý.
                        </label>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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