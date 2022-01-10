@extends('layouts.template')
@section('content')
<div class="container">
<!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Makanan Hewan</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{asset('images/60.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Whiskas Tuna 1.2 Kg
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
                Rp. 69.000,00
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
          <img src="{{asset('images/61.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Vitakraft Premium Menu 500 Gr
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
                Rp. 50.000,00
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
          <img src="{{asset('images/62.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
              Alpo untuk Anjing Dewasa
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
                Rp. 114.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- end produk terbaru -->
  @endsection