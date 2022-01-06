@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Quote Create</h5>
          </div>
          <div class="card-body add-post">
            <form action="/dashboard/home/quote" method="post" class="row needs-validation" enctype="multipart/form-data">
                @csrf
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="name">Full Name:</label>
                  <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Full Name" value="{{ old('name') }}" >
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="position">Position:</label>
                  <input class="form-control @error('position') is-invalid @enderror" id="position" name="position" type="text" placeholder="Full position" value="{{ old('position') }}" >
                    @error('position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="slug">Description:</label>
                  <textarea class="form-control @error('quote') is-invalid @enderror" id="quote" name="quote" type="text" placeholder="Input your quote" value="{{ old('quote') }}" ></textarea>
                  @error('quote')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                  @enderror
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
