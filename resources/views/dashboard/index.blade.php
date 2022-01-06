@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">

  <h1>Welcom, {{ Auth::user()->username }}</h1>

    {{-- <div class="col-xl-6 xl-100 box-col-12">
      <div class="card">
        <div class="cal-date-widget card-body">
          <div class="row">
            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
              <div class="cal-info text-center">
                <h2>24</h2>
                <div class="d-inline-block mt-2"><span class="b-r-dark pe-3">March</span><span class="ps-3">2018</span></div>
                <p class="mt-4 f-16 text-muted">There is no minimum donation, any sum is appreciated</p>
              </div>
            </div>
            <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
              <div class="cal-datepicker">
                <div class="datepicker-here float-sm-end" data-language="en">           </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
</div>
@endsection
