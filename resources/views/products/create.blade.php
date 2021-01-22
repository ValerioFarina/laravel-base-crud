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
                        <label>Prezzo (€): </label>
                        <input type="number" name="price" class="form-control" step="0.01">
                    </div>
                    <div class="form-group">
                        <label>Marca: </label>
                        <input type="text" name="brand" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Valutazione clienti: </label>
                        <select class="form-control" name="customer_rating">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Descrizione: </label>
                        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Aggiungi prodotto
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
