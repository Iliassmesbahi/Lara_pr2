


<?php $__env->startSection('content'); ?>


<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <form action="<?php echo e(route('update.post', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
          <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
            <label for="prenom" class="form-label">Prénom</label>
            <input
            name="prenom"
            value="<?php echo e($post->prenom); ?>"
              type="text"
              class="form-control"
              
            />
          <label for="nom" class="form-label">Nom</label>
          <input
          name="nom"
          value="<?php echo e($post->nom); ?>"
            type="text"
            class="form-control"
            
          />
        </div>
        
        </div>
        <div class="mb-3">
          <label for="handle" class="form-label">Handle</label>
          <input 
          name="handle"
          value="<?php echo e($post->handle); ?>"
            type="text"
            class="form-control"
            
          />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\lara1\resources\views/edit.blade.php ENDPATH**/ ?>