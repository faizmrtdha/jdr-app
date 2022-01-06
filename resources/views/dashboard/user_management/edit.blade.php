@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>User Update</h5>
            </div>
            <div class="card-body add-post">
              <form action="/dashboard/user-management/{{$data->id}}" method="post" class="row needs-validation" >
                @method('PUT')
                  @csrf

                  {{-- @dd($data) --}}
                <div class="col-sm-12">
                  <div class="mb-3">
                    <label for="username">Username:</label>
                    <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" placeholder="username" value="{{ old('username', $data->username) }}" >
                      @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email">E-mail:</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="email" value="{{ old('email', $data->email) }}" required="">
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

                  <div class="mb-3">
                    <label class="form-label" for="role">Role User</label>
                    <select class="form-select digits" id="role" name="role_id">
                      @foreach ($role as $r)
                      <option value="{{ $r->{'id'} }}"
                        {{ ( $r->{'id'} == $data->role_id) ? 'selected' : '' }}
                        >{{ $r->{'role-name'} }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="status">Status User</label>
                    <select class="form-select digits" id="status" name="is_active">
                      <option {{ ( $data->is_active == 1) ? 'selected' : '' }} value="1">Active</option>
                      <option {{ ( $data->is_active == 0) ? 'selected' : '' }} value="0">Diactive</option>
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
