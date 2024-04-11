<?php 
require('functions.php');
session_start();
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');

$book_name="";
$issue_date="";
$return_date="";
$status="";

$query = "select books.title,issued_books.issue_date,issued_books.return_date from issued_books left join books on issued_books.book_id=books.book_id and issued_books.user_id=$_SESSION[id]";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Issued Books</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
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
        <br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form>
                    <table class="table table-bordered" width="900px" style="text-align:center">
                        <tr>
                            <th>Book Name</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                        </tr>
                        <?php
                            $query_run=mysqli_query($connection,$query);
                    
                            while($row=mysqli_fetch_assoc($query_run)){
                                $book_name=$row['title'];
                                $issue_date=$row['issue_date'];
                                if($row['return_date']==NULL){$return_date=NULL;}else{$return_date=$row['return_date'];};
                                if($return_date==NULL){$status="Not Returned";}else{$status="Returned";};
                                ?>
                                <tr>
                                    <td><?php echo $book_name;?></td>
                                    <td><?php echo $issue_date;?></td>
                                    <td><?php echo $return_date;?></td>
                                    <td><?php echo $status;?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </table>
            </div>
            <div class="col-md-2"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>