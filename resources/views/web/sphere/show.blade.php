@php

@endphp

@extends('web.layouts.app')

@section('title', __($sphere->title))

@section('content')
    @include('web/components/index/promo_form')
    @include('web/components/categories/navbar')

    <div class="container">
        <div class="ms-ncont">
            <h1 class="pageTitle">{{ $sphere->title }}</h1>

            <br />

            <div class="postContent">
                <p>{!! $sphere->body !!}</p>
            </div>

            <div class="postContent">
                <table>
                    <thead>
                        <tr style="height: 24px;">
                            <th style="width: 57.4002%; height: 24px;"><strong>{{ __('Категории') }}</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sphere->categories as $cat)
                            <tr style="height: 24px;">
                                <td style="width: 57.4002%; height: 24px;">
                                    <a href="{{ route('web.category.show', [$sphere->slug, $cat->slug]) }}">{{ $cat->title }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr style="height: 24px;">
                                <td colspan="2" style="height: 24px; text-align: center">{{ __('Нет нихуя') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('web/components/index/photos')
    @include('web/components/index/review')
    @include('web/components/index/videos')
    @include('web/components/index/contacts')
@endsection
