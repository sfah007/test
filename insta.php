/* 
@ee_sy تم كتابه الاكواد بواسطه : عبود السوري
اوامر المطور بكتابه : @KKYKKN يحيى السوري 
تابع جديدنا >>> @marka_xd 
تنقل اذكر المصدر 🌚
صير فرخ واخمط 🌚😹
بس حط التوكن بالسطر 13
34حط بس ايديك بالسطر ال  
*/

<?php
ob_start();
define('API_KEY','1471004498:AAFJjp1DoGvt4GcWTNafH3fW81pAMdNlS_o'); /////token
function bot($method,$datas=[]){
$url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
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
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$admin = "201839212"; // ايديك
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=$from_id");
$tv1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=$from_id");
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"'))!== false){
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"🔐¦إشترك بالقناة التالية حتى يعمل لديك البوت ✔️
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• اشتراك ♻ ✅','url'=>"https://t.me/$tvp"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"🔐¦إشترك بالقناة التالية حتى يعمل لديك البوت ✔️
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• اشتراك ♻ ✅' ,'url'=>"https://t.me/$chp"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
/*الإعدادات هنا ⚙️*/
if($text == "/start" or $text == "back 🔙" or $text == "إلغاء ❌"  or $text == 'رجوع 🔙'){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text' =>"
	🙋🏻‍♂️¦أهلا بك عزيزي الأدمن 🔱
	⚙️¦هذه إعداداتك الخاصة بك 🌚
	👨🏻‍💻¦تمت كتابة الملف بواسطة المطور @KKYKKN 😎
", 
	     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"وضع قناة 🤟🏻"], ['text'=>"حذف قناة ❌"]
], 
[
['text'=>"وضع قناة 👌"],['text'=>"حذف القناة 👈"]
],
[
['text'=>"عدد المشتركين 📊"]
], 
[
['text'=>"تفعيل التنبيه ☑️"],['text'=>"تعطيل التنبيه ❎"]
], 
[
['text'=>"اذاعة 📢"]
],
[
['text'=>"تفعيل التوجيه 🔄✔️"], ['text'=>"تعطيل التوجيه 🔄❌"]
], 
[
['text'=>"نص الترحيب 🙋🏻‍♂️"]
], 
[
['text'=>"حظر خاص 🔊"],['text'=>"إلغاء حظر خاص 🔈"]
],
[
['text'=>"حظر بالمعرف Ⓜ 🔊"],['text'=>"إلغاء حظر بالمعرف Ⓜ 🔈"]
],
[
['text'=>"تفعيل التواصل ✅"],['text'=>"تعطيل التواصل ❎"]
],
], 
])

]);} 
if($text == "حظر بالمعرف Ⓜ 🔊" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊¦ارسل معرف الشخص 👤 الذي تريد حظره
" 
]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊¦تم حظره  بنجاح ✔️
[$text](https://t.me/$tf) 
", 'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"
تم حظرك بواسطة الادمن
	" 
]) ;
$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="إلغاء حظر بالمعرف Ⓜ 🔈" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	🔈¦ارسل ايدي الشخص الذي تريد إلغاء الحظر 🚶🏻‍♂️
	"
	]) ;
file_put_contents("sting.txt","unkband1");} 
if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🔊¦تم إلغاء الخظر  بنجاح ✔️
[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"🎊¦مبارك تم إلغاء حظرك 📣", 
]);
unlink("sting.txt");
}
if($text == "حذف القناة 👈" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🖥️¦تم حذف القناة بنجاح ☑️
", 
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt") ;
	}
if($text == "وضع قناة 👌" and $from_id == $admin){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🔰¦ أرسل معرف القناة 🖥️
", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="knat" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($text != "إلغاء ❌" and $sting =="knat" and $from_id == $admin ){
file_put_contents("tv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🖥️¦تم حفظ معرف الفناة Ⓜ️
🛡️¦تأكد ان البوت أدمن في القناة
 ", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}

$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and $from_id == $admin){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
✅- تم الارسال بنجاح
"
]);
		}
if($text == "تعطيل التواصل ❎" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
❎- تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "تفعيل التواصل ✅" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
✅- تم تفعيل التواصل بنجاح 💌
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);

