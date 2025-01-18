

<?php $__env->startSection('content'); ?>
    <div style="display: flex ; margin:5px">
            <div class="card" style="width: 18rem; margin:5px">
                <div class="card-body">
          <h4 class="card-title">Id :<?php echo e($ilias['id']); ?></h4>
          <p class="card-text"><h4>Prenom :<?php echo e($ilias['prenom']); ?></h4></p>
          <p class="card-text"><h4>Nom :<?php echo e($ilias['nom']); ?></h4></p>
          <p class="card-text"><h4>Handle :<?php echo e($ilias['handle']); ?></h4></p>
          <center><a href="/" class="btn btn-primary">Retour a Home</a></center>
        </div>
      </div>
        </div>
     

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\lara1\resources\views/view.blade.php ENDPATH**/ ?>