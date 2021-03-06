<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="company.css">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

    <title>JobAlert.in</title>
</head>

<body>

    <?php

     session_start();
    include '_dbconnect.php'; 
    ?>
    <?php include("_header.php");
    ?>




    <?php
 

if(isset($_POST['register'])){

    $comp_name = $_POST['comp_name'];
    $comp_email = $_POST['comp_email'];
    $comp_address = $_POST['comp_address'];
    $comp_about = $_POST['comp_about'];
    $comp_password = $_POST['comp_password'];
    $file=$_FILES['comp_logo'];

    

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    $sql = "SELECT * FROM `company_db` WHERE comp_email = '$comp_email' AND comp_name = '$comp_name "; 
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    echo"$result";
    echo"$numRows
    
    
    ";

     
    
    if($numRows>0)
    {
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Company already Registered Login now...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
      </div>';

    }
    else
    {

        if($fileerror==0)
        {
            $destfile = 'comp_logo_images/'.$filename;
            move_uploaded_file($filepath , $destfile);
        
            $sql1 = "INSERT INTO `company_db` ( `comp_name`, `comp_email`, `comp_password`, `comp_address`, `comp_about`, `comp_logo` ,  `datetime`) 
            VALUES ('$comp_name', '$comp_email', '$comp_password', ' $comp_address',  $comp_about, $destfile,  current_timestamp()) ";
            $result2 = mysqli_query($conn, $sql1);
            
            $alert = true;
            if($alert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your Registration is Done ... Login now
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
              </div>';
                }
            }

    }
        


   

        


       
       
       
    
    
    
    
    
    
    
    
    
    }


    
   
   


        
    
   



?>






    <!-- Register form -->

    <div class="container r_form ">


        <div class="container" id="header">
            <div class="row">
                <div class="container col-sm-6" style="height:100vh;">
                    <h1 class="text-warning ">Company Registration</h1>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" id="comp_name" name="comp_name"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" class="form-control" id="comp_email" name="comp_email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" id="comp_address" name="comp_address"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">About</label>
                            <input type="text" class="form-control" id="comp_about" name="comp_about"
                                aria-describedby="emailHelp" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="comp_password" id="exampleInputPassword1"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="file">Company Logo</label>
                            <input type="file" class="form-control-file" name="comp_logo" id="exampleFormControlFile1">
                        </div>

                        <button type="submit" class="btn btn-vote font-weight-leight m-2"
                            name="register">Submit</button>
                    </form>
                </div>
                <div class="col-sm-4 ">
                    <img class="image2  animated" src="images/company2.svg" alt="election">
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