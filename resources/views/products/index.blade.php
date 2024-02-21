@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Lista produktów</h2>
    </div>
    <div class="col d-flex justify-content-end">
      <a href="{{ route('products.create')}}">
        <button class="btn btn-primary">Dodaj produkt</button>
      </a>
    </div>
  </div>
  <div class="row justify-content-center">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nazwa</th>
          <th scope="col-4">Opis</th>
          <th scope="col">Ilość</th>
          <th scope="col">J.m.</th>
          <th scope="col">Cena</th>
          <th scope="col">Akcje</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>
          <td class="col-2">{{$product->name}}</td>
          <td class="col-6">{{$product->description}}</td>
          <td>{{$product->amount}}</td>
          <td>{{$product->unit}}</td>
          <td>{{$product->price}}</td>
          <td>
            <a href="{{route('products.edit',$product->id)}}">
              <button class="btn btn-success btn-sm ">E</button>
            </a>
            <a href="{{route('products.show',$product->id)}}">
              <button class="btn btn-primary btn-sm ">P</button>
            </a>
            <button class="btn btn-danger btn-sm btn-delete" data-id="{{$product->id}}">X</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pagination justify-content-center">
      {{ $products->links() }}
    </div>
  </div>
</div>
@endsection

@push('js-files')
<script>
  let deleteUrl = "{{ url('products')}}/";
</script>
@endpush