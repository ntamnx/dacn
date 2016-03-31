@extends('user.master')
@section('title','Hỗ trợ mua hàng')
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
                    <a href="#">Giúp bạn mua hàng</a>
                </span>
            </span>
        </div>
        <br/>
    </div>
    <p><b>Để hiểu rõ hơn về nhu cầu của bạn bằng cách trả lời chi tiết cho mỗi câu hỏi.Chúng tôi sẽ đưa gia gợi ý giúp bạn.</b></p>
    <form action="{{route('supportSales')}}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
        <div class="form-group">
            <label>Bạn là nam hay nữ<span style="color: red">(*)</span></label>
            <label class="radio-inline">
                <input name="radioGioiTinh" value="nam" type="radio">Nam
            </label>
            <label class="radio-inline">
                <input name="radioGioiTinh" value="nu" type="radio">Nữ
            </label>
        </div>
        <hr/>
        <div class="form-group">
            <label>Độ tuổi của của bạn<span style="color: red">(*)</span></label>
            <label class="radio-inline">
                <input name="rdoDoTuoi" value="18" type="radio">dưới 18 tuổi
            </label>
            <label class="radio-inline">
                <input name="rdoDoTuoi" value="30" type="radio">từ 18 -> 30
            </label>
            <label class="radio-inline">
                <input name="rdoDoTuoi" value="40" type="radio">trên 30 tuổi
            </label>
        </div>
        <hr/>
        <div class="form-group">
            <label>Bạn muốn sử dung điện thoại của hãng nào<span style="color: red">(*)</span></label>
            <table>
                <tr>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="Apple"> Apple
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="Samsung"> Samsung
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="sony">sony
                        </label>
                    </td>        
                </tr>
                <tr>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="Htc"> Htc
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="Nokia"> Nokia
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="LG">LG Elictronic
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="Oppo">Oppo
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="Sky">Sky
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="hang[]" value="philips">philips
                        </label>
                    </td>
                </tr>
            </table>
        </div>
        <hr/>
        <div class="form-group">
            <label>Giá của sản phẩm<span style="color: red">(*)</span></label>
            <table>
                <tr>
                    <td>
                        <label class="radio-inline">
                            <input name="rdioGia" value="1" type="radio">dưới 3 triêụ
                        </label>
                    </td>
                    <td>
                        <label class="radio-inline">
                            <input name="rdioGia" value="2" type="radio">3 triệu -> 5 triêụ
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="radio-inline">
                            <input name="rdioGia" value="3" type="radio">5 triệu -> 8 triệu
                        </label>
                    </td>
                    <td>
                        <label class="radio-inline">
                            <input name="rdioGia" value="4" type="radio">trên 8 triệu
                        </label>
                    </td>
            </table>
            </tr>
        </div>
        <hr/>
        <div class="form-group">
            <label>Thông tin khác<span style="color: red"></span></label>
            <table>
                <tr>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1">3g - Wife
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2">Ứng dụng trò chơi
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3">Thời gian sử dụng dài
                        </label>
                    </td>        
                </tr>
                <tr>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1">Quay phim - chụp ảnh
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2">Mẫu mã đẹp
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3">Độ bền cao
                        </label>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100px;height: 40px;">Xong</button>
    </form>
</div>
<!--END-MAINBODY-->
@endsection