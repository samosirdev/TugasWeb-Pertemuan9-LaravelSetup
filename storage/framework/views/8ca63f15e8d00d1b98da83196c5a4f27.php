

<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-4">Kontak</h1>
    <ul class="bg-slate-800 rounded-lg p-6 space-y-2">
        <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><strong><?php echo e($label); ?>:</strong> <?php echo e($nilai); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\TugasWeb-P9-LaravelSetup\resources\views/contact.blade.php ENDPATH**/ ?>