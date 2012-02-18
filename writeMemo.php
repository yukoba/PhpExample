<?php
	require_once("global.php");
	require_once("db.php");
	require_once("memo.php");
	
	$memo = $_POST["memo"];
	if (empty_request($memo)) {
		die("メモが未入力です。");
	}
	
	insertMemo($memo);
	
	http_redirect("/");
?>