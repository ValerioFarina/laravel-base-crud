@extends('layouts.app')

@section('page-title', 'Edit product')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Modifica prodotto
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label>Nome: </label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label>Prezzo (€): </label>
                        <input type="number" name="price" class="form-control" step="0.01" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label>Marca: </label>
                        <input type="text" name="brand" class="form-control" value="{{ $product->brand }}">
                    </div>
                    <div class="form-group">
                        <label>Valutazione clienti: </label>
                        <select class="form-control" name="customer_rating">
                            <option value="0" {{ $product->customer_rating == 0 ? "selected" : "" }}>
                                0
                            </option>
                            <option value="1" {{ $product->customer_rating == 1 ? "selected" : "" }}>
                                1
                            </option>
                            <option value="2" {{ $product->customer_rating == 2 ? "selected" : "" }}>
                                2
                            </option>
                            <option value="3" {{ $product->customer_rating == 3 ? "selected" : "" }}>
                                3
                            </option>
                            <option value="4" {{ $product->customer_rating == 4 ? "selected" : "" }}>
                                4
                            </option>
                            <option value="5" {{ $product->customer_rating == 5 ? "selected" : "" }}>
                                5
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Descrizione: </label>
                        <textarea name="description" rows="8" cols="80" class="form-control">{{ $product->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Salva modifiche
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
