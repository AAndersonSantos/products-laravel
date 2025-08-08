@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <div class="container">
        <h1>Editar Produto</h1>

        @include('products._form', [
            'route' => route('products.update', $product),
            'method' => 'PUT',
            'product' => $product,
            'buttonText' => 'Atualizar'
        ])
    </div>
@endsection
