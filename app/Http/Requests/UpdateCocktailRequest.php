<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCocktailRequest extends FormRequest
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
            // con Rule possiamo modificare gli altri campi senza errore su title
            'name' => ['required', 'string', 'min:3', 'max:50', Rule::unique('comics')->ignore($this->comic)],
            'description' => 'string|nullable',
            'ingredients' => 'stringnullable',
            'origin' => 'string|nullable',
            // si può usare anche l'array per le condizioni oltre il pipe
            // 
        ];
    }
}
