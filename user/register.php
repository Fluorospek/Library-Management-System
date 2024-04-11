<?php
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');
$query = "insert into users values(null,'$_POST[name]','$_POST[email]', '$_POST[phone_number]', '$_POST[password]')";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Registration successful");
    window.location.href="index.php";
</script>