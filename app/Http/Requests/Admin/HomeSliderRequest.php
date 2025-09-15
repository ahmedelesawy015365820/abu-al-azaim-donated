<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomeSliderRequest extends FormRequest
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
            "title_ar" => "required|string|max:200",
            "title_en" => "required|string|max:200",
            "title_color_en" => "required|string|max:200",
            "title_color_ar" => "required|string|max:200",
            "description_ar" => "required|string|max:300",
            "description_en" => "required|string|max:200",
            "year" => "required|integer|max:4000",
            "status" =>  "required|boolean",
            'image' => [$this->method() == "PUT" ? 'nullable':'required','image','mimes:jpeg,png,jpg,gif','max:2048'],
            'image1' => [$this->method() == "PUT" ? 'nullable':'required','image','mimes:jpeg,png,jpg,gif','max:2048'],
        ];
    }
}
