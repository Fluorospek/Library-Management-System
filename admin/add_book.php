<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Book</title>
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
                            <li><a class="dropdown-item" href="">Manage Books</a></li>
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
                    <a class="nav-link" href="">Issue Book</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav><br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Book Name:</label>
                        <input type="text" name="book_name" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Author ID:</label>
                        <input type="text" name="author_id" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Category ID:</label>
                        <input type="text" name="category_id" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Publication Year:</label>
                        <input type="text" name="publication_year" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Number of Books:</label>
                        <input type="text" name="book_no" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Book Price:</label>
                        <input type="text" name="book_price" class="form-control" required="true">
                    </div>
                    <button class="btn btn-primary" name="add_book">Add Book</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<?php
    if(isset($_POST['add_book'])){
        $connection = mysqli_connect("localhost", "root", "password");
        $db = mysqli_select_db($connection, 'lms');
        $query="insert into books values(null,'$_POST[book_name]','$_POST[author_id]','$_POST[category_id]',null,'$_POST[publication_year]','$_POST[book_no]','$_POST[book_price]')";
        $query_run=mysqli_query($connection,$query);
    }
?>