<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">

    <style>
    body{
        background-color:#000;
       
    }</style>
    <title>jobAlert.in</title>
</head>

<body>
    <!-- db connection -->
    <?php    include '_dbconnect.php';       ?>

    <!-- admin Form -->
   


    <div class="admin_form_parent" >
        <div class="admin_form_child">
            <h1 class="text-center  pl-4 text-dark pb-4">ADMIN</h1>
            <form method="POST" class="mt-4" action="">
                <div class="form-group ">
                    <label for="exampleInputEmail1" class="text-dark">Username or Email address</label>
                    <input type="text"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="admin_name" placeholder="">

                </div>
                <div class="form-group  ">
                    <label for="exampleInputPassword1" class="text-dark">Password</label>
                    <input type="password"   class="form-control" name="admin_password" id="exampleInputPassword1">
                </div>

                <button type="submit"  class="btn btn-dark " name="login">Submit</button>
            </form>

        </div>
    </div>

    <!-- handle login -->

    <?php 

        session_start();
    
        
        if(isset($_POST['login'])){

    
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $sql = "SELECT * FROM `admin_db` WHERE admin_name='$admin_name' AND admin_password='$admin_password' ";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows>0){
            
            while($row = $result->fetch_array()){
                $_SESSION['admin_name']=$admin_name = $row['admin_name'];
                
                echo "<script>window.location.href='dashboard.php'</script>";
            }
        }



    }
?>













    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>