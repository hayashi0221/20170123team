<html>

<head>
	
<title>test</title>

</head>

<body>


<form action="jankentest.php" method = “POST”>

	
<?php
	
	
$username = $_POST['te_post'];

	
if($username == null)

	{
 
		echo $username;

	}
	
else if($username != null)
	{

    	echo $username;

    }

	
?>

	
<br>

	
<input type="text" name="syouhai"></p>
	
<span style="position:relative;left:100px;top:0px">
	
<input type="submit" value="送信"></span>

</form>


</body>

</html>
















