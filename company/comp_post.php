<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- css file -->
        <link rel="stylesheet" href="/jobalert.in/company/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>



<style>
        body{
            background-color:#ededed4d;
        }
    </style>
    
    <title>JobAlert.in</title>
</head>

<body>

    <?php

     session_start();
    include '_dbconnect.php'; 
    ?>
    <!-- navbar -->
    <?php
    include("comp_login_navbar.php");
    ?>
    <?php
        if(!$_SESSION['comp_email'])
        {
            header("location:comp_login.php");
        }

    ?>
    <!-- php -->
<?php
    


    if(isset($_POST['post_job'])){

        
    $job_name = $_POST['job_name'];
    $job_about = $_POST['job_about'];
    $job_address = $_POST['job_address'];
    $job_skills = $_POST['job_skills'];
    $job_salary = $_POST['job_salary'];
    $job_qualification = $_POST['job_qualification'];

    $comp_id=$_SESSION['comp_id'];

    $sql="INSERT INTO `job_db` ( `comp_id`, `job_name`, `job_about`, `job_address`, `job_skills`, `job_salary`, `job_qualification`, `datetime`)
             VALUES ( '$comp_id', '$job_name', '$job_about', '$job_address', '$job_skills', '$job_salary', '$job_qualification', current_timestamp())";

    $result = mysqli_query($conn, $sql);
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Job post is successfully added
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>';
    }

    




    

    
?>










    <!-- Register form -->

    <div class="container r_form ">


        <div class="container" id="header">
            <div class="row">
                <div class="container col-sm-6" style="height:100vh;">
                    <h1 class="text" style="color:#fedc19;" >Post New Job</h1>
                    <form method="POST" >
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" id="comp_name" name="job_name"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">About</label>
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="job_about" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="job_address" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Skills</label>
                        <textarea  type="text" class="form-control" id="exampleFormControlTextarea1" name="job_skills" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">salary</label>
                            <input type="text" class="form-control" id="comp_name" name="job_salary"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Qualification</label>
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="job_qualification" rows="3"></textarea>
                        </div>
                       
                       <button type="submit" class="btn btn-submit font-weight-leight mt-2 mb-4"
                            name="post_job">Post</button>
                    </form>
                </div>
                
            </div>

        </div>


    </div>

    <br><br><br><br><br>











    <div>
        <?php    include '../footer.php';       ?>
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