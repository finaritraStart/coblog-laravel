<?php $__env->startSection('content'); ?>

<style>
    .btn-b {
        outline: 0;
        margin-right: 5px;
        padding: 0.6em 24px 0.6em 24px;
        font-size: 14px;
        font-family: Google Sans;
        color: #fff;
        border: none;
        border-radius: 3px;
        font-weight: 300;
        cursor: pointer;
        background-color: rgb(26, 115, 232);
        transition: box-shadow 0.3sS;
        outline-style: none;
    }
</style>


<?php if(session()->has('message')): ?>

<p>
    <?php echo e(session()->get('message')); ?>

</p>

<?php endif; ?>

<?php if(Auth::check()): ?>
<br>
<a href="/blog/create" class="btn-b">
    Create post
</a>

<?php endif; ?>







<section class="about" id="about">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <div class="about-content">
            <div>
                <img src="<?php echo e(asset('images/' . $post->image_path)); ?>" alt="">
            </div>
            <div class="about-text">
                <div class="title">
                    <h2> <?php echo e($post->title); ?></h2>
                    <p>by <?php echo e($post->user->name); ?> , Created on <?php echo e(date('jS M Y', strtotime($post->updated_at))); ?></p>
                </div>
                <p><?php echo e($post->description); ?></p>
                <a href="/blog/<?php echo e($post->slug); ?>" class="btn-b">
                    lire
                </a>


                <?php if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id): ?>
                <span class="float-right">
                    <a href="/blog/<?php echo e($post->slug); ?>/edit" style="background-color:#00c851" class="btn-b">
                        modifier
                    </a>
                </span>

                <span class="float-right">
                    <form action="/blog/<?php echo e($post->slug); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>


                    </form>
                </span>
                <?php endif; ?>




            </div>
        </div>
    </div>
</section>














<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\larablog\resources\views/blog/index.blade.php ENDPATH**/ ?>