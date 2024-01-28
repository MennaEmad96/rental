@extends('layouts.pages')

@section('title')
    CarRental &mdash; Free Website Template by Colorlib
@endsection

@section('pageTitle')
    Blog
@endsection

@section('sideTitle')
    @include('includes.sideTitle')
@endsection

@section('content')
<!-- blog start -->
<div class="site-section bg-light">
    @include('includes.blog')
</div>
<!-- blog end -->

<!-- waiting for start -->
<div class="site-section bg-primary py-5">
    @include('includes.waitingFor')
</div>
<!-- waiting for end -->
@endsection