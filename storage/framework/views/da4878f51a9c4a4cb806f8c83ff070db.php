

<?php $__env->startSection('content'); ?>
<div class="row align-items-center" style="min-height: 70vh;">
    <div class="col-md-6">
        <h1 style="font-size: 50px; color: var(--blue); font-style: italic;">Vaša priča počinje ovde.</h1>
        <p style="font-size: 18px; color: #555; margin: 25px 0;">Digitalni dnevnik za sve vaše pročitane naslove i lične utiske.</p>
        <a href="<?php echo e(route('books.index')); ?>" class="btn-main" style="padding: 15px 30px;">Otvori policu</a>
    </div>
    <div class="col-md-6 text-center">
        <img src="../images/pocetna.png" style="max-width: 90%;">
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Mina🌷\Akademija\Zimski semestar\Veb1\Projekat\eBiblioteka\resources\views/welcome.blade.php ENDPATH**/ ?>