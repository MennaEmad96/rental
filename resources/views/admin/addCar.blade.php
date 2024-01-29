@extends('admin.layouts.adminAddPages')

@section('title')
    Rent Car Admin | Add Car
@endsection

@section('button')
btn btn-default
@endsection

@section('topTitle')
    Manage Cars
@endsection

@section('sideTitle')
    Add Car
@endsection

@section('content')
    @include('admin.includes.carForm')
@endsection