@extends('admin.layouts.adminFormPages')

@section('title')
	Rent Car Admin | Edit Team
@endsection

@section('button')
	btn btn-default
@endsection

@section('topTitle')
	Manage Teams
@endsection

@section('sideTitle')
    Edit Team
@endsection

@section('content')
	@include('admin.includes.teamForm')
@endsection
