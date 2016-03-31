<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LapHDRequest extends Request {

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
            "txtNameKH" => "required",
            "txtSoDienThoai" => 'regex:/^\d(\d{3})(\d{3})(\d{3,4})$/',
        ];
    }

    public function messages() {
        return [
            'txtNameKH.required' => 'Tên khách hàng không được để trống!',
            'txtSoDienThoai.regex' => 'Số điện thoại không đúng định dạng!'
        ];
    }

}
