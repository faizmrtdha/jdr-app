@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Partner Edit</h5>
        </div>
        <div class="card-body add-post">
          <form action="/dashboard/home/partner/{{ $partner->id }}" method="post" class="row needs-validation"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="title">Partner Name:</label>
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
                  placeholder="Partner Name" value="{{ old('name',$partner->name ) }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <input type="text" name="oldImg" id="oldImg" value="{{ $partner->img }}" hidden>
              <div class="mb-3">
                <label for="formFile" class="form-label">input partner image</label>
                <input class="form-control" type="file" id="formFile" name="img">
              </div>
            </div>


            <div class="btn-showcase text-end">
              <button class="btn btn-primary" type="submit">Update</button>
              <a href="/dashboard/home#partner" class="btn btn-outline-secondary">Cancel</a>
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
