@extends('layouts.main')
@section('title', 'Home')
@section('slider')
<div class="slider1">
    <div id="slider-home" class="carousel slide bs-slider control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="8000">
        <ol class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1" class=""></li>
            <li data-target="#slider-home" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img alt="Pg kantorpusat kawasanhijau"
                    src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-horizontal-big.jpg"
                    data-src="https://storage.googleapis.com/pkg-portal-bucket/images/slideshow-home/pg_kantorpusat_kawasanhijau.jpg"
                    class="lazyload slide-image" />
                <div class="bs-slider-overlay"></div>
                <div class="slide-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 align-self-center slide-text-container p-4">
                                <h2 class="title d-none d-sm-block my-0 animated zoomInRight delay-1s"
                                    style="color: #F5F7FA">
                                    {{__("messages.welcome")}}
                                </h2>
                                <h3 class="title d-block d-sm-none my-0 animated zoomInRight delay-1s"
                                    style="color: #F5F7FA">
                                    Kantor Pusat Petrokimia Gresik</h3>
                                <div class="my-3 op-8 animated fadeInRight delay-1s" style="color: #F5F7FA">
                                    <p>Petrokimia Gresik merupakan perusahaan berwawasan lingkungan yang
                                        menempati areal lebih dari 450 ha di Kabupaten Gresik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img alt="Pg amurea2 night"
                    src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-horizontal-big.jpg"
                    data-src="https://storage.googleapis.com/pkg-portal-bucket/images/slideshow-home/pg_amurea2_night.jpg"
                    class="lazyload slide-image" />
                <div class="bs-slider-overlay"></div>
                <div class="slide-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 align-self-center slide-text-container p-4">
                                <h2 class="title d-none d-sm-block my-0 animated zoomInRight delay-1s"
                                    style="color: #F5F7FA">
                                    Pabrik Amoniak - Urea II</h2>
                                <h3 class="title d-block d-sm-none my-0 animated zoomInRight delay-1s"
                                    style="color: #F5F7FA">
                                    Pabrik Amoniak - Urea II</h3>
                                <div class="my-3 op-8 animated fadeInRight delay-1s" style="color: #F5F7FA">
                                    <p>Dibangun berdasarkan Instruksi Presiden RI No. 2 Tahun 2010 tentang
                                        Revitalisasi Industri Pupuk. Tujuannya untuk mendukung Program
                                        Ketahanan Pangan Nasional</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img alt="Pg pelabuhan"
                    src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-horizontal-big.jpg"
                    data-src="https://storage.googleapis.com/pkg-portal-bucket/images/slideshow-home/pg_pelabuhan.jpg"
                    class="lazyload slide-image" />
                <div class="bs-slider-overlay"></div>
                <div class="slide-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 align-self-center slide-text-container p-4">
                                <h2 class="title d-none d-sm-block my-0 animated zoomInRight delay-1s"
                                    style="color: #F5F7FA">
                                    Dermaga Petrokimia Gresik</h2>
                                <h3 class="title d-block d-sm-none my-0 animated zoomInRight delay-1s"
                                    style="color: #F5F7FA">
                                    Dermaga Petrokimia Gresik</h3>
                                <div class="my-3 op-8 animated fadeInRight delay-1s" style="color: #F5F7FA">
                                    <p>Sebagai sarana transportasi bahan baku, serta distribusi pupuk ke
                                        seluruh pelosok Indonesia maupun luar negeri<br /></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control-prev text-white font-14" href="#slider-home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Sebelumnya</span>
        </a>
        <a class="right carousel-control-next text-white font-14" href="#slider-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Selanjutnya</span>
        </a>
    </div>
</div>
@endsection
@section('testimonial')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10 pic-portrait">
            <div id="slider-quote" class="spacer owl-carousel owl-theme text-center testi10">
                <div class="item">
                    <div class="quote-bg">
                        <h3 class="font-light animated zoomInRight delay-1s">
                            <p>Merealisasikan ide dan kreativitas adalah kunci kesuksesan. Ide dan
                                Kreativitas tidak memiliki hirarki, jadi siapapun dapat merealisasikannya.
                            </p>
                        </h3>
                    </div>
                    <div class="customer-thumb">
                        <h6 class="m-b-0 font-semibold">Viqri Alhuda</h6>
                        <span>Direktur Utama</span>
                    </div>
                </div>
            </div>
            <img alt="Pg pak du" class="lazyload img-fluid photo"
                data-src="https://storage.googleapis.com/pkg-portal-bucket/images/_peopleQuoteThumb/pg_pak_du.png">
        </div>
    </div>
