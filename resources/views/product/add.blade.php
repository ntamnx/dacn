@extends('admin.master')
@section('title','Them san pham')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <form action="" method="POST"enctype="multipart/form-data">
                @include('admin.block.errors')
                @include('admin.block.msg')
                <div class="col-lg-8" style="padding-bottom:120px">
                    <div class="col-lg-12" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart  <form /form-data">
                            <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                            <div class="form-group">
                                <label>Tên loại sản phẩm</label>
                                <select class="form-control" name="select_masp">
                                    <option>Xin hãy chọn tên loại sản phẩm</option>
                                    <?php select($cate, old('select_masp')) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="txtTenSP" value="{!!old('txtTenSP')!!}" placeholder="Nhập tên sản phẩm"/>
                            </div>
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input type="text" class="form-control" name="txtGiaBan" value="{!!old('txtGiaBan')!!}" placeholder="Nhập giá bán" />
                            </div>
                            <div class="form-group">
                                <label>Thời gian bảo hành</label>
                                <input type="text" class="form-control" name="txtThoiGianBH" placeholder="Nhập thời gian bảo hành" value="{!!old('txtThoiGianBH')!!}" />
                            </div>
                            <div class="form-group">
                                <label>Xuất sứ</label>
                                <input type="text" class="form-control" name="txtXuatSu" placeholder="Nhập xuất sứ" value="{!!old('txtXuatSu')!!}" />
                            </div>
                            <div class="form-group">
                                <label>Màu</label>
                                <input type="text" class="form-control" name="txtMau" placeholder="Nhập màu sản phẩm" value="{!!old('txtMau')!!}" />
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <input type="text" class="form-control" name="txtTrangThai" placeholder="Trạng thái sản phẩm" value="{!!old('txtTrangThai')!!}" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" name="FanhSP" value="{!!old('FanhSP')!!}">
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <a class="btn btn-warning" href="{!!URL::route('admin.product.list')!!}">Hủy bỏ</a></td>
                            <button type="reset" class="btn btn-danger">Reset</button>

                    </div>  
                </div>
                @for($i=1;$i<=6;$i++)
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <label>Imge Product {!! $i !!}</label>
                    <input type="file" name="fProduct[]"/>
                </div>
                @endfor           
        </div>
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