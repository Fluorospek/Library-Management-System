<?php
$connection = mysqli_connect("localhost", "root", "password");
$db = mysqli_select_db($connection, 'lms');
// $query="DELETE from issued_books where book_id=$_GET[bid]";
// $query_run=multi_query($connection,$query);
$query="DELETE from book_categories where category_id=$_GET[cid]";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Category Deleted Successfully...");
    window.location.href = "manage_categories.php";
</script>