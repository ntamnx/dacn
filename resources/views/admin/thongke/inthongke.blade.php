<html>
    <head>
        <title>Thống kê báo cáo</title>
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
                <td class="with3"><span class="with2">{{$thongke}}</span><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <td class="with5">Từ ngày :{!!$tungay!!} </td>
                <td class="with5">Đến ngày :{!!$denngay!!} </td>
            </tr>
        </table>
        <h2 style="text-align: left; margin-left: 30px;">{{$thongke}}</h2>
        <table border='1px solid' style="width: 900px; margin-left: 30px;">
            <thead>
                <tr align="center">
                    <th>STT</th>
                    <th>Ngày</th>
                    <th>Doanh thu</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0 ?>
                @foreach($matHang as $product)
                <?php $i++ ?>
                <tr class="odd gradeX" align="center">
                    <td>{!!$i!!}</td>
                    <td>{!!$product["date"]!!}</td>
                    <td>{!!number_format($product["total"])!!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>