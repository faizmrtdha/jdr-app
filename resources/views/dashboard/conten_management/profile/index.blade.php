@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
  @if (session()->has('success'))
  <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
    <p>{{ session('success') }}</p>
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  {{-- @dd(collsect($profile->category)->unique()) --}}
  <div class="card">
    <div class="card-header py-3">
      <div class="d-flex justify-content-between">
        <h5>Profile Content</h5>
        <a href="/dashboard/profile/create" class="btn btn-primary">Add New Profile</a>
      </div>
    </div>
    <div class="card-body">
      <ul class="nav nav-pills nav-primary" id="pills-clrtab" role="tablist">
        @foreach ($category as $c)
            <li class="nav-item me-3"><a class="nav-link active" id="pills-clrhome-tab" data-bs-toggle="pill"
                href="#pills-clrhome" role="tab" aria-controls="pills-clrhome" aria-selected="true"><i></i>{{ $c->category }}</a></li>
          @endforeach
      </ul>
      <div class="tab-content mt-4" id="pills-clrtabContent">
        <!-- Slideshow tab -->
        <div class="tab-pane fade show active" id="pills-clrhome" role="tabpanel"
          aria-labelledby="pills-clrhome-tab">
          <div class="row">
            @foreach ($data as $d)
              <div class="col-xl-4 col-sm-4 box-col-4">
                <div class="card">
                  <div class="blog-box blog-grid text-center product-box">
                    <div class="product-img"><img class="img-fluid top-radius-blog"
                        src="../assets/images/faq/3.jpg" alt="">
                      <div class="product-hover">
                        <ul>
                          <li><a href="/dashboard/profile/{{ $d->id }}/edit"><i class="icofont icofont-ui-edit"></i></a></li>
                          <li>
                            <form class="btn" action="/dashboard/profile/{{ $d->id }}" method="post" >
                              @method('delete')
                              @csrf
                              <button class="btn" onclick="return confirm('Are you sure delete?')"><i class="icofont icofont-trash"></i></button>
                            </form>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="blog-details-main">
                      <ul class="blog-social">
                        <li>{{ $d->created_at->diffForHumans() }}</li>
                        <li>by: Admin</li>
                      </ul>
                      <hr>
                      <h6 class="blog-bottom-details">{{$d->title}}
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!--End Slideshow tab -->
      </div>
    </div>
  </div>
</div>
@endsection
