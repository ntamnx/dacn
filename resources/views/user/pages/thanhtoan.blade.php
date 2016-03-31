@extends('user.master')
@section('title','Bang bao gia')
@section('content')
<!--Vung ben phai-->
<div class="right-area w775px left-fl pd10">
    <div class="banner-group wp100 clear">
        @include('user.block.slide')
    </div> 
    <div class="clear wp100"></div>
    <br/>
    <div class="clear"></div> 
    <div class="clear "></div>
    <div class="group product clearfix">
        <!--title-->
        <div class="header2">
            <span class="title">
                <span>
                    <a href="javascript:0">Hình thức thanh toán</a>
                </span>
            </span>
        </div>
        <br/>
        <div class="clear"></div> 
    </div>
    <a class="btn btn-primary" href="{{route('thanhToanTrucTiep')}}" style="width: 200px;height: 30px">Thanh toán trực tiếp</button>
    <a href="{{route('tienHanhThanhToan')}}">
        <img border="0" src="https://www.nganluong.vn/data/images/buttons/11.gif" /> 
    </a>
    <!--Vung ben phai-->
</div>
</div>
<!--END-MAINBODY-->
@endsection