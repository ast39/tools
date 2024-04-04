@extends('web.layouts.app')

@section('content')
    @include('web/components/index/promo_form')
    @include('web/components/index/services')
    @include('web/components/index/review')
    @include('web/components/index/features')
    @include('web/components/index/employees')
    @include('web/components/index/videos')
    @include('web/components/index/contacts')
@endsection
