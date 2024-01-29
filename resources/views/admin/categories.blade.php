@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Categories
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage Categories
@endsection

@section('sideTitle')
    List of Categories
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.categoryTable')
    </div>
@endsection
