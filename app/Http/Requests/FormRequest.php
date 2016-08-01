<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormRequest extends Request
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

            'title' => 'required|string',
            'email' => 'required|email',
            'date' => 'required|after:today',
            'category_id' => 'integer',
            'content' => 'required',
            'status' => 'in:published,unpublished',
            'tags.*' => 'integer', //tous les éléments de ce tableau doivent être des entiers
            'media' => 'image|max:2000',


        ];
    }
}
