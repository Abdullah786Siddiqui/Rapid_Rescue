@extends('layouts.Driver.driver')
@section('title', 'Dasboard')
@section('content')
    <h1>This is  Driver Panel</h1>
   @auth
        <p>Welcome, {{ Auth::user()->name }} 👋</p>
    @endauth

@endsection
