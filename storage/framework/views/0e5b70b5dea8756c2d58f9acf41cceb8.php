<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </thead>
        <tbody>
            <tr>
                <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($detail->name); ?></td>
                <td><?php echo e($detail->email); ?></td>
                <td><?php echo e($detail->message); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laravel1\resources\views/read.blade.php ENDPATH**/ ?>