<?php require_once('functions.php');
secure(1);
require_once('header.php');
require_once('conn1.php');
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
echo '<script src="sripts/jquery_library.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '<script src="scripts/bootstrap.js"></script>';
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';

$seme=$_SESSION['sem'];

$sql="select * from leave_details where semester='$seme'";
					$result=mysqli_query($conn,$sql);


echo '<table class="table table-bordered"><tr class="success">';

if(mysqli_num_rows($result)>0)
{

  echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Name</th>';
   echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">From</th>';
	 echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">To</th>';
	 echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Subject</th>';
	 echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Description</th>';
	 echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Semester</th>';
    echo "</tr>";
while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
      echo "<tr>";
      foreach ($rows as $data)
      {
        echo "<td style='font-family:oxygen;'>". $data . "</td>";
      }
    }
  }else{
    echo "<tr><td colspan='" . (1) . "'>No Results found!</td></tr>";
  }
  echo "</table>";
?>
