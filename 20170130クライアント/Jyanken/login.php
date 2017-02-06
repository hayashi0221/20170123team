<?php

$fp = fopen("player.log","w");

fwrite($fp,"");

fclose($fp);

$fp = fopen("player2.log","w");

fwrite($fp,"");

fclose($fp);
?>

<html>

<head>
	
<title>Jyanken Login</title>

</head>

<body>

<form action="janken20170130.php">

<a>プレイヤー名 入力</a>

<br/>

<input type="text" name="playername"></input>

<input type="submit" value="login">

</form>

</body>

</html>
