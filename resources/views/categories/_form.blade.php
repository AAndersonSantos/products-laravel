<form action="{{ $route }}" method="POST">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control"
               value="{{ old('name', $category->name ?? '') }}" required>

        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">{{ $buttonText }}</button>
    
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
</form>
