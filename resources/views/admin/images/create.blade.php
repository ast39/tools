@php
    use App\Enums\EImagePath;
@endphp

@extends('admin.layouts.app')

@section('title', __('Добавить картинку'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Добавить картинку') }}</div>

        <div class="card-body bg-light">
            <form method="post" action="{{ route('admin.image.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="path" class="form-label required">{{ __('Каталог') }}</label>
                    <select  class="form-control form-select" id="path" name="path">
                        @foreach(EImagePath::cases() as $path)
                            <option title="{{ $path->name }}" value="{{ $path->value }}" {{ (request()->path ?? 'other') == $path->value ? 'selected' : null }}>{{ $path->name }}</option>
                        @endforeach
                    </select>
                    @error('sphere_id')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Изображения</label>
                    <input class="form-control" type="file" name="file" id="file" multiple>
                    @error('file')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                @if($errors->any())
                    <div class="text-center p-2 mb-3 mt-3 bg-danger bg-gradient text-white rounded">{{ $errors->first() }}</div>
                @endif

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.image.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Назад') }}</a>
                    <button type="submit" class="btn btn-primary rounded">{{ __('Добавить') }}</button>
                </div>
            </form>
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

@push('js')

@endpush