file_put_contents('tw.txt','tw');	}
if($text == "عدد المشتركين 📊" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" 
📊¦عدد مشتركين البوت هو $memberscount
	", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if ($text == "وضع قناة 🤟🏻" and $from_id == $admin) {
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🔰¦ أرسل معرف القناة 🖥️
", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="sting" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($text != "إلغاء ❌" and $sting =="sting" and $from_id == $admin ){
file_put_contents("ch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🖥️¦تم حفظ معرف الفناة Ⓜ️
🛡️¦تأكد ان البوت أدمن في القناة
 ", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="حذف قناة ❌" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🖥️¦تم حذف القناة بنجاح ☑️
", 
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
if($text =="تفعيل التنبيه ☑️" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔔¦تم تفعيل التنبيه بنجاح ✔️
",      'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 
if($text =="/start" and $onstart == "start" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
دخل شخص للبوت  🚶🏻‍♂️
~~~~~~~~~~
اسمه ⬅️ $name
~~~~~~~~~~
معرفه ⬅️ @$username
~~~~~~~~~~~
ايديه ⬅️ $from_id
" 
]);} 
if($text =="تعطيل التنبيه ❎" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔕¦تم تعطيل ❎ التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
if($text == "اذاعة 📢" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏻‍♂-أهلا بك عزيزي في قسم الاذاعة
🔘- إستخدم الأزرار للتحكم بنوع الاذاعة
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
if($text == "إلغاء ❌"){
	unlink("send.txt");
	}
if($text == "إلغاء ❌" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❎¦تم الإلغاء بنجاح 💯
🔙¦سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني
",'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏻‍♂-أهلا بك عزيزي في قسم الاذاعة
🔘- إستخدم الأزرار للتحكم بنوع الاذاعة
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
	}
if($text == "نشر رسالة 💌" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬- الان ارسل اي شيء لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
}
if($text == "نشر صورة 🎑" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌌¦الان ارسل اي صورة لارسلها ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
	}
	if($text == 'نشر فيديو 🎥' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌌¦الان ارسل اي فيديو لارسلها ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
	}
	if($text == "نشر ملصق 🎐" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬- الان ارسل اي ملصق لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
}
	if($text == "نشر ملف 📁" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬- الان ارسل اي ملف او صورة gif لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
}
	if($text == "نشر صوت 🎧" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬- الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
}
	if($text == "نشر ماركدون 🎐" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬- الان ارسل اي نص 💌 وسيدعم الماركدون لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
}
if($text == "نشر HTML 📮" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💬- الان ارسل اي نص 💌 وسيدعم الHTML لارسله ل $memberscount
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
],
],
])
]);
}
	
	
	
	/* اذاعة 📢 */
	if($from_id == $admin and $text != "إلغاء ❌"){
if($text != 'إلغاء ❌' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "إلغاء ❌" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="تفعيل التوجيه 🔄✔️" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔄¦تم تفعيل التوجيه بنجاح ✔️
", 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "تعطيل التوجيه 🔄❌" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔒¦تم تعطيل التوجيه بنجاح ✔️
", 
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
if ($text =="نص الترحيب 🙋🏻‍♂️" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔰¦ أرسل نص الترحيب 🙋🏻‍♂️
يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
هكذا
{الاسم}
"
]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text } 
 ", 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text == "حظر خاص 🔊" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊¦ارسل ايدي الشخص 👤 الذي تريد حظره
" 
]) ;
file_put_contents("sting.txt","band");
} 
if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊¦تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
", 'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"
تم حظرك بواسطة الادمن
	" 
]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="إلغاء حظر خاص 🔈" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	🔈¦ارسل ايدي الشخص الذي تريد إلغاء الحظر 🚶🏻‍♂️
	"
	]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🔊¦تم إلغاء الخظر  بنجاح ✔️
[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"🎊¦مبارك تم إلغاء حظرك 📣", 
	
]);
unlink("sting.txt");
}
if($start == null){
$hello = "
أهلا بك عزيزي {الاسم} في بوتي
لوحة الأمن ل @KKYKKN
";
file_put_contents('start.txt',$hello);
}
if($text == '/start'){
	$start = str_replace('{الاسم}',$name,$start);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$start,
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]);
}

////////////////////////////
if($text !== "/start"){
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$text",
'caption'=>"• تم تنزيل الصورةه المصغره للفيديو 🔰؛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• جديدنا 📢'",'url'=>'https://t.me/market_xdbot']],
[
['text'=>"• لـ شراء نسخةه📜'",'url'=>'t.me/ee_sy'],
],
]
])
]);
}
if($text !== "/start"){
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>"$text",
'caption'=>"• تم تنزيل الفيديو بنجاح ، 📥؛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• جديدنا 📢'",'url'=>'https://t.me/$ch']],
[
['text'=>"• لـ شراء نسخةه📜'",'url'=>'t.me/ee_sy'],
],
]
])
]);
bot('sendmessage',[
'chat_id'=> $admin,
'text'=> "~ هناك شخص قام بـ التحميل من البوت
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎  
- اسم العضو ⚜ ، $name 
- معرف العضو 🌐 ، @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ 
- رابط التحميل 🔰 ،
$text",
]);
}
#﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎#
if ($text == '/start') {
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- مرحبا بك ؛ [$name](tg://user?id=$chat_id)
~ في بوت التحميل من الفيسبوك والانستا 👤
~ فقط قم بأرسال رابط الفيديو 📥
~ يجب ان يكون الفيديو اقل من 20 دقيقه 🚸
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/$ch)
)", 'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "~ لـ شراء نسخةه 💰؛", 'url' => "https://t.me/ee_sy"]], ]]) ]);
}

/* 
@ee_sy تم كتابه الاكواد بواسطه : عبود السوري
اوامر المطور بكتابه : @KKYKKN يحيى السوري 
تابع جديدنا >>> @marka_xd 
تنقل اذكر المصدر 🌚
صير فرخ واخمط 🌚😹
بس حط التوكن بالسطر 13
34حط بس ايديك بالسطر ال  
*/
