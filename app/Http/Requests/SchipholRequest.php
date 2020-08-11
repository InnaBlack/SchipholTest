<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchipholRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $rules = [
            'id' => 'required|integer|exists:shipholtest,id',
        ];

        switch ($this->getMethod())
        {
        case 'GET':
            return $rules;
        }
    }

}
