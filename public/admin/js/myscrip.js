$(function () {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
$(function () {
    $(".alert").delay(3000).slideUp();
});
function xacNhan(msg) {
    if (window.confirm(msg))
    {
        return true;
    }
    return false;
}
$(function () {
    $("#addImages").click(function () {
        $(".insertinsert").append('<div class="form-group"><input type="file" name="fEditDetal[]"></div>');
    });
});
$(function () {
    $(".del_img_demo").click(function () {
        var url = "http://localhost:81/dacn/admin/product/delimg/";
        var _token = $("form[name='frm_edit']").find("input[name='_token']").val();
        var idImages = $(this).parent().find('img').attr('idhinh');
        var img = $(this).parent().find('img').attr('src');
        var rid = $(this).parent().find('img').attr('id');
        $.ajax({
            url: url + idImages,
            type: "GET",
            cahe: false,
            data: {"_token": _token, 'idHinh': idImages, "urlHinh": img},
            success: function (data) {
                if (data === "ok") {
                    $("#" + rid).remove();
                }
                else
                {
                    alert("Loi lien he admin")
                }

            }

        });

    });
});

$(function () {
    $("#select_onchange").change(function () {
        var url = "http://localhost:81/dacn/admin/lappn/change";
        var _token = $("form[name='frm_lapSP']").find("input[name='_token']").val();
        var idSP = $('#select_onchange').val();
        //var idImages = $(this).parent().find('img').attr('idhinh');
        //var img = $(this).parent().find('img').attr('src');
        //var rid = $(this).parent().find('img').attr('id');
        $.ajax({
            url: url,
            type: "GET",
            cahe: false,
            data: {"_token": _token, 'da': idSP},
            success: function (data) {
                $("#soLuongCon").val(data);

            }

        });
    });
});


$(function () {
    $("#btn_chon_click").click(function () {
        var url = "http://localhost:81/dacn/admin/lappn/click";
        var _token = $("form[name='frm_lapSP']").find("input[name='_token']").val();
        var idSP = $('#select_onchange').val();
        var soLuongNhap = $('#so_luong_nhap').val();
        var donGiaNhap = $('#don_gia_nhap').val();
        $.ajax({
            url: url,
            type: "GET",
            cahe: false,
            data: {"_token": _token, "da": idSP, "sl": soLuongNhap, "dg": donGiaNhap},
            success: function (data) {
                $('#kq_dangBang').html(data);
            }
        });
    });
});

$(function () {
    $("#select_laphd").change(function () {
        var url = "http://localhost:81/dacn/admin/laphd/change";
        var _token = $("form[name='frm_laphd']").find("input[name='_token']").val();
        var idSP = $('#select_laphd').val();
        $.ajax({
            url: url,
            type: "GET",
            cahe: false,
            data: {"_token": _token, 'da': idSP},
            success: function (data) {
                $("#soLuongHienCon").val(data['soluong']);
                $("#donGiaBan").val(data['dongia']);
            }
        });
    });
});

$(function () {
    $("#btn_chon_click_hd").click(function () {
        var url = "http://localhost:81/dacn/admin/laphd/click";
        var _token = $("form[name='frm_laphd']").find("input[name='_token']").val();
        var idSP = $('#select_laphd').val();
        var soLuongBan = $('#so_luong_ban').val();
        $.ajax({
            url: url,
            type: "GET",
            cahe: false,
            data: {"_token": _token, "da": idSP, "sl": soLuongBan},
            success: function (data) {
                $('#kq_dangBang1').html(data);
            }
        });
    });
});