@extends('layouts.app')

@section('page-title', 'Add new product')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Nuovo prodotto
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome: </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Prezzo: </label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Marca: </label>
                        <input type="text" name="brand" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Valutazione clienti: </label>
                        <input type="number" name="customer_rating" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descrizione: </label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">
                        Aggiungi prodotto
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
