@php
    use App\Enums\EUnitType;
@endphp

@extends('admin.layouts.app')

@section('title', __('Добавить услугу'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Добавить услугу') }}</div>

        <div class="card-body bg-light">
            <form method="post" action="{{ route('admin.service.store') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="sphere_id" class="form-label required">{{ __('Сфера') }}</label>
                    <select  class="form-control form-select" id="sphere_id" name="sphere_id">
                        @foreach($spheres as $sphere)
                            <option title="{{ $sphere->title }}" value="{{ $sphere->id }}" {{ (old('sphere_id') ?? 1) == $sphere->id ? 'selected' : null }}>{{ $sphere->title }}</option>
                        @endforeach
                    </select>
                    @error('sphere_id')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label required">{{ __('Категория') }}</label>
                    <select  class="form-control form-select" id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option title="{{ $category->title }}" value="{{ $category->id }}" {{ (old('category_id') ?? 1) == $category->id ? 'selected' : null }}>{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label required">{{ __('Название') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">{{ __('Описание раздела') }}</label>
                    <textarea  cols="10" rows="5" class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label required">{{ __('Цена') }}</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" />
                    @error('price')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="from" class="form-label required">{{ __('Диапазон цены') }}</label>
                    <select  class="form-control form-select" id="from" name="from">
                        <option title="{{ __('Фиксированная') }}" value="0" {{ (old('from') ?? 0) == 0 ? 'selected' : null }}>{{ __('Фиксированная') }}</option>
                        <option title="{{ __('Начальная') }}" value="1" {{ (old('from') ?? 0) == 1 ? 'selected' : null }}>{{ __('Начальная') }}</option>
                    </select>
                    @error('from')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="unit_id" class="form-label required">{{ __('Единица измерения') }}</label>
                    <select  class="form-control form-select" id="unit_id" name="unit_id">
                        @foreach(EUnitType::cases() as $unit)
                            <option title="{{ __('unit_' . $unit->value) }}" value="{{ $unit->value }}" {{ (old('unit_id') ?? 1) == $unit->value ? 'selected' : null }}>{{ __('unit_' . $unit->value) }}</option>
                        @endforeach
                    </select>
                    @error('unit_id')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label required">{{ __('Видимость') }}</label>
                    <select  class="form-control form-select" id="active" name="active">
                        <option title="Скрыть" value="0" {{ (old('active') ?? 1) == 0 ? 'selected' : null }}>{{ __('Скрыть') }}</option>
                        <option title="Показать" value="1" {{ (old('active') ?? 1) == 1 ? 'selected' : null }}>{{ __('Показать') }}</option>
                    </select>
                    @error('active')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.service.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Назад') }}</a>
                    <button type="submit" class="btn btn-primary rounded">{{ __('Добавить') }}</button>
                </div>
            </form>
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

