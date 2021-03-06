<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="/jobalert.in/user/style.css">

    <!-- font -->
     <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>JobAlert.in</title>
</head>

<body>

    <!-- db connection -->
    <?php       session_start();
                include '_dbconnect.php';       
    ?>

    <?php
        if(!$_SESSION['user_email'])
        {
            header("location:user_login.php");
        }

    ?>

    <!-- navbar -->
    <?php
    include("user_login_navbar.php");
    ?>


    <?php
    

    if(isset($_POST['register'])){

    $user_id=$_SESSION['user_id'];    
    $files = $_FILES['user_resume'];

    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];

    $fileext = explode("." , $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array("png" , "jpg" , "jpeg");

    if(in_array($filecheck , $fileextstored))
    {
        $destinationfile = 'uploads/'.$filename;
        move_uploaded_file($filetmp , $destinationfile);

        // $sql = "INSERT INTO `user_db`(`user_resume`)
        //  VALUES ('$destinationfile') WHERE `user_id` = '$user_id'";

         $sql2="UPDATE `user_db` SET `user_resume` = '$destinationfile' WHERE `user_db`.`user_id` = $user_id";
         
         $result2 = mysqli_query($conn, $sql2);
    

         $alert=true;
     
     
         
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                             <strong>Success!</strong>  Resume uploaded successfully ... 
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                             </button>
                       </div>';
         
    }







    
}

   
    

    
    
    
    

?>



    <div class="container">
        <div class="container-fluid mb-4" id="header">
            <div class="row">
                <div class="col">
                    <div class="container" style="max-width:30rem">
                        <h1 class="text-warning ">Upload you Resume Here</h1>
                        <form method="POST" data-aos="fade-right" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Resume </label>
                                <input type="file" class="form-control" id="comp_name" name="user_resume"
                                    aria-describedby="emailHelp" required>
                            </div>

                            <button type="submit" class="btn btn-vote font-weight-leight m-2"
                                name="register">Upload</button>
                        </form>

                    </div>



                </div>

            </div>


        </div>

    </div>
    <br><br><br><br><br><br>


    <div>
        <?php    include '../footer.php';       ?>
    </div>






    <!-- github animation link -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1200
    });
    </script>


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>