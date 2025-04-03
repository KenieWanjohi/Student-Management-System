<?php
$server="localhost";
$username="root";
$password="";
$database="student_db";
$dbcon=mysqli_connect($server,$username,$password,$database);
if($dbcon->connect_error){
    die("database connection failed:".$dbcon->connect_error);
}
?>