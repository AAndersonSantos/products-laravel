@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dshboard Page</h2>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

@endsection
