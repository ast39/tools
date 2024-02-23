@php
    use App\Http\Libs\Helper;
@endphp

@extends('web.layouts.app')

@section('title', __('Электрика') . ' - ' . $category->title)

@section('content')
    <h3>{{ $category->title }}</h3>

    @foreach($category->services as $service)
        {{ $service->title }} : {{ Helper::getServicePrice($service) }}
        <br />
        {{ $service->body }}
        <hr />
    @endforeach
@endsection
