<?php
    $iNum=$_POST['select'];
    $leftCard=$_POST['leftCard'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8">
	</head>
	<body>
	<div align="center"><font size="6">High＆Lowゲーム</font>
	<hr>
	送信カード番号：
	<?php
	   echo mt_rand(0,13);
	?>
	<br>
	High/Lowの選択：
	<?php
        echo $iNum;
	?>
	</div>
	</body>
</html>