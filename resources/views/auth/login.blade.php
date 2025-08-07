@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>

    <form method="POST" action="/login">
        @csrf

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="password" required><br><br>

        @if ($errors->any())
            <div style="color:red;">
                @foreach ($errors->all() as $error) <p>{{ $error }}</p> @endforeach
            </div>
        @endif

        <button type="submit">Entrar</button>
    </form>
@endsection
