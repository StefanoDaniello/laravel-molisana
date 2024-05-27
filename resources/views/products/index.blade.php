@extends('layouts.app')
@section('title', 'Prodotti')

@section('content')
  <section class="container mt-4" id="products">
    <form action="{{route('products.index')}}" method="GET" id="search-form">
      <select name="search" id="search" class="form-control" required>
        <option value="all">Seleziona</option>
        <option value="">Tutti</option>
        <option value="corta">Corte</option>
        <option value="cortissima">Cortissime</option>
        <option value="lunga">Lunghe</option>
        
      </select>
      <!-- <button type="submit" class="btn btn-primary mt-3">Cerca</button> -->
    </form>
    <h1 class="text-center">Prodotti</h1>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card">
                <img src="{{$product->image}}" class="card-img-top" alt="{{$product->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$product->title}}</h5>
                  <p class="card-text">{{Str::limit($product->description,80)}}</p>
                  <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">Scopri!</a>
                  <a href="{{route('products.edit', $product->id )}}" class="btn btn-primary ms-3">Modifica</a>
                </div>
              </div>
        </div>
        @endforeach

    </div>
  </section>

@endsection