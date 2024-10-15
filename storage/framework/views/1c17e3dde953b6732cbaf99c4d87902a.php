<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/dash.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="justify-content-center" style="height:100%;display:flex;">
        <div class="bg-secondary text-white sidebar">
        <h2>Filter Products</h2>
            <ul>
                <form action="<?php echo e(route('search')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                <li><input type="text" class="input"  name="search" placeholder="search products">
                <input type="submit" class="submit" name="submit" value="search products"></li>
                </form>
                <li><a href="<?php echo e(URL('dashboard')); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(URL('finished')); ?>">Products Exhausted</a></li>
                <li><a href="<?php echo e(URL('last')); ?>">Low quantity Products</a></li>
            </ul>
        </div>
        <div class="content" style="height:100%;width:100%;">
            <nav class="" style="flex">
                <div class="row">
                <form action="<?php echo e(route('finished')); ?>" class="col-md-12">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <input type="text" name="search" id="date" placeholder="search products" class="col-md-9">
                        <input type="submit" name="submit" value="search" class="col-md-3">
                    </div>
                </form>
                </div>
            </nav>

           
                <div class="row justify-content-center mt-5">
                <h3 class="text-center place">Products Exhausted</h3>
                <?php $__currentLoopData = $finished; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col-lg-3 col-sm-6 d-flex mx-2 flex-column product-item my-3" id="product">
                    <div class="product pt-3" > 
                        <a onclick="view(<?php echo e($sites->id); ?>)">
						<img src="/css/laptop1.webp" alt="" style="width:100%;overflow-y:hidden;border-radius: 20px;">
                        </a>
                    </div>
                    <div class="text-center pt-0 form">
                        <h1 class="title pt-0 pb-1 "><?php echo e($sites-> name); ?></h1>
                        <h4 class="title pt-0 pb-1 "><?php echo e($sites-> date); ?></h1>
                        <h2 class="title pt-0 pb-1" style="color:red;">No quantity left</h2>
                        <h3 class="price">#<?php echo e($sites-> price); ?></h3>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
        </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\Business Management Site\resources\views/finishedproducts.blade.php ENDPATH**/ ?>