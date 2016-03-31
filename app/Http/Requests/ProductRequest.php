<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    public function rules() {
        return [
            'select_masp' => 'required',
            'txtTenSP' => 'required|unique:sanpham,name',
            'FanhSP' => 'required|image'
        ];
    }

    public function messages() {
        return [
            'select_masp.required' => 'Xin chọn loại sản phẩm',
            'txtTenSP.required' => 'Xin nhập tên sản phẩm',
            'txtTenSP.unique' => 'Tên sản phẩm này đã tồn tại',
            'FanhSP.required' => 'Xin vui lòng chọn ảnh',
            'FanhSP.image' => 'Đây không phải là ảnh',
        ];
    }

}
