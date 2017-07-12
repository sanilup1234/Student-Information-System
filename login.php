<?php
	if(!isset($text))
	$text="";
	if(!isset($username))
	$username="";
		require_once('functions.php');
		if(isset($_POST['Submit']))
		{

			$username=htmlentities($_POST['username'],ENT_QUOTES);
			$password=htmlentities($_POST['password'],ENT_QUOTES);
			if($username=="" or $password=="")
			{
			$text="<font color=red>Please Enter Username/Password</font>";
			$_SESSION['type']=0;
			}
			else
			{

                     //$username = escapeshellcmd($username);
	             // $password = escapeshellarg($password);

       	        if (0)
	                    {
			        $_SESSION['login']=true;
			        $_SESSION['user']=$username;
				 $_SESSION['type']=1;
				 die("<script>top.location='index.php'</script>");
				}
				else
				{
					require_once('conn.php');

					$sql="Select username,role,semester from users where username='$username' and password='".(($password))."'";
					$result=mysqli_query($conn,$sql);
					//echo mysqli_num_rows($result);

                                   if($result and mysqli_num_rows($result)>0)
					{
						$row=mysqli_fetch_array($result);
						$_SESSION['login']=true;
						$_SESSION['user']=$row['username'];
						$_SESSION['type']=$row['role'];
                                                $_SESSION['sem']=$row['semester'];
						//echo 'here';

						die("<script>top.location='index.php'</script>");

					}
				}
				$text="<font color=red>Invalid Username/Password</font>";
			}
		}

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
					<style media="screen">
					form {
	border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
	width: 94%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 94%;
}

button:hover {
	opacity: 0.8;
}

.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
}

img.avatar {
	width: 40%;
	border-radius: 50%;
}

.container {
	padding: 16px;
}

span.psw {
	float: right;
	padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
	span.psw {
		 display: block;
		 float: none;
	}
	.cancelbtn {
		 width: 100%;
	}
}
					</style>
  </head>
<body style="background-image:url(images/IMG_4209.JPG);">

  <script>
function validate()
{
	var f=document.form1
	if(f.username.value=="")
	{	error(document.getElementById("usernametext"))
		f.username.focus()
		return false;
	}
	if(f.password.value=="")
	{	error(document.getElementById("passwordtext"))
		f.password.focus()
		return false;
	}
	return true
}
function error(id)
{
	id.style.color='red'
}

</script>
  <header>
    <nav id="header-nav" class="navbar navbar-default" style="background-color:#DCDCDC;border:3px solid;">
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
    </nav><!-- #header-nav -->
  </header>



  <div id="main-content" class="container" style="max-width:500px;background-color:white;padding:1px;margin-top:100px;">

	<form name="form1" method="post" onsubmit="return validate()">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

      <label style="font-family:oxygen;color:red;font-size:16px;font-weight:bold;margin-left:15px;">  <?php echo $text ?></label>
			<br >
    <label style="font-family:oxygen;color:black;font-size:16px;font-weight:bold;margin-left:15px;"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username"  style="margin-left:15px;color:black;font-family:oxygen;" value="<?php echo $username; ?>" required>

    <label style="font-family:oxygen;color:black;font-size:16px;font-weight:bold;margin-left:15px;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" style="margin-left:15px;color:black;font-family:oxygen;" required>

    <button type="submit" name="Submit" style="margin-left:15px;">Login</button>



</form>
      </div><!-- End of #main-content -->

  <footer class="panel-footer" style="background-color:	#1E90FF;border:3px solid">


      <div class="text-center" style="width:100%">&copy; Copyright Vivekananda Group of Institutions</div>
    </div>
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script src="js/index.js"></script>

</body>
</html>
