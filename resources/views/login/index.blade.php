@extends('login.layout')

@section('container')


<div class="col-12 p-0">

  <div class="login-card">
    <div>



      <div class="login-main">

        @if (session()->has('LoginError'))
            <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                <p>{{ session('LoginError') }}</p>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <form class="theme-form" action="/admin" method="post">
          @csrf
          <h4>Sign in to account</h4>
          <p>Enter your email & password to login</p>
          <div class="form-group">
            <label class="col-form-label">Username</label>
            <input class="form-control" name="username" type="name" required="" placeholder="username" autofocus>
          </div>
          <div class="form-group">
            <label class="col-form-label">Password</label>
            <div class="form-input position-relative">
              <input class="form-control" type="password" name="password" required=""
                placeholder="*********">
              <div class="show-hide"><span class="show"> </span></div>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="text-end mt-3">
              <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
