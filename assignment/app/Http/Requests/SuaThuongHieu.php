<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaThuongHieu extends FormRequest
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
            'tenthuonghieu' => 'required|min:3|max:50|unique:thuonghieu,tenthuonghieu,' . $this->id,
            'images' => 'mimes:jpeg,png,jpg,gif,svg',
            'sdt' => 'required|numeric|unique:thuonghieu,sdt,' . $this->id,
            'email' => 'required|unique:thuonghieu,email,' . $this->id,
            'diachi' => 'required||min:3|max:100'
        ];
    }

    public function messages()
    {
        
        return [
            'tenthuonghieu.unique'=> 'Thương hiệu đã tồn tại',
            'email.unique'=> 'Email đã tồn tại',
            'sdt.unique'=> 'Số điện thoại đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'max' => ':attribute không được lớn hơn :max ký tự',
            'mimes' => ':attribute không đúng định dạng - ảnh phải có đuôi jpg png gif',
            'numeric' => ':attribute phải là số'
        ];
    }

    public function attributes(){
        return [
            'tenthuonghieu' => 'Thương hiệu',
            'images' => 'Logo',
            'sdt' => 'Số điện thoại',
            'email' => 'Email',
            'diachi' => 'Địa chỉ'
        ];
    }
}
