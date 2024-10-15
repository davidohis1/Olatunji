<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(session()->has('success')): ?>
        <p><?php echo e(session()->get('success')); ?></p>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <h3>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5><?php echo e($error); ?></h5>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </h3>
    <?php endif; ?>
    <form action="<?php echo e(route('comment.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="message">
        <input type="submit">
    </form>
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\Laravel Projects\Laravel1\resources\views/comment.blade.php ENDPATH**/ ?>