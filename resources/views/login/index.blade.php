@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin">
          <h1 class="h3 mb-3 fw-normal">Form login</h1>
          <form>
          <div class="form-floating">
            <input type="email" nama="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" nama="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Belum Register?<a href="/register"> Register Sekarang!!!</a></small>
        </main>
        </div>
    </div>
</div>
@endsection