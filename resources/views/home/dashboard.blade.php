@extends('home.layouthome')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="http://localhost/blkstore/resources/css/home/download.css">
@endsection

@section('konten')
<aside>
    <div class="container">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
        </div>
    </div>
  </aside>

<!-- membuat produk populer -->
<div id="header-content">
    <div class="container mt-5">
      <div class="row text-center justify-content-end">
        <div class="col">
          <p>Bokep Indo</p>
        </div>
        <div class="col">
          <a href="">Selengkapnya</a>
        </div>
      </div>
    </div>
    </div> 

  <div id="UploadTerbaru">
    <div class="container">
        <div class="row">
             @foreach($data as $dfr)
                <div id="kotak" class="col-5 col-sm-6 col-md-2">
                    <a href="{{ URL::to('produk/' . $dfr->id_barang) }}">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/testin/resources/img/1.jpg" alt=""> 
                            <div class="card-body">
                                <p>{{ $dfr->nama_barang }}</p>
                                <p>{{ $dfr->harga }}</p>
                            </div>
                        </div>
                    </a>
                </div> 
             @endforeach  
        </div>
    </div>
    </div>


  <!-- kategori -->
  <aside id="kategori">
    <div class="container">
      <h2>Cari produk bedasarkan kategori</h2>
    </div>
    
  </aside>

  <aside id="dashboard">
    <div class="container">
      <h2 class="text-center">punya barang yang ingin dijual? gabung</h2>
      <a href="#"><button><p>daftar sekarang</p></button></a>
    </div>
  </aside>

  <footer>
    <div class="container">
      <h2>BLK STORE</h2>
    </div>
  </footer>
@endsection

@section('javascript')
    
    <script>

        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    </script>
@endsection