@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Profile Create</h5>
          </div>
          <div class="card-body add-post">
            <form action="/dashboard/profile" method="post" class="row needs-validation" >
                @csrf
              <div class="col-sm-12">
                <div class="mb-3">
                  <label for="title">Title:</label>
                  <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Post Title" value="{{ old('title') }}" >
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="slug">Slug:</label>
                  <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" type="text" placeholder="Slug" value="{{ old('slug') }}" required="">
                  @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                  <div class="col-form-label">Category:
                    <select class="form-select digits @error('category') is-invalid @enderror" id="status" name="category">
                        <option value="1">Profile Perusahaan</option>
                        <option value="2">Manajemen</option>
                    </select>
                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="email-wrapper">
                  <div class="theme-form">
                    <div class="mb-3">
                      <label>Content:</label>
                      <textarea id="text-box" name="content" cols="10" rows="2"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              {{-- <div class="mb-3">
                <label class="form-label" for="thumbnail">Thumbnail</label>
                <img class="image-preview-thumbnail img-fluid col-sm-5 mb-3">
                <div class="input-group mb-3">
                    <input type="file" name="thumbnail" class="form-control" multiple  id="thumbnail" onchange="previewImageT()">
                    <label class="input-group-text" for="thumbnail">Upload</label>
                </div>
              </div> --}}
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

<script>
  function ckeditor($id) {
    ClassicEditor
        .create( document.querySelector($id), {

        } )
        .catch( error => {
            console.error( error );
        } );
  }
  ckeditor('#text-box');

</script>
{{-- <script>
  // Get a reference to the file input element
  const inputElement = document.querySelector('input[id="img"]');

  FilePond.registerPlugin(
    FilePondPluginImagePreview,
  );
  // Create a FilePond instance
  const pond = FilePond.create(inputElement);

  FilePond.setOptions({
      server: {
          url: '/uploadImg',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
          }
      },
  });
</script> --}}
@endsection
