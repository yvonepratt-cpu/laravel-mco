<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $__env->yieldContent('title','Act1-Website'); ?></title>
  <!-- Bootstrap CDN for quick styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Act1-Website</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">About the author</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('signup')); ?>">Signup</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-4">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <footer class="text-center py-3">
    &copy; YVONE BRACE:BSCS. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\USER\LaravelProject\Activity1\resources\views/layouts/app.blade.php ENDPATH**/ ?>