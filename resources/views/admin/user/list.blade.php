@extends('admin.master')
@section('title','Danh sach nguoi dung')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
                    <small>Danh sách</small>
                     <a class="btn btn-success" href="{!!URL::route('admin.user.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.msg')
                @include('admin.block.errors')
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($users as $user)
                    <?php $i++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!!$i!!}</td>
                        <td>{!!$user["username"]!!}</td>
                        <td>{!!$user["email"]!!}</td>
                        <td>@if($user["level"]==1)
                            Nhân viên
                            @else
                            Quản lý
                            @endif    
                        </td>
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!!URL::route('admin.user.getEdit',$user["id"])!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash" onclick="return xacNhan('Bạn có muốn xóa không?')" href="{!!URL::route('admin.user.getDelete',$user["id"])!!}"> Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection