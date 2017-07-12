<?php require_once('functions.php');
secure(1);
require_once('header.php');
require_once('conn.php');
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
   echo ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
$seme=$_SESSION['sem'];
$sql="select distinct user,image from img where semester='$seme'";
					$result=mysqli_query($conn,$sql);



echo '<table class="table table-bordered"><tr class="success">';
if(mysqli_num_rows($result)>0)
{
while ($fieldinfo=mysqli_fetch_field($result))
    {
  echo'<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">'.$fieldinfo->name.'</th>';


    }
  echo '<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Download</th>';
echo "</tr>";
while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
      echo "<tr>";
$i=0;
      foreach ($rows as $data)
      {
        echo "<td>". $data . "</td>";

        if($i % 2 !=0)
        {
echo'<td><a href="https://online-student-information-system.000webhostapp.com/images/faculty/'.$data.'"> <span class="glyphicon glyphicon-cloud-download"></span>download</a></td>';

        }
$i=$i+1;
      }}


}else{
    echo "<tr><td colspan='" . (1) . "'>No Results found!</td></tr>";
  }
  echo "</table>";
?>
