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
            <div class="col-12">
                <ul class="products-list">
                    @foreach ($products as $product)
                        <li id="{{ $product->id }}">
                            <span>{{ $product->name }}</span>
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-info">
                                Dettagli
                            </a>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-warning">
                                Modifica
                            </a>
                            <button class="btn btn-danger delete-product">
                                Elimina
                            </button>
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

    <div class="delete-window d-none">
            <h4>
                Sei sicuro di voler eliminare questo prodotto?
            </h4>
            <form action="{{ route('products.destroy', ['product' => 'productId']) }}" method="POST" class="d-inline-block">
                @csrf
                @method("DELETE")
                <button class="btn btn-success" type="submit">
                    Sì
                </button>
            </form>
            <button class="btn btn-danger">
                No
            </button>
        </div>
@endsection
