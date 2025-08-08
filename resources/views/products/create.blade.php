@extends('layouts.app')

@section('title', 'Novo Produto')

@section('content')
    <div class="container">
        <h1>Novo Produto</h1>

        @include('products._form', [
            'route' => route('products.store'),
            'method' => 'POST',
            'product' => null,
            'buttonText' => 'Salvar'
        ])
    </div>
@endsection
