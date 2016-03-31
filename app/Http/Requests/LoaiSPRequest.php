<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoaiSPRequest extends Request {

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
            'txtTenLoaiSP' => 'required|unique:loaisp,name'
        ];
    }

    public function messages() {
        return [
            'txtTenLoaiSP.required' => 'Tên loại sản phẩm không được để trống!',
            'txtTenLoaiSP.unique' => 'Tên loại sản phẩm đã tồn tại!',
        ];
    }

}
