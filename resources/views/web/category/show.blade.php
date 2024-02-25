@php
    use App\Http\Libs\Helper;
@endphp

@extends('web.layouts.app')

@section('title', __('Электрика') . ' - ' . $category->title)

@section('content')
    <div class="card bg-secondary">
        <div class="card-header text-white">Электрика - {{ $category->title }}</div>
        <div class="card-body bg-light">
            {{ $category->body }}
        </div>
        <ul class="list-group list-group-flush">
            @foreach($category->services as $service)
                <li class="list-group-item">{{ $service->title }} : {{ Helper::getServicePrice($service) }}</li>
            @endforeach
        </ul>
        <div class="card-footer bg-light border-0 text-center">
            AKA-Group&copy; 2024
        </div>
    </div>
@endsection
