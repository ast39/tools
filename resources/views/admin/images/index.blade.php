@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Картинки'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Картинки') }}</div>

        <div class="card-body bg-light">
            <!-- Фильтр -->
            <div class="mmot-margin20">
                @include('admin/components/filters/images')
            </div>

            <table class="table table-bordered">
                <thead class="table-secondary">
                <tr>
                    <th class="text-center">{{ __('#') }}</th>
                    <th class="text-center">{{ __('Превью') }}</th>
                    <th class="text-center">{{ __('Ссылка') }}</th>
                    <th class="text-start">{{ __('Каталог') }}</th>
                    <th class="text-start">{{ __('Название') }}</th>
                    <th class="text-center">{{ __('Тип') }}</th>
                    <th class="text-end">{{ __('Delete') }}</th>
                </tr>
                </thead>

                <tbody>
                @forelse($images as $image)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <th class="text-center">
                            <img style="max-height: 64px" class="img-thumbnail" src="{{ asset('/storage/' . $image->full_path) }}"  alt="Изображение не прогрузилось" />
                        </th>
                        <td class="text-center">{{ $image->full_path }}</td>
                        <td class="text-start">{{ $image->path }}</td>
                        <td class="text-start"><a class="text-primary" href="{{ route('admin.image.show', $image->id) }}">{{ $image->filename }}</a></td>
                        <td class="text-center">{{ $image->ext }}</td>
                        <td class="text-end">
                            <form method="post" action="{{ route('admin.image.destroy', $image->id) }}" class="admin-table__nomargin">
                                @csrf
                                @method('DELETE')

                                <div class="mmot-table__action">
                                    <button type="submit" class="mmot-table__action__one" onclick="return confirm('{{ __('Вы уверены, что хотите удалить картинку?') }}')"><svg class="mmot-table__delete mmot-table__ico"><use xlink:href="#site-delete"></use></svg></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">
                            <div class="text-center p-2 mb-2 bg-secondary bg-gradient text-white rounded">{{ __('Картинки отсутствуют') }}</div>
                        </td>
                    </tr>
                @endforelse

                <div>
                    {{ $images->withQueryString()->links() }}
                </div>
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="{{ route('admin.image.create') }}" class="btn btn-primary rounded">{{ __('Добавить картинку') }}</a>
            </div>
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection
