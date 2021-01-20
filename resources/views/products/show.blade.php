@extends('layouts.app')

@section('page-title', 'Product details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>
                    {{ $product->name }}
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="products-details">
                    <li>
                        Marca : {{ $product->brand }}
                    </li>
                    <li>
                        Prezzo : {{ $product->price }} euro
                    </li>
                    <li>
                        Descrizione : {{ $product->description }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
