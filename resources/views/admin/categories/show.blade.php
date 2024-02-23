@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Категория') . ' : '. $category->title)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ $category->title }}</div>

        <div class="card-body bg-light">
            <table class="table table-striped table-borderless">
                <tbody>
                    <tr>
                        <th class="text-start">{{ __('Название') }}</th>
                        <td class="text-end">{{ $category->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Описание') }}</th>
                        <td class="text-end">{{ $category->body }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Сфера') }}</th>
                        <td class="text-end">{{ $category->sphere->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Статус') }}</th>
                        <td class="text-end">{{ __('sphere_status_' . $category->active) }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Дата добавления') }}</th>
                        <td class="text-end">{{ date('d.m.Y', $category->created_at) }}</a></td>
                    </tr>
                </tbody>
            </table>

            <form method="post" action="{{ route('admin.category.destroy', $category->id) }}">
                @csrf
                @method('DELETE')

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Список') }}</a>
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning me-1 rounded">{{ __('Изменить') }}</a>
                    <button type="submit" onclick="return confirm('{{ __('Вы уверены, что хотите удалить категорию?') }}')" class="btn btn-danger me-1 rounded">{{ __('Удалить') }}</button>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary rounded">{{ __('Добавить категорию') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection

