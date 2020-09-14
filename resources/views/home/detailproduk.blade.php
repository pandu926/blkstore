@extends('home.layouthome')

@section('css')
<link rel="stylesheet" href="http://localhost/blkstore/resources/css/home/.css">
@endsection

@section('konten')
<aside id="barang">
  <div class="container">
      <div class="row">
          <div class="col-4 mr-5 bg-dark">
              <p>apa</p>
          </div>
          <div class="col">
              <h3>{{ $data->nama_barang }}</h3>
              <h1 class="pt-5">{{ $data->harga }}</h1>
              <div class="row pt-5">
                  <div class="col">
                      <a href="{{ URL::to('keranjang') }}"><button>+ Keranjang</button></a>
                  </div>
                  <div class="col">
                    <a href="{{ URL::to('checkout') }}"><button>beli sekarang</button></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</aside>

<aside id="info">
  <div class="container">
      <h2>informasi Produk</h2>
      <table>
          <tr>
              <td>
                  <p>kategori</p>
              </td>
              <td>
                  <p>:Pakaian</p>
              </td>
          </tr>
          <tr>
              <td>
                  <p>kategori</p>
              </td>
              <td>
                  <p>:Pakaian</p>
              </td>
          </tr>
          <tr>
              <td>
                  <p>kategori</p>
              </td>
              <td>
                  <p>:akaian</p>
              </td>
          </tr>
          <tr>
              <td>
                  <p>kategori</p>
              </td>
              <td>
                  <p>:Pakaian</p>
              </td>
          </tr>
      </table>
  </div>
</aside>
@endsection

