
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <img src="{{ asset('images/39.jpg') }}" width="300" height="50" alt="Pet House">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('http://127.0.0.1:8000') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori Produk
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="{{ URL::to('makanan') }}">Makanan Hewan</a>
            <a class="nav-link" href="{{ URL::to('aksesoris') }}">Aksesoris Hewan</a>
            <a class="nav-link" href="{{ URL::to('vitamin') }}">Vitamin dan Obat Hewan</a>
          </div>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>

   </div>

</nav>
