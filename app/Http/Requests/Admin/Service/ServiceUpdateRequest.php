<?php

namespace App\Http\Requests\Admin\Service;

use App\Enums\EUnitType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;


class ServiceUpdateRequest extends FormRequest
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

            'sphere_id' => ['integer', 'exists:spheres,id'],
            'category_id' => ['integer', 'exists:categories,id'],
            'title' => ["string", Rule::unique('services', 'title')->ignore($this->service)],
            'slug' => ["string", Rule::unique('services', 'slug')->ignore($this->service)],
            'body' => ['string'],
            'price' => ['regex:/^\d+(\.\d{1,2})?$/'],
            'from' => ['integer', 'in:0,1'],
            'unit_id' => ['integer', new Enum(EUnitType::class)],
            'active' => ['integer', 'in:0,1'],
        ];
    }
}
