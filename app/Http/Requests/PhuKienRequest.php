<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PhuKienRequest extends Request {

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
            'sl_tenpk' => 'required',
            'txtPhuKien' => 'required',
            'anhphukien' => 'required|image'
        ];
    }

    public function messages() {
        return [
            'sl_tenpk.required' => 'Xin chọn tên sản phẩm',
            'txtPhuKien.required' => 'Xin nhập tên phụ kiện',
            'anhphukien.required' => 'Xin vui lòng chọn ảnh',
            'anhphukien.image' => 'Đây không phải là ảnh',
        ];
    }

}
