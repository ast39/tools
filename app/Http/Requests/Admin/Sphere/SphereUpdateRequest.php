<?php

namespace App\Http\Requests\Admin\Sphere;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class SphereUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation() :void
    {
        if (!is_null($this->title)) {
            $this->merge([
                'slug' => Str::slug($this->title),
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'title' => ["string", Rule::unique('spheres', 'title')->ignore($this->sphere)],
            'slug' => ["string", Rule::unique('spheres', 'slug')->ignore($this->sphere)],
            'body' => ['string'],
            'active' => ['integer', 'in:0,1'],
            'seo_title' => ['sometimes', 'string'],
            'seo_desc' => ['sometimes', 'string'],
            'seo_keys' => ['sometimes', 'string'],
        ];
    }
}
