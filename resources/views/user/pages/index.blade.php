@extends('user.master')
@section('title','Trang chủ')
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
                    <a href="/dien-thoai/maxfone-22.aspx">Sản phẩm bán chạy</a>
                </span>
            </span>
        </div>
        @foreach($sanPhamBanChay as $item)
        <div class="grid w250px  left-fl mg-top5 gachbottom" >
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
    <div class="clea "></div>
    <div class="group product clearfix">
        <!--title-->
        <div class="header2">
            <span class="title">
                <span>
                    <a href="/dien-thoai/maxfone-22.aspx">Sản phẩm mới
                </span>
            </span>
        </div>
        @foreach($sanPhamMoi as $item)
        <div class="grid w250px  left-fl mg-top5 gachbottom" >
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
    <div class="clear"></div> 
    <div class="clear "></div>
    <div class="group product clearfix">
        <!--title-->
        <div class="header2">
            <span class="title">
                <span>
                    <a href="/dien-thoai/maxfone-22.aspx">Phụ kiện điện thoại</a>
                </span>
            </span>
        </div>
        <!--end--title-->
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
</div>
</div>
</div>
@endsection

