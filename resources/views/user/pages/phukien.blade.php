@extends('user.master')
@section('title','Trang chủ')
@section('content')
<div class="right-area w775px left-fl pd10">
    @include('user.block.slide')
    <div class="clear wp100"></div>
    <br/>
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
        <br/>
        <!--end--title-->
        @foreach($phuKiens as $item)
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
    <div class="pagination pull-right">
            <ul>
                @if($phuKiens->currentPage()!= 1)
                <li><a href="{!! str_replace('/?','?',$phuKiens->url($phuKiens->currentPage()-1)) !!}">Prev</a> </li>
                @endif
                @for($i = 1 ; $i <= $phuKiens->lastPage(); $i++)
                <li class="{!!($phuKiens->currentPage()==$i)? 'active':''!!}">
                    <a href="{!! str_replace('/?','?',$phuKiens->url($i)) !!}">{!!$i!!}</a>
                </li>
                @endfor
                @if($phuKiens->currentPage() != $phuKiens->lastPage())
                <li><a href="{!! str_replace('/?','?',$phuKiens->url($phuKiens->currentPage()+1)) !!}">Next</a>
                    @endif
            </ul>
        </div>
</div>
</div>
</div>
@endsection

