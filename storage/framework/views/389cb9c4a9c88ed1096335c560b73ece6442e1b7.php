<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
                    <?php if(count($errors) > 0): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-warning"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <?php if($message = Session::get('error')): ?>
                        <div class="alert alert-warning">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-4">Masuk</button>
                            <p>Belum punya akun? Daftar<a href="<?php echo e(route('register')); ?>" class="text-decoration-none"> disini </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko\resources\views/auth/login.blade.php ENDPATH**/ ?>