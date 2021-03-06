<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/454963619a.js" crossorigin="anonymous"></script>

    <!-- github animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- css link -->
    <link rel="stylesheet" href="/jobalert.in/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

    <title>JobAlert.in</title>


</head>

<body>
    <!-- db connection -->
    <?php    include 'includes/_dbconnect.php';       ?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand " href="index.php"
            style="font-family: 'Langar', cursive;text-transform:lowercase;">JobAlert.in</a> <button
            class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link menu_active" href="index.php">Home
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user">Job seeker</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="company">Job provider</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>

            </ul>

        </div>
    </nav>


    

    <!-- header -->
    <div class="container-fluid" id="header">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 header-img">
                <img class="image1 img-fluid animated" src="images/contact.svg" alt="election">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container">
                    <form method="POST" data-aos="fade-right">
                        <div class="form-group">
                            <h1 class="text-warning ">Enter Your Query Here:</h1>
                            <?php
        
    if(isset($_POST['contact']))
    {
        $name = $_POST['cont_name'];
        $email = $_POST['cont_email'];
        $msg = $_POST['cont_message'];
        $phone=$_POST['cont_number'];

        



        $sql="INSERT INTO `contact_db` ( `contact_name`, `contact_email`, `contact_mobile`, `contact_message`, `datetime`) 
                VALUES ( '$name', '$email', '$phone', '$msg', current_timestamp())";

        $result=mysqli_query($conn , $sql);

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> We will contact u Soon <span class="text-danger">'.$name.'</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
         </div>';
        

    }



    


    ?>
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" id="comp_name" name="cont_name"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" class="form-control" id="comp_email" name="cont_email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Mobile Number</label>
                            <input type="text" class="form-control" id="comp_name" name="cont_number"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="cont_message"
                                rows="3" required></textarea>
                        </div>




                        <button type="submit" class="btn btn-vote font-weight-leight m-2" name="contact">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div><br>
    <br><br><br><br><br><br><br><br>


    <div class="mt-4">
        <?php    include 'footer.php';       ?>
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