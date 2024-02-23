@php

@endphp

@extends('web.layouts.app')

@section('title', __('Сборка мебели'))

@section('content')
    @foreach($categories as $category)
        {{ $category->title }}
        <br />
        {{ $category->body }}
        <hr />
    @endforeach
@endsection
