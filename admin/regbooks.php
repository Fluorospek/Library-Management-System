<?php 
require('functions.php');
session_start();
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');

$title="";
$author="";
$category="";
$publication_year="";
$book_no="";
$price="";

$query = "select books.title,books.publication_year,books.book_no,books.price,authors.name as author_name,book_categories.name as cat_name from books,authors,book_categories where books.author_id=authors.author_id and books.category_id=book_categories.category_id";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Users</title>
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
                            <li><a class="dropdown-item" href="">Add New Book</a></li>
                            <li><a class="dropdown-item" href="">Manage Books</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Author
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">Add New Author</a></li>
                            <li><a class="dropdown-item" href="">Manage Authors</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">Add New Catergory</a></li>
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form>
                    <table class="table table-bordered" width="900px" style="text-align:center">
                        <tr>
                            <th>Book title:</th>
                            <th>Author:</th>
                            <th>Category:</th>
                            <th>Publication Year:</th>
                            <th>Number of books:</th>
                            <th>Price:</th>
                        </tr>
                        <?php
                            $query_run=mysqli_query($connection,$query);
                    
                            while($row=mysqli_fetch_assoc($query_run)){
                                $title=$row['title'];
                                $author=$row['author_name'];
                                $category=$row['cat_name'];
                                $publication_year=$row['publication_year'];
                                $book_no=$row['book_no'];
                                $price=$row['price'];
                                ?>
                                <tr>
                                    <td><?php echo $title;?></td>
                                    <td><?php echo $author;?></td>
                                    <td><?php echo $category;?></td>
                                    <td><?php echo $publication_year;?></td>
                                    <td><?php echo $book_no;?></td>
                                    <td><?php echo $price;?></td>
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