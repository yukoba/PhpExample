<?php
	require_once("secret.php");
	
	$link = mysql_connect("localhost", "yukoba", $dbPass);
	if (!$link) {
	    die('�ڑ��ł��܂���ł���: ' . mysql_error());
	}
	// echo '�ڑ��ɐ������܂���';

	$db_selected = mysql_select_db('yukoba', $link);
	if (!$db_selected){
	    die('�f�[�^�x�[�X�I�����s�ł��B'.mysql_error());
	}

	mysql_set_charset('utf8');

	// ���l�ȊO���N�I�[�g����
	function quote_smart($value) {
	    if (!is_numeric($value)) {
	        $value = "'" . mysql_real_escape_string($value) . "'";
	    }
	    return $value;
	}
?>