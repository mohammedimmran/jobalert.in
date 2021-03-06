<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>

    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">


    <!-- css -->
    <link rel="stylesheet" href="/jobalert.in/user/style.css">
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

    <h1 class="text-center m-4  text-uppercase recent_post">Recent Posts</h1>
    <!-- 
    <div class="container" id="search">

        <form class="form-inline" action="user_search.php" method="GET">
            <input name="job_name" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
            <a href="user_welcome.php" class="btn btn-dark ml-4">Back</a>
        </form>

    </div> -->

    <div class="container">
        <div class="container bg-dark mt-4 p-4" id="search">
            <form class="form-inline" action="user_search.php" method="GET">
                <input name="job_name" style="width:80%;height:3rem;background-color:#fedc19;"
                    class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="div">
                    <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                    <a href="user_welcome.php" class="btn btn-light my-2 ml-4 my-sm-0" type="submit">All Posts</a>
                </div>
            </form>
        </div>

    </div>

    <?php


        $noResult =true;

        $job_names = $_GET["job_name"];
        
        $sql="SELECT * FROM company_db JOIN job_db ON company_db.comp_id = job_db.comp_id WHERE job_name='$job_names' OR comp_name='$job_names' OR job_salary='$job_names' ORDER BY job_db.datetime DESC ";
    
        $result = mysqli_query($conn ,$sql);


        while($row = mysqli_fetch_assoc($result)){

            $job_id=$row['job_id'];
            $comp_id=$row['comp_id'];
            $comp_name=$row['comp_name'];
            $job_name=$row['job_name'];
            $job_about=$row['job_about'];
            $job_address=$row['job_address'];
            $job_skills=$row['job_skills'];
            $job_salary=$row['job_salary'];
            $job_qualification=$row['job_qualification'];
            $job_datetime=$row['datetime'];

            echo'
            <div class="container post" id="post" data-aos="fade-right" >
                <div class="card post m-4">
                    <div class="card-header">
                        <i class="fas fa-briefcase card-header-icon"></i>
                        <span class="text-uppercase  card-header-name font-weight-bold"> '.$job_name.'</span>
                    </div>
                <div class="card-body">
                <div class="row">
       <div class="col">

       <span class="card-title card-header-name font-weight-bold">
                        <i class="far fa-building card-header-name"></i> &nbsp;&nbsp;&nbsp;&nbsp;'.$comp_name.'
                    </span>
                        
                    <h5 class="card-title card-comp-details">
                        <i class="fas fa-money-bill-alt card-header-name"></i> &nbsp;&nbsp;&nbsp;'.$job_salary.' Rs/-
                    </h5>
                        
                    <p class="card-text card-comp-details">
                        <i class="fas fa-map-marker-alt card-header-name"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$job_address.'
                    </p>

       </div>
       <div class="col">

       <p class="card-text card-comp-details">Skills : '.$job_skills.'</p>
                    <p class="card-text card-comp-details">About  :'.$job_about.'</p>
                    <p class="card-text card-comp-details">Posted On : '.$job_datetime.'</p>


       </div>
   </div>
                    
                
                    <a href="apply_job.php?job_id='.$job_id.'&job_name='.$job_name.'&comp_id='.$comp_id.'&comp_name='.$comp_name.'" 
                    class="btn btn-primary btn-apply">Apply
                    </a>
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

    <div>
        <?php    include '../footer.php';       ?>
    </div>



    <!-- 
   <span class="card-title card-header-name font-weight-bold">
                        <i class="far fa-building card-header-name"></i> &nbsp;&nbsp;&nbsp;&nbsp;'.$comp_name.'
                    </span>
                        
                    <h5 class="card-title card-comp-details">
                        <i class="fas fa-money-bill-alt card-header-name"></i> &nbsp;&nbsp;&nbsp;'.$job_salary.' Rs
                    </h5>
                        
                    <p class="card-text card-comp-details">
                        <i class="fas fa-map-marker-alt card-header-name"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$job_address.'
                    </p>
                        
                    <p class="card-text card-comp-details">Skills : '.$job_skills.'</p>
                    <p class="card-text card-comp-details">About  :'.substr($job_about , 0 , 100).'...</p>
                    <p class="card-text card-comp-details">Posted On : '.$job_datetime.'</p>
    -->
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