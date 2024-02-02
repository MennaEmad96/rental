@extends('admin.layouts.adminFormPages')

@section('title')
    Rent Car Admin | Edit Car
@endsection

@section('button')
  btn btn-default
@endsection

@section('topTitle')
    Manage Cars
@endsection

@section('sideTitle')
    Edit Car
@endsection

@section('content')
    @include('admin.includes.carForm')
@endsection