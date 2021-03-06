<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/jobalert.in/company/style.css">
    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">


    <style>
    .btn-resume {
        background-color: #000;
        border: none;
        color: #fedc19;
        padding: 8px 20px;
        cursor: pointer;
        font-size: 0.8rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.178);
    }

    .icon-bar {
        position: fixed;
        top: 90%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 11;
        right: 0;
        bottom: 0;
        
        
    }

    .icon-bar a {
        display: block;
        text-align: center;
        /* padding: 2px; */
        margin: 10px;
        transition: all 0.3s ease;
        color: #000;
        font-size: 40px;
        border-radius: 50%;
        width: 4.5rem;
        height: 3.7rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.178);
    }

    .icon-bar a:hover {
        background-color: #000;
        color:#fedc19;
    }

    .add {
        background: #fedc19;
        color: white;
    }
    </style>


    <title>JobAlert.in</title>
</head>

<body>


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
    <div class="icon-bar">

        <!-- <a href="#" class="facebook"><i class="fas fa-plus-circle"></i></a> -->
        <a href="comp_post.php" class="add "><i class="fas fa-plus"></i></a>
    </div>






    <?php

    
$sql = "SELECT * FROM user_db  ";

$result = mysqli_query($conn ,$sql);

while($row = mysqli_fetch_assoc($result)){

    
    $user_id=$row['user_id'];
    $user_name=$row['user_name'];
    $user_email=$row['user_email'];
    $user_gender=$row['user_gender'];
    $user_number=$row['user_number'];
    $user_address=$row['user_address'];
    $user_about=$row['user_about'];
    $user_skills=$row['user_skills'];
    $user_resume=$row['user_resume'];
    $comp_id=$_SESSION['comp_id'];

    echo'
    
    <div class="container post" id="post" data-aos="fade-right" >
<div class="card post m-4">
    <div class="card-header">
        <i class="far fa-user-circle card-header-icon "></i>
        <span class="text-uppercase  card-header-name font-weight-bold"> '.$user_name.'</span>
    </div>
    <div class="card-body">
        
        <p class="card-title card-comp-details"><i class="fas fa-envelope"></i>  &nbsp;      '.$user_email.' </p>
        <p class="card-title card-comp-details"><i class="fas fa-phone-alt"></i>  &nbsp; '.$user_number.' </p>
        <p class="card-title card-comp-details text-capitalize">Gender : '.$user_gender.' </p>
        <p class="card-text card-comp-details">About : '.$user_about.'
        </p>
        <p class="card-text card-comp-details font-weight-bold">Skills : '.$user_skills.'</p>

        <div class="container inline-block">

       <a class="btn-resume" href=/jobportal/user/'.$user_resume.' download><i class="fa fa-download"></i> Download Resume</a>
        <a  href="comp_message.php?job_id='.$user_id.'&comp_id='.$comp_id.'" class="btn  btn-apply mt-4 ml-4">Message</a>
        

        </div>
        

        
        
    </div>
</div>
</div>

    ';





}





?>
    <div class="container">
        <p class="text-center font-weight-bold text-warning">
            Loading...
        </p>
    </div>

    <!-- 
<button class="btn-resume"><i class="fa fa-download"></i> Download Resume</button>
        <div class=" mt-4" >
            <a  href="comp_message.php?job_id='.$user_id.'&comp_id='.$comp_id.'" class="btn btn-success btn-apply">Message</a>
        </div> -->





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