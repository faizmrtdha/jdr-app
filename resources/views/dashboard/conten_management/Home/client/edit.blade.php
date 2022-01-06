@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Client Profile Edit</h5>
        </div>
        <div class="card-body add-post">
          <form action="/dashboard/home/client/{{ $client->id }}" method="post" class="row needs-validation"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="title">Client Name:</label>
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
                  placeholder="Product Name" value="{{ old('name',$client->name ) }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <input type="text" name="oldImg" id="oldImg" value="{{ $client->img }}" hidden>
              <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile" name="img">
              </div>
            </div>



            {{-- <input type="file" name="img" id="img"> --}}
            <div class="btn-showcase text-end">
              <button class="btn btn-primary" type="submit">Update</button>
              <a href="/dashboard/profile" class="btn btn-outline-secondary">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

@endsection
