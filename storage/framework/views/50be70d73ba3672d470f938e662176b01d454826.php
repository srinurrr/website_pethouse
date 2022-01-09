
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-8 col-md-8 mb-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Item</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Kode
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Harga
                  </th>
                  <th>
                    Qty
                  </th>
                  <th>
                    Subtotal
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>PRO-1</td>
                  <td>Tempat Tidur Cat/Dog</td>
                  <td class="text-right">150.000</td>
                  <td class="text-right">2</td>
                  <td class="text-right">300.000</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>PRO-12</td>
                  <td>Kalung Cat/Dog</td>
                  <td class="text-right">65.000</td>
                  <td class="text-right">3</td>
                  <td class="text-right">195.000</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>PRO-3</td>
                  <td>Nova 1Kg Makanan Kelinci</td>
                  <td class="text-right">36.000</td>
                  <td class="text-right">12</td>
                  <td class="text-right">432.000</td>
                </tr>
                <tr>
                  <td colspan="5">
                    <b>Total</b>
                  </td>
                  <td class="text-right">
                    <b>927.000</b>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="<?php echo e(route('transaksi.index')); ?>" class="btn btn-sm btn-danger">Tutup</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ringkasan</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <form action="">
              <tbody>
                <tr>
                  <td>
                    Total
                  </td>
                  <td>
                    <input type="text" name="total" id="total" class="form-control" value="927.000">
                  </td>
                </tr>
                <tr>
                  <td>
                    Subtotal
                  </td>
                  <td>
                  <input type="text" name="subtotal" id="subtotal" class="form-control" value="954.000">
                  </td>
                </tr>
                <tr>
                  <td>
                    Diskon
                  </td>
                  <td>
                    <input type="text" name="diskon" id="diskon" class="form-control" value="0">
                  </td>
                </tr>
                <tr>
                  <td>
                    Ongkir
                  </td>
                  <td>
                    <input type="text" name="ongkir" id="ongkir" class="form-control" value="27.000">
                  </td>
                </tr>
                <tr>
                  <td>
                    Ekspedisi
                  </td>
                  <td>
                    <input type="text" name="ekspedisi" id="ekspedisi" class="form-control" value="jnt">
                  </td>
                </tr>
                <tr>
                  <td>
                    No. Resi
                  </td>
                  <td>
                    <input type="text" name="no_resi" id="no_resi" class="form-control" value="JP876556454377">
                  </td>
                </tr>
                <tr>
                  <td>
                    Status Pembayaran
                  </td>
                  <td>
                    <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                      <option value="sudah">Sudah Dibayar</option>
                      <option value="belum">Belum Dibayar</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    Status
                  </td>
                  <td>
                    <select name="status" id="status" class="form-control">
                      <option value="checkout">Checkout</option>
                      <option value="diproses">Diproses</option>
                      <option value="dikirim">Dikirim</option>
                      <option value="diterima">Diterima</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </td>
                </tr>
              </tbody>
              </form>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>