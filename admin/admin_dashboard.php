<?php 
require('functions.php');
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
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
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Book
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add_book.php">Add New Book</a></li>
                            <li><a class="dropdown-item" href="manage_books.php">Manage Books</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Author
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add_author.php">Add New Author</a></li>
                            <li><a class="dropdown-item" href="">Manage Authors</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add_category.php">Add New Catergory</a></li>
                            <li><a class="dropdown-item" href="">Manage Categorys</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="issue.php">Issue Book</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav><br><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-light" style="width: 300px">
                    <div class="card-header">Registered User:</div>
                    <div class="card-body">
                        <p class="card-text">Total no. of users: <?php echo get_user_count();?></p>
                        <a href="regusers.php" class="btn btn-danger" target="_blank">View Registered Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light" style="width: 300px">
                    <div class="card-header">Registered Books:</div>
                    <div class="card-body">
                        <p class="card-text">Total no. of available books:<?php echo get_book_count()?></p>
                        <a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Books</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light" style="width: 300px">
                    <div class="card-header">Registered Category:</div>
                    <div class="card-body">
                        <p class="card-text">Total no. of categories:<?php echo get_book_cat_count()?></p>
                        <a href="regcats.php" class="btn btn-info" target="_blank">View Registered Categories</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light" style="width: 300px">
                    <div class="card-header">Registered Authors:</div>
                    <div class="card-body">
                        <p class="card-text">Total no. of registered authors:<?php echo auth_count()?></p>
                        <a href="regauthors.php" class="btn btn-primary" target="_blank">View Registered Authors</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light" style="width: 300px">
                    <div class="card-header">Issued Books:</div>
                    <div class="card-body">
                        <p class="card-text">Total no. of issued books:<?php echo issued_count()?></p>
                        <a href="issued_books.php" class="btn btn-success" target="_blank">View Issued Books</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>