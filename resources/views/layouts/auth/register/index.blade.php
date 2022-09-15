@extends('components.app')

@section('content')
  <div class="jumbotron text-center">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <main class="form-login w-100 m-auto">
          <h1 class="h3 mb-3 fw-bold">REGISTER</h1>
          <form action="/register" method="POST">
            @csrf
            <div class="form-floating">
              <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nama Depan" required>
              <label for="firstname">Nama Depan</label>
            </div>
            <div class="form-floating">
              <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nama Belakang" required>
              <label for="lastname">Nama Belakang</label>
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
              <label for="email">Email</label>
            </div>
            <input type="text" name="role" class="form-control" id="role" placeholder="Role" value="user" hidden>
            <div class="form-floating">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
          </form>
        </main>
      </div>
    </div>
  </div>
@endsection