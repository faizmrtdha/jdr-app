@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Product Edit</h5>
          </div>
          <div class="card-body add-post">
            <form action="/dashboard/home/product/{{ $product->id }}" method="post" class="row needs-validation" enctype="multipart/form-data">
              @method('PUT')
                @csrf
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="title">Product Name:</label>
                  <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Product Name" value="{{ old('title',$product->title ) }}" >
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="slug">Category:</label>
                  <input class="form-control @error('category') is-invalid @enderror" id="category" name="category" type="text" placeholder="Category" value="{{ old('category',$product->category) }}" >
                  @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                  @enderror

                </div>
                <input type="text" name="oldImg" id="oldImg" value="{{ $product->img }}" hidden>
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
