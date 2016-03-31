<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LapPNRequest extends Request {

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
            "sl_ncc" => "required"
        ];
    }

    public function messages() {
        return [
            'sl_ncc.required' => 'Tên nhà cung cấp không được để trống!',
           
        ];
    }

}
