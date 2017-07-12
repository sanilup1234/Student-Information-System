<?php
require_once('functions.php');
secure(1);
require_once('conn1.php');
require_once('header.php');
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
echo '<script src="sripts/jquery_library.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '<script src="scripts/bootstrap.js"></script>';
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';


?>
<HTML>
<HEAD>
<TITLE>Search Student</TITLE>
<link rel="stylesheet" href="style/bootstrap.css"/>
<script src="sripts/jquery_library.js"></script>
<script src="scripts/bootstrap.min.js"></script>
 <script src="scripts/bootstrap.js"></script>
<link rel="stylesheet" href="style/bootstrap.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #d3394c;
    color:white;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
    width: 120%;
}
 </style>
</HEAD>
<BODY style="background-image:url(images/lesson-books-chalkboard-apple-sml__1497693618_139.167.7.134.jpg);background-repeat:no-repeat;">
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload" style="border:3px solid #f1f1f1;background-color:white;border-radius:4px;max-width:600px;margin-left:150px;">
<br />
<table style="margin-left:50px">
	<tr><td>
<label style="font-family:oxygen;font-size:20px">Search Student By Name:</label><br/>
</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input  type="text" name="n" style="width: 100%;
    padding: 5px 12px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid ;
    border-radius: 4px;
    background-color:#f1e5e6"/>

<br />
</td>
<tr>
</table>


<h3 style="margin-left:250px;">OR</h3><br />

<table style="margin-left:50px;margin-bottom:0px;">

<tr><td><label style="font-family:oxygen;font-size:20px">Search Student By Semester:</label><br /></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><select name="sem" value="select">
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
				</table>
<br ><br ><br ><tr>


<input type="submit" value="Submit" class="btn btn-success" name="save" style="margin-left:50px;margin-top:15px;width:80%;margin-bottom:20px;" />
</form>
</div>
</BODY>
</HTML>
<?php
extract($_POST);
if(isset($save))
{
$res="select Name,Email,Contact,DOB,Branch,Semester,Gender from st_details where Name='$n'OR Semester='$sem'";
$sql=mysqli_query($conn,$res);

echo '<table class="table table-bordered"><tr class="success">';

if(mysqli_num_rows($sql)>0)
{
while ($fieldinfo=mysqli_fetch_field($sql))
    {
  echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">'.$fieldinfo->name.'</th>';

    }
echo "</tr>";
while ($rows = mysqli_fetch_array($sql,MYSQLI_ASSOC))
    {
      echo "<tr style='font-family:oxygen;color:red;'>";
      foreach ($rows as $data)
      {
        echo "<td>". $data . "</td>";
      }
echo "</tr>";
    }
  }else{
    echo "<tr><td colspan='" . (1) . "'>No Results found!</td></tr>";
  }
  echo "</table>";
}

?>
