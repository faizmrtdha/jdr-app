@extends('layouts.home')
@section('title', 'asd')
@section('contentPage')

{{-- @dd($data->title) --}}
<div class="col-md-9 order-2 order-md-1 mt-3 mt-md-0">
  <h1 class="title mt-0">{{ $data->title }}</h1>
  <div class="pt-2">
    <div class="mt-4 page-content">
      <p>{!! $data->content !!}</p>
    </div>
    <div class="social-share pt-5 pb-4 text-left"></div>
    <div id="banner-sliders" class="carousel slide carousel-fade bs-slider my-5" data-bs-interval="4000"
      data-bs-ride="carousel"></div>
  </div>
</div>
@endsection
