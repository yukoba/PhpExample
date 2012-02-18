<?php
	function insertMemo($memo) {
		$query = sprintf("INSERT INTO Memo (id, memo) VALUES (%s, %s)",
					quote_smart(uniqid()),
					quote_smart($memo));
		mysql_query($query);
	}

	function listMemo() {
		return mysql_query('SELECT * from Memo ORDER BY writtenTime DESC');
	}
?>