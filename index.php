<?php include('layouts/header.php') ?>
<?php 
$request = $_SERVER['REQUEST_URI'];
 $router=str_replace('/login-register-using-php-main','',$request);
echo"<pre>";
print_r($router);
echo"</pre>";
die;



   
// switch ($router) {
//     case '/' :
       
//     case '' :
//         require __DIR__ .'/index.php';
//         break;
//     case '/register':
//         require __DIR__ .'/auth/register.php';
//         break;
//     case 'login' :
//         require '';
//         break;

//     }


?>   
   Welcome to Authentication system  -->
    <?php include('layouts/footer.php') ?>