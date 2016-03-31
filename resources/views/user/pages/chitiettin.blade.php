@extends('user.master')
@section('title','Chi tiết tin')
@section('content')
<div class="right-area w775px left-fl pd10">

    <ul class="breadcrumb">
	<li><a href="{{url('/')}}">Trang chủ</a> <span class="divider">/</span></li>
	<li class="active">Tin tức</li>
    </ul>
    <div class="banner-group wp100 clear">
	<img class="banner-group" src="{{asset('public/user/images/banner/6.jpg')}}" />
    </div>

    <div class="grid w710px left-fl pd10">


	<!--Tin khac-->
	<div class="box-news clear">
	    <div class="box-title">
		<div class="box-title-c">
		    <ul class="breadcrumb">
			<li><a href="#">Tin tức</a> <span class="divider">/</span></li>
			<li class="active">Tin tức Mobile Services Center</li>
		    </ul>
		</div>
	    </div>
	    <!--chitiettin-->
	    <div class="w750px block clear pull-right detailNews pd5">
		<table>
		    <tr>
			<td><h4>{{$tinT->tieude}}</h4></td>
		    </tr>
		    <tr>
			<td>
			   {!!$tinT->noidung!!}
			</td>
		    </tr>
		</table>
	    </div>
	    <span class="clear"></span>
	    <div class="block clean clear tinlienquan wp100">
		<h1>Tin khác</h1>
		<ul>
		    @foreach($tinTuc as $item)
		    <li><a href="{!! URL::route('chiTietTin',$item['id'])!!}">{{$item["tieude"]}}</a></li>
		   @endforeach
		</ul>
	    </div>
	</div>
    </div>
</div>
</div>
</div>
@endsection
