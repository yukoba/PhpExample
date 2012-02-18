<?php
	$domain = "yukoba.m34.coreserver.jp";

	function http_redirect($url) {
		global $domain;
		header("Location: http://$domain$url");
		exit;
	}
?>