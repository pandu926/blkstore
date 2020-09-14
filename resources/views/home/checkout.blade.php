@extends('home.layouthome')

@section('css')
<link rel="stylesheet" href="http://localhost/blkstore/resources/css/home/checkout.css">
@endsection

@section('konten')
<aside id="keranjang-belanja">
  <h1 class="text-center"> detail Transaksi</h1>
  <div class="container">
      <div class="row">
          <div class="col pt-5">
              <h3>alamat </h3>
              <div class="ml-5 pt-4">
                  <p>serang wonrejo rt 2 rw 5 selomerto wonosobo</p>
              </div>
              <h3 class="pt-5">jasa expedisi </h3>
              <div class="ml-5 pt-4">
                  <p>jnt</p>
              </div>
          </div>
          <div class="col-4 pt-5">
              <h4 class="text-center">detail barang</h4>
          </div>
      </div>
  </div>
</aside>
@endsection

