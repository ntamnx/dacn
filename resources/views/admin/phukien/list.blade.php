@extends('admin.master')
@section('title','Danh sach phụ kiện')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phụ kiện
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!! URL::route('admin.phukien.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên phụ kiện</th>
                        <th>Giá</th>
                        <th>Bảo hành</th>
                        <th>Số lượng</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($phukiens as $item)
                    <?php $i++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!!$i!!}</td>
                        <td>{!!$item["tenpk"]!!}</td>
                        <td>{!!$item["gia"]!!}</td>
                        <td>{!!$item["bao_hanh"]!!}</td>
                        <td>{!!$item["soluong"]!!}</td>
                        <td><img style="width: 50px; height: 40px" alt="" src="{!!asset('resources/upload/phukien/'.$item["anh"])!!}"/> </td>
                        <td>{!!$item["mota"]!!}</td>
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!! URL::route('admin.phukien.getEdit',$item['id'])!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash"  onclick="return xacNhan('Bạn có muốn xóa không?')" href="{!!URL::route('admin.phukien.getDelete',$item['id'])!!}!!}"> Delete</a></td>                      
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