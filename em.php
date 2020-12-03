<?php
header("content-type: application/json; charset=utf-8");
$get = $_GET['a'];
#####################################|
## </A.D.C> ## @Laganty - @php_aba ##|
#####################################|
## https://chkweb.tk ################|
#####################################|
## made without love! # 2020/10/21 ##|
#####################################|
function rrnd($n) { 
    $characters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
return $randomString; 
} 

function fetch($m){
	$mail = str_replace("@","%40",$m);
	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => "https://tempmail.plus/api/mails?email=$mail&first_id=0&epin=",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => false,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
	"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0",
	"Accept: application/json, text/javascript, */*; q=0.01",
	"Accept-Language: en-US,en;q=0.5",
	"Accept-Encoding: gzip, deflate, br",
	"X-Requested-With: XMLHttpRequest",
	"DNT: 1",
	"Connection: keep-alive",
	"Referer: https://tempmail.plus/en/",
	"Cookie: email=".$mail,
	"Sec-GPC: 1"
	),
	));
	$response = curl_exec($curl);
	curl_close($curl);
return $response;
}
function fetch2($mi,$m){
	$mail = str_replace("@","%40",$m);
	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => "https://tempmail.plus/api/mails/$mi?email=$mail&epin=",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => false,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
	"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:81.0) Gecko/20100101 Firefox/81.0",
	"Accept: application/json, text/javascript, */*; q=0.01",
	"Accept-Language: en-US,en;q=0.5",
	"Accept-Encoding: gzip, deflate, br",
	"X-Requested-With: XMLHttpRequest",
	"DNT: 1",
	"Connection: keep-alive",
	"Referer: https://tempmail.plus/en/",
	"Cookie: email=".$mail,
	"Sec-GPC: 1"
	),
	));
	$response = curl_exec($curl);
	curl_close($curl);
return $response;
}

function gen(){
	$name = rrnd('5');
	$mail = $name."@fexbox.ru";
return $mail;
}
if($get == 'new'){
	print json_encode(["ok"=>true,"mail"=>gen()]);
}
if($get == 'all'){
	$mail = $_GET['mail'];
	if(!$mail){
		die(json_encode(["ok"=>false]));
	}
	$abt       = json_decode(fetch($mail),TRUE);
	$end       = array();
	$end['ok'] = true;
	$end['all']= $abt['count'];
	for($i=0;$i<$end['all'];$i++){
		$end['list'][$i]['frm_name']  = $abt['mail_list'][$i]['from_name'];
		if(!$abt['mail_list'][$i]['from_name'] | $abt['mail_list'][$i]['from_name'] == null){
			$end['list'][$i]['frm_name']  = $abt['mail_list'][$i]['from_mail'];
		}
		$end['list'][$i]['subject']  = $abt['mail_list'][$i]['subject'];
		if(!$abt['mail_list'][$i]['subject'] | $abt['mail_list'][$i]['subject'] == null){
			$end['list'][$i]['subject']  = "the message don't have a subject";
		}
		$end['list'][$i]['msg_id'] = $abt['mail_list'][$i]['mail_id'];
		$end['list'][$i]['time']  = $abt['mail_list'][$i]['time'];
	}
	print json_encode($end, JSON_FORCE_OBJECT);
}
if($get == 'msg'){
	$mail = $_GET['mail'];
	$id   = $_GET['id'];
	if(!$mail | !$id){
		die(json_encode(["ok"=>false]));
	}
	$abt              = json_decode(fetch2($id,$mail),TRUE);
	$end              = array();
	$end['ok']        = true;
	$end['from_name'] = $abt['from_name'];
	$end['date']      = $abt['date'];
	$end['from_mail'] = $abt['from_mail'];
	$end['subject']   = $abt['subject'];
	$end['msg']       = $abt['text'];
	print   json_encode($end, JSON_FORCE_OBJECT);
}
