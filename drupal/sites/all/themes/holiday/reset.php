<?php

$loginName = $_REQUEST ["loginName"];
$oldPass = $_REQUEST ["oldPass"];
$newPass = $_REQUEST ["newPass"];
$url = 'http://mis.hkjgzx.sh.cn:8080/login/passSync.do'; // 此处必须为完整路径
//$header = array("Content-type: application/x-www-form-urlencoded"); // 定义content-type为xml
$ch = curl_init (); // 初始化curl
$data = array (
		'loginName' => $loginName,
		'oldPass' => $oldPass,
		'newPass' => $newPass
); // 定义参数

curl_setopt ( $ch, CURLOPT_URL, $url ); // 设置链接

curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 ); // 设置是否返回信息

//curl_setopt ( $ch, CURLOPT_HTTPHEADER, $header ); // 设置HTTP头

curl_setopt ( $ch, CURLOPT_POST, 1 ); // 设置为POST方式

curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data ); // POST数据

$response = curl_exec ( $ch ); // 接收返回信息

if (curl_errno ( $ch )) { // 出错则显示错误信息
	
	print curl_error ( $ch );
}

curl_close ( $ch ); // 关闭curl链接
header ( "Content-type: application/json" );

echo $response; // 显示返回信息





?>