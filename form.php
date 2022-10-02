<?php

// username
// email
// phone
// password
// repassword

// if(isset($_POST['name'])){

// }

$usernameError = $emalError = $phoneError = $passwordError = $repasswordError = null;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $valid = true;

    // validation of username 
    if(empty($username)){
        $usernameError  = 'Username must be fillable';
        $valid = false;
    }elseif(strlen($username) < 3){
        $usernameError  = 'Username not less than 3 char';
        $valid = false;
    }elseif(strlen($username) > 30){
        $usernameError  = 'Username not more than 30 char';
        $valid = false;
    }elseif(!preg_match('/^[a-z0-9]/',htmlentities($username))){
        $usernameError = "Enter a Valid User Name";
        $valid = false;
    }else{
        $validUsername = htmlspecialchars($username);
    }

    // validation of email 

    if(empty($email)){
        $emalError  = 'Username must be fillable';
        $valid = false;
    }elseif(strlen($email) < 3){
        $emalError  = 'Username not less than 3 char';
        $valid = false;
    }elseif(strlen($email) > 30){
        $emalError  = 'Username not more than 30 char';
        $valid = false;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emalError  = 'Email is not valid';
        $valid = false;
    }else{
        $validEmail = htmlspecialchars($email);
    }


    // phone number validation 
    if(empty($phone)){
        $phoneError  = 'Phone Number must be fillable';
        $valid = false;
    }elseif(strlen($phone) < 11 || strlen($phone) > 11){
        $phoneError  = 'Number must 11 character';
        $valid = false;
    }else{
        $validPhone = htmlspecialchars($phone);
    }


    // password validation 

    if(empty($password)){
        $passwordError = "Password must be required";
        $valid = false;
    }elseif(strlen($password) < 3){
        $passwordError = 'Password should not be less than 3';
        $valid = false;
    }elseif(strlen($password) > 20){
        $passwordError = 'Password should not be greater than 20';
        $valid = false;
    }elseif(!($password === $repassword)){
        $passwordError = "password and confirm password does not match";
        $valid = false;
    }else{
        $validPassword = md5($password);
    }

    // confirm password validation 

    if(empty($repassword)){
        $repasswordError = "Confirm Password must be required";
        $valid = false;
    }elseif(strlen($password) < 3){
        $repasswordError = 'Confirm Password should not be less than 3';
        $valid = false;
    }elseif(strlen($password) > 20){
        $repasswordError = 'Confirm Password should not be greater than 20';
        $valid = false;
    }elseif(!($password == $repassword)){
        $repasswordError = "Confirm password and confirm password does not match";
        $valid = false;
    }else{
        $validRePassword = md5($repassword);
    }





    if($valid){
        header('location: http://localhost/php/login.php');
    }else{
        echo "data faild";
    }








}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css.css">


    <title>Registration</title>
</head>

<body>
    <div class="container ">

        <div class="row">
            <div class="col-5 offset-3">

                <h4 class="text-center mt-4">Create Account</h4>
                <h5 class="text-center mb-2 mt-3">Get Started with your Free Account</h5>

                <button type="button" name="btn" id="btn" class="btn btn-danger text-center mb-2 mt-2 btn-md btn-block">Google</button>
                <button type="button" name="" id="" class="btn btn-primary btn-md btn-block">Facebook</button>


                <!-- input start from here.///=========== -->

                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="form-row align-items-center">

                        <!-- username------------------------------------------ -->

                        <label class="sr-only" for="username">Username</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Full Name" name="username" >
                            <br>
                        </div>
                        <div><small class="d-block"><strong class="text-danger"><?php echo $usernameError ?></strong></small></div>


                        <!-- email------------------------------------------ -->

                        <label class="sr-only" for="email">Email</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" > <br>
                        </div>
                        <small><strong class="text-danger"><?php echo $emalError ?></strong></small>



                        <!-- Phone------------------------------------------ -->

                        <label class="sr-only" for="phone">Phone</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></i></div>
                            </div>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number"  >
                        </div>
                        <small><strong class="text-danger"><?php echo $phoneError ?></strong></small>


                        <!-- Phone Number ------------------------------------------ -->
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                            </div>
                            <input type="password" class="form-control" id="password" placeholder="password" name="password" >
                        </div>
                        <small><strong class="text-danger"><?php echo $passwordError ?></strong></small>
                        <!-- Repeat Password ----------------------------------------- -->

                        <label class="sr-only" for="repassword">Repeat Password </label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                            </div>
                            <input type="password" class="form-control" id="repassword" placeholder="Repeat Password " name="repassword" >
                        </div>
                        <small><strong class="text-danger"><?php echo $repasswordError ?></strong></small>


                        <button type="submit"  id="submit" class="btn btn-primary btn-md btn-block mt-3" name="submit">Create Account</button>

                        <h5 class="text-center ml-5 mt-3">Have an account already?<a href="">log in</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</body>

</html>