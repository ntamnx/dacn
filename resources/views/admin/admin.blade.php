@extends('admin.master')
@section('title','Quan ly dien thoai')
@section('content')
<div class="col-lg-10 pull-right">
    @include('admin.block.errors')
    @include('admin.block.msg')
    <br/>
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa fa fa-bar-chart-o fa-fw fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lý sản phẩm</div>
                    </div>
                </div>
            </div>
            <a href="{!!route('admin.loaisp.list')!!}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-shopping-cart fa-fw fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">@if($result > 0)
                            {{$result}}
                            @else
                            &nbsp;
                            @endif</div>
                        <div>Đơn hàng mới</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.laphd.getDonHang')}}">
                <div class="panel-footer">
                    <span class="pull-left">Xem đơn hàng</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa fa fa-bar-chart-o fa-fw fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lý sản phẩm</div>
                    </div>
                </div>
            </div>
            <a href="{!!route('admin.product.list')!!}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách sản phẩm</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa fa fa-bar-chart-o fa-fw fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lý tính năng</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.tinhnang.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách tính năng sản phẩm</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lí phụ kiện</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.phukien.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách phụ kiện</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lý nhập hàng</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.lappn.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách phiếu nhập</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lý hóa đơn</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.laphd.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách hóa đơn</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    @if(Auth::user()->level==2)
    <div class="col-lg-3">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Quản lý người dùng</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.user.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Danh sách người dùng</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    @endif
    @if(Auth::user()->level==2)
    <div class="col-lg-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Báo cáo doanh thu</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.user.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Xem báo cáo</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    @endif
    @if(Auth::user()->level==2)
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Sản phẩm bán chạy</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.user.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Xem báo cáo</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    @endif
    @if(Auth::user()->level==2)
    <div class="col-lg-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cube fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">&nbsp;</div>
                        <div>Sản phẩm tồn kho</div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.user.list')}}">
                <div class="panel-footer">
                    <span class="pull-left">Xem báo cáo</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    @endif
</div>
@endsection