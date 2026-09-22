 

<?php $__env->startSection('title','Login'); ?>

<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="col-md-5">
      <h3>Login</h3>
      <form method="POST" action="#">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <button class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\LaravelProject\Activity1\resources\views/login.blade.php ENDPATH**/ ?>