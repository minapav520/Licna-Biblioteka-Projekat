<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>PersoLib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --bg: #fdf6e9; --header: #f4eee0; --blue: #1a2e44; --orange: #e67e22; }
        body { background: var(--bg); font-family: 'Georgia', serif; margin: 0; }
        nav { background: var(--header); padding: 20px 80px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eaddca; }
        .logo { font-size: 26px; font-weight: bold; color: var(--blue); text-decoration: none; font-style: italic; }
        .nav-links a { text-decoration: none; color: var(--blue); margin-left: 25px; font-weight: 500; }
        .btn-main { background: var(--blue); color: white !important; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
        .card-custom { background: white; border-radius: 2px; padding: 30px; box-shadow: 10px 10px 0px #f4eee0; border: 1px solid #e0d7c6; margin-bottom: 20px; }
    </style>
</head>
<body>
<nav>
    <a href="<?php echo e(url('/')); ?>" class="logo">PersoLib</a>
    <div class="nav-links">
        <a href="<?php echo e(url('/')); ?>">Početna</a>
        <a href="<?php echo e(route('books.index')); ?>">Moja Polica</a>
        <a href="<?php echo e(route('books.index', ['favorites' => 1])); ?>" style="color: var(--orange);">❤️ Omiljeno</a>
        <a href="<?php echo e(route('books.create')); ?>" class="btn-main">Nova Knjiga</a>
    </div>
</nav>
<div class="container mt-5">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html><?php /**PATH C:\Users\Mina Pavlovic\Desktop\eBiblioteka\resources\views/layout.blade.php ENDPATH**/ ?>