<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="/jobalert.in/user/style.css">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>
    <title>jobAlert.in</title>
</head>

<body>

    <!-- db connection -->
    <?php    include '_dbconnect.php';       ?>


    <?php
        session_start();
 
        if(!$_SESSION['admin_name']){
            header("location:index.php");
        }

    ?>

    <!--admin navbar  -->
    <?php    include '_admin_navbar.php';       ?>


    <div class="container-fluid ">
        <div class="row m-4">
            <div class=" col-sm-6 col-xs-6 col-md-3 m-3">
                <div class="card-header font-weight-bold text-center text-uppercase" style="background-color:#fedc19;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);">Total No Of Companies</div>
                <div class="card-body" style="background-color:#fedc19;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);">
                    <?php

 

                        $sql = "SELECT * FROM `company_db`";

                        $result = mysqli_query($conn ,$sql);

                        $count=0;
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $count++;

                        } 
                        
                        echo'<h1 style="font-size:5rem;text-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);" class="card-title text-center"><i class="far fa-building"></i><i class="far fa-building"></i><i class="far fa-building"></i></br>'.$count.'</h1>';?> 
                </div>
            </div>
            <div class=" col-sm-6 col-xs-6 col-md-3 m-3">
                <div class="card-header font-weight-bold text-center text-uppercase" style="background-color:#fedc19;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);">Total No Of Job Post</div>
                <div class="card-body" style="background-color:#fedc19;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);">
                    <?php

 

                        $sql = "SELECT * FROM `job_db`";

                        $result = mysqli_query($conn ,$sql);

                        $count=0;
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $count++;

                        } 
                        
                        echo'<h1 style="font-size:5rem;text-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);" class="card-title text-center"><i class="fas fa-briefcase"></i></br>'.$count.'</h1>';?> 
                </div>
            </div>
            <div class=" col-sm-6 col-xs-6 col-md-3 m-3">
                <div class="card-header font-weight-bold text-center text-uppercase" style="background-color:#fedc19;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);">Total No Of Users</div>
                <div class="card-body" style="background-color:#fedc19;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);">
                    <?php

 

                        $sql = "SELECT * FROM `user_db`";

                        $result = mysqli_query($conn ,$sql);

                        $count=0;
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $count++;

                        } 
                        
                        echo'<h1 style="font-size:5rem;text-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);" class="card-title text-center"><i class="fas fa-users"></i></br>'.$count.'</h1>';?> 
                </div>
            </div>
           
        </div>
    </div>












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