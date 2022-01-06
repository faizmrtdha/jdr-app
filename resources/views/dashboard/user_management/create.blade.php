@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>User Create</h5>
            </div>
            <div class="card-body add-post">
              <form action="/dashboard/user-management" method="post" class="row needs-validation" >
                  @csrf
                <div class="col-sm-12">
                  <div class="mb-3">
                    <label for="username">Username:</label>
                    <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" placeholder="username" value="{{ old('username') }}" >
                      @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email">E-mail:</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="email" value="{{ old('email') }}" required="">
                    @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>

                  <div class="mb-3 ">
                    <label for="password">Passwords:</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="password" value="{{ old('password') }}" required="">
                        <div class="show-hide"><span class="show"> </span></div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                  </div>


                  {{-- <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required=""
                        placeholder="*********">
                      <div class="show-hide"><span class="show"> </span></div>
                    </div>
                  </div> --}}

                  {{-- @dd(RoleName()) --}}
                  <div class="mb-3">
                    <label class="form-label" for="role">Role User</label>
                    <select class="form-select digits" id="role" name="role_id">
                      @foreach ($data as $r)
                      <option value="{{ $r->{'id'} }}">{{ $r->{'role-name'} }}</option>
                      @endforeach
                      {{-- <option value="0">Diactive</option> --}}
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="status">Status User</label>
                    <select class="form-select digits" id="status" name="is_active">
                      <option value="1">Active</option>
                      <option value="0">Diactive</option>
                    </select>
                  </div>

                </div>

                {{-- <input type="file" name="img" id="img"> --}}
                <div class="btn-showcase text-end">
                  <button class="btn btn-primary" type="submit">Create</button>
                  <a href="dashboard/user-management" class="btn btn-outline-secondary">Discard</a>
                </div>

              </form>


            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
