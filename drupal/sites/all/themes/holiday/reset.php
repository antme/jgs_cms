<?php
$loginName = $_POST ["loginName"];
$oldPass = $_POST ["oldPass"];
$newPass = $_POST ["newPass"];

$data = array (
		'loginName' => $loginName,
		'oldPass' => $oldPass,
		'newPass' => $newPass 
); // 定义参数

$data = @http_build_query ( $data ); // 把参数转换成URL数据

$aContext = array (
		'http' => array (
				'method' => 'POST',		
				'header' => 'Content-type: application/x-www-form-urlencoded',				
				'content' => $data 
		) 
);

$cxContext = stream_context_create ( $aContext );

$sUrl = 'http://www.hkjgzx.sh.cn:8080/login/passSync.do'; // 此处必须为完整路径

$d = @file_get_contents ( $sUrl, false, $cxContext );

header("Content-type: application/json");
echo $d;

?>