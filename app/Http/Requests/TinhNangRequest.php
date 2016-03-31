<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TinhNangRequest extends Request {

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
            'sl_tensp' => 'required|unique:tinhnang,masp',
        ];
    }

    public function messages() {
        return [
            'sl_tensp.required' => 'Vui lòng chong tên sản phẩm!',
             'sl_tensp.unique' => 'Tên sản phẩm này đã tồn tại tính năng!!',
        ];
    }

}
