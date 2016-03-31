@extends('admin.master')
@section('title','Them san pham')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phiếu nhập
                    <small>Lập</small>
                </h1>

            </div>
            <!-- /.col-lg-12 -->
            <form action="" name='frm_lapSP' method="POST" enctype="multipart/form-data">
                @include('admin.block.errors')
                @include('admin.block.msg')
                <div class="col-lg-6" style="padding-bottom:10px">
                    <div class="col-lg-12" style="padding-bottom:10px">
                        <form action="" method="POST" enctype="multipart  <form /form-data">
                            <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                            <div class="form-group">
                                <label>Thông tin hóa đơn nhập</label>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">Ngày lập &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" value="{!!$now!!}" readonly name="txtNgayLap">
                            </div> <br/>

                            <div class="input-group">
                                <span class="input-group-addon">Tên nhà cung cấp</span>
                                <select class="form-control" name="sl_ncc">
                                    <option value="">--Vui lòng chọn tên nhà cung cấp-</option>
                                    <?php select($nhaNCC, old('sl_ncc')) ?>
                                </select>
                            </div>   
                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon">Tên nhân viên&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" value="{!!Auth::user()->username!!}" readonly class="form-control" name="txtNgayLap">
                            </div> 
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <button type="submit" class="btn btn-primary">Lâp phiếu nhập</button>
                            <a class="btn btn-warning" href="{!!URL::route('admin.lappn.list')!!}">Hủy bỏ</a></td>
                            <button type="reset" class="btn btn-danger">Reset</button>
                    </div>  
                    <h2>Danh sách sản phẩm nhập</h2>
                </div> 
                <div class="col-lg-6" style="border: 1px solid #DDDDDD">
                    <div class="form-group">
                        <label>Danh mục sản phẩm nhập</label>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">Tên sản phẩm &nbsp;</span>
                        <select class="form-control" id="select_onchange">
                            <option value="">--Vui lòng chọn tên sản phẩm--</option>
                            <?php select($products, old('select_onchange')) ?>
                        </select>
                    </div>   
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon">Số lượng có&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" id="soLuongCon" class="form-control" readonly name="txtSoluongcon">
                    </div> 
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon">Số lượng nhập &nbsp;</span>
                        <input type="text" class="form-control" value="0" id="so_luong_nhap" name="txtNgayLap">
                    </div> 
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon">Đơn giá nhập &nbsp;&nbsp;</span>
                        <input type="text" id="don_gia_nhap"  class="form-control" name="txtDonGiaNhap">
                    </div> 
                    <br/>
                    <button type="button" id="btn_chon_click" class="btn btn-primary">Chọn sản phẩm</button>
                </div>
            </form>

            <div id="kq_dangBang"></div>
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