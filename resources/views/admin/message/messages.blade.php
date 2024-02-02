@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Messages
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage Messages
@endsection

@section('sideTitle')
    List of Messages
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.messageTable')
    </div>
@endsection