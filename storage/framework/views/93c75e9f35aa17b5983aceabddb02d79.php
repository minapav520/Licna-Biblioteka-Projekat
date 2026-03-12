

<?php $__env->startSection('content'); ?>
<div class="card-custom" style="max-width: 600px; margin: auto;">
    <h2 style="font-style: italic; margin-bottom: 20px;">Izmeni zapis: <?php echo e($book->title); ?></h2>
    <form method="post" action="<?php echo e(route('books.update', $book)); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label class="form-label">Naslov</label>
            <input type="text" name="title" value="<?php echo e($book->title); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="author" value="<?php echo e($book->author); ?>" class="form-control" required>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Godina</label>
                <input type="number" name="year" value="<?php echo e($book->year); ?>" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Stranica</label>
                <input type="number" name="pages" value="<?php echo e($book->pages); ?>" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Ocena (1-5)</label>
                <input type="number" name="rating" value="<?php echo e($book->rating); ?>" min="1" max="5" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Žanr</label>
            <input type="text" name="genre" value="<?php echo e($book->genre); ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Utisci</label>
            <textarea name="review" class="form-control" rows="3"><?php echo e($book->review); ?></textarea>
        </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="is_favorite" value="1" id="f" <?php echo e($book->is_favorite ? 'checked' : ''); ?>>
            <label class="form-check-label" for="f">
                Sačuvaj u omiljene ❤️
            </label>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn-main flex-grow-1 border-0 py-2">Sačuvaj izmene</button>
            <a href="<?php echo e(route('books.index')); ?>" class="btn btn-outline-secondary py-2">Otkaži</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Mina🌷\Akademija\ZimskiSemestar\Veb1\Projekat\eBiblioteka\resources\views/books/edit.blade.php ENDPATH**/ ?>