</div>
@endsection
@section('informasi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="text-center ">
                <h2 class="title">Informasi Produk</h2>
                <h6 class="subtitle">Produk terbaik kami telah melalui proses R&amp;D yang sangat ketat
                    untuk mendapatkan hasil yang maksimal</h6>
            </div>
        </div>
        <div id="featured-product" class="owl-carousel owl-theme tcards m-t-40">
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/pupuk-urea" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_subnonsub_urea.png"
                            alt="Urea" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/pupuk-urea">Urea</a>
                        </h5>
                        <p class="m-b-0 font-14">
                            SNI : 02-2801-1998</p>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/pupuk-za" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_subnonsub_za.png"
                            alt="ZA" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/pupuk-za">ZA</a>
                        </h5>
                        <p class="m-b-0 font-14">
                            SNI : 02-1760-2005</p>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/pupuk-sp-36" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_subnonsub_sp36.png"
                            alt="SP-36" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/pupuk-sp-36">SP-36</a>
                        </h5>
                        <p class="m-b-0 font-14">
                            SNI : 02-3769-2005</p>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/phonska" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/PHONSKA-2019.png"
                            alt="Phonska" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/phonska">Phonska</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petroganik" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/PETROGANIK-2019.png"
                            alt="Petroganik" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petroganik">Petroganik</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/phonska-oca" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/ponska-ocha.png"
                            alt="Phonska Oca" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/phonska-oca">Phonska Oca</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/phonska-plus" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_phonska-plus.png"
                            alt="Phonska Plus" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/phonska-plus">Phonska Plus</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/pupuk-spesifikasi-komoditi" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_npk-kebomas.png"
                            alt="Pupuk Spesifikasi Komoditi" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/pupuk-spesifikasi-komoditi">Pupuk
                                Spesifikasi Komoditi</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/pupuk-zk" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_zk_191126_040038.png"
                            alt="ZK" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/pupuk-zk">ZK</a>
                        </h5>
                        <p class="m-b-0 font-14">
                            SNI : 02-3769-2005</p>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/pupuk-kcl" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/KCL-PETRO-transparant.png"
                            alt="KCl" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/pupuk-kcl">KCl</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/kcl-rock-phospate-1" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/021118_Rock-phosphate-PETRO_2018_3D-transparant.png"
                            alt="Rock Phospate" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/kcl-rock-phospate-1">Rock
                                Phospate</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-niphos" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/NPS-NIPHOS-Orange-transparant.png"
                            alt="Petro Niphos" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-niphos">Petro Niphos</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-nitrat" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_petro-nitrat.png"
                            alt="Petro Nitrat" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-nitrat">Petro Nitrat</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-ponic" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_petroponic.png"
                            alt="Petro Ponic" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-ponic">Petro Ponic</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-ningrat" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/_productThumb/pg_petro-ningrat.png"
                            alt="Petro Ningrat" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-ningrat">Petro Ningrat</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-biofertil" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/Biofertille-new-transparant.png"
                            alt="PETRO BIO FERTIL" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #00AE4D">
                                <small class="text-uppercase">Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-biofertil">PETRO BIO
                                FERTIL</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-cas" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/PETRO-CAS-update-2018-transparant.png"
                            alt="PETRO-CAS" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-cas">PETRO-CAS</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/kapur-pertanian" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/Kapur-Pertanian-update-transparant.png"
                            alt="Kapur Pertanian Kebomas" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/kapur-pertanian">Kapur Pertanian
                                Kebomas</a>
                        </h5>
                        <p class="m-b-0 font-14">
                            SNI : 02-0482-1998</p>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-gladiator" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/Gladiator-transparant.png"
                            alt="Petro Gladiator" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-gladiator">Petro
                                Gladiator</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-biofeed" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/Biofeed-transparant.png"
                            alt="Petro Biofeed" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-biofeed">Petro Biofeed</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petro-chick" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/petroChICK-transparant.PNG"
                            alt="Petro Chick" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petro-chick">Petro Chick</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/petrofish" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/PetroFish-transparant.png"
                            alt="Petrofish" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/petrofish">Petrofish</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/bahan-kimia" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/product/_productThumb/bahan-kimia.jpg"
                            alt="Bahan Kimia" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/bahan-kimia">Bahan Kimia</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="item py-4">
                <div class="product-item card lift-up shadow-sm hover:shadow-lg property-box">
                    <a href="https://petrokimia-gresik.com/product/jasa" class="img-ho">
                        <img class="lazyload card-img-top"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-vertical.jpg"
                            data-src="https://storage.googleapis.com/pkg-portal-bucket/images/content/_productThumb/za3_jangka.JPG"
                            alt="Jasa" />
                    </a>
                    <div class="card-body po-relative">
                        <div class="label-up">
                            <label class="label text-white" style="background: #FBAD17">
                                <small class="text-uppercase">Non Pupuk</small>
                            </label>
                        </div>
                        <h5 class="font-semibold mb-1 mt-2">
                            <a href="https://petrokimia-gresik.com/product/jasa">Jasa</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer-1')
<div class="f3-middle container">
    <div class="row">
        <div class="col-lg-3 col-md-6 m-b-30">
            <div>
                <a class="m-r-20" href="#">
                    <img alt="Petro-dark-transp" class="lazyload logo"
                        data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/petro-dark-transp.png" />
                </a>
            </div>
            <div class="mt-3">
                <p>PT Petrokimia Gresik merupakan Produsen Pupuk Terlengkap di Indonesia yang memproduksi
                    berbagai macam pupuk dan bahan kimia untuk solusi agroindustri. <br /></p>
            </div>
            <div class="social-media">
                <div class="round-social light">
                    <a href="https://www.facebook.com/PetrokimiaGresikOfficial/" class="link" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/petrogresik" class="link" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UC2M0KWQ7_e3oCqnWL4urUVQ" class="link" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/petrokimiagresik_official/" class="link" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 m-b-30">
            <h6 class="font-semibold text-white text-uppercase">Kantor Pusat</h6>
            <div class="m-t-20">
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">ALAMAT</span>
                    <p>Jl. Jenderal Ahmad Yani - Gresik 61119</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">TELEPON</span>
                    <p>031-3981811, 3982100, 3982200</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">FAX</span>
                    <p>031-3981722, 3982272</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">EMAIL</span>
                    <a href="mailto:pg@petrokimia-gresik.com">pg@petrokimia-gresik.com</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 m-b-30">
            <h6 class="font-semibold text-white text-uppercase">Kantor Perwakilan</h6>
            <div class="m-t-20">
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">ALAMAT</span>
                    <p>Jl. Tanah Abang III no.16 Jakarta 10160</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">TELEPON</span>
                    <p>021-3446459, 3446645</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">FAX</span>
                    <p>021-3841994</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">EMAIL</span>
                    <a href="mailto:perjaka@petrokimia-gresik.com">perjaka@petrokimia-gresik.com</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 m-b-30">
            <h6 class="font-semibold text-white text-uppercase">Pusat Layanan Pelanggan</h6>
            <div class="m-t-20">
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">TELEPON</span>
                    <p>08001888777 (bebas pulsa)</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">SMS/WHATSAPP</span>
                    <a
                        href="  https://api.whatsapp.com/send?phone=0811344774&amp;text=Halo Petrokimia Gresik, saya mau bertanya">0811344774</a>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">FAX</span>
                    <p>031-3979976</p>
                </div>
                <div class="m-b-10">
                    <span class="font-semibold text-muted db">EMAIL</span>
                    <a href="mailto:konsumen@petrokimia-gresik.com">konsumen@petrokimia-gresik.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer-2')
<div class="container">
    <div class="d-flex justify-content-between">
        <div class="copyright m-t-10 m-b-10">
            <p>Hak Cipta © 2019 <a href="http://www.petrokimia-gresik.com/">PT Petrokimia Gresik</a>.
                All Rights Reserved.<br />Untuk tampilan terbaik gunakan <a
                    href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank" rel="noreferrer noopener">Mozilla
                    Firefox</a> atau <a href="http://www.google.com/chrome" target="_blank"
                    rel="noreferrer noopener">Google
                    Chrome</a>.
            </p>
        </div>
        <div class="text-center">
            <img class="lazyload mr-2" alt="Sucofindo 9001"
                data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/sucofindo-9001.png"
                height="60">
            <img class="lazyload mr-2" alt="Sucofindo 14001"
                data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/sucofindo-14001.png"
                height="60">
        </div>
    </div>
</div>
@endsection
