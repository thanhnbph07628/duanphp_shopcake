<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Lienhe extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'hoten' => 'required|min:3|max:25',
            'tieude' => 'required|min:3|max:100',
            'noidung' => 'required|min:3|max:200',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'max' => ':attribute không được lớn hơn :max ký tự'
        ];
    }

    public function attributes(){
        return [
            'hoten' => 'Họ tên',
            'tieude' => 'Tiêu đề',
            'email' => 'Email',
            'noidung' => 'Nội dung'
        ];
    }
}
