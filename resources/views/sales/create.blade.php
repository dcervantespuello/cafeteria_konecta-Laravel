@extends('layout')

@section('main')
    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <h1>Nueva venta</h1>
            </div>
        </div>
    </div>
    <form action="{{ route('sales.store', $product) }}" method="POST" id="form">
        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="product_id" class="form-label">Producto</label>
                    <select class="form-select" id="product_id" name="product_id" onchange="refreshPage()" required>
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="sold" class="form-label">Cantidad</label>
                    <input type="number" min="0" class="form-control" id="sold" name="sold"
                        placeholder="Cantidad" onkeyup="calculateTotal();" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Precio"
                        value="{{ $product->price }}" required readonly />
                </div>
            </div>
            <div class=" col">
                <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Peso"
                        value="{{ $product->weight }}" required readonly />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="category" class="form-label">Categoría</label>
                    <select class="form-select" id="category" name="category" required readonly>
                        <option value="{{ $product->category }}">{{ $product->category }}</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock"
                        value="{{ $product->stock }}" required readonly />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="reference" class="form-label">Referencia</label>
                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Referencia"
                        value="{{ $product->reference }}" required readonly />
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="total" class="form-label">Total a Pagar</label>
                    <input type="text" class="form-control" id="total" name="total" placeholder="Total a pagar"
                        required readonly />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Realizar venta</button>
        <a href="/">
            <button type="button" class="btn btn-secondary">Atrás</button>
        </a>
    </form>

    <script>
        function refreshPage() {
            var selected = document.getElementById('product_id').value;
            window.location.replace('?menu=nueva-venta&id=' + selected);
        }

        function calculateTotal() {
            var sold = document.getElementById('sold').value;
            var price = document.getElementById('price').value;
            console.log(sold, price);
            document.getElementById('total').value = sold * price;
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("form").addEventListener('submit', validateForm);
        });

        function validateForm(e) {
            e.preventDefault();
            var sold = document.getElementById('sold').value;
            if (sold <= 0) {
                alert('La cantidad debe ser mayor o igual a cero');
                return;
            }
            var stock = document.getElementById('stock').value;
            if (stock <= 0) {
                alert('No hay unidades disponibles en Stock');
                return;
            }
            this.submit();
        }
    </script>
@endsection
