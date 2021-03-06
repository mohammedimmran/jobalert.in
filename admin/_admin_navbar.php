<!-- admin Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="dashboard.php">ADMIN DASH BOARD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ml-4">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font-size:1.5rem;margin-right:10rem; "
                    href="company_admin.php" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Company
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size:1.5rem;margin-right:10rem;background-color:#fedc19; ">
                    <a class="dropdown-item" style="font-size:1.5rem;margin-right:15rem;background-color:#fedc19; "
                        href="company_admin.php">companies</a>
                    <a class="dropdown-item" style="font-size:1.5rem;margin-right:15rem;background-color:#fedc19; "
                        href="company_job_admin.php">Jobs</a>
                </div>

            <li class="nav-item">
                <a class="nav-link" style="font-size:1.5rem;margin-right:10rem;" href="user_admin.php">Users</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style="font-size:1.5rem;margin-right:10rem;" href="message_admin.php">Messages</a>
            </li>

            <li class="nav-item  ml-4">
                <a class=" btn nav-link btn-dark  btn-logout" href="admin_logout.php">Logout</a>
            </li>

        </ul>

    </div>
</nav>