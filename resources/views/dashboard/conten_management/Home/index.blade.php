@extends('dashboard.layout.main')

@section('container')
<div class="">
  {{-- Notification --}}
  @if (session()->has('success'))
  <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
    <p>{{ session('success') }}</p>
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  {{-- End Notification --}}

  <div class="card">
    {{-- Tab Menu --}}
    <div class="card-header" style="display: flex">
      {{-- <h5 class="pull-left">Simple Tab</h5> --}}
      <ul class="pull-left nav nav-pills nav-primary" id="pills-clrtab1" role="tablist">
        <li class="nav-item me-3"><a class="nav-link active" id="pills-clrhome-tab1" data-bs-toggle="pill"
            href="#slideshow" role="tab" aria-controls="slideshow" aria-selected="true">Slideshow</a></li>
        <li class="nav-item me-3"><a class="nav-link" id="pills-clrprofile-tab1" data-bs-toggle="pill" href="#quotes"
            role="tab" aria-controls="quotes" aria-selected="false">Quotes</a></li>
        <li class="nav-item me-3"><a class="nav-link" id="pills-clrcontact-tab1" data-bs-toggle="pill" href="#client"
            role="tab" aria-controls="client" aria-selected="false">Client</a></li>
        <li class="nav-item me-3"><a class="nav-link" id="pills-clrcontact-tab1" data-bs-toggle="pill" href="#partner"
            role="tab" aria-controls="partner" aria-selected="false">Partner</a></li>
      </ul>
    </div>
    {{-- End Tabs Menu --}}


    <div class="card-body">
      <div class="tabbed-card">
        <div class="tab-content" id="pills-clrtabContent1">


          {{-- Tab Slideshow Menu --}}
          <div class="tab-pane fade show active" id="slideshow" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
            <div class="row mb-4">
              <div class="col">
                @can('create', \App\Models\Slideshow::class)
                <a class="btn btn-primary" href="/dashboard/home/slideshow/create">Create New Slideshow</a>
                @endcan
              </div>
            </div>
            <div class="row">
              @foreach ($slide as $s)
              <div class="col-xl-4 col-sm-4 box-col-4">
                <div class="card">
                  <div class="blog-box blog-grid text-center product-box">
                    <div class="product-img">
                      <img class="img-fluid top-radius-blog" src="{{ url($s->img)  }}" alt="">

                      {{-- <img class="img-fluid top-radius-blog" src="{{ asset('storage/'.$s->img)  }}" alt=""> --}}

                      <div class="product-hover">
                        <ul>
                          @can('update', \App\Models\Slideshow::class)
                          {{-- <li><a href="/dashboard/home/slideshow/{{ $s->id }}/edit"><i data-feather="edit"></i></a>
                          </li> --}}
                          <li><a class="btn" href="/dashboard/home/slideshow/{{ $s->id }}/edit"><i
                                class="icofont icofont-ui-edit"></i></a></li>
                          @endcan

                          @can('delete', \App\Models\Quotes::class)
                          <li>
                            <form class="btn" action="/dashboard/home/slideshow/{{ $s->id }}" method="post">
                              @method('delete')
                              @csrf
                              <button class="btn" onclick="return confirm('Are you sure delete?')"><i
                                  class="icofont icofont-trash"></i></button>

                            </form>
                          </li>
                          @endcan
                        </ul>
                      </div>
                    </div>

                    <div class="product-details">
                      <h4>{{ $s->title }}</h4>
                      <hr>
                      <span>{{ $s->created_at->diffForHumans() }}</span>
                      <span>| by: Admin</span>
                    </div>

                  </div>
                </div>
              </div>
              @endforeach

              {{-- Test --}}
              {{-- <div class="col-xl-3 col-sm-6 xl-4">
                <div class="card">
                  <div class="product-box">
                    <div class="product-img"><img class="img-fluid" src="{{ asset('storage/'.$s->img)  }}" alt="">
                      <div class="product-hover">
                        <ul>
                          <li>
                            <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                          </li>
                          <li>
                            <button class="btn" type="button" data-bs-toggle="modal"
                              data-bs-target="#exampleModalCenter6"><i class="icon-eye"></i></button>
                          </li>
                          <li>
                            <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-details">
                      <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                          class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                      <h4>Woman T-shirt</h4>
                      <p>Simply dummy text of the printing.</p>
                      <div class="product-price">$26.00 </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- endtest --}}




            </div>
            <p>slideshow</p>
          </div>
          {{-- End Slideshow Menu --}}



          {{-- Tab Quote Menu --}}
          <div class="tab-pane fade" id="quotes" role="tabpanel" aria-labelledby="pills-clrprofile-tab1">
            <div class="row mb-4">
              <div class="col">
                @can('create', \App\Models\Quotes::class)
                <a class="btn btn-primary" href="/dashboard/home/quote/create">Create New Quotes</a>
                @endcan
              </div>
            </div>
            <div class="row">
              <div class="table-responsive">
                <table class="display" id="basic-1">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Quote</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($quote as $q)
                    <tr>
                      <td>{{ $q->name }}</td>
                      <td>{{ $q->position }}</td>
                      <td>{{ $q->updated_at }}</td>
                      <td>
                        @can('update', \App\Models\Quotes::class)
                        {{-- <a class="btn" href="/dashboard/home/quote/{{ $q->id }}/edit"><i
                            class="icofont icofont-ui-edit"></i></a> --}}
                        <a href="/dashboard/home/quote/{{ $q->id }}/edit"><span>edit</span></a>
                        @endcan

                        @can('delete', \App\Models\Quotes::class)
                        <form action="/dashboard/home/quote/{{ $q->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="border-0" onclick="return confirm('Are you sure delete?')"><span
                              class="txt-secondary">delete</span></button>
                        </form>
                        @endcan
                      </td>
                    </tr>
                    @endforeach

                    {{-- <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr> --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          {{-- End Quotes Menu --}}


          {{-- Tab Product Menu --}}
          <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
            <div class="row mb-4">
              <div class="col">
                @can('create', \App\Models\Client::class)
                <a class="btn btn-primary" href="/dashboard/home/client/create">Add New Client</a>
                @endcan
              </div>
            </div>
            <div class="row">
              <div class="table-responsive product-table">
                <table class="display" id="table-product">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($client as $c)
                    <tr>
                      <td>
                        <img src="{{ url( $c->img )}}" alt="" height="128px" class="img-fluid">
                      </td>
                      {{-- <td><img src="{{ asset('storage/'. $p->img )}}" alt="" height="128px"></td> --}}
                      <td>
                        <h6> {{ $c->name }} </h6>
                      </td>
                      <td>
                        @can('update', \App\Models\Client::class)
                        <a class="btn btn-success" href="/dashboard/home/client/{{ $c->id }}/edit">Edit</a>
                        @endcan

                        @can('delete', \App\Models\Client::class)
                        <form action="/dashboard/home/client/{{ $c->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger"
                            onclick="return confirm('Are you sure delete?')">Delete</button>
                        </form>
                        @endcan
                        {{-- <button class="btn btn-danger btn-xs" type="button"
                          data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                        <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs"
                          title="">Edit</button> --}}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          {{-- End Product Menu --}}



        </div>
      </div>
    </div>
  </div>


  {{-- <div class="card-body">
    <ul class="nav nav-pills nav-primary" id="pills-clrtab" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="pills-clrhome-tab" data-bs-toggle="pill" href="#pills-clrhome"
          role="tab" aria-controls="pills-clrhome" aria-selected="true"><i
            class="icofont icofont-ui-home"></i>Slideshow</a></li>
      <li class="nav-item"><a class="nav-link" id="pills-clrprofile-tab" data-bs-toggle="pill" href="#pills-clrprofile"
          role="tab" aria-controls="pills-clrprofile" aria-selected="false"><i
            class="icofont icofont-man-in-glasses"></i>About Us</a></li>
    </ul>
    <div class="tab-content mt-4" id="pills-clrtabContent">
      <!-- Slideshow tab -->
      <div class="tab-pane fade show active" id="pills-clrhome" role="tabpanel" aria-labelledby="pills-clrhome-tab">
        <div class="row">
          <!-- slideshow content -->
          <div class="col-xl-8">
            <div class="row">
              <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                <div class="card">
                  <div class="blog-box blog-grid text-center product-box">
                    <div class="product-img"><img class="img-fluid top-radius-blog" src="../assets/images/faq/3.jpg"
                        alt="">
                      <div class="product-hover">
                        <ul>
                          <li><i data-feather="edit"></i></i></li>
                          <li><i data-feather="trash-2"></i></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="blog-details-main">
                      <ul class="blog-social">
                        <li>9 April 2018</li>
                        <li>by: Admin</li>
                      </ul>
                      <hr>
                      <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                <div class="card">
                  <div class="blog-box blog-grid text-center product-box">
                    <div class="product-img"><img class="img-fluid top-radius-blog" src="../assets/images/faq/3.jpg"
                        alt="">
                      <div class="product-hover">
                        <ul>
                          <li><i class="icon-edit"></i></li>
                          <li><i class="icon-import"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="blog-details-main">
                      <ul class="blog-social">
                        <li>9 April 2018</li>
                        <li>by: Admin</li>
                      </ul>
                      <hr>
                      <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- END slideshow content -->

          <!-- slideshow input content -->
          <div class="col-xl-4">
            <div class="card">
              <div class="card-header">
                <h5>Post Edit</h5>
              </div>
              <div class="card-body add-post">
                <form class="row needs-validation" novalidate="">
                  <div class="col-sm-12">
                    <div class="mb-3">
                      <label for="validationCustom01">Title:</label>
                      <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title"
                        required="">
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-3">
                      <label>Describtions:</label>
                      <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title"
                        required="">
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </form>
                <form class="dropzone dropzone-info dz-clickable" id="fileTypeValidation" action="/upload.php">
                  <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a
                      demo
                      dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                  </div>
                </form>
                <!-- <div class="btn-showcase text-end"> -->
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-outline-secondary" type="submit">Cancel</button>
                <!-- </div> -->
              </div>
            </div>
          </div>
          <!--END slideshow input content -->
        </div>
      </div>
      <!--End Slideshow tab -->

      <!-- About Us Tab -->
      <div class="tab-pane fade" id="pills-clrprofile" role="tabpanel" aria-labelledby="pills-clrprofile-tab">
        <div class="row">
          <!-- About Us content -->
          <div class="col-xl-6">
            <div class="row">
              <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                <div class="card">
                  <div class="blog-box blog-grid text-center product-box">
                    <div class="product-img"><img class="img-fluid top-radius-blog" src="../assets/images/faq/3.jpg"
                        alt="">
                      <div class="product-hover">
                        <ul>
                          <li><i data-feather="edit"></i></i></li>
                          <li><i data-feather="trash-2"></i></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="blog-details-main">
                      <ul class="blog-social">
                        <li>9 April 2018</li>
                        <li>by: Admin</li>
                      </ul>
                      <hr>
                      <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 col-sm-6 box-col-6">
                <div class="card">
                  <div class="blog-box blog-grid text-center product-box">
                    <div class="product-img"><img class="img-fluid top-radius-blog" src="../assets/images/faq/3.jpg"
                        alt="">
                      <div class="product-hover">
                        <ul>
                          <li><i class="icon-edit"></i></li>
                          <li><i class="icon-import"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="blog-details-main">
                      <ul class="blog-social">
                        <li>9 April 2018</li>
                        <li>by: Admin</li>
                      </ul>
                      <hr>
                      <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- END About Us content -->

          <!-- About Us input content -->
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>About Us Edit</h5>
              </div>
              <div class="card-body add-post">
                <form class="row needs-validation" novalidate="">
                  <div class="col-sm-12">
                    <div class="mb-3">
                      <label for="validationCustom01">Title:</label>
                      <input class="form-control" id="validationCustom01" type="text" placeholder="Title" required="">
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-3">
                      <label>Describtions:</label>
                      <input class="form-control" id="validationCustom01" type="text" placeholder="Describtions"
                        required="">
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </form>
                <form class="dropzone dropzone-info dz-clickable" id="fileTypeValidation" action="/upload.php">
                  <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a
                      demo
                      dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                  </div>
                </form>
                <!-- <div class="btn-showcase text-end"> -->
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-outline-secondary" type="submit">Cancel</button>
                <!-- </div> -->
              </div>
            </div>
          </div>
          <!--END About Us input content -->
        </div>
      </div>
      <!-- End About Us Tab -->
    </div>
  </div> --}}
</div>
@endsection

@section('script')
<script src="/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#basic-1').DataTable();
    $('#table-product').DataTable();
  });
</script>
@endsection
