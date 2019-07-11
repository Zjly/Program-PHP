<?php
	$a = $_POST['member_mail'];    //获取目标邮箱
$set_charset = 'export LANG=en_US.UTF-8;';
$cmd = "/usr/bin/python3.5 /var/www/test/python/verification_code.py {$a}";
exec($set_charset.$cmd, $out, $res);	
	$d = $out[0];
	echo json_encode(array("a"=>$d),JSON_UNESCAPED_UNICODE );
?>