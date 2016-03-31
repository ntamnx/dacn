

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>số lượng</th>
            <th>giá</th>
            <th>Thành tiền</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0 ?>
        @foreach($ba_hd1 as $product)
        <?php $i++ ?>
        <tr class="odd gradeX" align="center">
            <td>{!!$i!!}</td>
            <td>{!!$product["id"]!!}</td>
            <td>{!!$product["tensp"]!!}</td>
            <td>{!!$product["soluong"]!!}</td>
            <td>{!!$product["dongia"]!!}</td>
            <td>{!!$product["dongia"]*$product["soluong"]!!}</td>
    <input type="hidden" value="" id="giatri_id"/>      
    <td class="center"><button class="btn btn-danger" value="{!!$product['id']!!}" id="btn_xoa_clicka{!!$product['id']!!}"> Delete</button></td>
</tr>
<script>
    $("#btn_xoa_clicka{!!$product['id']!!}").click(function () {
        var url = "http://localhost:81/dacn/admin/laphd/delete";
        var _token = $("form[name='frm_laphd']").find("input[name='_token']").val();
                var idSP = {!!$product['id']!!};
        $.ajax({
            url: url,
            type: "GET",
            cahe: false,
            data: {"_token": _token, "da": idSP},
            success: function (data) {
                $('#kq_dangBang1').html(data);
            }
        });
    });

</script>
@endforeach

</tbody>
</table>
<div class="form-group">
    <label>Tổng tiền:{!! number_format($tong)!!}</label>
</div>
