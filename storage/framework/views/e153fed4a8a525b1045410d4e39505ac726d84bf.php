<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['ilias']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['ilias']); ?>
<?php foreach (array_filter((['ilias']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>

    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ilias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ilia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($ilia['id']); ?></td>
                <td><?php echo e($ilia['prenom']); ?></td>
                <td><?php echo e($ilia['nom']); ?></td>
                <td><?php echo e($ilia['handle']); ?></td>
                <td>
                    <a href="<?php echo e(route('view', $ilia['id'])); ?>" class="btn btn-info">View</a>
                    <a href="<?php echo e(route('edit.post', $ilia->id)); ?>" class="btn btn-primary">Edit</a>
                    <form style="display: inline;" action="<?php echo e(route('delete',$ilia['id'])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div><?php /**PATH C:\Users\ADMIN\lara1\resources\views/components/users.blade.php ENDPATH**/ ?>