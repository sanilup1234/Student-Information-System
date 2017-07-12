<?php require_once('functions.php');
secure(1);
require('conn1.php');

$user=$_SESSION['user'];
$seme=$_SESSION['sem'];
require_once('header.php');

extract($_POST);
if(isset($save))
{


$query="insert into leave_details values('$user','$f','$t','$sub','$descr','$seme')";
mysqli_query($conn,$query);


}





?>
<body style="background-image:url(images/lesson-books-chalkboard-apple-sml__1497693618_139.167.7.134.jpg);background-repeat:no-repeat;">
<center><h1 style="font-family:oxygen;font-size:30px;">Leave Application Form</h2></center><br />
	<form method="post" enctype="multipart/form-data">
		<fieldset>

<br />
<center>
<table style="vertical-align:middle;font-family:oxygen;">

				<tr style="margin:5px">
					<td style="vertical-align:middle;">From(yyyy-mm-dd):</td>
					<Td><input  type="text"  class="form-control" name="f" required/></td>
				</tr>
				<tr><td>&nbsp;<td></tr>
<tr style="margin:5px">
					<td style="vertical-align:middle;">To(yyyy-mm-dd):</td>
					<Td><input  type="text"  class="form-control" name="t" required/></td>
				</tr>
				<tr><td>&nbsp;<td></tr>
			<tr style="margin:5px">
<td style="vertical-align:middle;">Enter subject:
<td><textarea cols="60" rows="3" name="sub" ></textarea></td></tr>
<tr><td>&nbsp;<td></tr>
			<tr style="margin:5px">
<td style="vertical-align:middle;">Description:
<td><textarea cols="60" rows="10" name="descr" ></textarea></td></tr>

<tr><td>&nbsp;<td></tr>
				<tr style="margin:5px">


<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Submit" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>

					</td>
				</tr>
				<tr><td>&nbsp;<td></tr>
			</table>
</center>
               </fieldset>
		</form>
		<footer class="panel-footer" style="background-color:	#1E90FF;border:3px solid">


				<div class="text-center" style="width:100%">&copy; Copyright Vivekananda Group of Institutions</div>
			</div>
		</footer>
</body>
