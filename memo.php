<?php
	function insertMemo($memo) {
		mysql_query(sprintf("INSERT INTO Memo (id, memo) VALUES (%s, %s)",
				quote_smart(uniqid()),
				quote_smart($memo)));
	}

	function listMemo() {
		return mysql_query('SELECT * from Memo ORDER BY writtenTime DESC');
	}
?>