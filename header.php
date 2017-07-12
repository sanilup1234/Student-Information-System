<?php
if(isset($_SESSION['type']))
$role=$_SESSION['type'];
else
{
	$role=0;
}
if(isset($_SESSION['user']))
$user=$_SESSION['user'];
else
	$user="";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIT Campus Student Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

          <link rel="stylesheet" href="css/style.css">
					<style type="text/css">
					.topnav {
					    background-color:#736AFF;
					    overflow: hidden;
							font-family: oxygen;
					}

					/* Style the links inside the navigation bar */
					.topnav a {
					    float: left;
					    display: block;
					    color: #f2f2f2;
					    text-align: center;
					    padding: 14px 16px;
					    text-decoration: none;
					    font-size: 12px;
					}

					/* Change the color of links on hover */
					.topnav a:hover {
					    background-color: #ddd;
					    color: black;
							text-decoration: none;

					}

					/* Add a color to the active/current link */
					.topnav a:active {
					    background-color: #4CAF50;
					    color: white;
					}

</style>
  </head>
<body>


  <header>
		<nav id="header-nav" class="navbar navbar-default" style="background-color:#DCDCDC;border:3px solid white;">
			<div class="container"style="margin:0px;padding:0px;padding-left:24px;background-color:#DCDCDC;">
				<div class="navbar-header">
					<a href="index.php" class="pull-left visible-md visible-lg">
						<div id="logo-img"></div>
					</a>

					<div class="navbar-brand">
						<a href="index.php"><h1 style="font-size:42px;font-weight:bold;color:#a4201d">VIVEKANANDA INSTITUTE OF TECHNOLOGY</h1>
						</a>


					</div>


			</div><!-- .container -->
		</nav<!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
			<div class="topnav" id="myTopnav">
			   <?php

			   if($role>=1)
			  echo '<a href="index.php">HOME</a>';
			        if($role==2)
			   echo '<a href="feedback.php">MESSAGE</a>';
			if($role==2)
			   echo '<a href="notification1.php">FILENOTICE</a>';
			if($role==2)
			   echo '<a href="leave.php">LEAVE</a>';
			if($role==1)
			   echo '<a href="feedback1.php">FEEDBACK</a>';
			if($role==1)
			   {echo '<a href="noticeupload.php">UPLOADNOTICE</a>';
			   //echo '<li><a href="attendance1.php">Attendance</a></li>';
			echo '<a href="stsearch.php">SEARCHSTUDENT</a>';
			 echo '<a href="leave1.php">LEAVE</a>';
			}
			if($role==2)
			   echo '<a href="notification.php">NOTIFICATION</a>';

			if($role==1)
			   echo '<a href="Fileupload.php">FILEUPLOAD</a>';
			   if($role>=1)
			 {echo '<a href="update_password.php">CHANGEPASSWORD</a>';

			   echo '<a href="logout.php">LOGOUT</a>';}

			   echo '';
			    ?>


			 </div>
    </nav><!-- #header-nav -->

  </header>


</body>
</html>
