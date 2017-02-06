<?php
//----------------------------
//データ準備
//----------------------------

$judgment = [];

$fp = fopen("player2.log","r");

while(($data = fgets($fp))!== false)
{
	$data = rtrim($data);
	$buff = explode ('\n' , $data);
	$judgment[] = $buff; 
}
fclose($fp);

$data2 = [];
$num = count($judgment);

for($i = 0; $i < count($judgment); $i++)
{
	$data2[$i] = $judgment[$i];
}

$data3 = [
		['name'=>$data2[$num-4],'te'=>$data2[$num-3]],
		['name'=>$data2[$num-2],'te'=>$data2[$num-1]]
];

//----------------------------
//JSON形式に変換
//----------------------------
$json = json_encode($data3);

//----------------------------
//クライアントに出力
//----------------------------
header('Access-Control-Allow-Origin: *');
print $json;

?>
