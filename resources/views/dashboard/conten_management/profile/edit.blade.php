@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Update Profile</h5>
          </div>
          <div class="card-body add-post">
            <form action="/dashboard/profile/{{ $profile->id }}" method="post" class="row needs-validation" >
              @method('put')
              @csrf
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="title">Title:</label>
                  <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Post Title" value="{{ old('title', $profile->title) }}" >
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="slug">Slug:</label>
                  <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" type="text" placeholder="Slug" value="{{ old('slug', $profile->slug) }}" required="">
                  @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="col-form-label">Category:
                      <select class="form-select digits @error('category') is-invalid @enderror" id="status" name="category">
                          <option {{ ( $profile->category == 1) ? 'selected' : '' }} value="1">Profile Perusahaan</option>
                          <option {{ ( $profile->category == 2) ? 'selected' : '' }} value="2">Manajemen</option>
                      </select>
                      @error('category')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>

                {{-- <div class="mb-3">
                  <div class="col-form-label">Category:
                    <select class="js-example-placeholder-multiple col-sm-12 @error('category') is-invalid @enderror" multiple="multiple" name="category" id="category" value="{{ old('category', $profile->category) }}">
                      <option value="Profile Perusahaan">Profile Perusahaan</option>
                      <option value="Manajemen">Manajemen</option>
                    </select>
                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div> --}}
                <div class="email-wrapper">
                  <div class="theme-form">
                    <div class="mb-3">
                      <label>Content:</label>
                      <textarea id="text-box" name="content" cols="10" rows="2" value="{!! old('content',$profile->content) !!}"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-3 dropzone">
                <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                    <h6 class="mb-0">Drop files here or click to upload.</h6>
                </div>
              </div>

              <div class="btn-showcase text-end">
                <button class="btn btn-primary" type="submit">Update</button>
                <a href="/dashboard/profile" class="btn btn-outline-secondary">Cancel</a>
              </div>
            </form>
            {{-- <form class="dropzone" id="singleFileUpload" action="/upload.php">

            </form> --}}

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  {{-- <script type="text/javascript">



       CKEDITOR.instances.text-box.setData({!! $profile->content !!});

  </script> --}}
@endsection
