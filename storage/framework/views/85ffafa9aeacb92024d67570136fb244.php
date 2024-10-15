<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *{
            width: 100%;
        }
        body{
            background-image: url('images/img1.jpg');
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center" style="height:100%;">
        <div class="col-md-6">

        </div>
        <div class="col-md-6 bg-white pt-5" style="height:100%;">
            <h3 class="text-center fw-bold">Add Product</h3>
            <div class="pt-3">
                <div class="px-5">
                    <form action="<?php echo e(route('store')); ?>" method="post">
                        <!-- <?php echo csrf_field(); ?> -->
                        <div class="mb-3">
                            <label for="name" class=" col-form-label text-left fw-bold">Name</label><br>
                            <div class="">
                              <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>">
                                <!-- <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?> -->
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="price" class=" col-form-label text-left fw-bold">Price</label>
                            <div class="">
                              <input type="price" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="price" name="price" value="<?php echo e(old('price')); ?>">
                                <!-- <?php if($errors->has('price')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                                <?php endif; ?> -->
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="market-price" class=" col-form-label text-left fw-bold">Market Price</label>
                            <div class="">
                              <input type="market-price" class="form-control <?php $__errorArgs = ['market-price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="market-price" name="market-price">
                                <!-- <?php if($errors->has('market-price')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('market-price')); ?></span>
                                <?php endif; ?> -->
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="quantity" class=" col-form-label text-left fw-bold">Quantity</label>
                            <div class="">
                              <input type="quantity" class="form-control" id="quantity" name="quantity">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="description" class=" col-form-label text-left fw-bold">description</label>
                            <div class="">
                              <input type="text" class="form-control" id="description" name="description" value="<?php echo e(old('description')); ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn fw-bold text-white" style="background-color:rgb(75, 75, 75);" value="Register">
                        </div>
                        <div>
                            <p class="text-center">Have an account? <a href="<?php echo e(URL('login')); ?>">login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>

<?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\Business Management Site\resources\views/add_product.blade.php ENDPATH**/ ?>