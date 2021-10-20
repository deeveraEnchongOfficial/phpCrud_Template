<?php 
include("config.php");

 $stu_id = $_GET['id'];

$sql = "DELETE FROM student  WHERE sid = {$stu_id}";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("location:index.php");

mysqli_close($conn);
?>