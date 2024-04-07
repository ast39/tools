@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Обновление категории') . ' : ' . $category->title)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Обновление категории' . ' : ' . $category->title) }}</div>

        <div class="card-body bg-light">
            <form method="post" action="{{ route('admin.category.update', $category->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="sphere_id" class="form-label required">{{ __('Сфера') }}</label>
                    <select  class="form-control form-select" id="sphere_id" name="sphere_id">
                        @foreach($spheres as $sphere)
                            <option title="{{ $sphere->title }}" {{ ($category->sphere_id ?? null) == $sphere->id ? 'selected' : '' }} value="{{ $sphere->id }}">{{ $sphere->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label required">{{ __('Название') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}" />
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">{{ __('Описание раздела') }}</label>
                    <textarea  cols="10" rows="5" class="form-control" id="body" name="body">{{ $category->body }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label required">{{ __('Видимость') }}</label>
                    <select  class="form-control form-select" id="active" name="active">
                        <option title="Скрыть" value="0" {{ ($category->active ?? 0) == 0 ? 'selected' : null }}>{{ __('Скрыть') }}</option>
                        <option title="Показать" value="1" {{ ($category->active ?? 0) == 1 ? 'selected' : null }}>{{ __('Показать') }}</option>
                    </select>
                    @error('active')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <hr />

                <div class="mt-3 alert alert-primary" role="alert">СЕО</div>

                <div class="mb-3">
                    <label for="seo_title" class="form-label required">{{ __('Заголовок для СЕО') }}</label>
                    <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ $sphere->title }}" />
                </div>

                <div class="mb-3">
                    <label for="seo_desc" class="form-label">{{ __('Описание для СЕО') }}</label>
                    <textarea  cols="10" rows="5" class="form-control" id="seo_desc" name="seo_desc">{{ $sphere->body }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="seo_keys" class="form-label">{{ __('Ключевые слова для СЕО') }}</label>
                    <textarea  cols="10" rows="5" class="form-control" id="seo_keys" name="seo_keys">{{ $sphere->body }}</textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Назад') }}</a>
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
