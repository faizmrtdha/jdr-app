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
            <h5>ROLE MANAGEMENT</h5>
            <div class="card-header-right">
              @can('create', \App\Models\Roles::class)
              <a class="btn btn-primary text-center" href="{{ route('role.create')}}"> Create New Role
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
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <td class="">{{ $d->{'role-name'} }}</td>
                    @if ($d->is_active == 1)
                      <td class="font-primary">Acitve</td>
                    @else
                      <td class="font-danger">Disactive</td>
                    @endif
                    <td class="">
                      @can('update', \App\Models\Roles::class)
                        <a class="btn btn-primary btn-sm" href="/dashboard/role/{{ $d->id }}/edit"><i class="fa fa-pencil"></i> Edit</a>
                      @endcan

                      @can('delete', \App\Models\Roles::class)
                        <form action="/dashboard/role/{{ $d->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn btn-warning btn-sm" onclick="return confirm('Are you sure delete?')"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                      @endcan
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
