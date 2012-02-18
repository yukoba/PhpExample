<?php
	function http_redirect($url) {
		header("Location: http://" . $_SERVER['HTTP_HOST'] . $url);
		exit;
	}
?>