<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'topic' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ];
    }

        /**
     * Get custom messages for validator errors.
     * Define your custom validation messages here.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
