@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
          <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
          <form>
        <div class="form-floating">
                <input type="text" nama="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" nama="username" class="form-control" id="username" placeholder="Username">
                <label for="Username">Username</label>
            </div>
          <div class="form-floating">
            <input type="email" nama="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" nama="password" class="form-control" id="password" placeholder="Password">
            <label for="Password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Sudah Register?<a href="/login">Login</a></small>
        </main>
        </div>
    </div>
</div>
@endsection