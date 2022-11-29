@extends('layout')

@section('main')
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <h1>Editar Producto</h1>
            </div>
        </div>
    </div>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                        value="{{ old('name', $product->name) }}" required />
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="reference" class="form-label">Referencia</label>
                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Referencia"
                        value="{{ old('reference', $product->reference) }}" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Precio"
                        value="{{ old('price', $product->price) }}" required />
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Peso"
                        value="{{ old('weight', $product->weight) }}" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="category" class="form-label">Categoría</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="Comidas" {{ $product->category == 'Comidas' ? 'selected' : '' }}>Comidas</option>
                        <option value="Bebidas" {{ $product->category == 'Bebidas' ? 'selected' : '' }}>Bebidas</option>
                        <option value="Helados" {{ $product->category == 'Helados' ? 'selected' : '' }}>Helados</option>
                        <option value="Postres" {{ $product->category == 'Postres' ? 'selected' : '' }}>Postres</option>
                        <option value="Caramelos" {{ $product->category == 'Caramelos' ? 'selected' : '' }}>Caramelos
                        </option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock"
                        value="{{ old('stock', $product->stock) }}" required />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar producto</button>
        <a href="/">
            <button type="button" class="btn btn-secondary">Atrás</button>
        </a>
    </form>
@endsection
