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
                <div class="col-lg-712" style="padding-bottom:120px">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <select class="form-control" name="sl_tensp">
                                <option value="">Xin hãy chọn tên sản phẩm</option>
                                <?php select($products, old('sl_tensp')) ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kích thước - khối lượng</label>
                            <textarea class="form-control" name="txtKichThuoc"  >{!!old('txtKichThuoc')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtKichThuoc")</script>
                        </div>
                        <div class="form-group">
                            <label>Màn hình-hiển thị</label>
                            <textarea class="form-control" name="txtManHinh">{!!old('txtManHinh')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtManHinh")</script>
                        </div>
                        <div class="form-group">
                            <label>Lưu trữ - bộ nhớ</label>
                            <textarea class="form-control" name="txtLuuTru" >{!!old('txtLuuTru')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtLuuTru")</script>
                        </div>
                        <div class="form-group">
                            <label>Dữ liệu - Kết nối</label>
                            <textarea class="form-control" name="txtDuLieu" >{!!old('txtDuLieu')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtDuLieu")</script>
                        </div>
                        <div class="form-group">
                            <label>Ứng dung - Trò chơi</label>
                            <textarea class="form-control" name="txtUngDung" >{!!old('txtUngdung')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtUngDung")</script>
                        </div>
                        <div class="form-group">
                            <label>Nguồn</label>
                            <textarea class="form-control" name="txtNguon"  >{!!old('txtNguon')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtNguon")</script>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                        <a class="btn btn-warning" href="{!!URL::route('admin.tinhnang.list')!!}">Hủy bỏ</a></td>
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