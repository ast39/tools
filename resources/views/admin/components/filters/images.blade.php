@php
    use App\Enums\EImagePath;
@endphp

<form method="get" action="{{ route('admin.image.index') }}" data-filterline__sandwich>
    <div class="mmot-filterline__sandwich dselect-wrapper" data-filterline_sandwich_parent="filter_planing">
        <div class="mmot-filterline__sandwich__head form-select">{{ __('Фильтр') }}</div>
    </div>

    <div class="mmot-filterline-justify mmot-filterline__sandwich__list hide" data-filterline_sandwich_child="filter_planing">
        <div class="mmot-filterline">
            <div class="mmot-filterline__one">
                <select name="path" id="path" class="form-select form-control">
                    <option title="{{ __('Все') }}" {{ (request()->sphere ?? 0) == 0 ? 'selected' : '' }} value="0">{{ __('Все') }}</option>
                    @foreach(EImagePath::cases() as $path)
                        <option title="{{ $path->name }}" {{ (request()->path ?? null) == $path->value ? 'selected' : '' }} value="{{ $path->value }}">{{ $path->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mmot-filterline">
            <div class="mmot-filterline__one">
                <a href="{{ route('admin.image.index') }}" type="button" class="btn btn-secondary w block">{{ __('Сбросить') }}</a>
            </div>

            <div class="mmot-filterline__one">
                <button type="submit" class="btn btn-primary block">{{ __('Показать') }}</button>
            </div>
        </div>
    </div>
</form>

@push('js')

@endpush
