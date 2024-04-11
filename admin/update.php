<?php
session_start();
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');
$query = "update admins set email='$_POST[email]' where email='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Profile updated successfully");
    window.location.href = "view_profile.php";
</script>