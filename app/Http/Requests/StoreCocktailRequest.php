<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCocktailRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:50|unique:cocktails',
            'description' => 'string|nullable',
            'ingredients' => 'string|nullable',
            'origin' => 'string|nullable',
        ];
    }
    public function messages()
    {
        return [
            'title.min' => 'Il titolo è obbligatorio (almeno 5 caratteri)',
            'title.unique' => 'Questo titolo è già stato usato',
            'title.max' => 'Max 50 caratteri',
        ];
    }
}
