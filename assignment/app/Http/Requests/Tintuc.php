<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tintuc extends FormRequest
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
            'tieude' => 'required|min:3|max:100|unique:tintuc,tieude,' . $this->id,
            'images' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function messages()
    {
        
        return [
            'tieude.unique'=> 'Tiêu đề đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'max' => ':attribute không được lớn hơn :max ký tự',
            'mimes' => ':attribute không đúng định dạng - ảnh phải có đuôi jpg png gif'
        ];
    }

    public function attributes(){
        return [
            'tieude' => 'Tiêu đề',
            'images' => 'Ảnh tin tức'
        ];
    }
}
