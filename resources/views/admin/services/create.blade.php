@php

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
                            <option title="{{ $sphere->title }}" value="{{ $sphere->id }}" {{ (request()->sphere_id ?? 1) == $sphere->id ? 'selected' : null }}>{{ $sphere->title }}</option>
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
                            <option title="{{ $category->title }}" value="{{ $category->id }}" {{ (request()->category_id ?? 1) == $category->id ? 'selected' : null }}>{{ $category->title }}</option>
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
                    <label for="active" class="form-label required">{{ __('Видимость') }}</label>
                    <select  class="form-control form-select" id="active" name="active">
                        <option title="Скрыть" value="0" {{ (request()->active ?? 1) == 0 ? 'selected' : null }}>{{ __('Скрыть') }}</option>
                        <option title="Показать" value="1" {{ (request()->active ?? 1) == 1 ? 'selected' : null }}>{{ __('Показать') }}</option>
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
    </div>
@endsection

