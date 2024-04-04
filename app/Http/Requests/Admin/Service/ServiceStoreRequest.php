<?php

namespace App\Http\Requests\Admin\Service;

use App\Enums\EUnitType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Enum;


class ServiceStoreRequest extends FormRequest
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
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'sphere_id' => ['required', 'integer', 'exists:spheres,id'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'title' => ['required', 'string', 'unique:services,title'],
            'slug' => ['required', 'string', 'unique:services,slug'],
            'body' => ['string'],
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'from' => ['required', 'integer', 'in:0,1'],
            'unit_id' => ['required', 'integer', new Enum(EUnitType::class)],
            'active' => ['integer', 'in:0,1'],
        ];
    }
}
