@extends('layouts.pages')

@section('title')
    CarRental &mdash; Free Website Template by Colorlib
@endsection

@section('pageTitle')
    Contact
@endsection

@section('sideTitle')
    @include('includes.sideTitle')
@endsection

@section('content')
<!-- contact start -->
<div class="site-section bg-light" id="contact-section">
    @include('includes.contactUs')
</div>
<!-- contact end -->

@include('sweetalert::alert')

@endsection
