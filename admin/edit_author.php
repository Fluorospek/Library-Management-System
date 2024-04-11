<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');
$author_id="";
$author_name="";
$query="SELECT * FROM authors where author_id=$_GET[aid]";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($query_run)){
    $author_id = $row['author_id'];
    $author_name = $row['name'];
}


if(isset($_POST['update_auth'])){
        $connection = mysqli_connect("localhost", "root", "password");
        $db = mysqli_select_db($connection, 'lms');
        $query="UPDATE authors SET name='$_POST[author_name]' where author_id=$_GET[aid]";
        $query_run=mysqli_query($connection,$query);
        header("Location: manage_authors.php");
        exit();
    }
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
                            <li><a class="dropdown-item" href="manage_books.php">Manage Books</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Author
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add_author.php">Add New Author</a></li>
                            <li><a class="dropdown-item" href="manage_authors.php">Manage Authors</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add_category.php">Add New Catergory</a></li>
                            <li><a class="dropdown-item" href="manage_categories.php">Manage Categorys</a></li>
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
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Author Name:</label>
                        <input type="text" name="author_name" class="form-control" value="<?php echo $author_name?>"required="true">
                    </div>
                    
                    <button class="btn btn-primary" name="update_auth">Update Author</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>