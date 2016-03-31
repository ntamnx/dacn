@extends('user.master')
@section('title','Danh sach san pham')
@section('content')
<div class="right-area w775px left-fl pd10">
    @include('user.block.slide')
    <div class="clear wp100"></div>
    <br/>
    <div class="group product clearfix">
        <!--title-->
        <div class="header2">
            <span class="title">
                <span>
                    <a href="/dien-thoai/maxfone-22.aspx">Giỏ hàng</a>
                </span>
            </span>
        </div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>STT</th>
                    <th>Tên Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 0; ?>
                @foreach($content as $item)
            <form method="POST" action="{!!URL::route('updateGioHang',$item['rowid'])!!}">
                <input name="_token" type="hidden" value="{!!csrf_token()!!}"/>
                <?php $i++; ?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item['name']}}</td>
                    <td><input type="text" name="qty" value="{{$item['qty']}}" style="width: 40px"/> </td>
                    <td>{{number_format($item['price'])}}</td>
                    <td>{{number_format($item['qty']*$item['price'])}}</td>
                    <td><button type="submit" class="btn btn-primary">Cập nhật</button></td>
                    <td class="center"><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')" href="{!!URL::route('xoaSP',$item['rowid'])!!}"> Xóa</a></td>
                </tr>
            </form>
            @endforeach
            </tbody>
        </table>
        <h3><!-- Button trigger modal -->
            <button type="button" class="btn btn-info" style="width: 200px;height: 30px" data-toggle="modal" data-target=".bs-example-modal-lg">Đặt hàng</button>
            <span style="margin-left: 100px;">Tổng tiền:{{number_format(Cart::total())}} vnd </span></h3> 
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h2>Thông tin khách hàng</h2>
                @include('admin.block.errors')
                <form method="post" action="{!!URL::route('phieuDatHang')!!}">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                    <div class="form-group" style="width: 556px">
                        <label>Tên khách hàng</label>
                        <input class="form-control" id="tenKH" name="txtTenKhachHang" value="{!!old('txtTenKhachHang')!!}" placeholder="Nhập tên khách hàng" />
                    </div>
                    <div class="form-group" style="width: 556px">
                        <label>Địa chỉ</label>
                        <input class="form-control" id="diaChi" name="txtDiaChi" value="{!!old('txtDiaChi')!!}" placeholder="Nhập địa chỉ" />
                    </div>
                    <div class="form-group" style="width: 556px">
                        <label>Số điện thoại</label>
                        <input class="form-control" id="txtSoDT" name="txtSoDT" value="{!!old('txtSoDT')!!}" placeholder="0912345678" />
                    </div>
                    <div class="form-group" style="width: 556px">
                        <label>Nơi nhận</label>
                        <input class="form-control" id="txtNoiNhan" name="txtNoiNhan" value="{!!old('txtNoiNhan')!!}" placeholder="Nhập tên loại sản phẩm. VD:sam sung" />
                    </div>
                    <div class="form-group" style="width: 556px">
                        <label>Thời gian nhận </label>
                        <input type="date" style="height: 35px" class="form-control" id="thoiGianNhan"  name="txtThoiGianNhan" value="{!!old('txtThoiGianNhan')!!}" placeholder="Nhập tên loại sản phẩm. VD:sam sung" />
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 200px;height: 30px">Đặt hàng</button>  
                </form>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(".alert").delay(3000).slideUp();
    });
</script>
@endsection
