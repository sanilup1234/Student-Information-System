<?php require_once('functions.php');
secure(1);
require_once('header.php');
require_once('conn.php');
echo '<link rel="stylesheet" href="css/bootstrap.css"/>';

extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";
	}
	else
	{


$sql=mysqli_query($conn,"select * from users where password='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{

	$sql=mysqli_query($conn,"update users set password='$np' where username='$user'");

	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<body style="background-image:url(images/lesson-books-chalkboard-apple-sml__1497693618_139.167.7.134.jpg);background-repeat:no-repeat;">


<form method="post" style="border:3px solid #f1f1f1;background-color:white;border-radius:4px;max-width:600px;margin-left:150px;margin-bottom:20px;">
<h2 style="font-family:oxygen;font-size:30px;text-align:center;margin-top:30px;color:black;">Update Password</h2>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>

<br >
	<div class="row" style="margin-top:30px;">
		<div class="col-sm-4" style="font-family:oxygen;margin-left:50px;text-align:right;vertical-align:middle;color:black;">Old Password</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"style="background-color:#f1e5e6"/></div>
	</div>
<br >
	<div class="row">
		<div class="col-sm-4" style="font-family:oxygen;margin-left:50px;text-align:right;vertical-align:middle;color:black;">New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control" style="background-color:#f1e5e6"/></div>
	</div>
	<br >
	<div class="row">
		<div class="col-sm-4" style="font-family:oxygen;margin-left:50px;text-align:right;vertical-align:middle;color:black;">Confirm Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control" style="background-color:#f1e5e6"/></div>
	</div>
	<br >
	<div class="row" style="margin-top:10px;text-align:center;">
		<div class="col-sm-2" ></div>
		<div class="col-sm-8" style="margin-left:40px">


		<input type="submit" value="Update Password" name="save" class="btn btn-success"style="font-family:oxygen;"/>
		<input type="reset" class="btn btn-success"style="font-family:oxygen;"/>
		</div>
	</div>

</form>
</body>
<footer class="panel-footer" style="background-color:	#1E90FF;border:3px solid">


		<div class="text-center" style="width:100%">&copy; Copyright Vivekananda Group of Institutions</div>
	</div>
</footer>
