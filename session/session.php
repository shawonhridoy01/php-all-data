<?php 

session_start();


$_SESSION['color'] = "green";

if($_SESSION['color']){
    echo 'session is set';
}else{
    echo 'session is not set';
}


?>

