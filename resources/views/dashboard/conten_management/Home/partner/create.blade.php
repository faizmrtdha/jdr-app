@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Partner Create</h5>
        </div>
        <div class="card-body add-post">
          <form action="/dashboard/home/partner" method="post" class="row needs-validation"
            enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="name">Name:</label>
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
                  placeholder="Partner Title" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="formFile" class="form-label">input image partner</label>
                <input class="form-control" type="file" id="formFile" name="img">
              </div>
            </div>



            {{-- <input type="file" name="img" id="img"> --}}
            <div class="btn-showcase text-end">
              <button class="btn btn-primary" type="submit">Create</button>
              <a href="/dashboard/home" class="btn btn-outline-secondary">Cancel</a>
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
