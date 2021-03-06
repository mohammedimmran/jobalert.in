<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
    
    <a class="navbar-brand " href="/jobalert.in/company/comp_welcome.php"
            style="font-family: 'Langar', cursive;text-transform:lowercase;">JobAlert.in</a>
    

        
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                        <a class="nav-link mr-4" href="comp_welcome.php">All Job seekers</a>
            </li>
            <li class="nav-item">
                        <a class="nav-link mr-4" href="comp_post.php">Post Job</a>
            </li>
            <li class="nav-item">
                        <a class="nav-link mr-4" href="comp_myjob.php">My Jobs</a>
            </li>
            <li class="nav-item">
                        <a class="nav-link mr-4" href="comp_jobapplied.php">Job seekers Applied</a>
            </li>

            <li class="nav-item">
                        <a class="nav-link mr-4" href="comp_profile.php">Profile</a>
            </li>

            
            




            <!-- <li class="nav-item mx-4 pt-2 " >
                    <p class="h5 text-danger" >Name :<?php echo $_SESSION['user_name'];?></p>
                </li> -->

                <li class="nav-item   ">
            <h2 class=" font-weight-bold text-capitalize ml-4" > <?php echo $_SESSION['comp_name'];?> 
             <i class="fas fa-building card-header-icon  mr-4"></i></h2>
            </li>

            <li class="nav-item  ml-4">
                <a class="btn  btn-logout" href="comp_logout.php">Logout</a>
            </li>
            





        </ul>

    </div>
</nav>