<?php
require_once('functions.php');
secure(1);
require_once('conn.php');
require_once('header.php');

?>
<HTML>
<HEAD>
<TITLE>Upload Notice</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="style/bootstrap.css"/
<script src="sripts/jquery_library.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/bootstrap.js"></script>
<link rel="stylesheet" href="style/bootstrap.css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <style media="screen">
 .inputfile-6 + label {
    color: #d3394c;
}

.inputfile-6 + label {
    border: 1px solid #d3394c;
    background-color: #f1e5e6;
    padding: 0;
}

.inputfile-6:focus + label,
.inputfile-6.has-focus + label,
.inputfile-6 + label:hover {
    border-color: #722040;
}

.inputfile-6 + label span,
.inputfile-6 + label strong {
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.inputfile-6 + label span {
    width: 200px;
    min-height: 2em;
    display: inline-block;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: top;
}

.inputfile-6 + label strong {
    height: 100%;
    color: #f1e5e6;
    background-color: #d3394c;
    display: inline-block;
}

.inputfile-6:focus + label strong,
.inputfile-6.has-focus + label strong,
.inputfile-6 + label:hover strong {
    background-color: #722040;
}
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.box{
background-color: white;
	padding: 6.25rem 1.25rem;

}
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
    width: 30%;
}
 </style>
</HEAD>
<BODY style="background-image:url(images/lesson-books-chalkboard-apple-sml__1497693618_139.167.7.134.jpg);background-repeat:no-repeat;">
  <div class="container" style="max-width:500px;background-color:white;padding:1px;margin-top:100px;">
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload" style="border: 3px solid #f1f1f1;">
<br />
<label style="font-family:oxygen;font-size:20px;font-weight:bold;margin-left:150px;margin-top:5px;margin-bottom:15px;">Upload File:</label>

<div class="box" style="padding:0px;margin-left:50px;">
        <input type="file" name="img" id="file-7" class="inputfile inputfile-6" style="margin-left:15px;" data-multiple-caption="{count} files selected" multiple />
        <label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
      </div>
<select name="seme"style="margin-left:50px;margin-top:10px;" >
  <option value="1sem">1sem</option>
  <option value="2sem">2sem</option>
  <option value="3sem">3sem</option>
  <option value="4sem">4sem</option>
<option value="5sem">5sem</option>
  <option value="6sem">6sem</option>
  <option value="7sem">7sem</option>
  <option value="8sem">8sem</option>

</select>
&nbsp;
<br >
<input type="submit" value="Submit" class="btn btn-success"style="margin-left:50px;margin-top:15px;width:80%;margin-bottom:20px;" />
</form>
</div>
</BODY>
</HTML>
<?php
$imageName=$_FILES['img']['name'];
if($imageName!="")
{
$query="insert into img(user,image,semester) values('$user','$imageName',";
$query.="'".$_POST['seme']."'" ;
			$query.=")";

}
mysqli_query($conn,$query);

//upload image

mkdir("images/$user");
move_uploaded_file($_FILES['img']['tmp_name'],"images/faculty/".$_FILES['img']['name']);
if(mysqli_query($conn,$query)) $result="Thanks for Uploading File";
			else $result=die(mysqli_error($conn));
?>

<footer class="panel-footer" style="background-color:	#1E90FF;border:3px solid">


    <div class="text-center" style="width:100%">&copy; Copyright Vivekananda Group of Institutions</div>
  </div>
</footer>
