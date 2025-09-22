@extends('layouts.Admin.admin')
@section('title', 'Dasboard')
@section('content')
    <h1>This is  Admin Panel</h1>
   @auth
        <p>Welcome, {{ Auth::user()->name }} 👋</p>
    @endauth

@endsection
