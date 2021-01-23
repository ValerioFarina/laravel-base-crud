@extends('layouts.app')

@section('page-title', 'Products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Prodotti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 products-container">
                <ul class="products-list">
                    @foreach ($products as $product)
                        <li>
                            <span class="product-name">
                                {{ $product->name }}
                            </span>
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-info">
                                Dettagli
                            </a>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-warning">
                                Modifica
                            </a>
                            <button class="btn btn-danger delete-product">
                                    Elimina
                            </button>
                            <div class="layover d-none">
                                <div class="delete-window">
                                    <h4>
                                        Sei sicuro di voler eliminare questo prodotto?
                                    </h4>
                                    <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-success yes" type="submit">
                                                Sì
                                        </button>
                                    </form>
                                    <button class="btn btn-danger no">
                                        No
                                    </button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    Aggiungi nuovo prodotto
                </a>
            </div>
        </div>
    </div>
@endsection
