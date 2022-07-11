<?php $__env->startSection('content'); ?>


<style type="text/css">
    * {
        font-family: "Google Sans", "Noto Sans Myamar UI", arial, sans-serif;
    }

    .main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }



    /*input field*/
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /*button*/
    button {
        background-color: #4285F4;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
    }

    button:hover {
        filter: brightness(90%);
        box-shadow: 0px 1px 1px rgb(173, 172, 172);
    }

    .avatar-div,
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 20%;
        border-radius: 50%;
    }


    .log-container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    .main {
        margin-top: 5%;
    }

    .main .modal-content {
        display: flex;
        border: 1px solid #DADCE0;
        padding-top: 40px;
        width: 450px;
        height: auto;
        flex-direction: column;
        border-radius: 7px;


    }


    @media  scream and (max-width: 640px) {
        .modal-content {
            width: 350%;
        }
    }
</style>

<div class="main">
    <div id="id01" class="modal">

        <form class="modal-content animate" action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="imgcontainer">
                <img src="avatar5.png" alt="" class="avatar">

                <h3><?php echo e(__('Login')); ?></h3>


            </div>

            <div class="log-container">
                <!--  <label><b> <?php echo e(__('E-Mail Address')); ?>:</b></label>-->
                <input type="email" placeholder="votre adresse mail" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs italic mt-4">
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <!-- <label><b> <?php echo e(__('Password')); ?>:</b></label>-->
                <input id="password" type="password" placeholder="votre mot de passe" class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required>

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p>
                    <?php echo e($message); ?>

                </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



                <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>><?php echo e(__('Remember Me')); ?>

                <br>


                <button type="submit">
                    <?php echo e(__('Login')); ?>

                </button>

                <?php if(Route::has('register')): ?>
                <p>
                    <?php echo e(__("Don't have an account?")); ?>

                    <a href="<?php echo e(route('register')); ?>">
                        <?php echo e(__('Register')); ?>

                    </a>
                </p>
                <?php endif; ?>

            </div>

            <div class="container" style="background-color: #f1f1f1;">

                <span class="password"> <?php if(Route::has('password.request')): ?>
                    <a class="" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                    <?php endif; ?> </span>

            </div>

        </form>

    </div>
</div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\larablog\resources\views/auth/login.blade.php ENDPATH**/ ?>