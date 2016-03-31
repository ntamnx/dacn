@extends('admin.master')
@section('title','Danh sach tin tức')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phụ kiện
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!! URL::route('admin.tintuc.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>Lượt Xem</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
		    <?php $i = 0 ?>
                    @foreach($tinTuc as $item)
		    <?php $i++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!!$i!!}</td>
                        <td>{!!$item["tieude"]!!}</td>
			<td><img style="width: 50px; height: 40px" alt="" src="{!!asset('resources/upload/tintuc/'.$item["anh"])!!}"/> </td>
                        <td>{!!$item["mota"]!!}</td>
                        <td>{!!$item["luot_xem"]!!}</td> 
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!! URL::route('admin.tintuc.getEdit',$item['id'])!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash"  onclick="return xacNhan('Bạn có muốn xóa không?')" href="{!!URL::route('admin.tintuc.getDelete',$item['id'])!!}"> Delete</a></td>                      
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