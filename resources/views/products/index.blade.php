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
                        <li>
                            {{ $product->name }}
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-info">
                                Dettagli prodotto
                            </a>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-warning">
                                Modifica prodotto
                            </a>
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
