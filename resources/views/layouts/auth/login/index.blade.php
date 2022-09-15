@extends('components.app')

@section('content')
<div class="jumbotron text-center">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <main class="form-login w-100 m-auto">
        <h1 class="h3 mb-3 fw-bold">LOGIN</h1>
          <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="mt-3">Belum punya akun?, Register <a href="register">Disini</a></small>
        </main>
    </div>
  </div>
</div>
@endsection