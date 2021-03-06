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

    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

     <!-- font -->
     <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">




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
    $user_name = $_POST['user_name'];
    $user_gender = $_POST['user_gender'];
 
    $user_address = $_POST['user_address'];
    $user_about = $_POST['user_about'];
    $user_skills = $_POST['user_skills'];
    $user_password = $_POST['user_password'];

   
    

    $sql2 = "UPDATE `user_db` SET `user_db`.`user_gender` = '$user_gender',`user_db`.`user_skills` = '$user_skills' ,
                                  `user_db`.`user_name` = '$user_name' , `user_db`.`user_about` = '$user_about' , 
                                `user_db`.`user_password` = '$user_password' , `user_db`.`user_address` = '$user_address'
              WHERE `user_db`.`user_id` = '$user_id'";
    $result2 = mysqli_query($conn, $sql2);
    

    $alert=true;


    
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Updation is Done ... 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                  </div>';
    

    }
    
    
    

?>



    <div class="container">
        <?php

        // $user_name=$_SESSION['user_name'];
        // $user_gender=$_SESSION['user_gender'];
        // $user_email=$_SESSION['user_email'];
        // $user_address=$_SESSION['user_address'];
        // $user_number=$_SESSION['user_number'];
        // $user_about=$_SESSION['user_about'];
        // $user_skills=$_SESSION['user_skills'];
        // $user_password=$_SESSION['user_password'];

        $user_id=$_SESSION['user_id'];

        $select="SELECT * FROM `user_db` WHERE user_id='$user_id'";
                
        $result1 = mysqli_query($conn ,$select);

        $count=0;

        while($row = mysqli_fetch_assoc($result1)){
            echo'
                    <div class="container-fluid" id="header">
                    <div class="row">
            
            
            
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="container" style="max-width:30rem">
                                <h1 class="text-warning ">Profile</h1>
                                <form method="POST" data-aos="fade-right">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Name</label>
                                        <input type="text" class="form-control" id="comp_name" name="user_name"
                                            value="'.$row['user_name'].'" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Gender</label>
                                        <input type="text" class="form-control" id="comp_name" name="user_gender"
                                            value="'.$row['user_gender'].'">
                                    </div>
            
            
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input class="form-control" id="comp_address" name="user_address"
                                            placeholder="'.$row['user_address'].'" value="'.$row['user_address'].'" rows="3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">About</label>
                                        <input class="form-control" id="exampleFormControlTextarea1" name="user_about"
                                            placeholder="'.$row['user_about'].'" value="'.$row['user_about'].'" rows="3">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Skills</label>
                                        <input type="text" class="form-control" id="comp_name" name="user_skills"
                                            placeholder="'.$row['user_skills'].'" value="'.$row['user_skills'].'"
                                            aria-describedby="emailHelp">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                                            placeholder="'.$row['user_password'].'" value="'.$row['user_password'].'">
                                    </div>
            
            
                                    <button type="submit" class="btn btn-primary btn-vote font-weight-leight m-2 mb-4"
                                        name="register">Edit</button>
                                    <a class="btn btn-success btn-vote font-weight-leight m-2 mb-4" href="user_welcome.php">Back</a>
            
                                </form>
            
                            </div>
            
            
            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 header-img">
                            <img class="image1  animated" src="/jobalert.in/images/profile.svg" alt="election">
            
                        </div>
                    </div>
            </div>';
        }?>
    </div>


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