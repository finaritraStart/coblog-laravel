<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'CoBlog')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <!-- Styles -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">



    <nav class="navbar" style="background-color: #2fa9d6;">
        <div class="container">
            <a href="<?php echo e(url('/')); ?>" class="navbar-brand"><?php echo e(config('app.name', 'Coblog')); ?></a>
            <div class="navbar-nav">
                <a href="/">home</a>
                <a href="/blog">blog</a>
                <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                <?php endif; ?>
                <?php else: ?>
                <span><?php echo e(Auth::user()->name); ?></span>

                <a href="<?php echo e(route('logout')); ?>" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                    <?php echo e(csrf_field()); ?>

                </form>
                <?php endif; ?>
            </div>
        </div>
    </nav>




    <?php echo $__env->yieldContent('content'); ?>







</html><?php /**PATH D:\laravel\larablog\resources\views/layouts/app.blade.php ENDPATH**/ ?>