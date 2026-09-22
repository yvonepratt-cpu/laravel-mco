

<?php $__env->startSection('title','Signup'); ?>

<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h3>Signup</h3>
      <form method="POST" action="#">
        <?php echo csrf_field(); ?>
        <div class="mb-3"><label class="form-label">User ID</label><input class="form-control" name="userid"></div>
        <div class="mb-3"><label class="form-label">Fullname</label><input class="form-control" name="fullname"></div>
        <div class="mb-3"><label class="form-label">Username</label><input class="form-control" name="username"></div>
        <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control" name="password"></div>
        <div class="mb-3"><label class="form-label">Confirm Password</label><input type="password" class="form-control" name="password_confirmation"></div>
        <button class="btn btn-success">Register</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\LaravelProject\Activity1\resources\views/signup.blade.php ENDPATH**/ ?>