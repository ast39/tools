@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Услуга') . ' : '. $service->title)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ $service->title }}</div>

        <div class="card-body bg-light">
            <table class="table table-striped table-borderless">
                <tbody>
                    <tr>
                        <th class="text-start">{{ __('Название') }}</th>
                        <td class="text-end">{{ $service->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Описание') }}</th>
                        <td class="text-end">{{ $service->body }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Категория') }}</th>
                        <td class="text-end">{{ $service->category->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Сфера') }}</th>
                        <td class="text-end">{{ $service->category->sphere->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Статус') }}</th>
                        <td class="text-end">{{ __('sphere_status_' . $service->active) }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Дата добавления') }}</th>
                        <td class="text-end">{{ date('d.m.Y', $service->created_at) }}</a></td>
                    </tr>
                </tbody>
            </table>

            <form method="post" action="{{ route('admin.service.destroy', $service->id) }}">
                @csrf
                @method('DELETE')

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.service.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Список') }}</a>
                    <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-warning me-1 rounded">{{ __('Изменить') }}</a>
                    <button type="submit" onclick="return confirm('{{ __('Вы уверены, что хотите удалить услугу?') }}')" class="btn btn-danger me-1 rounded">{{ __('Удалить') }}</button>
                    <a href="{{ route('admin.service.create') }}" class="btn btn-primary rounded">{{ __('Добавить услугу') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection

