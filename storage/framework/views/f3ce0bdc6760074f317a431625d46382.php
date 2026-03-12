

<?php $__env->startSection('content'); ?>
<h2 class="mb-5" style="font-style: italic; color: var(--blue);">Moja Polica</h2>
<div class="row">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-12">
        <div class="card-custom">
            <div class="row">
                <div class="col-md-9">
                    <h3 style="font-style: italic;"><?php echo e($book->title); ?> <?php if($book->is_favorite): ?> ❤️ <?php endif; ?></h3>
                    <p class="text-muted"><?php echo e($book->author); ?> (<?php echo e($book->year); ?>)</p>
                    <p style="border-left: 2px solid #ddd; padding-left: 10px; font-style: italic; color: #666;">"<?php echo e($book->review); ?>"</p>
                </div>
                <div class="col-md-3 text-end">
                    <a href="<?php echo e(route('books.edit', $book)); ?>" class="btn btn-sm btn-outline-dark">Uredi</a>
                    <form action="<?php echo e(route('books.destroy', $book)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Obriši?')">X</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Mina Pavlovic\Desktop\eBiblioteka\resources\views/books/index.blade.php ENDPATH**/ ?>