<?php
header("content-type:text/html;charset=utf-8");
//$startDate = "2014-09-01";
$startDate = "20".date("y-m-d",time()-7*24*3600);
$endDate = "20".date("y-m-d",time());
//$endDate="2014-10-01";

$url = 'http://www.hkjgzx.sh.cn:8080/webInterface/getUnitQualifyList.do'; // 此处必须为完整路径
//$header = array("Content-type: application/x-www-form-urlencoded"); // 定义content-type为xml
$ch = curl_init (); // 初始化curl
$data = array (
		'startDate' => $startDate,
		'endDate' => $endDate

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

//echo $response; // 显示返回信息

// 构建table表格
$de_json = json_decode($response,TRUE);
$zz_head_tr="<tr><td>企业名称</td><td>批准资质类型</td><td>批准资质名称</td><td>资质等级</td><td>批准时间</td></tr>";
$zz_content_tr='';
for($zz_i=0;$zz_i<count($de_json);++$zz_i){
	$zz_content_tr=$zz_content_tr."<tr><td>".$de_json[$zz_i]['unit']."</td><td>".$de_json[$zz_i]['zzlx']."</td><td>".$de_json[$zz_i]['zzmc']."</td><td>".$de_json[$zz_i]['zzdj']."</td><td>".$de_json[$zz_i]['pzsj']."</td></tr>";
}
$zz_table="<table cellpadding='0' cellspacing='0'>".$zz_head_tr."".$zz_content_tr."</table>";
//echo $zz_table;

if($de_json){
	//调用service
	$w = date('W');
	$title=$endDate."第".$w."周资质审批公告";
	//$title="2014年9月资质审批公告";
	$api_key="7b54765e-3ad2-4b9a-8da2-d7506a8859f1";
	$url_s = 'http://www.hkjgzx.sh.cn/api/node';
	$ch_s = curl_init ();
	
	
	$data_s = array (
			"title"=>$title,   #标题
			"body[und][0][summary]"=>"",  #默认
			"body[und][0][value]"=>$zz_table,    # = body 内容
			"body[und][0][format]"=>"full_html", #默认
			"body"=>$zz_table,                  #内容
			"type"=>"qualification",     #默认
			"misId"=>$endDate."".$w,                 #201405 第几周
			"api-key"=>"7b54765e-3ad2-4b9a-8da2-d7506a8859f1"  #默认
	);
	
	curl_setopt ( $ch_s, CURLOPT_URL, $url_s );
	curl_setopt ( $ch_s, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch_s, CURLOPT_POST, 1 );
	curl_setopt ( $ch_s, CURLOPT_POSTFIELDS, $data_s );
	$response_s = curl_exec ( $ch_s );
	if (curl_errno ( $ch_s )) { // 出错则显示错误信息
	
		print curl_error ( $ch_s );
	}
	
	curl_close ( $ch_s );
	echo $response_s;
}else{
	echo "no data";
}

?>
