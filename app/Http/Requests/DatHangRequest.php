<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DatHangRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            "txtTenKhachHang" => "required",
            "txtDiaChi"       => "required",
            "txtNoiNhan"      => "required",
            "txtThoiGianNhan" => "required",
            "txtSoDT"         => 'required|regex:/^\d(\d{3})(\d{3})(\d{3,4})$/',
        ];
    }

    public function messages() {
        return [
            'txtTenKhachHang.required' => 'Tên khách hàng không được để trống!',
            'txtDiaChi.required'       => 'Địa chỉ không được để trống!',
            'txtNoiNhan.required'      => 'Nơi nhận không được để trống!',
            'txtThoiGianNhan.required' => 'Thời gian nhận hàng không được để trống!',
            'txtSoDT.required'         => 'Số điện thoại không được để trống!',
            'txtSoDT.regex'            => 'Số điện thoại không đúng định dạng!'
        ];
    }

}
