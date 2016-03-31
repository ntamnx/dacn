@extends('admin.master')
@section('title','Them tin tức')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phụ kiện
                    <small>Thêm</small>
                </h1>
            </div>

            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.block.errors')
                @include('admin.block.msg')
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" name="tieude" placeholder="Nhập tên phụ kiện" value="{!!old('tieude')!!}" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" name="mota">{!!old('mota')!!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
			    <textarea class="form-control" name="noidung">{!!old('noidung')!!}</textarea>
			    <script> ckeditor('noidung')</script>
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name="anh" value="{!!old('anh')!!}">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
			<a class="btn btn-warning" href="{!!URL::route('admin.tintuc.list')!!}">Hủy bỏ</a></td>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>  

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