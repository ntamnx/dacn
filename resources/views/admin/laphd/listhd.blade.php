<h1>Danh sách các mặt hàng</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>số lượng</th>
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
            <td>{!!$product["tensp"]!!}</td>
            <td>{!!$product["soluong"]!!}</td>
            <td>{!!number_format($product["dongia"])!!}</td>
            <td>{!!number_format($product["soluong"]*$product["dongia"])!!}</td>
            @endforeach
    </tbody>
</table>
<div class="form-group">
    <label>Tổng tiền:{!!number_format($tong)!!}</label>
</div>
