@extends('layouts.User.user')
@section('title', 'Home')

@section('content')
    <h1 >Rapid Rescue</h1>

    @auth
        <p>Welcome, {{ Auth::user()->name }} 👋</p>
    @endauth

@endsection
