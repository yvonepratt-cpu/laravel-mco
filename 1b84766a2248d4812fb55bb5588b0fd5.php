

<?php $__env->startSection('title','About the author'); ?>

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-4">
      <img src="<?php echo e(asset('images/profile.jpg')); ?>" alt="Profile" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
      <h2>Yvone Brace</h2>
      <p>Brief profile: BSCS 2C, STUDENT .</p>

      <h4>Blog</h4>
      <p>Post: What I learned about OOP and building a website using Core PHP and Laravel.</p>
      <p><strong>Blog:</strong> I have learned that Object Oriented Programming (OOP) makes coding more organized by using classes and objects to separate tasks and avoid repeating code. It taught me how to think in terms of structure, reusability, and efficiency, in building a website using Core PHP, I understood how manual routing, database connections, and file handling work behind the scenes. When I explored Laravel, I saw how much easier and cleaner development becomes because it already provides powerful tools like routing, controllers, Blade templates, and built in security features. Overall, Narsing OOP, Core PIIP, and Laravel helped me understand how modern web applications are created, and it improved my confidence in writing cleares, more professional code."</p>
    </div>
  </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\LaravelProject\Activity1\resources\views/about.blade.php ENDPATH**/ ?>