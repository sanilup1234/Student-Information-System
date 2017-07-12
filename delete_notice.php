<?php 
include('conn.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from feedback where id='$nid'");

header('location:feedback.php');

?>