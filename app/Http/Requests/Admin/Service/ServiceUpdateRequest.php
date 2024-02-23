<?php

namespace App\Http\Requests\Admin\Service;

use App\Enums\EUnitType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
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
            'price' => ['regex:/^\d+(\.\d{1,2})?$/'],
            'from' => ['integer', 'in:0,1'],
            'unit_id' => ['integer', new Enum(EUnitType::class)],
            'active' => ['integer', 'in:0,1'],
        ];
    }
}
