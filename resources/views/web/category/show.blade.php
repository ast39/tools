@php

    @endphp

@extends('web.layouts.app')

@section('title', __($category->title))

@section('content')
    @include('web/components/index/promo_form')

    <div class="container">
        <div class="ms-ncont">
            <h1 class="pageTitle">{{ $category->title }}</h1>

            <br />

            <div class="postContent">
                @foreach(explode('[NEXT]', $category->body) as $p)
                    <p>{{ $p }}</p>
                @endforeach
            </div>

            <div class="postContent">
                <table>
                    <thead>
                        <tr style="height: 24px;">
                            <th style="width: 57.4002%; height: 24px;"><strong>{{ __('Услуги') }}</strong></th>
                            <th style="width: 121.782%; height: 24px; text-align: right;"><strong>{{ __('Цены') }}</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($category->services as $service)
                            <tr style="height: 24px;">
                                <td style="width: 57.4002%; height: 24px;">{{ $service->title }}</td>
                                <td style="width: 121.782%; height: 24px; text-align: right;">{{ $service->price }}</td>
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
