<!-- <?php 


// $numbers = [2,53,23,54,21,53,66];
/*
$maximumNumber = 1;
for($i=0;$i<sizeof($numbers);$i++){
    if($numbers[$i] > $maximumNumber){
        $maximumNumber = $numbers[$i];
    }else{
        $maximumNumber = $maximumNumber;
    }
}

echo $maximumNumber;
*/

// $minimumNumber = 1;

// for($i=0;$i<count($numbers);$i++){
//     if($numbers[$i] < $minimumNumber){
//         $minimumNumber = $numbers[$i];
//     }else{
//         $minimumNumber = $minimumNumber;
//     }
// }

// echo $minimumNumber;

// echo max($numbers);
// echo min($numbers);

// $number = 23.5;
// echo max()
// echo min()
// echo ceil($number);
// echo floor($number);
// echo round($number);
// echo abs($number);

// echo intdiv(8,2);
// echo pow(3,2);
// echo sqrt(4);

// echo rand(1,10);
// echo mt_rand(1,10)

// $person1 = 4;
// $person2 = 5;
// $random = mt_rand(1,10);
// $count = 0;
// for($i=1;$i<=10;$i++){
//     if($person1 == $random){
//         echo "Random Value Is ". $random . "<br>";
//         echo "Your Value Is ". $person1 . "<br>";
//         echo "Both are Match And You Win";
//         $count = $count + 1;
        
//     }elseif($person2 == $random ){
//         echo "Random Value Is ". $random . "<br>";
//         echo "Your Value Is ". $person2 . "<br>";
//         echo "Both are Match And You Win";
//         $count = $count + 1;
//     }else{
//         echo "Random Value Is ". $random . "<br>";
//         echo "No Ones is Won";
//         $count = $count + 1;
//     }
// }
// echo "<br>";
// echo $count;

?> -->

<?php 
session_start();
?>
 
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 
    <title>Hello, world!</title>
</head>
 
<body>
 
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 col-lg-8 text-center mx-auto">
                <h2 class="text-center border rounded p-2">Welcome To Gueesing Game</h2>
                <p><i>You will have <b>5</b> tries to guess the correct number <b>(1-10)</b></i></p>
                <h4 class="text-success "><i>GOOD LUCK</i></h4>
 
                <a href="guessingGame.php" class="btn btn-lg btn-danger text-center">Start The Game</a>
 
            </div>
        </div>
    </div>
 
 
    <?php
    $_SESSION['rand'] = rand(1, 10);
    //echo $_SESSION['rand'];
    $_SESSION['counter'] = 0;
    ?>
    <div style="height: 300px;">
 
    </div>
 
    <footer class="text-center bg-primary mt-4 text-white ">
        <p>Design & Developed By <a href="/shawonhridoy.com" style="color: white;">shawonhridoy.com</a></p>
        <i>Shawon Hridoy</i>
    </footer>
 
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
 