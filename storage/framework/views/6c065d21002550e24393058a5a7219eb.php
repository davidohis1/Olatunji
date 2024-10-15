<?php
// require 'connect.php';


// if(empty($_SESSION['id'])){
// 	header("Location: login2.php"); 
//   }
  
// function FilterTable($query){
//     $connect = mysqli_connect('localhost', 'root', '', 'accomodation');
//     $FilterResult = mysqli_query($connect, $query);
//     return $FilterResult;
// }

// $query = "SELECT * FROM product ORDER BY id DESC LIMIT 6";
// $SearchResult = FilterTable($query);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootsthap@5.0.2/dist/css/bootsthap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Font Awesome 5 CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/index2.css">
<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
<style>
    body{
        background-image:  linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(/images/house1.webp);
        background-size:cover;
        background-position:fixed;
        margin:0;
        padding:0;
    }

    header{
        /* background-image:  linear-gradient(rgba(80, 75, 75, 0.55),rgb(26, 27, 29,0.99)),url(/images/house1.webp); */
        height:100%;
    }
    .table{
      overflow-x:scroll;
    }
</style>
</head>
<body>
	<header>
        <nav>
            <?php if(Session::has('loginId')): ?>
            <ul>
                <li><a href="<?php echo e(URL('dashboard')); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(URL('logout')); ?>">Logout</a></li>
            </ul>
            <?php endif; ?>
            <?php if(!Session::has('loginId')): ?>
            <ul>
                <li><a href="<?php echo e(URL('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(URL('register')); ?>">Register</a></li>
            </ul>
            <?php endif; ?>
            <div style="float:left;margin:0px 20px">
            <form action="<?php echo e(route('Rooms.search')); ?>" method="post" style="text-align: center; justify-content: center;">
            <?php echo csrf_field(); ?>
                <input class="input1" name="search"  placeholder="Search for Accommodation">
                <input type="submit" class="btn2" value="search" name="submit">
            </form>
        </div>
        </nav>
        <h1 class="text-center text-white fw-bold head" style="font-size:65px;">dash</h1>

        <div class="container-xxl">
          <div class="mt-5" style="margin:50px 100px">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Place</th>
                  <th scope="col">Date</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $data4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                <form action="<?php echo e(URL('update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <tr style="border:1px solid black;margin:10px;">
                    <?php echo method_field('put'); ?>
                    <input type="hidden" name="water" value="<?php echo e($data4->water); ?>">
                    <input type="hidden" name="tile" value="<?php echo e($data4->tile); ?>">
                    <input type="hidden" name="location" value="<?php echo e($data4->location); ?>">
                    <input type="hidden" name="description" value="<?php echo e($data4->description); ?>">
                    <input type="hidden" name="type" value="<?php echo e($data4->type); ?>">
                    <input type="hidden" name="product_id" value="<?php echo e($data4->product_id); ?>">
                    <input type="hidden" name="agent" value="<?php echo e($data4->agent); ?>">
                    <input type="hidden" name="id" value="<?php echo e($data4->id); ?>">
                    <td><input type="number" name="id" value="<?php echo e($data4->id); ?>"></td>
                    <td style="border:1px solid black;margin:10px;"><input type="text" value="<?php echo e($data4->name); ?>" name="name"></td>
                    <td style="border:1px solid black;margin:10px;"><input type="text" value="<?php echo e($data4->price); ?>" name="price"></td>
                    <td style="border:1px solid black;margin:10px;"><input type="text" value="<?php echo e($data4->place); ?>" name="place"></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
    </header>
	</div>

    <!-- Bootsthap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootsthap@5.0.2/dist/js/bootsthap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laravel1\resources\views/dashboard.blade.php ENDPATH**/ ?>