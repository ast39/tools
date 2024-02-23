<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CategoryUpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'sphere_id' => ['integer', 'exists:spheres,id'],
            'title' => ["string", Rule::unique('categories', 'title')->ignore($this->category)],
            'body' => ['string'],
            'active' => ['integer', 'in:0,1'],
        ];
    }
}
