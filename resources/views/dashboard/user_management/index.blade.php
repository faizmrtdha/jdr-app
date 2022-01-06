@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
        <p>{{ session('success') }}</p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif



    <div class="row second-chart-list third-news-update">
      <div class="col-xl-6 xl-100 box-col-12">
        <div class="card">
          <div class="card-header">
            <h5>USER MANAGEMENT</h5>
            <div class="card-header-right">
              @can('create', \App\Models\User::class)
              <a class="btn btn-primary text-center" href="{{ route('user-management.create')}}"> Create New User
              </a>
              @endcan
            </div>
          </div>
          <div class="card-body">
            <div class="user-status table-responsive">
              <table class="table table-bordernone">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Role</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @dd($users) --}}
                    @foreach ($users as $user)

                    <tr>
                      <td class="bd-t-none u-s-tb">
                        <div class="align-middle image-sm-size"><img
                            class="img-radius align-top m-r-15 rounded-circle" src="{{ $user->img }}"
                            alt="">
                          <div class="d-inline-block">
                            <h6>{{ $user->username }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <div class="span badge rounded-pill @if ($user->is_active == "1")
                            pill-badge-primary
                        @else
                            pill-badge-danger
                        @endif">@if ($user->is_active == "1")
                            Active
                        @else
                            Disactive
                        @endif</div>
                      </td>
                      <td class="font-primary">{{ RoleName($user->role_id) }}</td>


                      {{-- @dd($user) --}}
                      <td class="text-end">
                        @can('update', \App\Models\User::class)
                          <a class="btn btn-primary btn-sm" href="/dashboard/user-management/{{ $user->id }}/edit"><i class="fa fa-pencil"></i> Edit</a>
                        @endcan

                        @can('delete', \App\Models\User::class)
                          <form action="/dashboard/user-management/{{ $user->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-warning btn-sm" onclick="return confirm('Are you sure delete?')"><i class="fa fa-trash"></i> Delete</button>
                          </form>
                        @endcan
                        </td>
                    </tr>
                    @endforeach
                  {{-- <tr>
                    <td class="bd-t-none u-s-tb">
                      <div class="align-middle image-sm-size"><img
                          class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/5.jpg"
                          alt="">
                        <div class="d-inline-block">
                          <h6>Aprianda</h6>
                        </div>
                      </div>
                    </td>
                    <td>aprianda@gmail.com</td>
                    <td>
                      <div class="span badge rounded-pill pill-badge-danger">Diactive</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="bd-t-none u-s-tb">
                      <div class="align-middle image-sm-size"><img
                          class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/5.jpg"
                          alt="">
                        <div class="d-inline-block">
                          <h6>Fiqri Huda</h6>
                        </div>
                      </div>
                    </td>
                    <td class="font-secondary">Cancle</td>
                    <td>
                      <div class="span badge rounded-pill pill-badge-warning">6523</div>
                    </td>
                  </tr> --}}
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
