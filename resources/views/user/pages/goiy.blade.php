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
                    <a href="#">Danh sách gợi ý</a>
                </span>
            </span>
        </div>
        @if(count($products) > 0)
        @foreach($products as $item)
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
                <span class="btn btn-inverse ">Chi tiết</span>
            </div>

        </div> 
        @endforeach
    </div>
    @endif
</div>
</div>
</div>
@endsection

