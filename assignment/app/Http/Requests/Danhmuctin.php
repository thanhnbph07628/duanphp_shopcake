<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Danhmuctin extends FormRequest
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
            'tendm' => 'required|min:3|max:25|unique:danhmuctintuc,tendm,'.$this->id
        ];
    }
    public function messages()
    {
        
        return [
            'tendm.unique'=> 'Tên danh mục đã tồn tại',
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min ký tự',
            'max' => ':attribute không được lớn hơn :max ký tự'
        ];
    }

    public function attributes(){
        return [
            'tendm' => 'Tên danh mục'
        ];
    }
}
