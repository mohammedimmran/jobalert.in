<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/jobportal/user/style.css">

     <!-- github animation link -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     
    <title>Document</title>
</head>

<body>

    <?php

     session_start();
    include '_dbconnect.php'; 
    ?>
    <?php include("_header.php");
    ?>
    <!-- php -->
    <?php
    

    if(isset($_POST['register'])){

        
    $user_name = $_POST['user_name'];
    $user_gender = $_POST['user_gender'];
    $user_email = $_POST['user_email'];
    $user_number = $_POST['user_number'];
    $user_address = $_POST['user_address'];
    $user_about = $_POST['user_about'];
    $user_skills = $_POST['user_skills'];
    $user_password = $_POST['user_password'];
    
    
    

     $sql = "SELECT * FROM `user_db` WHERE user_name = '$user_name' AND  user_email = '$user_email' AND user_number = '$user_number' "; 
    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0)
    {
                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> User already Registered Login now...
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
          </div>';

    }
    else
    {

    $sql2 = "INSERT INTO `user_db` ( `user_name`,`user_gender`, `user_email`, `user_number`, `user_address`, `user_about`, `user_skills`, `user_password`, `datetime`)
             VALUES ('$user_name','$user_gender', '$user_email', '$user_number', '$user_address', '$user_about', '$user_skills', '$user_password', current_timestamp())";
    $result2 = mysqli_query($conn, $sql2);

    $alert=true;


    
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your Registration is Done ... Login now
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                  </div>';
    

    }


            
       
       


    }
?>










    <!-- Register form -->

    <!--<div class="container r_form ">


        <div class="container" id="header">
            <div class="row">
                <div class="container col-sm-6" style="height:100vh;">
                    <h1 class="text-warning ">User Registration</h1>
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" id="comp_name" name="user_name"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Gender</label>
                            <input type="text" class="form-control" id="comp_name" name="user_gender"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" class="form-control" id="comp_email" name="user_email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Mobile Number</label>
                            <input type="text" class="form-control" id="comp_name" name="user_number"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea class="form-control" id="comp_address" name="user_address" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">About</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="user_about"
                                rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Skills</label>
                            <input type="text" class="form-control" id="comp_name" name="user_skills"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                                required>
                        </div>


                        <button type="submit" class="btn btn-vote font-weight-leight m-2"
                            name="register">Submit</button>
                        <a href="user_login.php">Already have an account ? login here</a>
                    </form>
                </div>
                <div class="col-sm-4 ">
                    <img class="image1 animated" src="/jobportal/images/registration.svg" alt="election">
                </div>
                <img class="image1 animated" src="/jobportal/images/registration.svg" alt="election">
            </div>

        </div>


    </div>-->


    <div class="container-fluid mb-4" id="header">
        <div class="row">



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container" style="max-width:30rem">
                    <h1 class="text-warning ">User Registration</h1>
                    <form method="POST" data-aos="fade-right">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" id="comp_name" name="user_name"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Gender</label>
                            <input type="text" class="form-control" id="comp_name" name="user_gender"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" class="form-control" id="comp_email" name="user_email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Mobile Number</label>
                            <input type="text" class="form-control" id="comp_name" name="user_number"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea class="form-control" id="comp_address" name="user_address" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">About</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="user_about"
                                rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Skills</label>
                            <input type="text" class="form-control" id="comp_name" name="user_skills"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                                required>
                        </div>


                        <button type="submit" class="btn btn-vote font-weight-leight m-2"
                            name="register">Submit</button>
                        <a href="user_login.php">Already have an account ? login here</a>
                    </form>

                </div>



            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 header-img">
                <img class="image1 img-fluid animated" src="/jobportal/images/registration.svg" alt="election">

            </div>
        </div>


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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>