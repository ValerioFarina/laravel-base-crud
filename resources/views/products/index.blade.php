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
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn">Dettagli prodotto</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
