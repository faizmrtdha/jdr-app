<div class="col-md-3 order-2 order-md-1 mt-3 mt-md-0">
  <h4 class="card-title text-capitalie">Profile Company</h4>
  <div class="list-group list-group-flush mb-4">
    @foreach ($linkSidebar as $link)
      <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right" href="{{ $link->slug }}">{{ $link->title }}</a>
    @endforeach
  </div>

  {{-- <h4 class="card-title text-capitalie">Profile Perusahaan</h4>
  <div class="list-group list-group-flush mb-4">
    <a class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
      href="https://petrokimia-gresik.com/page/komisaris">Komisaris </a> <a
      class="list-group-item px-2 py-2 border-top-0 border-bottom-0 lift-right  "
      href="https://petrokimia-gresik.com/page/direksi">Direksi </a>
  </div>
  <h4 class="card-title text-capitalie">Produksi dan </h4>
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
  </div> --}}
</div>
