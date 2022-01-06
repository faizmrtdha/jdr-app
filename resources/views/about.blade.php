@extends('layouts.page')
@section('sidebar')
<div class="col-md-3 order-2 order-md-1 mt-3 mt-md-0">
    @foreach ($title as $a)
    <h4 class="card-title text-capitalie">{{ $a['title'] }}</h4>
    <div class="list-group list-group-flush mb-4">
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right active "
            href="https://petrokimia-gresik.com/page/makna-logo">{{ $a['childTitle'] }}
        </a>
        @endforeach
        {{-- <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/sejarah-perusahaan">
            Sejarah Perusahaan
        </a>
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/visi-misi-dan-budaya-perusahaan">
            Visi ,Misi dan Tata Nilai
            Perusahaan
        </a>
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/stuktur-organisasi">
            Struktur Organisasi
        </a>
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/kebijakan-sm-terintegrasi">Kebijakan SM Terintegrasi
        </a>
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/anak-perusahaan-usaha-patungan">Anak Perusahaan &amp; Usaha
            Patungan
        </a> --}}
    </div>
    <h4 class="card-title text-capitalie">Manajemen</h4>
    <div class="list-group list-group-flush mb-4">
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/komisaris">Komisaris </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/direksi">Direksi </a>
    </div>
    <h4 class="card-title text-capitalie">Produksi dan Fasilitas</h4>
    <div class="list-group list-group-flush mb-4">
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/kapasitas-produksi">Kapasitas Produksi </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/infrastruktur">Infrastruktur </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/fasilitas-penunjang">Fasilitas Karyawan </a>
    </div>
    <h4 class="card-title text-capitalie">Penghargaan</h4>
    <div class="list-group list-group-flush mb-4">
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/penghargaan-2021">Penghargaan 2021 </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/penghargaan-2020">Penghargaan 2020 </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/penghargaan-2019">Penghargaan 2019 </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/penghargaan-2018">Penghargaan 2018 </a>
    </div>
    <h4 class="card-title text-capitalie">Lingkungan &amp; K3</h4>
    <div class="list-group list-group-flush mb-4">
        <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/lingkungan">Lingkungan </a> <a
            class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
            href="https://petrokimia-gresik.com/page/keselamatan-dan-kesehatan-kerja-k3">Keselamatan dan
            Kesehatan
            Kerja
            (K3) </a>
    </div>
</div>
@endsection
@section('content')
<div class="col-md-9 order-1 order-md-2">
    <h1 class="title mt-0 "></h1>
    <div class="pt-2">
        <div class="mt-4 page-content">
            <figure><a
                    class="image-popup-container aos-init aos-animate cursor-pointer d-inline-block position-relative"
                    data-toggle="modal" data-target="#page-content-image" data-aos="fade-up"
                    data-aos-duration="1200"><img
                        src="https://storage.googleapis.com/pkg-portal-bucket/images/template/logo-PG-agro-trans-small.png"
                        alt="" class="lazyload image-popup loaded"
                        data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/logo-PG-agro-trans-small.png"
                        data-was-processed="true">
                    <div class="img-overlay justify-content-center align-items-center"><i
                            class="fas fa-search-plus fa-2x text-warning"></i></div>
                </a></figure>
            <p class="MsoNormal">Makna dan Filosofi</p>
            <ol>
                <li>Inspirasi logo PT Petrokimia Gresik adalah seekor kerbau berwarna kuning keemasan yang berdiri tegak
                    di atas kelopak daun yang berujung lima dengan tulisan berwarna putih di bagian tengahnya.
                </li>
                <li>Seekor kerbau berwarna kuning keemasan atau dalam bahasa Jawa dikenal sebagai Kebomas
                    merupakan penghargaan perusahaan kepada daerah di mana PT Petrokimia Gresik berdomisili, yakni
                    Kecamatan Kebomas di Kabupaten Gresik. Kerbau merupakan simbol sahabat petani yang bersifat loyal,
                    tidak buas, pemberani, dan giat bekerja.
                </li>
                <li>Kelopak daun hijau berujung lima melambangkan kelima sila Pancasila. Sedangkan tulisan PG merupakan
                    singkatan dari nama perusahaan PETROKIMIA GRESIK.</li>
                <li>Warna kuning keemasan pada gambar kerbau merepresentasikan keagungan, kejayaan, dan keluhuran budi.
                    Padu padan hijau pada kelopak daun berujung lima menggambarkan kesuburan dan kesejahteraan.</li>
                <li>Tulisan PG berwarna putih mencerminkan kesucian, kejujuran, dan kemurnian. Sedangkan garis batas
                    hitam pada seluruh komponen logo merepresentasikan kewibawaan dan elegan.</li>
                <li>Warna hitam pada penulisan nama perusahaan melambangkan kedalaman, stabilitas, dan keyakinan yang
                    teguh. Nilai-nilai kuat yang selalu mendukung seluruh proses kerja. <em> </em></li>
            </ol>
            <p style="text-align: justify"><em>update 200219</em></p>
            <div class="modal fade" id="page-content-image" tabindex="-1" role="dialog"
                aria-labelledby="page-content-image-title" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <img class="img-responsive"
                            src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-horizontal.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="social-share pt-5 pb-4 text-left">
            <h5 class="pb-2 mb-2">Bagikan</h5> <a target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?u=https://petrokimia-gresik.com/page/makna-logo&amp;display=popup&amp;ref=plugin&amp;src=like&amp;kid_directed_site=0"
                class="btn waves-effect waves-light btn-rounded mr-2 mb-2 lift-up hover:shadow btn-facebook share-facebook">
                <i class="fab fa-facebook mr-1"></i>Facebook</a>
            <a target="_blank"
                href="https://twitter.com/intent/tweet?url=https://petrokimia-gresik.com/page/makna-logo&amp;via=petrogresik"
                class="btn waves-effect waves-light btn-rounded mr-2 mb-2 lift-up hover:shadow btn-twitter share-twitter">
                <i class="fab fa-twitter mr-1"></i>Twitter</a>
            <a target="_blank" href="https://api.whatsapp.com/send?text=https://petrokimia-gresik.com/page/makna-logo"
                class="btn waves-effect waves-light btn-rounded mr-2 mb-2 lift-up hover:shadow btn-whatsapp share-whatsapp">
                <i class="fab fa-whatsapp mr-1"></i>Whatsapp</a><a target="_blank"
                href="https://petrokimia-gresik.com/page/makna-logo/print"
                class="btn waves-effect waves-light btn-rounded mr-2 mb-2 lift-up hover:shadow btn-dark share-print">
                <i class="fas fa-print mr-1"></i>Print</a>
        </div>
        <div id="banner-sliders" class="carousel slide carousel-fade bs-slider my-5" data-interval="4000"
            data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="lazyload d-block w-100 loaded"
                        data-src="https://storage.googleapis.com/pkg-portal-bucket/images/PG_Footer_Produk_921.jpeg"
                        alt="PG Footer Produk 921"
                        src="https://storage.googleapis.com/pkg-portal-bucket/images/PG_Footer_Produk_921.jpeg"
                        data-was-processed="true">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
