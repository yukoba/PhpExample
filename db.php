<?php
	require_once("secret.php");

	$dbUserName = "yukoba";
	$dbName = "yukoba";

	$link = mysql_connect("localhost", $dbUserName, $dbPass);
	if (!$link) {
	    die('接続できませんでした: ' . mysql_error());
	}

	$db_selected = mysql_select_db($dbName, $link);
	if (!$db_selected) {
	    die('データベース選択失敗です。' . mysql_error());
	}

	mysql_set_charset('utf8');

	// 数値以外をクオートする
	function quote_smart($value) {
	    if (!is_numeric($value)) {
	        $value = "'" . mysql_real_escape_string($value) . "'";
	    }
	    return $value;
	}
?>