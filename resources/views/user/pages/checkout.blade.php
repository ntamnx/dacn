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
                    <a href="/dien-thoai/maxfone-22.aspx">Giá Sản phẩm mới nhất</a>
                </span>
            </span>
        </div>
        <br/>
        <div class="clear"></div>
        <table class="table table-bordered mg-top10">
            <thead>
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên máy</th>
                    <th>Tình trạng SP</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0 ?>
                @foreach($products as $item)
                <?php $i++ ?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['trang_thai']}}</td>
                    <td>{{number_format($item['gia'])}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination pull-right">
            <ul>
                @if($products->currentPage()!= 1)
                <li><a href="{!! str_replace('/?','?',$products->url($products->currentPage()-1)) !!}">Prev</a> </li>
                @endif
                @for($i = 1 ; $i <= $products->lastPage(); $i++)
                <li class="{!!($products->currentPage()==$i)? 'active':''!!}">
                    <a href="{!! str_replace('/?','?',$products->url($i)) !!}">{!!$i!!}</a>
                </li>
                @endfor
                @if($products->currentPage() != $products->lastPage())
                <li><a href="{!! str_replace('/?','?',$products->url($products->currentPage()+1)) !!}">Next</a>
                    @endif
            </ul>
        </div>
    </div>
    <!--Vung ben phai-->
</div>
</div>
<!--END-MAINBODY-->
@endsection