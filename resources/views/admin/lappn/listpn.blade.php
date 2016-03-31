<h1>Danh sách các mặt hàng nhập</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Phiếu nhập</th>
            <th>Mã sản phẩm</th>
            <th>số lượng</th>
            <th>giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0 ?>
        @foreach($ctPN as $product)
        <?php $i++ ?>
        <tr class="odd gradeX" align="center">
            <td>{!!$i!!}</td>
            <td>{!!$product["mapn"]!!}</td>
            <td>{!!$product["id"]!!}</td>
            <td>{!!$product["soluong"]!!}</td>
            <td>{!!$product["dongia"]!!}</td>
            <td>{!!$product["soluong"]*$product["dongia"]!!}</td>
            @endforeach
    </tbody>
</table>
<div class="form-group">
    <label>Tổng tiền:{!!number_format($tong)!!}</label>
</div>
