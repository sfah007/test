<?php

ob_start();
define('API_KEY','1282951116:AAEpkspyGadP3NokF9rFw-gkWDby2RE04fY');
$admin = "201839212";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text1 = $message->text;
include_once "save.php";
if($text1=="/start"){
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>" اهلا بك ✨ في بوت عمل Webhook ❕ ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
         [
          ['text'=>'عمل ويب هوك 🔺','callback_data'=>'q']
        ],
       [
       ['text'=>'ازالة ويب هوك 🗑','callback_data'=>'delete']
        ],
       [
       ['text'=>'كيفية الاستخدام 🔧','callback_data'=>'how']
        ],
        [
          ['text'=>'تابع جديدنا ✨','url'=>'https://telegram.me/set_web']
        ]
      ]
    ])
]);
}
