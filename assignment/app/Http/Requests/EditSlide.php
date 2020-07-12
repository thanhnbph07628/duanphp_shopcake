<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSlide extends FormRequest
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
            'tieude' => 'required|min:3|max:25|unique:slide,tieude,' . $this->id,
            'images' => 'mimes:jpeg,png,jpg,gif,svg',
            'mota' => 'required'
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
            'tieude' => 'Tiêu đề slider',
            'images' => 'Ảnh slider',
            'mota' => 'Mô tả slider'
        ];
    }
}

