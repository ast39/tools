@php

@endphp

<form method="get" action="{{ route('admin.category.index') }}" data-filterline__sandwich>
    <div class="mmot-filterline__sandwich dselect-wrapper" data-filterline_sandwich_parent="filter_planing">
        <div class="mmot-filterline__sandwich__head form-select">{{ __('Фильтр') }}</div>
    </div>

    <div class="mmot-filterline-justify mmot-filterline__sandwich__list hide" data-filterline_sandwich_child="filter_planing">
        <div class="mmot-filterline">
            <div class="mmot-filterline__one">
                <select name="sphere" id="sphere" class="form-select form-control">
                    <option title="{{ __('Все') }}" {{ (request()->sphere ?? 0) == 0 ? 'selected' : '' }} value="0">{{ __('Все') }}</option>
                    @foreach($spheres as $sphere)
                        <option title="{{ $sphere->title }}" {{ (request()->sphere ?? null) == $sphere->id ? 'selected' : '' }} value="{{ $sphere->id }}">{{ $sphere->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mmot-filterline__one">
                <input type="text" name="title" id="title" class="form-control" value="{{ request('title') }}" placeholder="{{ __('Название') }}" data-input_clear>
            </div>

            <div class="mmot-filterline__one">
                <select name="active" id="active" class="form-select form-control">
                    <option title="{{ __('Скрытые') }}" {{ (request()->active ?? 1) == 0 ? 'selected' : '' }} value="0">{{ __('Скрытые') }}</option>
                    <option title="{{ __('Видимые') }}" {{ (request()->active ?? 1) == 1 ? 'selected' : '' }} value="1">{{ __('Видимые') }}</option>
                </select>
            </div>
        </div>

        <div class="mmot-filterline">
            <div class="mmot-filterline__one">
                <a href="{{ route('admin.category.index') }}" type="button" class="btn btn-secondary w block">{{ __('Сбросить') }}</a>
            </div>

            <div class="mmot-filterline__one">
                <button type="submit" class="btn btn-primary block">{{ __('Показать') }}</button>
            </div>
        </div>
    </div>
</form>
