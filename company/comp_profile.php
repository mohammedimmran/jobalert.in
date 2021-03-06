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
    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>




    <title>JobAlert.in</title>
</head>

<body>

    <!-- <h1>Imran</h1> -->
    <!-- db connection -->
    <?php       session_start();
                include '_dbconnect.php';       
    ?>

    <?php
        if(!$_SESSION['comp_email'])
        {
            header("location:comp_login.php");
        }

    ?>

    <!-- navbar -->
    <?php
    include("comp_login_navbar.php");
    ?>


    <?php
    

    if(isset($_POST['register'])){

    $comp_id=$_SESSION['comp_id'];    
    $comp_name = $_POST['comp_name'];
    $comp_address = $_POST['comp_address'];
    $comp_about = $_POST['comp_about'];
    $comp_password = $_POST['comp_password'];

   
    

    $sql2 = "UPDATE `company_db` SET 
                                  `company_db`.`comp_name` = '$comp_name' , `company_db`.`comp_about` = '$comp_about' , 
                                `company_db`.`comp_password` = '$comp_password' , `company_db`.`comp_address` = '$comp_address'
              WHERE `company_db`.`comp_id` = '$comp_id'";
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

        $comp_id=$_SESSION['comp_id'];

        $select="SELECT * FROM `company_db` WHERE comp_id='$comp_id'";
                
        $result1 = mysqli_query($conn ,$select);

        $count=0;

        while($row = mysqli_fetch_assoc($result1)){

            
            
          
            
            

        

           

            echo'
            <div class="container r_form ">


        <div class="container" id="header">
            <div class="row">
                <div class="container col-sm-6" style="height:100vh;">
                    <h1 class="text-warning ">Profile</h1>
                    <form method="POST"  data-aos="fade-right">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" id="comp_name" name="comp_name"  value="'.$row['comp_name'].'"
                                aria-describedby="emailHelp" >
                        </div>
                       
                        
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input class="form-control" id="comp_address" name="comp_address" placeholder="'.$row['comp_address'].'"  value="'.$row['comp_address'].'" rows="3">
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">About</label>
                        <input class="form-control" id="exampleFormControlTextarea1" name="comp_about"  placeholder="'.$row['comp_about'].'"  value="'.$row['comp_about'].'" rows="3">
                        </div>

                       

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="comp_password" id="exampleInputPassword1"
                             placeholder="'.$row['comp_password'].'"  value="'.$row['comp_password'].'">
                        </div>
                        

                        <button type="submit" class="btn btn-primary btn-vote font-weight-leight m-2 mb-4"
                            name="register">Edit</button>
                            <a  class="btn btn-success btn-vote font-weight-leight m-2 mb-4"
                            href="comp_welcome.php">Back</a>
                       
                    </form>
                </div>
                <div class="col-sm-4 ">

                <img class="image1  animated" src="/jobportal/images/profile.svg" alt="election">

                </div>
            </div>

        </div>


    </div>
            ';
        }

        ?>
    </div>





    <br><br><br><br><br>











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