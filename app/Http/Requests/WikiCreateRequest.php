<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class WikiCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'mimes:jpg,bmp,png'
        ];
    }
}
