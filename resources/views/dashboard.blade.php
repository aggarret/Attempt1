@extends('layouts.default')

@section('title')
    Dashboard
@endsection

@section('content')
	@include('includes.userDashboard.pictureSection')
	@include('includes.userDashboard.infoSection')
@endsection