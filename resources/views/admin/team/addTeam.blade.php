@extends('admin.layouts.adminFormPages')

@section('title')
Rent Car Admin | Add Team
@endsection

@section('button')
btn btn-default
@endsection

@section('topTitle')
	Manage Teams
@endsection

@section('sideTitle')
    Add Team
@endsection

@section('content')
	@include('admin.includes.teamForm')
@endsection
