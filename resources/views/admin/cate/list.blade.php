@extends('admin.master')    
@section('title','Danh sach loai san pham')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!!URL::route('admin.loaisp.getAdd')!!}">Thêm mới</a></td>
                    <a class="btn btn-info" href="{!!URL::route('admin.loaisp.getSapXep')!!}">Sắp xếp</a></td>
                </h1>
                @include('admin.block.msg')
                @include('admin.block.errors')
            </div>
            <!-- /.col-lg-12 --> 
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên loại</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0 ?>
                    @foreach($loaiSP as $loai)
                    <?php $stt++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $stt!!}</td>
                        <td>{!! $loai["name"]!!}</td>
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!!URL::route('admin.loaisp.getEdit',$loai['id'])!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash"    onclick="return xacNhan('Ban có muốn xóa không?')" href="{!!URL::route('admin.loaisp.getDelete',$loai['id'])!!}"> Delete</a></td>
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