<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
   
    <a class="navbar-brand " href="/jobalert.in/index.php"
            style="font-family: 'Langar', cursive;text-transform:lowercase;">JobAlert.in</a>
    

        
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
                <a class="nav-link menu_active" href="user_welcome.php">Home
                    <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link mr-4" href="user_applied_job.php">Applied Jobs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link mr-4" href="user_profile.php">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-4" href="user_resume.php">My Resume</a>
            </li>
           
            
            <li class="nav-item  ">
            <h2 class=" font-weight-bold text-capitalize" > <?php echo $_SESSION['user_name'];?>  
            <i class="far fa-user-circle card-header-icon  mr-4"></i> </h2>
            </li>

            <li class="nav-item pr-2">
                
                <a class=" btn nav-link btn-dark  btn-logout " href="user_logout.php">Logout</a>
            </li>
        </ul>

    </div>
</nav>