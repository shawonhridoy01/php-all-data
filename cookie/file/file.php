<?php 

if(isset($_POST['submit'])){

    if(isset($_FILES['file'])){
        // $fileName = $_FILES['file'] ['name'];
        // echo $fileSize = $_FILES['file'] ['size'];
        // $tmp_name = $_FILES['file'] ['tmp_name'];
        // $type = $_FILES['file'] ['type'];
        $fileinfo = @getimagesize($_FILES["file"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        echo "<pre>";
        print_r($fileinfo);
        echo "</pre>";
    
        //  $fileNameExtension = explode('.',$fileName,2);
        // $fileOrginalName = time().$fileName;
        // $validExtesnion = ['jpg','png','jpeg'];
    
        // $ext = strtolower($fileNameExtension[1]);
        //     if(!in_array($ext,$validExtesnion)){
                
        //         echo 'file is invalid';
        // }elseif($fileName < (100 * 1000)){
        //     echo 'file must be less than 100 kb';
        // }else{

        // }
        
    

        



        // move_uploaded_file($tmp_name,'upload/'.$fileOrginalName);
    }else{
        echo 'file not found';
    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <input type="file" name="file" id="file">
        <button type=submit class="submit" id="submit" name="submit">Submit</button>

        <div class="box">

            <img src="./upload/<?php echo $fileOrginalName ?>" alt="">
        </div>

    </form>
</body>
</html>