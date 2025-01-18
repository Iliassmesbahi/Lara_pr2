

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginalbf2cbba4870562f9163990bdac67b76fd1a36822 = $component; } ?>
<?php $component = App\View\Components\Users::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Users::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ilias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ilias)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf2cbba4870562f9163990bdac67b76fd1a36822)): ?>
<?php $component = $__componentOriginalbf2cbba4870562f9163990bdac67b76fd1a36822; ?>
<?php unset($__componentOriginalbf2cbba4870562f9163990bdac67b76fd1a36822); ?>
<?php endif; ?>
   
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\lara1\resources\views/home.blade.php ENDPATH**/ ?>