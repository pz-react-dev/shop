@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Imię</th>
          <th scope="col">Nazwisko</th>
          <th scope="col">Email</th>
          <th scope="col">Numer telefonu</th>
          <th scope="col">Akcje</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->surname}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone_number}}</td>
          <td></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pagination justify-content-center">
      {{ $users->links() }}
    </div>
  </div>
</div>

@endsection