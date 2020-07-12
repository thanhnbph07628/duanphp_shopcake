<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Suadaubep extends FormRequest
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
            'hoten' => 'required|min:2|max:20|unique:daubep,hoten,' . $this->id,
            'images' => 'mimes:jpeg,png,jpg,gif,svg',
            'chucvu' => 'required|min:3|max:25',
            'diachi' => 'required|min:3|max:50',
            'email' => 'required|unique:daubep,email,' . $this->id,
            'sdt' => 'required|numeric|digits_between:10,11|unique:daubep,sdt,' . $this->id
        ];
    }

    public function messages()
    {
        
        return [
            'hoten.unique'=> 'Họ tên đã tồn tại',
            'email.unique'=> 'Email đã tồn tại',
            'sdt.unique'=> 'Số  điện thoại đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'max' => ':attribute không được lớn hơn :max ký tự',
            'mimes' => ':attribute không đúng định dạng - ảnh phải có đuôi jpg png gif',
            'numeric' => ':attribute phải là số',
            'digits_between' => ':attribute phải từ 10 - 11 số'
        ];
    }

    public function attributes(){
        return [
            'hoten' => 'Tài khoản',
            'images' => 'Ảnh đại diện',
            'chucvu'=> 'Chức vụ',
            'diachi' => 'Địa chỉ',
            'email' => 'Email',
            'sdt' => 'Số điện thoại'
        ];
    }
}
