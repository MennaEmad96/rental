@extends('layouts.pages')

@section('title')
    CarRental &mdash; Free Website Template by Colorlib
@endsection

@section('pageTitle')
    Testimonials
@endsection

@section('sideTitle')
    @include('includes.sideTitle')
@endsection

@section('content')
<!-- testimonials start -->
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
            </div>
        </div>
        <div class="row">
            @include('includes.testimonials')
        </div>
    </div>
</div>
<!-- testimonials end -->

<!-- waiting for start -->
<div class="site-section bg-primary py-5">
    @include('includes.waitingFor')
</div>
<!-- waiting for end -->
@endsection