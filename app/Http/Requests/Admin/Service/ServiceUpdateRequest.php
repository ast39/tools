<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class ServiceUpdateRequest extends FormRequest
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
            'category_id' => ['integer', 'exists:categories,id'],
            'title' => ["string", "unique:services,title,{$this->title}"],
            'body' => ['string'],
            'active' => ['integer', 'in:0,1'],
        ];
    }
}
