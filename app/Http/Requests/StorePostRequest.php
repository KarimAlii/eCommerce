<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'=>'required',
            'desc'=>'required',
            'image'=>'required',
        ];
    }
    public function messages(){
        return[
            'title.required'=>'Please Insert The Title',
            'desc.required'=>'Please Insert The Descreption',
            'image.required'=>'Please Insert The Image',
        ];


}
}
