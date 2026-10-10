

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-4xl font-bold mb-4">Selamat Datang, <?php echo e($nama); ?>!</h1>
    <p class="text-slate-300">Ini adalah halaman beranda dari project Laravel Setup (Tugas Rutin 9).</p>
    <p class="mt-2 text-slate-400">Mata Kuliah: <?php echo e($matkul); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\TugasWeb-P9-LaravelSetup\resources\views/home.blade.php ENDPATH**/ ?>