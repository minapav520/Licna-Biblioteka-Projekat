

<?php $__env->startSection('content'); ?>
<div class="card-custom" style="max-width: 600px; margin: auto;">
    <h2 style="font-style: italic; margin-bottom: 20px;">Novi zapis</h2>
    <form method="post" action="<?php echo e(route('books.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3"><label>Naslov</label><input type="text" name="title" class="form-control" required></div>
        <div class="mb-3"><label>Autor</label><input type="text" name="author" class="form-control" required></div>
        <div class="row">
            <div class="col"><label>Godina</label><input type="number" name="year" class="form-control"></div>
            <div class="col"><label>Ocena</label><input type="number" name="rating" min="1" max="5" class="form-control"></div>
        </div>
        <div class="mb-3 mt-3">
            <label>Žanr</label>
            <input type="text" name="genre" class="form-control" required>
        </div>
        <div class="mb-3 mt-3"><label>Utisci</label><textarea name="review" class="form-control" rows="3"></textarea></div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_favorite" value="1" id="f">
            <label class="form-check-label" for="f">Omiljena ❤️</label>
        </div>
        <button type="submit" class="btn-main w-100 border-0 py-2">Sačuvaj</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Mina Pavlovic\Desktop\eBiblioteka\resources\views/books/create.blade.php ENDPATH**/ ?>