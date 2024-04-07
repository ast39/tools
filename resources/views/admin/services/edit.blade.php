@php
    use App\Enums\EUnitType;
@endphp

@extends('admin.layouts.app')

@section('title', __('Обновление услуги') . ' : ' . $service->title)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Обновление услуги' . ' : ' . $service->title) }}</div>

        <div class="card-body bg-light">
            <form method="post" action="{{ route('admin.service.update', $service->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="sphere_id" class="form-label required">{{ __('Сфера') }}</label>
                    <select  class="form-control form-select" id="sphere_id" name="sphere_id">
                        @foreach($spheres as $sphere)
                            <option title="{{ $sphere->title }}" {{ ($service->category->sphere_id ?? null) == $sphere->id ? 'selected' : '' }} value="{{ $sphere->id }}">{{ $sphere->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label required">{{ __('Категория') }}</label>
                    <select  class="form-control form-select" id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option title="{{ $category->title }}" {{ ($service->category_id ?? null) == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label required">{{ __('Название') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" />
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">{{ __('Описание раздела') }}</label>
                    <textarea  cols="10" rows="5" class="form-control" id="body" name="body">{{ $service->body }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label required">{{ __('Цена') }}</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $service->price }}" />
                </div>

                <div class="mb-3">
                    <label for="from" class="form-label required">{{ __('Диапазон цены') }}</label>
                    <select  class="form-control form-select" id="from" name="from">
                        <option title="{{ __('Фиксированная') }}" value="0" {{ ($service->from ?? 0) == 0 ? 'selected' : null }}>{{ __('Фиксированная') }}</option>
                        <option title="{{ __('Начальная') }}" value="1" {{ ($service->from ?? 0) == 1 ? 'selected' : null }}>{{ __('Начальная') }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="unit_id" class="form-label required">{{ __('Единица измерения') }}</label>
                    <select  class="form-control form-select" id="unit_id" name="unit_id">
                        @foreach(EUnitType::cases() as $unit)
                            <option title="{{ __('unit_' . $unit->value) }}" value="{{ $unit->value }}" {{ ($service->unit ?? 1) == $unit->value ? 'selected' : null }}>{{ __('unit_' . $unit->value) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label required">{{ __('Видимость') }}</label>
                    <select  class="form-control form-select" id="active" name="active">
                        <option title="Скрыть" value="0" {{ ($service->active ?? 0) == 0 ? 'selected' : null }}>{{ __('Скрыть') }}</option>
                        <option title="Показать" value="1" {{ ($service->active ?? 0) == 1 ? 'selected' : null }}>{{ __('Показать') }}</option>
                    </select>
                    @error('active')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.service.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Назад') }}</a>
                    <button type="submit" class="btn btn-primary rounded">{{ __('Сохранить') }}</button>
                </div>
            </form>

        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body'), {
                fontFamily: {
                    options: [
                        'default',
                        'Ubuntu, Arial, sans-serif',
                        'Ubuntu Mono, Courier New, Courier, monospace'
                    ]
                }
            })
            .catch( error => {
                console.error( error );
            });
    </script>
@endpush
