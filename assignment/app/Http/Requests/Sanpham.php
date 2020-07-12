<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sanpham extends FormRequest
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
            'tensp' => 'required|min:3|max:25|unique:sanpham,tensp',
            'images' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'giasp' => 'required|numeric',
            'giakm' => 'required|numeric',
            'soluong' => 'required|numeric'
        ];
    }

    public function messages()
    {
        
        return [
            'tensp.unique'=> 'Tên sản phẩm đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'max' => ':attribute không được lớn hơn :max ký tự',
            'mimes' => ':attribute không đúng định dạng - ảnh phải có đuôi jpg png gif',
            'numeric' => ':attribute phải là số'
        ];
    }

    public function attributes(){
        return [
            'tensp' => 'Tên sản phấm',
            'images' => 'Ảnh sản phẩm',
            'giasp' => 'Giá sản phấm',
            'giakm' => 'Giá khuyến mãi',
            'soluong' => 'Số lượng sản phấm'
        ];
    }
}
