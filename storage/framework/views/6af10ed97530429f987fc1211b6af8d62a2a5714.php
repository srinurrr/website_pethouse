
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="<?php echo e(asset('images/ka9.jpg')); ?>" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center">Sri Nuraeni</h3>
          <p class="text-muted text-center">Member sejak : 23 Mar 2020</p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            Pasireungit, Kab Sumedang
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            srinuraeni430@gmail.com
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            088802017718
          </p>
          <hr>
          <a href="<?php echo e(URL::to('admin/setting')); ?>" class="btn btn-primary btn-block">Setting</a>
        </div>
      </div>      
    </div>
    <div class="col col-lg-8 col-md-8">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">History Transaksi</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Invoice</th>
                  <th>Sub Total</th>
                  <th>Diskon</th>
                  <th>Ongkir</th>
                  <th>Total</th>
                  <th>Status Pembayaran</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Inv-01
                  </td>
                  <td>
                    500.000
                  </td>
                  <td>
                    0                  
                  </td>
                  <td>
                    27.000
                  </td>
                  <td>
                    527.000
                  </td>
                  <td>
                    Belum dibayar
                  </td>
                  <td>
                    Checkout
                  </td>
                  <td>
                    <a href="<?php echo e(route('transaksi.show', 1)); ?>" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Inv-02
                  </td>
                  <td>
                    900.000
                  </td>
                  <td>
                    0                  
                  </td>
                  <td>
                    27.000
                  </td>
                  <td>
                    927.000
                  </td>
                  <td>
                    Belum dibayar
                  </td>
                  <td>
                    Checkout
                  </td>
                  <td>
                    <a href="<?php echo e(route('transaksi.show', 2)); ?>" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Inv-03
                  </td>
                  <td>
                    300.000
                  </td>
                  <td>
                    0                  
                  </td>
                  <td>
                    7.000
                  </td>
                  <td>
                    307.000
                  </td>
                  <td>
                    Belum dibayar
                  </td>
                  <td>
                    Checkout
                  </td>
                  <td>
                    <a href="<?php echo e(route('transaksi.show', 3)); ?>" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    4
                  </td>
                  <td>
                    Inv-04
                  </td>
                  <td>
                    260.000
                  </td>
                  <td>
                    0                  
                  </td>
                  <td>
                    20.000
                  </td>
                  <td>
                    280.000
                  </td>
                  <td>
                    Belum dibayar
                  </td>
                  <td>
                    Checkout
                  </td>
                  <td>
                    <a href="<?php echo e(route('transaksi.show', 4)); ?>" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    5
                  </td>
                  <td>
                    Inv-05
                  </td>
                  <td>
                    150.000
                  </td>
                  <td>
                    0                  
                  </td>
                  <td>
                    27.000
                  </td>
                  <td>
                    177.000
                  </td>
                  <td>
                    Belum dibayar
                  </td>
                  <td>
                    Checkout
                  </td>
                  <td>
                    <a href="<?php echo e(route('transaksi.show', 5)); ?>" class="btn btn-sm btn-info mb-2">
                      Detail
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko\resources\views/user/index.blade.php ENDPATH**/ ?>