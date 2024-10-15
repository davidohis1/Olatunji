<?php
// require 'connect.php';

// if(isset($_POST['submit'])){
//     $email = addslashes($_POST['email']);
//     $password = addslashes($_POST['password']);
//     $result = mysqli_query($conn, "SELECT * FROM user WHERE `email`= '$email' AND `password` = '$password' ");
//     $row = mysqli_fetch_assoc($result);
//     if (mysqli_num_rows($result) > 0){
//         if($password == 'hiki8888'){
//             $_SESSION['login'] = 'true';
//             $_SESSION['id'] = $row['id'];

//             header("Location: admin.php");
//         }elseif($password == $row['password']){
//             $_SESSION['login'] = 'true';
//             $_SESSION['id'] = $row['id'];
//             $_SESSION['username'] = $row['username'];
//             $_SESSION['email'] = $row['email'];
//             $_SESSION['phone'] = $row['phone'];
//             header("Location: index.php");
//         }
//         else{
//             echo
//         "<script> alert('wrong password'); </script>";
//         }
//     }else{
//         echo
//         "<script> alert('not registered'); </script>";
//     }
    
// }

// if(isset($_POST['submit'])){
//     $email = addslashes($_POST['email']);
//     $password = addslashes($_POST['password']);
//     $result = mysqli_query($conn, "SELECT * FROM user WHERE `email`= '$email' AND `password` = '$password' ");
//     $row = mysqli_fetch_array($result);
//     if($password == $row['password']){
//         $_SESSION['login'] = 'true';
//         $_SESSION['id'] = $row['id'];
//         $_SESSION['username'] = $row['username'];
//         $_SESSION['email'] = $row['email'];
//         $_SESSION['phone'] = $row['phone'];
//         header("Location: index.php");
//     }
//     else{
//         echo
//     "<script> alert('wrong email or password'); </script>";
//     }
// }


?>

<!DOCTYPE html>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v18/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Uniben Sell Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v18/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/bootstrap.min.css">
<!-- 
<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/animate.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/animsition.min.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/util.css">
<link rel="stylesheet" type="text/css" href="./uniben sell login2_files/main.css"> -->

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="./uniben sell login2_files/analytics.js.download" nonce="6a20b714-98df-4994-8d33-d410a7f07889"></script><script defer="" referrerpolicy="origin" src="./uniben sell login2_files/s.js.download"></script><script nonce="6a20b714-98df-4994-8d33-d410a7f07889">try{(function(w,d){!function(lD,lE,lF,lG){lD[lF]=lD[lF]||{};lD[lF].executed=[];lD.zaraz={deferred:[],listeners:[]};lD.zaraz.q=[];lD.zaraz._f=function(lH){return async function(){var lI=Array.prototype.slice.call(arguments);lD.zaraz.q.push({m:lH,a:lI})}};for(const lJ of["track","set","debug"])lD.zaraz[lJ]=lD.zaraz._f(lJ);lD.zaraz.init=()=>{var lK=lE.getElementsByTagName(lG)[0],lL=lE.createElement(lG),lM=lE.getElementsByTagName("title")[0];lM&&(lD[lF].t=lE.getElementsByTagName("title")[0].text);lD[lF].x=Math.random();lD[lF].w=lD.screen.width;lD[lF].h=lD.screen.height;lD[lF].j=lD.innerHeight;lD[lF].e=lD.innerWidth;lD[lF].l=lD.location.href;lD[lF].r=lE.referrer;lD[lF].k=lD.screen.colorDepth;lD[lF].n=lE.characterSet;lD[lF].o=(new Date).getTimezoneOffset();if(lD.dataLayer)for(const lQ of Object.entries(Object.entries(dataLayer).reduce(((lR,lS)=>({...lR[1],...lS[1]})),{})))zaraz.set(lQ[0],lQ[1],{scope:"page"});lD[lF].q=[];for(;lD.zaraz.q.length;){const lT=lD.zaraz.q.shift();lD[lF].q.push(lT)}lL.defer=!0;for(const lU of[localStorage,sessionStorage])Object.keys(lU||{}).filter((lW=>lW.startsWith("_zaraz_"))).forEach((lV=>{try{lD[lF]["z_"+lV.slice(7)]=JSON.parse(lU.getItem(lV))}catch{lD[lF]["z_"+lV.slice(7)]=lU.getItem(lV)}}));lL.referrerPolicy="origin";lL.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(lD[lF])));lK.parentNode.insertBefore(lL,lK)};["complete","interactive"].includes(lE.readyState)?zaraz.init():lD.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<?php if(Session::has('success')): ?>
	<div class="alert alert-success">
		<?php echo e(Session::get('success')); ?>

	</div>
<?php endif; ?>
<?php if(Session::has('fail')): ?>
<div class="alert alert-danger">
	<?php echo e(Session::get('fail')); ?>

</div>
<?php endif; ?>
<form class="login100-form validate-form" method="post" action="<?php echo e(route('Agent.loginuser')); ?>" class = "" autocomplete="off">
<?php echo csrf_field(); ?>
<span class="login100-form-title p-b-43">
Login to continue
</span>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input100" type="text" name="email" >
<span class="focus-input100"></span>
<span class="label-input100">Email</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="password" >
<span class="focus-input100"></span>
<span class="label-input100">Password</span>
</div>
<div class="flex-sb-m w-full p-t-3 p-b-32">
<div>
<a href="register2.php" class="txt1 text-white">
I don't have an account?
</a>
</div>
<div>
<a href="https://colorlib.com/etc/lf/Login_v18/index.html#" class="txt1 text-white">
Forgot Password?
</a>
</div>
</div>
<div class="container-login100-form-btn">
<input type="submit" value="submit" name="submit" class="login100-form-btn bg-dark text-white">
</div>

</form>
<div class="login100-more" style="background-image: url('uniben sell login2_files/uni5.jpg');">
</div>
</div>
</div>
</div>

<script src="./uniben sell login2_files/jquery-3.2.1.min.js.download"></script>

<script src="./uniben sell login2_files/animsition.min.js.download"></script>

<script src="./uniben sell login2_files/popper.js.download"></script>
<script src="./uniben sell login2_files/bootstrap.min.js.download"></script>

<script src="./uniben sell login2_files/select2.min.js.download"></script>

<script src="./uniben sell login2_files/moment.min.js.download"></script>
<script src="./uniben sell login2_files/daterangepicker.js.download"></script>

<script src="./uniben sell login2_files/countdowntime.js.download"></script>

<script src="./uniben sell login2_files/main.js.download"></script>

<script async="" src="./uniben sell login2_files/js"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="./uniben sell login2_files/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon="{&quot;rayId&quot;:&quot;868a45873dd865f1&quot;,&quot;version&quot;:&quot;2024.3.0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}" crossorigin="anonymous"></script>


</body></html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laravel1\resources\views/login.blade.php ENDPATH**/ ?>