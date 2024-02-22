@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Сфера') . ' : '. $sphere->title)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ $sphere->title }}</div>

        <div class="card-body bg-light">
            <table class="table table-striped table-borderless">
                <tbody>
                    <tr>
                        <th class="text-start">{{ __('Название') }}</th>
                        <td class="text-end">{{ $sphere->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Для кого') }}</th>
                        <td class="text-end">{{ Helper::programType($program->type) }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Длительность') }}</th>
                        <td class="text-end">{{ $program->period }} {{ __('мин.') }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Стоимость') }}</th>
                        <td class="text-end">{{ number_format($program->price, 0, '.', ' ') }} {{ __('руб.') }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Заметки') }}</th>
                        <td class="text-end">{{ $program->note ?? ' - ' }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Статус') }}</th>
                        <td class="text-end">{{ Helper::programStatus($program->status) }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Дата добавления') }}</th>
                        <td class="text-end">{{ date('d.m.Y', $sphere->created_at) }}</a></td>
                    </tr>
                </tbody>
            </table>

            <form method="post" action="{{ route('admin.sphere.destroy', $sphere->id) }}">
                @csrf
                @method('DELETE')

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.sphere.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Список') }}</a>
                    <a href="{{ route('admin.sphere.edit', $sphere->id) }}" class="btn btn-warning me-1 rounded">{{ __('Изменить') }}</a>
                    <button type="submit" onclick="return confirm('{{ __('Вы уверены, что хотите удалить сферу?') }}')" class="btn btn-danger me-1 rounded">{{ __('Удалить') }}</button>
                    <a href="{{ route('admin.sphere.create') }}" class="btn btn-primary rounded">{{ __('Добавить сферу') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection

