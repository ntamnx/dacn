<html>
    <head>
        <title>In Hoa Don</title>
        <style>
            body{margin: 0 auto;
                 width: 960px;
                 border: 1px solid #000000;
                 text-align: center;
                 padding-top: 20px;
            }
            .with1{
                width: 32.5%;
            }
            .with3{
                width: 45%;
            }
            .with{
                font-size: 25px;
                font-weight: bold;
            }
            .full{
                width: 960px;
            }

            .with2{
                font-size: 35px;
                padding-left: 10px;
                padding-right: 10px;
                font-weight: bold;
            }
            .with5{
                width: 50%;
                padding-left:   100px;
            }
            .full1{
                font-size: 25px;
                color: red;
                text-align: center;
                margin-left: 300px;
            }
        </style>
    </head>
    <body>
        <table class="full">
            <tr>
                <td class="with1"><span class="with">THEGIODIDONG</span></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;60 Quang Trung,tiểu khu 6 </br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tĩnh Gia Thanh Hóa
                </td>
                <td class="with3"><span class="with2">HÓA ĐƠN BÁN HÀNG</span><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liên 2 giao cho khách
                </td>
                <td class="with1">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mẫ số:01GTKT2/001<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ký hiêu: BN/19-B
                </td>
            </tr>
        </table>
        <br/>
        <br/>
        <table class="full">
            <tr>
                <td class="with5">Mã hóa đơn :{!!$hoaDon['id']!!} </td>
                <td class="with5">Ngày lập :{!!$hoaDon['ngaylap']!!} </td>
            </tr>
            <tr>
                <td class="with5">Tên Khách hàng :{!!$hoaDon['ten_kh']!!}</td>
                <td class="with5">Số điện thoại : {!!$hoaDon['sdt']!!}</td>
            </tr>
            <tr>
                <td class="with5">Địa chỉ :{!!$hoaDon['diachi']!!}</td>
                <td class="with5">Nơi nhận :{!!$hoaDon['noinhan']!!}</td>
            </tr>
        </table>
        <h2 style="text-align: left; margin-left: 30px;">Danh sách sản phẩm mua.</h2>
        <table border='1px solid' style="width: 900px; margin-left: 30px;">
            <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0 ?>
        @foreach($ctHD as $product)
        <?php $i++ ?>
        <tr class="odd gradeX" align="center">
            <td>{!!$i!!}</td>
            <td>{!!$product["name"]!!}</td>
            <td>{!!$product["soluong"]!!}</td>
            <td>{!!number_format($product["dongia"])!!}</td>
            <td>{!! number_format($product["soluong"]*$product["dongia"])!!}</td>
            @endforeach
    </tbody>
        </table>
        <br/>

        <table class="full">
            <tr>
                <td class="with5"><b>Tổng tiền:</b>{!!number_format($tong)!!} </td>
                <td><b>Đã thanh toán:</b> </td>
            </tr>
            <tr>
                <td class="with5"></td>
                <td ><b>Còn thiếu:</b> </td>
            </tr>
            <tr>
                <td class="with5">Người bán hàng<br/>
                &nbsp;(Ký rõ họ tên)</td>
                <td class="">Nười nhận hàng<br/>
                    &nbsp;(Ký rõ họ tên)</td>
            </tr>
            
            <tr>
                <td colspan="2"><br/><br/><br/><br/><br/><br/><span class="full full1">
                        (Lưu ý xem kỹ hóa đơn.)</span></td>
            </tr>
        </table>

    </body>
</html>