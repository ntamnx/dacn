@extends('user.master')
@section('title','Tin tức')
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
			<li><a href="javascript:0">Tin tức</a> <span class="divider">/</span></li>
			<li class="active">Tin tức Mobile Services Center</li>
		    </ul>
		</div>
	    </div>
	    @foreach($tinT as $item)
	    <div class="list-news">
		<div class="news-item-c">
		    <div class="news-item">
			<a href="javascrip:0" class="img" style="border:0px;">
			    <img title="{{$item["tieude"]}}" src="{!!asset('resources/upload/tintuc/'.$item["anh"])!!}"/></a>
			<a href="{!! URL::route('chiTietTin',$item['id'])!!}" class="title">{{$item["tieude"]}}</a><br>
			<div class="date">
			    <span class="label-date">Cập nhật:</span> <span class="date-data"><?php echo \Carbon\Carbon::createFromTimestamp(strtotime($item["updated_at"]))->diffForHumans(); ?>
			    </span>

			</div>
			<div class="description">
			    <p>
				{{$item["mota"]}}</p>
			    <p>
				<span class="label-date" style="margin-left: 168px;">Lượt xem:</span> <span class="date-data">{{$item["luot_xem"]}}</span>
			    </p>
			</div>
		    </div>
		</div>
	    </div>
	    @endforeach
	</div>
    </div>
    <div class="pagination pull-right">
	<ul>
	    @if($tinT->currentPage()!= 1)
	    <li><a href="{!! str_replace('/?','?',$tinT->url($tinT->currentPage()-1)) !!}">Prev</a> </li>
	    @endif
	    @for($i = 1 ; $i <= $tinT->lastPage(); $i++)
	    <li class="{!!($tinT->currentPage()==$i)? 'active':''!!}">
		<a href="{!! str_replace('/?','?',$tinT->url($i)) !!}">{!!$i!!}</a>
	    </li>
	    @endfor
	    @if($tinT->currentPage() != $tinT->lastPage())
	    <li><a href="{!! str_replace('/?','?',$tinT->url($tinT->currentPage()+1)) !!}">Next</a>
		@endif
	</ul>
    </div>
</div>
<!--Vung ben phai-->
@endsection
