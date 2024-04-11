<?php
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');
// $query="DELETE from issued_books where book_id=$_GET[bid]";
// $query_run=multi_query($connection,$query);
$query="DELETE from authors where author_id=$_GET[aid]";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Auhtor Deleted Successfully...");
    window.location.href = "manage_authors.php";
</script>