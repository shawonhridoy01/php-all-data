<?php 

// 1. create cookie 
// setcookie(name,value,expire,path,domain,secure,httponly);

// 2. view cookie 

// $_COOKIE['name']

// $name = 'user';
// $value = 'shawon';

// setcookie($name,$value,time() + (3600),"/")


$name = $password = $checkbox = null;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    


    if($checkbox == 'on'){
         setcookie('name',$name,time()+(60*1),'/');
         setcookie('password',$password,time()+(60*1),'/');
         
    }else{
         echo 'false';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <input type="text" name="name" id="name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : '' ?>">
        <input type="password" name="password" id="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>">
        <input type="checkbox" name="checkbox" id="checkbox">
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>