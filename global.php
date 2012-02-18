<?php
	function http_redirect($url) {
		header("Location: http://" . $_SERVER['HTTP_HOST'] . $url);
		exit;
	}

	function empty_request($str) {
		return is_null($str) || $str === "";
	}
?>
