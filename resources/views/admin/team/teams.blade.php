@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Teams
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage Teams
@endsection

@section('sideTitle')
    List of Teams
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.teamTable')
    </div>
@endsection