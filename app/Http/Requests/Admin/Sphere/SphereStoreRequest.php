<?php

namespace App\Http\Requests\Admin\Sphere;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class SphereStoreRequest extends FormRequest
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
        //
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'title' => ['required', 'string', 'unique:spheres,title'],
            'body' => ['string'],
            'active' => ['integer', 'in:0,1'],
        ];
    }
}
