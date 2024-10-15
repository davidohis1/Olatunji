<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        *{
            width: 100%;
        }
        body{
            background-image:  linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(/images/house1.webp);
            background-size:cover;
            width:100%;
        }
    </style>
</head>
<body>
<div class="row justify-content-center mt-5">
    <div class="col-md-8 col-sm-12">

        <div class="card">
            <div class="card-header text-center text-white fw-bold" style="background-color:red;">Login</div>
            <div class="card-body">
                <form action="<?php echo e(route('authenticate')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password">
                            <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn" style="background-color:red;" value="Login">
                    </div>
                    <div>
                        <p class="text-center">Have no account? <a href="<?php echo e(URL('register')); ?>">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laravel1\resources\views//login.blade.php ENDPATH**/ ?>