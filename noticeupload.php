<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice1.php?id="+id;
		}
	}

</script>
<?php require_once('functions.php');
secure(1);
require_once('header.php');
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
echo '<script src="sripts/jquery_library.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '<script src="scripts/bootstrap.js"></script>';
echo '<link rel="stylesheet" href="style/bootstrap.css"/>';
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';

require_once('conn.php');
$result="";
		if(isset($_POST['Submit']))
		{
$date=date('Y-m-d H:i:s');
echo "$date";

		$sql="Insert into notification(Date,user,Message,semester) values('$date','".$_SESSION['user']."',";
			$sql.="'".$_POST['Message']."'," ;
$sql.="'".$_POST['seme']."'" ;
$sql.=")";
			if(mysqli_query($conn,$sql)) $result="Thanks for NOTICE";
			else $result=die(mysqli_error());
		}

?>

<?php
echo '<table class="table table-bordered">';
?>
<Tr class="success">
		<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Sr.No</th>
              <th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Date</th>
		<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">User</th>
		<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Notice</th>
			<th style="background-color:#7BCCB5;font-weight:bold;font-family:oxygen;">Delete</th>

	</Tr>

<?php
                                      $user=$_SESSION['user'];
					$res=mysqli_query($conn,"select * from notification where user='$user'");

$i=1;
while($row=mysqli_fetch_assoc($res))
{

echo "<Tr>";
echo "<td >".$i."</td>";
echo "<td >".$row['Date']."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['Message']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'>Delete</a></td>


<?php

echo "</Tr>";
$i++;

}
?>

<script>
function validate()
{
	if(document.feed_form.feed.value=="")
	{	error("Please write NOTICE.")
		document.feed_form.Message.focus()
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
	document.feed_form.Message.value = str;
}
function setbg(color)
{
document.getElementById("styled").style.background=color
}
</script><title>Upload Notice</title>
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
    width: 150%;
}
 </style>
<center>
<div>
<form name="feed_form" method="post" onsubmit="return validate()">
<table style="margin-left:420px;">
<tr><td id="result" style="font-family:oxygen;font-size:30px;color:red;"><?php echo $result; ?><td></tr>
<tr>
<td>
<center><h3 style="margin-left:20px;font-family:oxygen;">UPLOAD NOTICE</h3></td>
</tr>
<tr><td><textarea cols="50" rows="8" name="Message" style="
	border: 3px solid #cccccc;
	padding: 5px; font-family:oxygen;" onfocus="this.value=''; setbg('#9932CC');" onblur="setbg('white')
	border-radius: 4px;
	 background-color: #f8f8f8;
	 resize: none;" required>Enter your Message here... </textarea></td>
	 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<br ><td  style="vertical-align:middle;"><select name="seme" required>
  <option value="1sem">1sem</option>
  <option value="2sem">2sem</option>
  <option value="3sem">3sem</option>
  <option value="4sem">4sem</option>
<option value="5sem">5sem</option>
  <option value="6sem">6sem</option>
  <option value="7sem">7sem</option>
  <option value="8sem">8sem</option>

</select>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td><input type="submit" name="Submit" value="POST MY NOTICE" class="btn btn-successs" style="font-family:oxygen;text-align:center;margin-left:130px;"/></td></tr>
</table>
</form>
</div>
</center>
