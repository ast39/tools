@php

@endphp

@extends('admin.layouts.app')

@section('title', __('Картинка') . ' : '. $image->filename)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ $image->filename }}</div>

        <div class="card-body bg-light">
            <img class="img-thumbnail" src="{{ asset('/storage/' . $image->full_path) }}"  alt="Изображение не прогрузилось" />
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

