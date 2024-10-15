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
                <a href="<?php echo e(URL('dashboard')); ?>"><li class="list">Dashboard</li></a>
                <a href="<?php echo e(URL('finished')); ?>"><li class="list">Products Exhausted <span><?php echo e($finished); ?></span></li></a>
                <a href="<?php echo e(URL('last')); ?>"><li class="list">Low quantity Products <span><?php echo e($last); ?></span></li></a>
            </ul>
        </div>
        <div class="content" style="height:100%;width:100%;">
            <nav class="" style="flex">
                <div class="row">
                <form action="<?php echo e(route('dashboard')); ?>" class="col-md-4">
                    <div class="row">
                        <input type="date" name="date" id="date" class="col-md-9">
                        <input type="submit" name="submit" value="search" class="col-md-3 sub">
                    </div>
                </form>
                <form action="<?php echo e(route('dashboard')); ?>" class="col-md-4">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <input type="text" name="search" id="date" placeholder="search products" class="col-md-9">
                        <input type="submit" name="submit" value="search" class="col-md-3 sub">
                    </div>
                </form>
                <form action="<?php echo e(route('dashboard')); ?>" class="col-md-4">
                    <div class="row">
                        <select name="time" id="time" class="col-md-9">
                            <option value="today">Today</option>
                            <option value="week">Last 7 days</option>
                            <option value="month">Last 30 days</option>
                        </select>
                        <input type="submit" name="submit" value="filter" class="col-md-3 sub">
                    </div>
                </form>
                </div>
            </nav>

            <div class="cont">
                <h3 class="text-center place">Admin Dashboard</h3>
            </div>
            <div class="pt-3">
                <div class="row justify-content-center">
                    <div class="col-md-3 card1">
                    <?php $quantity = 0;?>
                       
                        <h2><?php echo e($site); ?></h2>
                        <h3>Products</h3>
                    </div>
                    <div class="col-md-3 card1">
                    <?php $quantity = 0;?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $quantity += intval($sites->quantity);
                        ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <h2><?php echo $quantity;?></h2>
                        <h3>Sales</h3>
                    </div>
                    <div class="col-md-3 card1">
                        <?php $price = 0;?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $price1 = intval($sites->quantity) * intval($sites->price);
                        $price += intval($price1);
                        ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <h2><?php echo $price;?></h2>
                        <h3>Revenue</h3>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                <h3 class="text-center place"><?php echo e($place); ?> Sales</h3>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col-lg-3 col-sm-6 d-flex mx-2 flex-column product-item my-3" id="product">
                    <div class="product pt-3" > 
                        <a onclick="view(<?php echo e($sites->id); ?>)">
						<img src="/css/laptop1.webp" alt="" style="width:100%;overflow-y:hidden;border-radius: 20px;">
                        </a>
                    </div>
                    <div class="text-center pt-0 form">
                        <h1 class="title pt-0 pb-1 "><?php echo e($sites-> name); ?></h1>
                        <h4 class="title pt-0 pb-1 "><?php echo e($sites-> date); ?></h1>
                        <h2 class="title pt-0 pb-1"><?php echo e($sites-> quantity); ?> quantity left</h2>
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

<?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\Business Management Site\resources\views/dashboard.blade.php ENDPATH**/ ?>