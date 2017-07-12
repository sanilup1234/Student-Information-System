<?php   require_once('functions.php');
secure(1);
		require_once("header.php");
		require_once('conn1.php'); 
		$result="";
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
   echo ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';

$seme=$_SESSION['sem'];
	

?>
<?php
echo '<table class="table table-bordered">';
?>	
<Tr class="success">
		<th>Sr.No</th>
		<th>User</th>
		<th>Semester</th>
			<th>Delete</th>

   </Tr>
		
<?php
					$res=mysqli_query($conn,"SELECT `Name`, `Semester` FROM `st_details` WHERE auth=0");


$i=1;
while($row=mysqli_fetch_assoc($res))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Semester']."</td>";

?><Td><a href="javascript:authst('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>
>


<?php 

echo "</Tr>";
$i++;

}
?>		
