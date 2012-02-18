<?php
	require_once("db.php");
	require_once("memo.php");

	$memos = listMemo();
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>メモ帳</title>
</head>
<body>
	<form action="writeMemo.php" method="post">
		<div><strong>メモ</strong></div>
		<textarea name="memo"></textarea><br>
		<input type="submit" value="送信">
	</form>
	
	<hr>
	
	<?php while ($row = mysql_fetch_assoc($memos)) { ?>
	   	<p>
	   		<div><strong><?= htmlspecialchars($row['writtenTime']); ?></strong></div>
	   		<pre><?= htmlspecialchars($row['memo']); ?></pre>
	   	</p>
	<?php } ?>
</body>
</html>
