@extends('admin.master')
@section('title','Danh Sách tính năng')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm tính năng
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!!URL::route('admin.tinhnang.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên Sản phẩm</th>
                        <th>Kích thước - Khối lượng</th>
                        <th>Màn hình - Hiển thị</th>
                        <th>Ứng dụng - Trò chơi</th>
                        <th>Nguồn</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($tinhNangs as $item)
                    <?php $i++ ?>
                    <tr class="odd gradeX" align="center" >
                        <td>{!!$i!!}</td>
                        <td>{!!$item->name!!}</td>
                        <td>{!!$item->kichthuoc_khoiluong!!}</td>
                        <td>{!!$item->manhinh_hienthi!!}</td>
                        <td>{!!$item->ungdung_trochoi!!}</td>
                        <td>{!!$item->nguon!!}</td>
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!! URL::route('admin.tinhnang.getEdit',$item->id)!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash" onclick="return xacNhan('Bạn có muốn xóa không?')" href="{!!URL::route('admin.tinhnang.getDelete',$item->id)!!}!!}"> Delete</a></td>                      
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()