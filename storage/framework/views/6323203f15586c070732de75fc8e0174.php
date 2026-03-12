

<?php $__env->startSection('content'); ?>
<h2 class="mb-5" style="font-style: italic; color: var(--blue);">Moja Polica</h2>

<div class="row">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-12">
        <div class="card-custom">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h3 style="font-style: italic; margin-bottom: 5px;">
                        <?php echo e($book->title); ?> 
                        <?php if($book->is_favorite): ?> <span>❤️</span> <?php endif; ?>
                    </h3>
                    
                    <p class="text-muted mb-2">
                        <?php echo e($book->author); ?> (<?php echo e($book->year); ?>) 
                        <?php if($book->pages): ?> | <?php echo e($book->pages); ?> str. <?php endif; ?>
                        <?php if($book->genre): ?> 
                            <span class="badge ms-2" style="background-color: var(--header); color: grey; font-weight: normal; border: 1px solid #eaddca;">
                                <?php echo e($book->genre); ?>

                            </span> 
                        <?php endif; ?>
                    </p>

                    <div class="mb-3" style="color: #f1c40f; font-size: 1.1rem;">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <?php if($i <= $book->rating): ?>
                                ★
                            <?php else: ?>
                                <span style="color: #ddd;">★</span> 
                            <?php endif; ?>
                        <?php endfor; ?>
                        <span class="text-muted" style="font-size: 0.8rem; margin-left: 5px;">
                            (<?php echo e($book->rating ?? 0); ?>/5)
                        </span>
                    </div>

                    <?php if($book->review): ?>
                    <p style="border-left: 3px solid var(--header); padding-left: 15px; font-style: italic; color: #555; background: #fdfdfd; padding-top: 5px; padding-bottom: 5px;">
                        "<?php echo e($book->review); ?>"
                    </p>
                    <?php endif; ?>
                </div>

                <div class="col-md-3 text-end">
                    <a href="<?php echo e(route('books.edit', $book)); ?>" class="btn btn-sm btn-outline-dark px-3">Uredi</a>
                    
                    <form action="<?php echo e(route('books.destroy', $book)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-outline-danger px-3" onclick="return confirm('Da li ste sigurni da želite da obrišete knjigu <?php echo e($book->title); ?>?')">
                            Obriši
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php if($books->isEmpty()): ?>
    <div class="text-center mt-5">
        <?php if(request()->has('favorites')): ?>
            <p class="text-muted">Trenutno nema omiljenih naslova! ❤️</p>
            <a href="<?php echo e(route('books.index')); ?>" class="btn-main">Vrati se na sve knjige</a>
        <?php else: ?>
            <p class="text-muted">Polica je trenutno prazna. Vreme je za novu priču! ✨</p>
            <a href="<?php echo e(route('books.create')); ?>" class="btn-main">Dodaj prvu knjigu</a>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Mina🌷\Akademija\ZimskiSemestar\Veb1\Projekat\eBiblioteka\resources\views/books/index.blade.php ENDPATH**/ ?>