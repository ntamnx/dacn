@extends('admin.master')
@section('title','Danh sach san pham')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhập hàng
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!! URL::route('admin.lappn.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Mã phiếu</th>
                        <th>Mã nhân viên</th>
                        <th>ngày lập</th>
                        <th>Mã ncc</th>
                        <th>Chi tiết</th>
                         @if( Auth::user()->level ==2 )
                        <th>Delete</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($phieuNhap as $product)
                    <?php $i++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!!$i!!}</td>
                        <td>{!!$product["id"]!!}</td>
                        <td>{!!$product["manv"]!!}</td>
                        <td>{!!$product["ngaynhap"]!!}</td>
                        <td>{!!$product["mancc"]!!}</td>
                        <td class="center"><button class="btn glyphicon glyphicon-eye-open btn-primary" id="show_click{!!$product['id']!!}" data-toggle="modal" data-target=".bs-example-modal-lg" > Show</button></td>
                         @if( Auth::user()->level ==2 )
                        <td class="center"><a onclick="return xacNhan('Ban co chac muon xoa?')" class="btn btn-danger"  href="{!! URL::route('admin.lappn.getDel',$product['id']) !!}">Delete</a></td>
                        @endif
                    </tr>
                <script>
                    $("#show_click{!!$product['id']!!}").click(function () {
                        var url = "http://localhost:81/dacn/admin/lappn/show";
                                var idSP = {!!$product['id']!!};
                        $.ajax({
                            url: url,
                            type: "GET",
                            cahe: false,
                            data: {"da": idSP},
                            success: function (data) {
                                $('#kq_dangBang1').html(data);
                            }
                        });

                    });
                </script>
                @endforeach
                </tbody>
            </table>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="kq_dangBang1">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()