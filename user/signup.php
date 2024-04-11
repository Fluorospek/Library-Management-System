<!DOCTYPE html>
<html>
    <head>
        <title>LMS</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            #side-bar{
                background-color: whitesmoke;
                padding: 50px;
                width: 350px;
                
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">User Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav><br>
        <span><marquee>
            This is the Library Management System. Library opens at 8:00 AM and closes at 8:00 PM
        </marquee></span><br><br>
        <div class="row">
            <div class="col-md-4" id="side-bar">
                <h5>Library Timing</h5>
                <ul>
                    <li>Opening Timing: 8:00 AM</li>
                    <li>Closing Timing: 8:00 PM</li>
                    <li>(Sunday off)</li>
                </ul>
            </div>
            <div class="col-md-8" id="main-content">
            <center><h3>User Registration</h3></center>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">E-mail</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Register</button>
            </form>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>