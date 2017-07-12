<?php
	session_start();
//	require_once 'conn.php';
	function secure($mod)
	{
		if(!isset($_SESSION['login']))
		{
			die("<script>top.location='login.php'</script>");
		}
		if ($mod > 1 and $_SESSION['type'] == 1) {
        die("<script>top.location='index.php'</script>");
    }
    if($mod==1 or $_SESSION['type']==$mod or $_SESSION['type']==5)
		{
			
		}
		else
		{
			die("<script>top.location='index.php'</script>");
		}
	}







?>