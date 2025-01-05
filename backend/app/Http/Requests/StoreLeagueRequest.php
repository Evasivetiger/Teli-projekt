<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeagueRequest extends FormRequest
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
            "name" => ['required', 'string', 'max:15'],
            "primary_role" => ['required', 'string', 'max:20'],
            "secondary_role" => ['required', 'string', 'max:20'],
            "base_hp" => ['required', 'int'],
            "base_mana" => ['required', 'int'],
        ];
    }
}
