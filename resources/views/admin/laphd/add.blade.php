@extends('admin.master')
@section('title','Them san pham')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa đơn
                    <small>Lập</small>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>
            <!-- /.col-lg-12 -->
            <form action="" name='frm_laphd' method="POST" enctype="multipart/form-data">
                <div class="col-lg-6" style="padding-bottom:10px">
                    <div class="col-lg-12" style="padding-bottom:10px">
                        <form action="" method="POST" enctype="multipart  <form /form-data">
                            <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                            <div class="form-group">
                                <label>Thông tin hóa đơn nhập</label>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">Ngày lập &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" value="{!!$now!!}" readonly name="txtNgayLap">
                            </div> <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Tên nhân viên&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" value="{!!Auth::user()->username!!}" readonly class="form-control" name="txtNgayLap">
                            </div> 
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Tên khách hàng&nbsp;</span>
                                <input type="text" class="form-control" name="txtNameKH" value="{!!old('txtNameKH')!!}">
                            </div> 
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Địa chỉ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text"  class="form-control" name="txtDiaChi" value="{!!old('txtDiaChi')!!}">
                            </div> 
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Nơi nhận&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" name="txtNoiNhan" class="form-control"  value="{!!old('txtNoiNhan')!!}" />
                            </div> 
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Thời gian nhận&nbsp;&nbsp;</span>
                                <input type="date" name="txtThoiGianNhan" class="form-control"  value="{!!old('txtThoiGianNhan')!!}" />
                            </div> 
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Số điện thoại &nbsp;&nbsp; &nbsp;&nbsp;</span>
                                <input type="text" name="txtSoDienThoai" class="form-control" placeholder="0912345678"   value="{!!old('txtSoDienThoai')!!}"/>
                            </div> 
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon">Trạng thái &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" name="txtTrangThai" class="form-control"  value="{!!old('txtTrangThai')!!}">
                            </div> 
                            <br/>
                            <button type="submit" class="btn btn-primary">Lâp hóa đơn</button>
                            <a class="btn btn-warning" href="{!!URL::route('admin.laphd.list')!!}">Hủy bỏ</a></td>
                            <button type="reset" class="btn btn-danger">Reset</button>
                    </div>  
                    <h2>Danh sách sản phẩm bán</h2>
                </div> 
                <div class="col-lg-6" style="border: 1px solid #DDDDDD">
                    <div class="form-group">
                        <label>Danh mục sản phẩm bán</label>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">Tên sản phẩm &nbsp;</span>
                        <select class="form-control" id="select_laphd">
                            <option value="">--Vui lòng chọn tên sản phẩm--</option>
                            <?php select($products) ?>
                        </select>
                    </div>   
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon">Số lượng có&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" id="soLuongHienCon" class="form-control" readonly name="txtSoluongcon">
                    </div> 
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon">Số lượng bán&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" value="0" id="so_luong_ban" name="txtNgayLap">
                    </div> 
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon">Đơn giá bán &nbsp;   &nbsp;&nbsp;&nbsp;</span>
                        <input type="text" id="donGiaBan"  readonly class="form-control" name="txtNgayLap">
                    </div> 
                    <br/>
                    <button type="button" id="btn_chon_click_hd" class="btn btn-primary">Chọn sản phẩm</button>
                </div>
            </form>

            <div id="kq_dangBang1"></div>
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