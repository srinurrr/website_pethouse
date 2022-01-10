@extends('layouts.template')
@section('content')
<div class="container">
<!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Terbaru</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{asset('images/11.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Tempat Tidur Cat/Dog
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 150.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
          <img src="{{asset('images/9.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Nova 1Kg Makanan Kelinci
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 36.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
          <img src="{{asset('images/17.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Kalung Kucing/Anjing
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 36.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk keempat -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('images/10.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Tempat Makan Anjing
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 200.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- produk ke lima -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('images/55.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Kandang Kelinci
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 3.000.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- produk keempat -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('images/56.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Kandang Burung
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 1.000.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk terbaru -->
  @endsection