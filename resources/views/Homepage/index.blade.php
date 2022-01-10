@extends('layouts.template')
@section('content')
  <!-- carousel -->
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('images/34.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/38.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/37.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end carousel -->

  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Kategori Produk</h2>
    </div>
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{asset('images/3.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">Makanan Hewan</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{asset('images/4.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">Aksesoris Hewan</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{asset('images/5.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">Obat dan Vitamin Hewan</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end kategori produk -->

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
  <!-- end produk terbaru -->


@endsection