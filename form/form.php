<?php 

$usernameError = null;
$emailError= null;
$phoneError = null;
$passwordError = null;
$rePasswordError = null;

$validUsername = $validEmail = $validPhone = $validPassword = $validRePassword = null;

$validData = true;
if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // validation of username 
    if(empty($username)){
        $usernameError = "Username must be required";
        $validData = false;
    }elseif(strlen($username) < 4){
        $usernameError = "Username must be more than 4 char";
        $validData = false;
    }elseif(strlen($username) > 30){
        $usernameError = "Username should not more than 30 char";
        $validData = false;
    }elseif(!preg_match('/^[a-z0-9]/',$username)){
        $usernameError = "Username is not valid";
        $validData = false;
    }else{
        $validUsername = $_POST['username'];
    }




    // email validation 

    if(empty($email)){
        $emailError = "Email must be required";
        $validData = false;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailError = "Please Enter a valid email ";
        $validData = false;
    }else{
        $validEmail = $_POST['email'];
    }
    

    // phone validation 

    if(empty($phone)){
        $phoneError = "Phone  must be required";
        $validData = false;
    }elseif(strlen($phone) < 11 ||  strlen($phone) > 11){
        $phoneError = "Phone must be 11 char";
        $validData = false;
    }elseif(filter_var($phone,FILTER_VALIDATE_INT)){
        $phoneError = "Number Must be integer";
        $validData = false;
    }else{
        $validPhone = $_POST['phone'];
    }

    // password validation 

    if(empty($password)){
        $passwordError = 'Password must be required';
        $validData = false;
    }elseif(strlen($password) < 4){
        $passwordError = "Password not less than 4 char ";
        $validData = false;
    }elseif(strlen($password) > 15){
        $passwordError = "Password not more than 15 char";
        $validData = false;
    }elseif($password != $repassword){
        $passwordError = "Password and confirm password must be match";
        $validData = false;
    }else{
        $validPassword = $_POST['password'];
    }

    // confirm password 

    if(empty($repassword)){
        $rePasswordError = 'Confirm Password must be required';
        $validData = false;
    }elseif(strlen($repassword) < 4){
        $rePasswordError = "Password not less than 4 char ";
        $validData = false;
    }elseif(strlen($repassword) > 15){
        $rePasswordError = "Password not more than 15 char";
        $validData = false;
    }elseif($password != $repassword){
        $rePasswordError = "Password and confirm password must be match";
        $validData = false;
    }else{
        $validRePassword = $_POST['password'];
    }
}

if($validData == true){
    // insert data into database 
    echo $validUsername;
    echo "<br>";
    echo $validEmail;
    echo "<br>";
    echo $validPhone;
    echo "<br>";
    echo $validPassword;
    echo "<br>";
    echo $validRePassword;
    echo "<br>";
    echo "Data  inserted Successfully";
}else{
    echo "Data not inserted";
}






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
    <title>Registration</title>
</head>

<body>
    <div class="container ">

        <div class="row">
            <div class="col-5 offset-3">

                <h4 class="text-center mt-4">Create Account</h4>
                <h5 class="text-center mb-2 mt-3">Get Started with your Free Account</h5>

                <button type="button" name="btn" id="btn"
                    class="btn btn-danger text-center mb-2 mt-2 btn-md btn-block">Google</button>
                <button type="button" name="" id="" class="btn btn-primary btn-md btn-block">Facebook</button>


                <!-- input start from here.///=========== -->

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-row align-items-center">

                        <!-- username------------------------------------------ -->

                        <label class="sr-only" for="username">Username</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Full Name"
                                name="username" >
                            
                        </div>
                        <small><strong class="text-danger"><?php  echo $usernameError?></strong></small>


                        <!-- email------------------------------------------ -->

                        <label class="sr-only" for="email">Email</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="text" class="form-control" id="email" placeholder="Email Address" name="email"
                                > 
                        </div>
                        <small><strong class="text-danger"><?php  echo $emailError?></strong></small>



                        <!-- Phone------------------------------------------ -->

                        <label class="sr-only" for="phone">Phone</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone"></i></i></div>
                            </div>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                        </div>
                        <small><strong class="text-danger"><?php  echo $phoneError?></strong></small>


                        <!-- Password Number ------------------------------------------ -->

                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                            </div>
                            <input type="password" class="form-control" id="password" placeholder="password"
                                name="password" >
                            
                        </div>
                        <small><strong class="text-danger"><?php  echo $passwordError?></strong></small>



                        <!-- Repeat Password ----------------------------------------- -->

                        <label class="sr-only" for="repassword">Repeat Password </label>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                            </div>
                            <input type="password" class="form-control" id="repassword" placeholder="Repeat Password "
                                name="repassword" >
                            
                        </div>
                        <small><strong class="text-danger"><?php  echo $rePasswordError?></strong></small>



                        <button type="submit" name="submit" id="" class="btn btn-primary btn-md btn-block mt-3"
                            name="submit">Create Account</button>

                        <h5 class="text-center ml-5 mt-3">Have an account already?<a href="">log in</a></h5>


                    </div>
                </form>
            </div>
        </div>



    </div>
    </div>
    </div>
</body>

</html>