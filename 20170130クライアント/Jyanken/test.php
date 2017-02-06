<html>

<head>
	
<title>test</title>

</head>

<body>


<form action="janken20170130.php" method = “POST”>

	
<?php
	
	
$te = $_POST['te_post'];

$name = $_REQUEST['name'];

$syouhai= "";
$player1="";
$player2="";

//print $name."<br/>";
	
/*if($te == null)
	{
 
		echo $te;

	}
	
else if($te != null)
	{
    	echo $te;
    }
    */
    
$fp = fopen("player2.log","a");

fwrite($fp,$name."\n".$te."\n");

fclose($fp); ?>

<div id="syouhai"></div>

<br>

	
<input type=hidden name="syouhai" value="<?php print $syouhai; ?>"></p>

<input type=hidden name="playername" value="<?php print $name; ?>"></input>

<span style="position:relative;left:100px;top:0px">
	
<input type="button" id="button" value="結果"></span>

<br/>

<button type="button" onclick="history.back()">戻る</button>

</form>

<script src="js/jquery-3.1.1.min.js"></script>
<script>

$(document).ready(function(){

	$('#button').click(function(){

		$.ajax({
				type: "post"
		    ,  url: "http://127.0.0.1/Jyanken/jyanken.php"
		    ,  dataType: "json"
		    ,  success: function( json ) {
		    
		    		result='';
		    		syouhai='';
		    		player1= ['',''];
		    		player2= ['',''];

		    		for(i = 0; i < json.length; i++)
		    		{
		    			tmp = json[i];
		    			result += tmp['name']+ tmp['te'] + '<br>';
		    			
		    			if(i == 0){
		    				player1[0] = tmp['name'];
		    				player1[1] = tmp['te']; 
		    			}
		    			if(i == 1){
		    				player2[0] = tmp['name'];
		    				player2[1] = tmp['te']; 
		    			}
		    			//$("#syouhai").html(result);
		    		}
		    				    				    				    		
		    		if((player1[1]=='0' && player2[1] == '0') ||
		    		   (player1[1]=='1' && player2[1] == '1') ||
		    		   (player1[1]=='2' && player2[1] == '2'))
		    		{
		    			syouhai = 'あいこ';
		    			$("#syouhai").html(syouhai);
		    		}
		    		
		    		if((player1[1]=='0' && player2[1] == '1') ||
		    		   (player1[1]=='1' && player2[1] == '2') ||
		    		   (player1[1]=='2' && player2[1] == '0'))
		    		{
		    			syouhai = player1[0] + "の勝利";
		    			$("#syouhai").html(syouhai);
		    			
		    			<?php $syouhai= "1";?>				    					    			
		    		}
		    		
		    		if((player2[1]=='0' && player1[1] == '1') ||
		    		   (player2[1]=='1' && player1[1] == '2') ||
		    		   (player2[1]=='2' && player1[1] == '0'))
		    		{
		    			syouhai = player2[0] + "の勝利";
		    			$("#syouhai").html(syouhai);
		    			
		    		}
		    		
		          //$("#result").html(result);
		    		
			}
		});
	});

});

</script>

</body>

</html>
















