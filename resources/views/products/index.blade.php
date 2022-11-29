@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Productos</h1>
            </div>
            <div class="col-2">
                <a href="{{ route('products.create') }}">
                    <button type="button" class="btn btn-lg text-white"
                        style="margin-left: 13px; background-color: #049790;">Nuevo producto</button>
                </a>
            </div>
        </div>
    </div>

    <table class="table table-hover mt-4 mb-5 text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Vender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->reference }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->stock }}</td>
                    <td><a href="{{ route('products.edit', $product) }}"><button class="btn btn-primary">Editar</button></a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    <td><a href="{{ route('sales.create', $product) }}"><button class="btn btn-success">Vender</button></a>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
