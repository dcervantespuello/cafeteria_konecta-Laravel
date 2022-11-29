@extends('layout')

@section('main')
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <h1>Nuevo Producto</h1>
            </div>
        </div>
    </div>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                        required />
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="reference" class="form-label">Referencia</label>
                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Referencia"
                        required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Precio"
                        required />
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Peso" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="category" class="form-label">Categoría</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="Comidas">Comidas</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Helados">Helados</option>
                        <option value="Postres">Postres</option>
                        <option value="Caramelos">Caramelos</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" required />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Guardar producto</button>
        <a href="/">
            <button type="button" class="btn btn-secondary">Atrás</button>
        </a>
    </form>
@endsection
