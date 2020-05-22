<?php
$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$iNum = $_POST['select'];
$num2 = $_POST['num1'];
$rightCard = mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8">
	</head>
	<body>
	<div align="center"><font size="6">High＆Lowゲーム</font>
	<hr>
	<?php
	echo '<img src="cards/',$cards[$num2],'">';
	echo '<img src="cards/',$cards[$rightCard],'">';
	?>
	<br>
	<?php
	if($leftCard < $rightCard){
	    $result="High";
	}
	elseif($leftCard > $rightCard){
	    $result="Low";
	}
	else {
	    $result=$iNum;
	}
    ?>
    <?php
        echo $iNum,"を選択しました。<br>";

	if($result == $iNum){
	    echo "You Win!";
	}
	else {
	    echo "You lose...";
	}
	?>
	<br>
	<a href="highAndLowS03.php">もう一度開始</a>
	</div>
	</body>
</html>
