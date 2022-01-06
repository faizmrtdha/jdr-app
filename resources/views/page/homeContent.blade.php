@extends('layouts.home')
@section('title', __('home'))
@section('content')
{{-- Slider --}}
<div class="bg-light p-b-0">
  <div class="slider1">
    <div id="slider-home" class="carousel slide bs-slider control-round indicators-line" data-bs-ride="carousel"
      data-bs-pause="hover" data-bs-interval="8000">
      <ol class="carousel-indicators">
        @foreach ($slide as $key => $s)
        <li data-bs-target="#slider-home" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : '' }}"
          aria-label="Slide 1">
        </li>
        @endforeach
      </ol>
      <div class="carousel-inner" role="listbox">
        @foreach ($slide as $key => $s)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
          <img alt="Pg kantorpusat kawasanhijau" src="{{ url($s->img) }}" class="lazyload slide-image" />
          <div class="bs-slider-overlay"></div>
          <div class="slide-text">
            <div class="container">
              <div class="row">
                <div class="col-md-6 align-self-center slide-text-container p-4">
                  <h2 class="title d-none d-sm-block my-0 animated zoomInRight delay-1s" style="color: #F5F7FA">
                    {{ $s->title }}
                  </h2>
                  <h3 class="title d-block d-sm-none my-0 animated zoomInRight delay-1s" style="color: #F5F7FA">
                  </h3>
                  <div class="my-3 op-8 animated fadeInRight delay-1s" style="color: #F5F7FA">
                    <p class="desc-slider">{{ $s->desc }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="left carousel-control-prev text-white font-14" href="#slider-home" role="button" data-bs-slide="prev"
        data-bs-target="#slider-home">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ __('previous') }}</span>
      </a>
      <a class="right carousel-control-next text-white font-14" href="#slider-home" role="button" data-bs-slide="next"
        data-bs-target="#slider-home">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">{{ __('next') }}</span>
      </a>
    </div>
  </div>
</div>
{{-- End of Slider --}}
<div class="testimonial10 bg-light"
  style="background: url(https://storage.googleapis.com/pkg-portal-bucket/images/template/pattern-round.png)">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-10 pic-portrait">
        <div id="slider-quote" class="spacer owl-carousel owl-theme text-center testi10">
          @foreach ($quotes as $q)
          <div class="item">
            <div class="quote-bg">
              <h3 class="font-light animated zoomInRight delay-1s">
                <p>
                  <span>
                    {{ $q->quote }}
                  </span>
                </p>
              </h3>
            </div>
            <div class="customer-thumb">
              <h6 class="m-b-0 font-semibold">{{ $q->name }}</h6>
              <span>{{ $q->position }}</span>
            </div>
          </div>
          @endforeach
        </div>
        <img alt="Pg pak du" class="lazyload img-fluid photo"
          data-src="https://storage.googleapis.com/pkg-portal-bucket/images/_peopleQuoteThumb/pg_pak_du.png">
      </div>
    </div>
  </div>
</div>
<div class="spacer">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="text-center ">
          <h2 class="title">Our Client's</h2>
        </div>
      </div>
      <div id="featured-product" class="owl-carousel owl-theme tcards m-t-40">
        {{-- @dd($clients) --}}
        @foreach ($clients as $c)
        <div class="item py-4">
          <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
            <a href="https://petrokimia-gresik.com/product/pupuk-urea" class="img-ho">
              <img class="lazyload card-img-top" src="{{ url( $c->img )}}" data-src="{{ url( $c->img )}}" alt="Urea" />
            </a>
            <div class="card-body po-relative">
              <h5 class="font-semibold mb-1 mt-2 text-center text-uppercase">
                <a href="https://petrokimia-gresik.com/product/pupuk-urea">{{ $c->name }}</a>
              </h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<div class="spacer">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="text-center ">
          <h2 class="title">Our Partner's</h2>
        </div>
      </div>
      <div id="featured-partner" class="owl-carousel owl-theme tcards m-t-40">
        @foreach ($partners as $p)
        <div class="item py-4">
          <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
            <a href="https://petrokimia-gresik.com/product/pupuk-urea" class="img-ho">
              <img class="lazyload card-img-top" src="{{ url( $p->img )}}" data-src="{{ url( $p->img )}}" alt="Urea" />
            </a>
            <div class="card-body po-relative">
              <h5 class="font-semibold mb-1 mt-2 text-center text-uppercase">
                <a href="https://petrokimia-gresik.com/product/pupuk-urea">{{ $p->name }}</a>
              </h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
