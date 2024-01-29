@extends('admin.layouts.adminFormPages')

@section('title')
	Rent Car Admin | Edit Testimonial
@endsection

@section('button')
	btn btn-default
@endsection

@section('topTitle')
	Manage Testimonials
@endsection

@section('sideTitle')
    Edit Testimonial
@endsection

@section('content')
	@include('admin.includes.testimonialForm')
@endsection
