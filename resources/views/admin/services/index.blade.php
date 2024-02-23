@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Услуги'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Услуги') }}</div>

        <div class="card-body bg-light">
            <!-- Фильтр -->
            <div class="mmot-margin20">
                @include('admin/components/filters/service')
            </div>

            <table class="table table-bordered">
                <thead class="table-secondary">
                <tr>
                    <th class="text-center">{{ __('#') }}</th>
                    <th class="text-start">{{ __('Название') }}</th>
                    <th class="text-start">{{ __('Описание раздела') }}</th>
                    <th class="text-start">{{ __('Категория') }}</th>
                    <th class="text-start">{{ __('Сфера') }}</th>
                    <th class="text-end">{{ __('Видимость') }}</th>
                </tr>
                </thead>

                <tbody>
                @forelse($services as $service)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start"><a class="text-primary" href="{{ route('admin.service.show', $service->id) }}">{{ $service->title }}</a></td>
                        <td class="text-start">{!! $service->body !!}</td>
                        <td class="text-start">{{ $service->category->title }}</td>
                        <td class="text-start">{{ $service->category->sphere->title }}</td>
                        <td class="text-end">
                            <form method="post" action="{{ route('admin.service.destroy', $service->id) }}" class="admin-table__nomargin">
                                @csrf
                                @method('DELETE')

                                <div class="mmot-table__action">
                                    <a href="{{ route('admin.service.edit', $service->id) }}" class="mmot-table__action__one"><svg class="mmot-table_view mmot-table__ico"><use xlink:href="#site-edit"></use></svg></a>
                                    <button type="submit" class="mmot-table__action__one" onclick="return confirm('{{ __('Вы уверены, что хотите удалить услугу?') }}')"><svg class="mmot-table__delete mmot-table__ico"><use xlink:href="#site-delete"></use></svg></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <div class="text-center p-2 mb-2 bg-secondary bg-gradient text-white rounded">{{ __('Услуги отсутствуют') }}</div>
                        </td>
                    </tr>
                @endforelse

                <div>
                    {{ $services->withQueryString()->links() }}
                </div>
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="{{ route('admin.service.create') }}" class="btn btn-primary rounded">{{ __('Добавить услугу') }}</a>
            </div>
        </div>
    </div>
@endsection

