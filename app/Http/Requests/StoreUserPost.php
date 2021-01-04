<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPost extends FormRequest
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
            'cc' => 'required|min:5|Max:10|unique:users',
            'area'=> 'required|min:1|max:5',
            'firstName'=>'required|min:3|max:45',
            'secondName'=>'min:3|max:45',
            'fLastName'=> 'required|min:3|max:45',
            'sLastName'=> 'required|min:3|max:45',
            'email' => 'required|min:3|max:45|unique:users',
            'password'=> 'required|min:8|max:100'
        ];
    }
}
