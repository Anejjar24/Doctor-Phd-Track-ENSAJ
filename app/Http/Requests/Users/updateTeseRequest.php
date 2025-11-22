<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class updateTeseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           
            'titre'=>'nullable|string',
                'description'=>'nullable|string',
                'laboratoire'=>'nullable|string',
                'date_inscription'=>'nullable|date',
                'directeur'=>'nullable|string',
                'codirecteur'=>'nullable|string',
                'photo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}



