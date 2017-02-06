<?php

$fp = fopen("player2.log","w");

fwrite($fp,"");

fclose($fp);

$fp = fopen("player.log","a");

$name = $_REQUEST["playername"];

fwrite($fp,$_REQUEST["playername"].",");

fclose($fp);

$fp = fopen("player.log","r");

$playername = [];

while(($data = fgets($fp))!== false)
{
	$data = rtrim($data);
	$buff = explode (',' , $data);
	$playername[] = $buff; 
}

fclose($fp);

$player

?>


<html>


<head>

  
<title>ジャンケン</title>


<?php
	
$katisuu = 0;
	
$makesuu = 0;


	
	

/*$syouhai_bool = $_POST['syouhai'];
	
if($syouhai_bool == 'kati')
	
{
		
  $katisuu = $katisuu + 1;
	
}
	
if($syouhai_bool == 'make')
	
{
		
  $makesuu = $makesuu + 1;
	
}*/

?>


<style type="text/css">

<!--
.janken_tekazu 

{
	
display: inline;
	
margin: 10px;

}


.kati_make 

{
	
display: inline;
	
margin: 10px;

}

-->

</style>


</head>


<body>





<!-- ジャンケンの手の数の初期数 -->

<script language="javascript" type="text/javascript">


var choki = "3";

var guu = "3";

var paa = "3";




</script>

<?php print $_REQUEST["playername"]; ?>


<!-- 送信テスト用 -->

<!-- action="test.php" -->

<!-- actiionに送る先を指定 -->

<form action="test.php" method="POST">


<!-- 画像のボタン、nameは各ボタンを識別するためのもの、onclickでクリックしたときjavascriptを呼び出してる -->

<img src="ch01.png" style="width:50px; height:50px" name="btn0" onclick="btnclick(this)">

<span style="margin-right: 2em;"></span>



<img src="gu01.png" style="width:50px; height:50px" name="btn1" onclick="btnclick(this)">

<span style="margin-right: 2em;"></span>



<img src="pa01.png" style="width:50px; height:50px" name="btn2" onclick="btnclick(this)">

<span style="margin-right: 2em;"></span>



<!-- 送信用のvalue -->

<input id='te_sousin' type=hidden name='te_post' value=''>
<input id='name_sousin' type=hidden name='name' value="<?php print $name; ?>">

<br/>


<!-- 各手の残り数を表示 -->

チョキ

<div id="chokiText" class="janken_tekazu">

<script language="javascript" type="text/javascript">

document.write(choki);

</script>

</div>


グー

<div id="guuText" class="janken_tekazu">

<script language="javascript" type="text/javascript">

document.write(guu);

</script>

</div>


パー

<div id="paaText" class="janken_tekazu">

<script language="javascript" type="text/javascript">

document.write(paa);

</script>

</div>


<br>


<!-- 勝ち数と負け数の表示  -->




勝ち数

<div id="katiText" class="kati_make">

<?php echo $katisuu; ?>

</div>


負け数

<div id="makeText" class="kati_make">

<?php echo $makesuu; ?>

</div>


<br>


<!-- input type="button" value="送信" -->


<!--button type="button">送信</button-->


<!-- 送信テスト用 -->

<input type="submit" value="送信">

</form>




<!-- クリックしたときに呼び出すjavascriptの関数 -->


<script language="javascript">


function btnclick(obj)

{
  
<!-- クリックしたボタンのnameを取得 -->
　
var getName = obj.name;

  
<!-- ボタンのnameが一致しつつ手の残り数が1以上なら -->
　
if(getName == "btn0" && choki >= 1)
　
{
	
<!-- 手の残り数を1減らす -->
　 	
document.getElementById('chokiText').innerHTML = choki = choki - 1;
	
document.getElementById('te_sousin').value=1;
  
}

  
if(getName == "btn1" && guu >= 1)
　
{
	
document.getElementById('guuText').innerHTML = guu = guu - 1;
	
document.getElementById('te_sousin').value=0;
  
}

  
if(getName == "btn2" && paa >= 1)
　
{
	
document.getElementById('paaText').innerHTML = paa = paa - 1;
	
document.getElementById('te_sousin').value=2;
  
}

}


</script>




</body>


</html>






















