<?php

namespace App\Http\Requests\Admin\Image;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class ImageStoreRequest extends FormRequest {

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

    public function messages()
    {
        return [
            'mimes' => 'Формат выбранного файла не поддерживается. Доступные форматы: :values.',
            'max.file' => 'Слишком большой размер файла. Доступны файлы до 25 Мб.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'path' => ['required', 'string'],
            'file' => [
                'required',
                'file',
                'max:25000',
                'mimes:jpeg,jpg,png,webp,gif'
            ],
        ];
    }
}
