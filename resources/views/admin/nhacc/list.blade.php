@extends('admin.master')    
@section('title','Danh sach nha cung cap')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhà cung cấp
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!! URL::route('admin.nhacc.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.msg')
                @include('admin.block.errors')
            </div>


            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên nhà cung cấp</th>
                        <th>Địa chỉ</th> 
                        <th>Số điện thoại</th> 
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0; ?>
                    @foreach($nhaCC as $item)
                    <tr class="odd gradeX" align="center">
                        <?php $stt++ ?>
                        <td>{!! $stt !!}</td>
                        <td>{!! $item["name"] !!}</td>
                        <td>{!! $item["diachi"] !!}</td>
                        <td>{!! $item["dienthoai"] !!}</td>
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!! URL::route('admin.nhacc.getEdit',$item['id'])!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash"  onclick="return xacNhan('Ban co chac muon xoa?')"  href="{!! URL::route('admin.nhacc.getDelete',$item['id']) !!}"> Delete</a></td>

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