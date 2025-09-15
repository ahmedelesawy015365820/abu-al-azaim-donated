<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "title_ar" => "required|string|max:200|unique:articles,title_ar" . ($this->method() == 'PUT' ? ','.$this->article->id : ''),
            "title_en" => "required|string|max:200|unique:articles,title_en" . ($this->method() == 'PUT' ? ','.$this->article->id : ''),
            "content_ar" => "required|string|max:200",
            "content_en" => "required|string|max:300",
            "status" => "required|boolean",
            "category_id" => "required|exists:article_categories,id",
            'image' => [$this->method() == "PUT" ? 'nullable' : 'required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
}
