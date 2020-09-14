@extends('home.layouthome')

@section('css')
<link rel="stylesheet" href="http://localhost/blkstore/resources/css/home/keranjang.css">
@endsection


@section('konten')
<aside id="keranjang-belanja">
  <h1 class="text-center"> keranjang belanja</h1>
  <div class="container">
      <div class="row">
          <div class="col pt-5">
              <h3>daftar barang</h3>
              <div class="ml-5 pt-4">
                  <p>pakaian dalam</p>
              </div>
          </div>
          <div class="col-4 pt-5">
              <h4 class="text-center">detail barang</h4>
          </div>
      </div>
  </div>
</aside>
@endsection

