@extends('admin.layouts.adminAddPages')

@section('title')
Rent Car Admin | Add Category
@endsection

@section('button')
btn btn-default
@endsection

@section('topTitle')
	Manage Testimonials
@endsection

@section('sideTitle')
    Add Testimonial
@endsection

@section('content')
	@include('admin.includes.testimonialForm')
@endsection
