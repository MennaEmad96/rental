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
    @include('admin.includes.carTable')
@endsection

