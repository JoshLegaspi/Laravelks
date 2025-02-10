@extends('layouts.app')

@section('content')
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row w-100">
      <div class="col-md-6 col-lg-4 col-xl-3 mx-auto">
        <div class="card p-4 shadow">
          <h4 class="text-center">Login</h4>
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
