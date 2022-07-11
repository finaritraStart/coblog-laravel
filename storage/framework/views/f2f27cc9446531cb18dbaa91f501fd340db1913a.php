<?php $__env->startSection('content'); ?>


<style>
    * {
        font-family: "Google Sans", "Noto Sans Myamar UI", arial, sans-serif;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .log-main {
        margin-top: 5%;
    }

    .log-main .log-card {
        display: flex;
        border: 1px solid #DADCE0;
        padding-top: 40px;
        width: 450px;
        height: auto;
        flex-direction: column;
        border-radius: 7px;
    }

    .card-header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-header .login-title {
        margin-top: 15px;
        font-weight: 400;
        font-size: 24px;
        color: #202124;
    }

    .card-header .login-subtitle {
        font-family: Roboto;
        letter-spacing: 0.1px;
        line-height: 24px;
        font-size: 16px;
        color: #202124;
        margin-top: 10px;
    }

    .card-header input[type='text'] {
        margin-top: 30px;
        padding: 10px;
        width: 75%;
        padding: 1.3em;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        outline-color: rgb(62, 146, 243);
    }

    .card-header input[type='text']::placeholder {
        color: #80868B;
    }

    .card-header input[type='password'] {
        margin-top: 30px;
        padding: 10px;
        width: 75%;
        padding: 1.3em;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        outline-color: rgb(62, 146, 243);
    }

    .card-header input[type='password']::placeholder {
        color: #80868B;
    }

    .card-header input[type='email'] {
        margin-top: 30px;
        padding: 10px;
        width: 75%;
        padding: 1.3em;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        outline-color: rgb(62, 146, 243);
    }

    .card-header input[type='email']::placeholder {
        color: #80868B;
    }

    .card .card-footer {
        margin-top: 10px;
        padding-left: 35px;
        padding-right: 35px;
    }

    .card-footer .forgot-email {
        font-weight: 600;
        color: rgb(26, 115, 232);
        font-family: Roboto;
        font-size: 14px;
        cursor: pointer;
    }

    .card-footer .security-text {
        margin-top: 50px;
        color: rgb(95, 99, 104);
        line-height: 20.0004px;
        vertical-align: baseline;
        font-size: 14px;
        font-family: Roboto;
    }

    .card-footer .security-text b {
        color: rgb(26, 115, 232);
        letter-spacing: 0.5px;
        cursor: pointer;
    }

    .card-footer .card-footer-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        flex-direction: row;
        margin-top: 40px;
        margin-bottom: 65px;
    }

    .card-footer .card-footer-buttons span {
        letter-spacing: 0.25px;
        font-size: 14px;
        font-family: Google Sans;
        cursor: rgb(25, 115, 232);
        font-weight: 600;
    }

    .card-footer .card-footer-buttons button {
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
    }

    .card-footer .card-footer-buttons button:hover {
        filter: brightness(90%);
        box-shadow: 0px 1px 1px rgb(173, 172, 172);
    }

    @media  scream and (max-width: 640px) {
        .main .card {
            width: 350px;
        }
    }

    nav {
        width: 100%;
    }
</style>



<div class="log-main">
    <div class="log-card">
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div align="center" class="card-header">
                <img src="" width="70">
                <span class="login-title"><?php echo e(__('Register')); ?></span>
                <span class="login-subtitle">nouveau compte</span>

                <input id="name" type="text" placeholder="votre nom" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                <?php $__errorArgs = ['name'];
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


                <input id="email" type="email" placeholder="votre adresse mail" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
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


                <input id="password" type="password" placeholder="entrer un mot de passe" name="password" required autocomplete="new-password">

                <?php $__errorArgs = ['password'];
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



                <input id="password-confirm" type="password" placeholder="confirmer votre mot de passe" name="password_confirmation" required autocomplete="new-password">



            </div>
            <div class="card-footer">

                <div class="card-footer-buttons">
                    <span>
                        <p class="forgot-email">
                            <?php echo e(__('Already have an account?')); ?>

                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="<?php echo e(route('login')); ?>">
                                <?php echo e(__('Login')); ?>

                            </a>
                        </p>
                    </span>


                    <button type="submit">
                        <?php echo e(__('Register')); ?>

                    </button>





                </div>

            </div>
    </div>





    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\larablog\resources\views/auth/register.blade.php ENDPATH**/ ?>