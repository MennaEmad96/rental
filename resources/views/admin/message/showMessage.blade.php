@extends('admin.layouts.adminTablePages')

@section('title')
  Rent Car Admin | Show Messages
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
  Manage Messages
@endsection

@section('content')
  @include('admin.includes.message')
@endsection