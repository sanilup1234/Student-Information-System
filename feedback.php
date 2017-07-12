<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>

<?php   require_once('functions.php');
secure(1);
		require_once("header.php");
		require_once('conn.php');
		$result="";
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
   echo ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';

$seme=$_SESSION['sem'];
		if(isset($_POST['Submit']))
		{
			$sql="Insert into feedback(user,feedback,semester) values('".$_SESSION['user']."',";
			$sql.="'".$_POST['feed']."'," ;
$sql.="'".$_SESSION['sem']."'" ;
$sql.=")";
			if(mysqli_query($conn,$sql)) $result="Thanks for feedback";
			else $result=die(mysqli_error());
		}

?>
<?php
echo '<table class="table table-bordered">';
?>
<Tr class="success" >
		<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Sr.No</th>
		<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">User</th>
		<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Message</th>
			<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Delete</th>

	</Tr>

<?php
$useri=$_SESSION['user'];
					$res=mysqli_query($conn,"select * from feedback where user='$useri'");

$i=1;
while($row=mysqli_fetch_assoc($res))
{

echo "<Tr>";
echo "<td font-family:oxygen;>".$i."</td>";
echo "<td font-family:oxygen;>".$row['user']."</td>";
echo "<td font-family:oxygen;>".$row['feedback']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php

echo "</Tr>";
$i++;

}
?>


<script>
function validate()
{
	if(document.feed_form.feed.value=="")
	{	error("Please write feedback.")
		document.feed_form.feed.focus()
		return false;
	}
	return true;
}
function error(str)
{
	document.getElementById("result").innerHTML=str
}
function writeToText(str)
{
	document.feed_form.feed.value = str;
}
function setbg(color)
{
document.getElementById("styled").style.background=color
}
</script><title>Message</title>


<form name="feed_form" method="post" onsubmit="return validate()">
<table style="margin-left:420px;">
<tr><td id="result" style="font-family:oxygen;font-size:30px;color:red;"><?php echo $result; ?></td></tr>
<tr>
<td>
<center><h2 style="margin-left:20px;font-family:oxygen;">Write Your Message</h2></td>
</tr>
<tr><td style="margin-left:20px;"><textarea cols="60" rows="09" name="feed" style="
	border: 3px solid #cccccc;
	padding: 5px; font-family:oxygen;" onfocus="this.value=''; setbg('#9932CC');" onblur="setbg('white')
	border-radius: 4px;
	 background-color: #f8f8f8;
	 resize: none;">Enter your Message here... </textarea></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><input type="submit" name="Submit" value="Submit" style="font-family:oxygen;text-align:center;margin-left:180px;"></td></tr>
</table>


</form>

<footer class="panel-footer" style="background-color:	#1E90FF;border:3px solid">


		<div class="text-center" style="width:100%">&copy; Copyright Vivekananda Group of Institutions</div>
	</div>
</footer>

</body>
</html>
