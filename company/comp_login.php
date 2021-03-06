<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--css file  -->
    <link rel="stylesheet" href="/jobalert.in/company/style.css">

    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

    <title>JobAlert.in</title>
</head>

<body>

    <?php

     session_start();
    include '_dbconnect.php'; ?>

    <!--<?php
    

    if(isset($_POST['comp_login'])){

        
        $comp_email = $_POST['comp_email'];
        $comp_password = $_POST['comp_password'];
        
        $sql = "SELECT * FROM `company_db` WHERE comp_email='$comp_email' AND comp_password='$comp_password'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows>0){
            while($row = $result->fetch_array()){
                
                $_SESSION['comp_id']=$comp_id = $row['comp_id'];
                $_SESSION['comp_name']=$comp_name = $row['comp_name'];
                $_SESSION['comp_email']=$comp_email = $row['comp_email'];
                $_SESSION['comp_password']=$comp_password = $row['comp_password'];
                $_SESSION['comp_address']=$comp_address = $row['comp_address'];
                $_SESSION['comp_about']=$comp_about = $row['comp_about'];
                $_SESSION['comp_logo']=$comp_logo = $row['comp_logo'];

                
                  
                echo "<script>window.location.href='comp_welcome.php'</script>";
                
                

            }
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>  Invalid Credentials...
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                  </div>';

        }


    }
?>
-->


    <?php include("_header.php");?>

    <!-- login form -->


   <!-- <div class="container">
        <div class="container r_form" id="header">


            <div class="container  m-4">
                <div class="row">
                    <div class="col-sm-4  m-4 ">

                        <h3 class="text-uppercase font-weight-bold text-dark">Company Login</h3>
                        <form method="POST" action="">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email / Username</label>
                                <input type="email" class="form-control" id="comp_email" name="comp_email"
                                    aria-describedby="emailHelp" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="comp_password" id="comp_password"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-submit" name="comp_login">Login</button>
                            <a class="m-2" href="comp_register.php">New User? register here</a>
                        </form>

                    </div>
                    <div class="col-sm-4 ">
                        <img class="image2  animated" src="images/company2.svg" alt="election">
                    </div>
                </div>

            </div>


        </div>
    </div>
-->










    <div class="container-fluid" id="header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container" style="max-width:30rem">
                    <h3 class="text-uppercase font-weight-bold text-warning">Company Login</h3>


                    <?php
                        if(isset($_POST['comp_login'])){

                                
                            $comp_email = $_POST['comp_email'];
                            $comp_password = $_POST['comp_password'];
                            
                            $sql = "SELECT * FROM `company_db` WHERE comp_email='$comp_email' AND comp_password='$comp_password'";
                            $result = mysqli_query($conn, $sql);

                            if($result->num_rows>0){
                                while($row = $result->fetch_array()){
                                    
                                    $_SESSION['comp_id']=$comp_id = $row['comp_id'];
                                    $_SESSION['comp_name']=$comp_name = $row['comp_name'];
                                    $_SESSION['comp_email']=$comp_email = $row['comp_email'];
                                    $_SESSION['comp_password']=$comp_password = $row['comp_password'];
                                    $_SESSION['comp_address']=$comp_address = $row['comp_address'];
                                    $_SESSION['comp_about']=$comp_about = $row['comp_about'];
                                    // $_SESSION['comp_logo']=$comp_logo = $row['comp_logo'];

                                    
                                    
                                    echo "<script>window.location.href='comp_welcome.php'</script>";
                                    
                                    

                                }
                            }
                            else{
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong>  Invalid Credentials...
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                    </div>';

                            }


                        }
                        ?>





                    <form method="POST" action="" data-aos="fade-right">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email / Username</label>
                            <input type="email" class="form-control" id="comp_email" name="comp_email"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="comp_password" id="comp_password"
                                required>
                        </div>

                        <button type="submit" class="btn btn-submit" name="comp_login">Login</button>
                        <a class="m-2" href="comp_register.php">New Employer? register here</a>
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