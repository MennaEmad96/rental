@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Cars
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage Cars
@endsection

@section('sideTitle')
    List of Cars
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.carTable')
    </div>
@endsection