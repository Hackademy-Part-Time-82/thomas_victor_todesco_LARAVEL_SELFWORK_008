<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class BookStoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => ['required', 'max:30'],
            'year' => ['max:10'],
            'pages' => ['max:10'],
            'image' => ['mimes:png,jpg'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Titolo obbligatorio!',
            'name.max' => 'Massimo 10 caratteri!',
        ];
    }
}
