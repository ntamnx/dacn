<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NhaCCRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'txtNameNCC' => 'required|unique:nhacc,name'
        ];
    }

    public function messages() {
        return [
            'txtNameNCC.required' => 'Tên nhà cung cấp không được để trống!',
            'txtNameNCC.unique' => 'Tên nhà cung đã tồn tại!',
        ];
    }

}
