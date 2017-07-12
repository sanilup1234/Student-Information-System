<?php require_once('functions.php');
secure(1);
require_once('header.php');
require_once('conn.php');
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
echo '<script src="sripts/jquery_library.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '<script src="scripts/bootstrap.js"></script>';
$seme=$_SESSION['sem'];
$sql="select Date,user,Message from notification where semester='$seme'";
					$result=mysqli_query($conn,$sql);

					echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
					 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
echo '<table class="table table-bordered"><tr class="success">';
if(mysqli_num_rows($result)>0)
{
while ($fieldinfo=mysqli_fetch_field($result))
    {

  echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">'.$fieldinfo->name.'</th>';

    }
echo "</tr>";

while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
      echo "<tr>";

      foreach ($rows as $data)
      {
        echo "<td>". $data . "</td>";
      }

    }
  }else{
    echo "<tr><td colspan='" . (1) . "'>No Results found!</td></tr>";
  }
  echo "</table>";
?>
