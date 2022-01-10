@extends('layouts.template')
@section('content')
<div class="container">
	<!-- produk Promo-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Promo</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{asset('images/8.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Whiskas Cat Food Pockat Ocean Fish 1.2Kg
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
                <del>Rp. 79.000,00</del>
                <br />
                Rp. 75.000,00
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
          <img src="{{asset('images/6.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Kalung Cat/Dog Halloween
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
                <del>Rp. 20.000,00</del>
                <br />
                Rp. 15.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('images/7.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Maxi-Plus 100g
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
                <del>Rp. 225.000,00</del>
                <br />
                Rp. 215 .000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk promo -->
@endsection