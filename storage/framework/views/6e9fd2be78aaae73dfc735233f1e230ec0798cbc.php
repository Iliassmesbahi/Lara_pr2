


<?php $__env->startSection('content'); ?>
<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <form action="<?php echo e(route('home.index')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input
            type="text"
            class="form-control"
            id="nom"
            placeholder="Edit le nom"
          />
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input
            type="text"
            class="form-control"
            id="prenom"
            placeholder="Edit le prénom"
          />
        </div>
        <div class="mb-3">
          <label for="gmail" class="form-label">Gmail</label>
          <input
            type="email"
            class="form-control"
            id="gmail"
            placeholder="Edit le Gmail"
          />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\lara1\resources\views/update.blade.php ENDPATH**/ ?>