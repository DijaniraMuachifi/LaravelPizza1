@extends('layouts.app')

@section('title', 'Access Denied')

@section('content')
    <div class="container">
        <h1 class="display-4">Access Denied</h1>
        <p class="lead">You do not have permission to access this page.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go Back to Home Page</a>
    </div>
    @endsection

