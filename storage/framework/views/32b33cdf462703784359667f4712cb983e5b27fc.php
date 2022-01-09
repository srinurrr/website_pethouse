
<?php $__env->startSection('content'); ?>
  <!-- carousel -->
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="<?php echo e(asset('images/34.jpg')); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo e(asset('images/38.jpg')); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo e(asset('images/37.jpg')); ?>" class="d-block w-100" alt="...">
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
        <a href="<?php echo e(URL::to('kategori/satu')); ?>">
          <img src="<?php echo e(asset('images/3.png')); ?>" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('kategori/satu')); ?>" class="text-decoration-none">
            <p class="card-text">Makanan Hewan</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="<?php echo e(URL::to('kategori/dua')); ?>">
          <img src="<?php echo e(asset('images/4.jpg')); ?>" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('kategori/dua')); ?>" class="text-decoration-none">
            <p class="card-text">Aksesoris Hewan</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="<?php echo e(URL::to('kategori/tiga')); ?>">
          <img src="<?php echo e(asset('images/5.png')); ?>" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('kategori/tiga')); ?>" class="text-decoration-none">
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
        <a href="<?php echo e(URL::to('produk/satu')); ?>">
          <img src="<?php echo e(asset('images/8.jpg')); ?>" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('produk/satu')); ?>" class="text-decoration-none">
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
        <a href="<?php echo e(URL::to('produk/dua')); ?>">
          <img src="<?php echo e(asset('images/6.png')); ?>" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('produk/dua')); ?>" class="text-decoration-none">
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
        <a href="<?php echo e(URL::to('produk/tiga')); ?>">
          <img src="<?php echo e(asset('images/7.jpg')); ?>" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('produk/tiga')); ?>" class="text-decoration-none">
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
        <a href="<?php echo e(URL::to('produk/satu')); ?>">
          <img src="<?php echo e(asset('images/11.jpg')); ?>" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('produk/satu')); ?>" class="text-decoration-none">
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
        <a href="<?php echo e(URL::to('produk/dua')); ?>">
          <img src="<?php echo e(asset('images/9.jpg')); ?>" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('produk/dua')); ?>" class="text-decoration-none">
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
        <a href="<?php echo e(URL::to('produk/tiga')); ?>">
          <img src="<?php echo e(asset('images/10.jpg')); ?>" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="<?php echo e(URL::to('produk/tiga')); ?>" class="text-decoration-none">
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

<!-- tentang toko -->
  <hr>
  <div class="row mt-4">
    <div class="col">
      <h2 class="text-center">Tentang Pet House</h2>
      <p>
          Pet House adalah website yang menyediakan berbagai keperluan hewan peliharaan antara lain seperti Makanan Hewan, Aksesoris, Obat, Vitamin dll. Website ini diharapkan agar mempermudah pemilik hewan peliharaan dalam mencari kebutuhan hewan peliharannya maka dibuatkan website khusus untuk hewan peliharaan. Menyediakan brand lokal dan internasioanal yang terus bertambah untuk para pecinta hewan peliharaan di seluruh Indonesia.
      </p>
    </div>
  </div>
  <!-- end tentang toko -->
<hr>
  <div class="row mt-4">
    <div class="col">
      <h4 class="text-center">Segera Hubungi Kami !!!</h4>
       <div style="font-size: 16px;line-height: 1.5;text-align: center20px;bottom:20px;">
    <a href="https://api.whatsapp.com/send?phone=+6288802017718&text=Halo">
<button style="background:#32C03C;text-align: center;36px;border-radius:5px">
<img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> WhatsApp </button></a>
<div>
</svg><span> +62888-0201-7718 </span></a>
</div>
     <div class='panel-atas'>
 <style>

body {

font-size: 16px;

line-height: 1.5;

text-align: center;

}
.panel-atas a {

fill: black;
width: 24px;
height: 24px;
}
.panel-atas a + a {
border-left: 1px solid #ddd;
}
.panel-atas .ikon {
fill: black;
width: 24px;
height: 24px;
}
.panel-atas .ikon + span {
display:block;
}
</style>
<a href='#' class='pethouseee_'><svg class="ikon" viewBox="0 0 24 24">

<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>

</svg><span>pethouseee_</span></a>

<a href='#' class='artikel'><svg class="ikon" viewBox="0 0 24 24">

<path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
</svg><span>Pet House</span></a>
<path d="M14.08,15

    </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko\resources\views/homepage/index.blade.php ENDPATH**/ ?>