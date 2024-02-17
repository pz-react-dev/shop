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
          <td>
            <button class="btn btn-danger btn-sm btn-delete" data-id="{{$user->id}}">X</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pagination justify-content-center">
      {{ $users->links() }}
    </div>
  </div>
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".btn-delete").on("click", function() {
      $.ajax({
          method: "DELETE",
          url: "http://127.0.0.1:8000/users/" + $(this).data("id"),
          //data: { id: $(this).data("id") } alternatywny sposob na przekazanie id do metody destroy w controllerze UserController
        })
        //funkcja done wykona sie gdy otrzymamy informacje z serwera po tym jak z sukcesem zostanie przetworzone zadanie (request)  
        .done(function(response) {
          window.location.reload(); //to jest sposob na odswiezenie strony po usunieciu rekordu * this is a way to refresh the page after remove user's record
        })
        .fail(function(response) {
          alert("ERROR");
        });
    });
  });
</script>
@endsection