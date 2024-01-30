@extends('admin.layouts.adminFormPages')

@section('title')
Rent Car Admin | Add Category
@endsection

@section('button')
btn btn-default
@endsection

@section('topTitle')
    Manage Categories
@endsection

@section('sideTitle')
    Add Category
@endsection

@section('content')
    @include('admin.includes.categoryForm')
@endsection
