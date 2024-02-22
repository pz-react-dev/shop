@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">Podgląd produktu</div>
            <div class="col-6 d-flex justify-content-end">
              <a href="{{route('products.index')}}">
                <button class="btn btn-danger btn-sm">X</button>
              </a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">Nazwa</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" disabled>

            </div>
          </div>

          <div class="row mb-3">
            <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

            <div class="col-md-6">
              <textarea id="description" class="form-control" name="description" disabled>{{ $product->description }}</textarea>

            </div>
          </div>


          <div class="row mb-3">
            <label for="amount" class="col-md-4 col-form-label text-md-end">Ilość</label>

            <div class="col-md-6">
              <input id="amount" type="number" step="1" min="0" class="form-control" name="amount" value="{{ $product->amount }}" disabled>

            </div>
          </div>

          <div class="row mb-3">
            <label for="unit" class="col-md-4 col-form-label text-md-end">J.m.</label>

            <div class="col-md-6">
              <input id="unit" type="text" class="form-control" name="unit" value="{{ $product->unit }}" disabled>

            </div>
          </div>

          <div class="row mb-3">
            <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

            <div class="col-md-6">
              <input id="price" type="number" step="0.01" min="0" class="form-control" ame="price" value="{{ $product->price }}" disabled>

            </div>
          </div>

          <div class="row mb-3">
            <label for="category_id" class="col-md-4 col-form-label text-md-end">Kategoria</label>

            <div class="col-md-6">
              <select id="category_id" type="text" class="form-select" name="category_id" value="{{ old('category_id') }}" disabled>
                @if($product->hasCategory())
                <option>{{ $product->category->name }}</option>
                @else
                <option>Brak</option>
                @endif
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">Zdjęcie</label>

            <div class="col-md-6">
              <input id="image" class="form-control" type="file" name="image" disabled>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection