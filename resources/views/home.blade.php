@extends('master')

@section('title', 'Home')


@include("nav")

@section('content')
    @include("./partials/landing")
    @include("./partials/about")
    @include("./partials/projects")
    @include("./partials/contact")
@endsection

{{-- @include("footer") --}}