<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
            'txtTendn' => 'required|unique:nguoidung,username',
            'txtMatKhau' => 'required',
            'txtLaiMatKhau' => 'required|same:txtMatKhau',
            'txtEmail' => 'required|unique:nguoidung,email'
        ];
    }

    public function messages() {
        return [
            'txtTendn.required' => 'Tên đăng nhập không được để trống không được để trống!',
            'txtTendn.unique' => 'Tên đăng nhập đã tồn tại!',
            'txtMatKhau.required' => 'Mật khẩu không được để trống!',
            'txtLaiMatKhau.required' => 'Nhập lại mật khẩu không được để trống!',
            'txtLaiMatKhau.same' => 'Nhập lại mật khẩu không chính sác!',
            'txtEmail.required' => 'Tên email không được để trống không được để trống!',
            'txtEmail.unique' => 'Tên email đã tồn tại!'
        ];
    }

}
