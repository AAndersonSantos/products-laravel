@extends('layouts.app')

@section('title', 'Nova Categoria')

@section('content')
    <div class="container">
        <h1>Nova Categoria</h1>

        @include('categories._form', [
            'route' => route('categories.store'),
            'method' => 'POST',
            'buttonText' => 'Salvar'
        ])
    </div>
@endsection
