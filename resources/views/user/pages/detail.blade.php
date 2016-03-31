@extends('user.master')
@section('title','Chi tiết sản phẩm')
@section('content')
<!--Vung ben phai-->
<div class="right-area w775px left-fl pd10">
    <div class="detailPro wp100 block left-fl clear">
        <div class="w400px pull-left mg-left20">
            @include('user.block.slider')
        </div>
        <div class="w300px pull-right info-right">
            <div class="quick-info">
                <ul>
                    <li><span><b>Tên sản phẩm:</b></span>
                        <span><b>{!!$product->name!!}</b></span>
                    </li>
                    <li><span>Giá tiền:</span><span class="price">
                            {!!number_format($product->gia)!!}&nbsp;vnđ</span></li>
                    <li><span>Hãng sản xuất:</span> {!!$product->sanxuat!!}</li>
                    <li><span>Kho hàng:</span> @if($product->soluong > 0 )Còn hàng
                        @else Hết hàng
                        @endif</a></li>
                    <li><span>Màu sản phẩm:</span>
                        <span>{!!$product->mau!!}</span>
                    </li>
                    <li><span>Tình trạng sản phẩm:</span> 
                        <span>{!!$product->trang_thai!!}</span>
                    </li>
                    <li><span>Bảo hành:{!!$product->baohanh!!}</span></li>
                    <li style="color:Red"><span>Quà tặng:</span> 
                        <span><a style="color:Red" href="#timkiemsanphamco khuyen mai">Giảm giá 30% phụ kiện khi mua kèm máy</a></span>
                    </li>
                    <li>
                        <a  href="{!! URL::route('muaHang',$product->id)!!}" class="btn btn-info w255px">Thêm vào giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear block wp100">
        <script src="{!!asset('public/user/SpryAssets/SpryTabbedPanels.js')!!}" type="text/javascript"></script>
        <link href="{!!asset('public/user/SpryAssets/SpryTabbedPanels.css')!!}" rel="stylesheet" type="text/css" />    <!--Selector-TabPanels-->      
        <div id="TabbedPanels1" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0">Thông tin</li>
                <li class="TabbedPanelsTab" tabindex="0">Sản phẩm cùng loại</li>
                <li class="TabbedPanelsTab" tabindex="0">So sánh sản phẩm</li>
                <li class="TabbedPanelsTab" tabindex="0">Phụ kiên tương thích</li>
                <li class="TabbedPanelsTab" tabindex="0">Đánh giá Khách hàng</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent">
                    <div class="tabs-details" id="tabs-0">
                        @if(count($tinhNang)>0)
                        <table class="mobile-info">
                            <tbody><tr>
                                    <td class="group">Kích thước &amp; khối lượng</td>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="w650px"> {!!$tinhNang->kichthuoc_khoiluong!!}</td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="mobile-info">
                            <tbody><tr>
                                    <td class="group">Màn hình &amp; hiển thị</td>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="w650px"> {!!$tinhNang->manhinh_hienthi!!}</td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        <table class="mobile-info">
                            <tbody><tr>
                                    <td class="group">Lưu trữ &amp; bộ nhớ</td>
                                    <td>
                                        <table>
                                            <tbody><tr>
                                                    <td class="w650px"> {!!$tinhNang->luutru_bonho!!}</td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>

                        <table class="mobile-info">
                            <tbody><tr>
                                    <td class="group">Dữ liệu &amp; Kết nối</td>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="w650px"> {!!$tinhNang->dulieu_ketnoi!!}</td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        <table class="mobile-info">
                            <tbody><tr>
                                    <td class="group">Ứng dụng &amp; Trò chơi</td>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="w650px"> {!!$tinhNang->ungdung_trochoi!!}</td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        <table class="mobile-info">
                            <tbody><tr>
                                    <td class="group">Nguồn</td>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="w650px"> {!!$tinhNang->nguon!!}</td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                    </div>
                    @endif
                </div>
                <div class="TabbedPanelsContent">
                    @foreach($cungLoai as $item)
                    <div class="grid w245px  left-fl mg-top5 gachbottom" >
                        <div class="left-fl imgProduct w110px">
                            <a href="#"><span class="imgProduct">
                                    <img class="resizeP-Home" src="{!!asset('resources/upload/'.$item['anh'])!!}" />
                                </span></a>
                        </div>
                        <div class="left-fl desProduct w130px">
                            <ul class="desProduct clean">
                                <h6>{!!$item['name']!!}</h6>
                                <li><b>Xuất sứ:</b>{!!$item['sanxuat']!!}</li>
                                <li><b>Bảo hành:</b>{!!$item['baohanh']!!}</li>
                                <li><b>Màu sắc:</b> {!!$item['mau']!!}</li>
                                <li><b>Tình trạng:</b>{!!$item['trang_thai']!!}</li>
                                <li><b>Trạng thái:</b> @if($item['soluong'] >0)
                                    Còn hàng
                                    @else
                                    Hết hàng
                                    @endif</li>
                                <li class="gift"> Khuyến mại</li>
                            </ul>
                        </div>
                        <div class="clear mg-left30 ">
                            <span class="btn btn-info ">{!!number_format($item['gia'])!!}</span>
                            <a href="{{route('getProductDetail',$item['id'])}}"><span class="btn btn-inverse ">Chi tiết</span></a>
                        </div>
                    </div> 
                    @endforeach
                </div>
                <!--So sánh sản phẩm ở đây-->
                <div class="TabbedPanelsContent">
                    <ul class="list-details">
                        <div class="row" style="margin-left: 2px; margin-right: 2px;">
                            <div class="col-lg-6" >
                                <div class="form-group">
                                    <input type="text" value="{{$product->name}}" style="height: 35px;" disabled class="form-control" name="sl_tensp"/>
                                </div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kích thước<br/>Khối lượng</th><td>{!!$tinhNang->kichthuoc_khoiluong!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Màn hình<br/>Hiển thị</th><td>{!!$tinhNang->manhinh_hienthi!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Lưu trữ<br/>Bộ nhớ</th><td>{!!$tinhNang->luutru_bonho!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Dữ liệu<br/>Kết Nối</th><td>{!!$tinhNang->dulieu_ketnoi!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Ứng dụng<br/>Trò chơi</th><td>{!!$tinhNang->ungdung_trochoi!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Nguồn</th><td>{!!$tinhNang->nguon!!}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-lg-6 " >
                                <div class="form-group">
                                    <select class="form-control" name="sl_tensp" style="height:35px" id="sosanh_sp">
                                        <option value="">Xin hãy chọn tên sản phẩm</option>
                                        <?php select($select, old('sl_tensp')) ?>
                                    </select>
                                </div>  
                                <div id="sanpham_sosanh" style="margin-top: 25px !important">
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="TabbedPanelsContent">
                    @foreach($phuKien as $item)
                    <div class="grid left-fl pd5" >
                        <ul class="thumbnails">
                            <li class="w230px">
                                <div class="thumbnail">
                                    <a class="resizeA-over" href="#"><img class="resizeA-Home" src="{!!asset('resources/upload/phukien/'.$item['anh'])!!}" /></a>
                                    <div class="caption">
                                        <a href="#"><h5>{!!$item['tenpk']!!}</h5></a>
                                        <p class="btn btn-primary" href="#">{!!$item['gia']!!}</p>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>


                <div class="TabbedPanelsContent">
                    <p class="title">Bình luận, đánh giá</p>


                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=984724398268673";
                fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


                    <div class="fb-comments" data-href="{!!Request::url()!!}" data-width="750" data-numposts="5"></div>



                    <script type="text/javascript">
                                $(document).ready(function () {

                        $("#btncomment").button({
                        icons: {primary: 'ui-icon-circle-check'},
                                text: true
                        }).click(function () {
                        $.get(encodeURI("/HomeMobile.aspx/AddReview?mobileid=1256"), function (data) {
                        $("#comment-form").html(data);
                        });
                        });
                                $.post("/HomeMobile.aspx/ListComment?mobileid=1256&amp;page=1", function (data) {
                                $("#comment-container").html(data);
                                });
                        });</script>
                    <div style="display: inline-block;width: 100%;" id="comment-form"></div>


                </div>
            </div>
        </div>
    </div>
</div>
<script src="{!!asset('public/user/js/jquery-1.9.1.min.js')!!}"></script>
<script>
                                $(function () {
                                $("#sosanh_sp").change(function () {
                                var url = "http://localhost:81/dacn/so-sanh";
                                        var idSP = $('#sosanh_sp').val();
                                        $.ajax({
                                        url: url,
                                                type: "GET",
                                                cahe: false,
                                                data: {'da': idSP},
                                                success: function (data) {
                                                $('#sanpham_sosanh').html(data);
                                                }
                                        });
                                });
                                });</script>
<script type="text/javascript">
            var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
@endsection