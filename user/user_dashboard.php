<?php 
    session_start();
    function get_issued_user_count(){
        $connection = mysqli_connect("localhost", "root", "password");
        $db = mysqli_select_db($connection, 'lms');
        $issued_count="";
        $query = "select count(*) as issued_count from issued_books where user_id = $_SESSION[id]";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run)){
            $issued_count=$row['issued_count'];
        }
        return($issued_count);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Dashboard</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
                            <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <br>
        <span><marquee>
            This is the Library Management System. Library opens at 8:00 AM and closes at 8:00 PM
        </marquee></span><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div class="card bg-light" style="width: 300px">
                    <div class="card-header">Issued Books:</div>
                    <div class="card-body">
                        <p class="card-text">Total no. of books issued: <?php echo get_issued_user_count();?></p>
                        <a href="issued_books.php" class="btn btn-danger" target="_blank">View Issued Books</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>