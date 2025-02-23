<?php
function get_user_count(){
    $connection = mysqli_connect("localhost", "root", "password");
    $db = mysqli_select_db($connection, 'lms');
    $user_count="";
    $query = "select count(*) as user_count from users";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        $user_count=$row['user_count'];
    }
    return($user_count);
}

function get_book_count(){
    $connection = mysqli_connect("localhost", "root", "password");
    $db = mysqli_select_db($connection, 'lms');
    $book_count="";
    $query = "select count(*) as book_count from books";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        $book_count=$row['book_count'];
    }
    return($book_count);
}

function get_book_cat_count(){
    $connection = mysqli_connect("localhost", "root", "password");
    $db = mysqli_select_db($connection, 'lms');
    $cat_count="";
    $query = "select count(*) as cat_count from book_categories";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        $cat_count=$row['cat_count'];
    }
    return($cat_count);
}

function auth_count(){
    $connection = mysqli_connect("localhost", "root", "password");
    $db = mysqli_select_db($connection, 'lms');
    $auth_count="";
    $query = "select count(*) as auth_count from authors";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        $auth_count=$row['auth_count'];
    }
    return($auth_count);
}

function issued_count(){
    $connection = mysqli_connect("localhost", "root", "password");
    $db = mysqli_select_db($connection, 'lms');
    $issued_count="";
    $query = "select count(*) as issued_count from issued_books";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        $issued_count=$row['issued_count'];
    }
    return($issued_count);
}
?>