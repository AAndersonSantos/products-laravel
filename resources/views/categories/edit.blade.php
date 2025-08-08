@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
    <div class="container">
        <h1>Editar Categoria</h1>

        @include('categories._form', [
            'route' => route('categories.update', $category),
            'method' => 'PUT',
            'category' => $category,
            'buttonText' => 'Atualizar'
        ])
    </div>
@endsection
