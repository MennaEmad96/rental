@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Testimonials
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage Testimonials
@endsection

@section('sideTitle')
    List of Testimonials
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.testimonialTable')
    </div>
@endsection