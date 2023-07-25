<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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

            'title'        => 'required',
            'excerpt'         => 'required',
            'workImage'        => 'mimes:jpg,jpeg,bmp,png,webp',
            'brandImage'        => 'mimes:jpg,jpeg,bmp,png,webp',
            'techTitle'   => 'required',
            'body'   => 'required',
            'resultImage1'   => 'mimes:jpg,jpeg,bmp,png,webp',
            'resultImage2'   => 'mimes:jpg,jpeg,bmp,png,webp',
            'fontImage'   => 'mimes:jpg,jpeg,bmp,png,webp',
            'colorImage'   => 'mimes:jpg,jpeg,bmp,png,webp',
        
           
        ];
    }
}
