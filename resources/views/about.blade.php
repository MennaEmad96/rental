@extends('layouts.pages')

@section('title')
    CarRental &mdash; Free Website Template by Colorlib
@endsection

@section('pageTitle')
    About
@endsection

@section('sideTitle')
    @include('includes.sideTitle')
@endsection



@section('content')
<!-- company start -->
<div class="site-section">
    @include('includes.company')
</div>
<!-- company end -->

<!-- team start -->
<div class="site-section bg-light">
    @include('includes.team')
</div>
<!-- team end -->

<!-- history start -->
<div class="site-section">
    @include('includes.history')
</div>
<!-- history end -->

<!-- waiting for start -->
<div class="site-section bg-primary py-5">
    @include('includes.waitingFor')
</div>
<!-- waiting for end -->
@endsection