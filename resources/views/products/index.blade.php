@extends('layouts.app')

@section('page-title', 'Products')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <ul class="product-info">
                            <li>
                                Nome : {{ $product->name }}
                            </li>
                            <li>
                                Prezzo : {{ $product->price }}
                            </li>
                            <li>
                                Marca : {{ $product->brand }}
                            </li>
                            <li>
                                Descrizione : {{ $product->description }}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
