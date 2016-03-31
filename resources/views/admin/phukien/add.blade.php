@extends('admin.master')
@section('title','Them phu kien')
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
                            <label>Tên sản phẩm</label>
                            <select class="form-control" name="sl_tenpk">
                                <option value="">Xin hãy chọn tên sản phẩm</option>
                                <?php select($products, old('sl_tenpk')) ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên phụ kiện</label>
                            <input type="text" class="form-control" name="txtPhuKien" placeholder="Nhập tên phụ kiện" value="{!!old('txtPhuKien')!!}" />
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="text" class="form-control" name="txtSoLuong" value="{!!old('txtSoLuong')!!}" placeholder="Nhập số lượng" />
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="text" class="form-control" name="txtGia" value="{!!old('txtGia')!!}" placeholder="Nhập giá bán" />
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name="anhphukien" value="{!!old('anhphukien')!!}">
                        </div>
                        <div class="form-group">
                            <label>Thời gian bảo hành.</label>
                            <input type="text" class="form-control" name="txtThoiGianBH" value="{!!old('txtThoiGianBH')!!}" placeholder="Nhập thời gian bảo hành" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả.</label>
                            <input type="text" class="form-control" name="txtMota" value="{!!old('txtMota')!!}" placeholder="Nhập mô tả" />
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                         <a class="btn btn-warning" href="{!!URL::route('admin.phukien.list')!!}">Hủy bỏ</a></td>
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