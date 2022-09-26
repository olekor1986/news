<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends ApiFormRequest
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
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:100|max:1000'
        ];

        switch ( $this->getMethod() )
        {
            case 'POST':
                return $rules;
            case 'PUT':
                return $rules;
            case 'DELETE':
                return [
                    'id' => 'required|integer|exists:news,id',
                ];
        }
    }
}
