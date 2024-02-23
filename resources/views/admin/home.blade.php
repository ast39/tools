@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Админ панель'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Админ панель') }}</div>

        <div class="card-body bg-light text-secondary">
            Добро пожаловать!
        </div>

        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection
