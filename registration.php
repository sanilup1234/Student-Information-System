<?php
require('conn1.php');
require_once('header.php');

extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from st_details where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;





//encrypt your password
$pass=$p;


$query="insert into st_details values('$n','$e','$mob','$pass','$dob','$gen','$sem','$br')";
mysqli_query($conn,$query);

//upload image
$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<center><h1>Registration Form</h2></center><br />
	<form method="post" enctype="multipart/form-data">


<br />
<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>

				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
			<tr>
					<td>Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>

				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>

				<tr>
					<td>Enter Your Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>

				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>
					</td>
				</tr>


				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					<select name="mm" required>
					<option value="">Month</option>
					<?php
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>


					<select name="dd" required>
					<option value="">Date</option>
					<?php
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					</td>
				</tr>
                            <tr>
					<td>Enter Your Semester</td>
					<Td>
					<select name="sem" required>
					<option value="">semester</option>
					<?php
					for($i=1;$i<=8;$i++)
					{
					echo "<option>".$i."sem</option>";
					}
					?>

					</select>
                                       </td>
</tr>

					<td>Enter Your Branch</td>
					<Td>
					<select name="br" required>
					<option value="CSE">CSE</option>
                                          <option value="ECE">ECE</option>
<option value="EE">EE</option>
<option value="CE">CE</option>
<option value="ME">ME</option>
</select>
                                       </td>
</tr>


				<tr>


<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>

					</td>
				</tr>
			</table>

		</form>
	</body>
</html>
