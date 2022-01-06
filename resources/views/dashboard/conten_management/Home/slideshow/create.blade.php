@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Slideshow Create</h5>
          </div>
          <div class="card-body add-post">
            <form action="/dashboard/home/slideshow" method="post" class="row needs-validation" enctype="multipart/form-data">
                @csrf
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="title">Title:</label>
                  <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Slideshow Title" value="{{ old('title') }}" >
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="slug">Description:</label>
                  <textarea class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" type="text" placeholder="Slideshow Description" value="{{ old('desc') }}" ></textarea>
                  @error('desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                  @enderror
                  {{-- <input class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" type="text" placeholder="Slideshow Description" value="{{ old('desc') }}" required="">
                  @error('desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile" name="img">
                </div>
              </div>



              {{-- <input type="file" name="img" id="img"> --}}
              <div class="btn-showcase text-end">
                <button class="btn btn-primary" type="submit">Create</button>
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
