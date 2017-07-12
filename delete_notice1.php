<?php 
include('conn.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from notification where id='$nid'");

header('location:noticeupload.php');

?>