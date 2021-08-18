<?php

/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم يمن ⋙ @TH3SS⌯
⌯⁞ تيم نيزك ⋙ @TH3NK⌯
ـ @TH1BS ⌯
*/
ob_start();
$token = "TO";# التوكن الرئيسي لبوتك
$Ali = "token";# لاتعدل شي
$sudo = "0000";# ايديك
$admin = "$sudo";# لاداعي للتغيير
$bot_id = "0000";# ايدي بوتك
$botid = $bot_id;# لاتعدل شي
$idbot = $bot_id; # لاتعدل شي
$buy = "kindi3"; # معرفك بدون @
$channel = "https://t.me/قناتك";#
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "alivrx.tk/yotop";# مسارك
//~~~~~~~~//
define('API_KEY',$token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
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


/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم يمن ⋙ @TH3SS⌯
⌯⁞ تيم نيزك ⋙ @TH3NK⌯
ـ @TH1BS ⌯
*/
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$text = $message->text;
$name = $message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
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
 $ch1 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$ch&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$ch&user_id=".$from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$tv&user_id=$from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=$tv&user_id=".$from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".$Ali."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".$Ali."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ *[اضغط هنا للإشتراك في القناة]($linktv)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك¹ ✅','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ *[اضغط هنا للإشتراك في القناة]($linkch)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك² ✅' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
if($text =="/start" and $onstart == "start" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"👨‍✈️┊مرحبا بك مطوري 🙋🏽‍♂
⚙┊شخص قام بالدخول الى البوت !
🗃┊معلومات حسابه الشخصي ↯
ـ┄─━━━━━━━─┄
*🎭 ⁞ اسم العضو : ❪ *[$name](tg://user?id=$from_id)* ❫
🎟 ⁞ ايدي معلوماته : ❪ *$from_id* ❫
💤 ⁞ معرف حسابه : ❪ *@$user* ❫
📟 ⁞ عدد المشترڪين : ❪ *$MOhaMMed* ❫
ـ *[$date $aa](t.me/thtss)*
➺ *",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
  ]);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "〽️┇› تفعيل البوت" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⚠️┇› تعطيل البوت" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"*👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة
✓*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[
],
]])
]);return false;}



/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم يمن ⋙ @TH3SS⌯
⌯⁞ تيم نيزك ⋙ @TH3NK⌯
ـt.me/thtss ⌯
*/


$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$name=$message->from->first_name; 
$sub=substr($name,0,100)." ..."; 
if($text =='/start' or $text == '🏡┇› الصفحة الرئيسية'){
	$start = str_replace('الاسم',$name,$start);
bot('sendMessage',[
        'chat_id'=>$from_id,
        'text'=>"♥ $start
",'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"🔍 بحث ",'switch_inline_query_current_chat'=>" "]],
[["text"=>"💰┇› لـ شراء نسخة مميزة.","url"=>"https://t.me/$buy"]],
[["text"=>"📡┇› Channel","url"=>"https://t.me/$channel"]],
]  
])
]);}
//»»»»»»»»»»»»»»»»»»
#$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$nammee = $update->callback_query->from->first_name;
$name = $update->message->from->first_name;
$ssa = json_decode(file_get_contents('data.json'),1);
mkdir("YTUBE");
$bot = bot('getMe');
$kindibot = "♻️ يتم الان التحميل ....";
$BotUserName = $bot->result->username;
########
$BG = explode("##", $data);
if($BG[0] == "BG"){
 $api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=".urlencode($BG[1])),true);
$title = $api['info'][0]['title'];
$size = $url["info"]["size"];
$info = $url["info"]["name"];
$duration = $requset['info']['duration'];
bot('sendphoto',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo'=>$BG[1],
"caption"=>"
🤵| 𝐰𝐞𝐥𝐜𝐨𝐦𝐞 𝐭𝐨 𝐲𝐨𝐮𝐫 𝐛𝐨𝐭 📥...
| 🎞 𝐯𝐢𝐝𝐞𝐨 | 🎧 𝐦𝐩3 |🎙 𝐯𝐨𝐢𝐜𝐞 .....
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'-🎥 𝐯𝐢𝐝𝐞𝐨 | تنزيل', 'callback_data'=>"fo##$BG[1]"]],
[['text'=>'-🎧 تنزيل | 𝐦𝐩3 ', 'callback_data'=>"au##$BG[1]"],['text'=>'-🎙تنزيل | 𝐯𝐨𝐢𝐜𝐞', 'callback_data'=>"vo##$BG[1]"]],
]
])
]);
}elseif($text != '/start'){
if(preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $text, $url)){
 $api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=".urlencode($text)),true);
$title = $api['info'][0]['title'];
$BG_u = "https://youtu.be/".$url[6];
bot('sendphoto',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'parse_mode'=>"MARKDOWN",
'photo'=>$BG_u,
"caption"=>"🤵| 𝐰𝐞𝐥𝐜𝐨𝐦𝐞 𝐭𝐨 𝐲𝐨𝐮𝐫 𝐛𝐨𝐭 📥...
| 🎞 𝐯𝐢𝐝𝐞𝐨 | 🎧 𝐦𝐩3 |🎙 𝐯𝐨𝐢𝐜𝐞 .....
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'-🎥 𝐯𝐢𝐝𝐞𝐨 | تنزيل', 'callback_data'=>"fo##$BG_u"]],
[['text'=>'-🎧 تنزيل | 𝐦𝐩3', 'callback_data'=>"au##$BG_u"],['text'=>'-🎙تنزيل | 𝐯𝐨𝐢𝐜𝐞', 'callback_data'=>"vo##$BG_u"]],
]
])
]);
}
}
#──────────────
$vo = explode("##", $data);
if($vo[0] == "vo"){
$api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=".$vo[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("$chat_id2.ogg",$get);
bot('sendmessage',[
'message_id'=>$message_id2,
'chat_id'=>$chat_id2,
'text'=>"$kindibot",
]);
bot('sendvoice',[ 
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'voice'=>new CURLFile("$chat_id2.ogg"),
'caption' =>"*
- 𝐯𝐨𝐢𝐜𝐞 .....
────────
📮: 𝐨𝐤 𝐰𝐞𝐥𝐥 𝐢𝐭𝐬 𝐝𝐨𝐧𝐞 .
⚠️: 𝐛𝐲 @$BotUserName .*",
'parse_mode'=>"MARKDOWN",
  'title'=>"$title",
     ]);
unlink("$chat_id2.ogg");
}
#########
$au = explode("##", $data);
if($au[0] == "au"){
$api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=".$au[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("$chat_id2.mp3",$get);
bot('sendmessage',[
'message_id'=>$message_id2,
'chat_id'=>$chat_id2,
'text'=>"$kindibot",
]);
bot('sendaudio',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'audio'=>new CURLFile("$chat_id2.mp3"),
'caption' =>"*
- 𝐦𝐩3 الصيغة ..
────────
📮 : 𝐨𝐤 𝐰𝐞𝐥𝐥 𝐢𝐭𝐬 𝐝𝐨𝐧𝐞 .
⚠️ : 𝐛𝐲 @$BotUserName .*",
'parse_mode'=>"MARKDOWN",
  'title'=>$title,
 ]);
unlink("$chat_id2.audio");
}
#########vid#####
$fo = explode("##", $data);
if($fo[0] == "fo"){
$api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=".$fo[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("$chat_id2.mp4",$get);
 bot('sendmessage',[
'message_id'=>$message_id2,
'chat_id'=>$chat_id2,
'text'=>"$kindibot",
]);
bot('sendvideo',[ 
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'video'=>new CURLFile("$chat_id2.mp4"),
'caption' =>"*
- 𝐌𝐏4 الصيغة.. 
───────
📮 : 𝐨𝐤 𝐰𝐞𝐥𝐥 𝐢𝐭𝐬 𝐝𝐨𝐧𝐞 .
⚠️ : 𝐛𝐲 @$BotUserName .*",
'parse_mode'=>"MARKDOWN",
'title'=>$title,
]);
unlink("$chat_id2.mp4");
}
########
#############
$na = str_replace("بحث ", "", $text);
if($text == "بحث $na"){
$keyboard = [];
$search = json_decode(file_get_contents("https://alsh-bg.ml/api/Search_YouTube.Mix.php?search=".urlencode($na)),true);
for($b=1; $b <= 10; $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>"BG##".$search['results'][$b]['url']]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🔎| من فضلك اختر احد الاغاني لأقوم بتحميلها ثم انتظر قليلا',
'reply_markup'=>$reply_markup
]);
}
#-----------------
if(!preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $text)){
if($text !='/start'){
$search = json_decode(file_get_contents("https://basher.ml/Apiserch.php?search=".urlencode($text)),true);
$keyboard = [];
for($b=0;$b <= 10;  $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>'#'.$search['results'][$b]['url'].'#'.$from_id]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"🎭╽اهلا بک عزيزي 🙋🏽‍♂
🗃╽في قائمهۃ البحث من اليوتيوب !
📝╽اضغط فوق الاسم المراد تنزيلهہ‌‏ وانتظر. ↯
📬╽نتائج عن البحث عن :- $text 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>$reply_markup
]);
} 
}
if($update->inline_query != null){
	$yt = explode('#', $update->inline_query->query);
	if($yt[0] == 'audio' and $ssa['audio'][$update->inline_query->query] != null){
		bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' =>json_encode([[
            	  'type'=>'audio',
            	   'title'=>$ssa['audio'][$update->inline_query->query]['title'],
            	 	 'caption'=>"$BotUserName - ". $ssa['audio'][$update->inline_query->query]['size'],
 

'audio_file_id'=>$ssa['audio'][$update->inline_query->query]['file_id'],
                'id'=>base64_encode(rand(5,555)),
            	]])
     ]);
	} elseif($yt[0] == 'voice' and $ssa['voice'][$update->inline_query->query] != null){
		bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' =>json_encode([[
            	  'type'=>'voice',
            	  'title'=>$ssa['voice'][$update->inline_query->query]['title'],
            	 'caption'=>"$BotUserName - ". $ssa['voice'][$update->inline_query->query]['size'],
 'voice_file_id'=>$ssa['voice'][$update->inline_query->query]['file_id'],
                'id'=>base64_encode(rand(5,555)),
                ]])
     ]);
	}}
########
if(isset($update->inline_query))
{ 
$id = $update->inline_query->from->id; 
$idchat = $update->inline_query->chat->id; 
$idms = $update->inline_query->message_id; 
$text_inline = $update->inline_query->query;
$textinline=file_get_contents("data1/$id/text.txt");
$link=file_get_contents("code/$id/code.txt");
}
######
if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url) and filter_var($url, FILTER_VALIDATE_URL)) {
echo youtube($url);
}else{
echo "Not Valid Url!";
}
######
$tilitet = "♻️مشاركه مع اصدقائك♻️";
if($update->inline_query){
$text_inline = $update->inline_query->query;
$iid=$update->inline_query->id;
$idchat = $update->inline_query->chat->id; 
$idms = $update->inline_query->message_id; 

$text_inline=str_replace(' ','-',$text_inline);
$item = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&q=".urlencode($text_inline)."&type=video&key=AIzaSyA_uEMKcdr0RK0IrCfxQvc-H56k4L-SU_Y&maxResults=10"))->items;      	
 	$keyboard["inline_keyboard"]=[];
	  	 for($i=0;$i < count($item);$i++){
        $res[$i] = [
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)), 'thumb_url'=>$item[$i]->snippet->thumbnails->default->url,
                'title'=>$item[$i]->snippet->title,
               'description' => urlencode($text_inline), 'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"https://www.youtube.com/watch?v=".$item[$i]->id->videoId],
          ];
    }
	  	$r = json_encode($res);
    bot('answerInlineQuery',[
 'inline_query_id'=>$update->inline_query->id,    
            'results' =>($r)
        ]);
}
########

if($tttext and !preg_match("/(.*?)(youtube)|(you)(.*?)/",$texttt)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔍 يتم البحث  
",

]);
$texttt=str_replace(' ','-',$text);
$item = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&q=".urlencode($text)."&type=video&key=AIzaSyA_uEMKcdr0RK0IrCfxQvc-H56k4L-SU_Y&maxResults=10"))->items;      	
 	$keyboard["inline_keyboard"]=[];
	  	 for($i=0;$i < count($item);$i++){
$na=$item[$i]->snippet->title;
$idv=$item[$i]->id->videoId;
$keyboard["inline_keyboard"][$i]=[['text'=>"$na",'callback_data'=>"idv ".$idv]];
}
$reply_markup=json_encode($keyboard);

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔘 نتائج البحث ",
'reply_markup'=>$reply_markup
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$reply_markuup ",

]);
}

#-----------------------------------
if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
//»»»»»»»»»»»»»»»»»»
if($text == "/admin" or $text == "back 🔙" or $text == "❌┇› الغاء الامر"  or $text == 'رجوع 🔙' or $text =="الاوامر"){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$from_id, 
	'text' =>"🙋🏻‍♂️ ¦› أهلا بك عزيزي الأدمن 🔱
⚙️ ¦› هذه الاعدادات الخاصة بك 🌚
",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗃┇› تعيين رسالة /start"]
],
[
['text'=>"🚸┇› وضع قناة الاشتراك¹"],['text'=>"🚸┇› وضع قناة الاشتراك²"]
],
[
['text'=>"🗑┇› حذف قناة الاشتراك¹"],['text'=>"🗑┇› حذف قناة الاشتراك²"]
],
[
['text'=>"🔱┇› تفعيل التنبيه"],['text'=>"⚠️┇› تعطيل التنبيه"]
], 
[
['text'=>"〽️┇› تفعيل البوت"],['text'=>"⚠️┇› تعطيل البوت"]
],
[
['text'=>"🔂┇› تفعيل التوجية"],['text'=>"🔁┇› تعطيل التوجية"]
], 
[
['text'=>"🚷┇› حظر خاص"],['text'=>"🚫┇› الغاء حظر الخاص"]
],
[
['text'=>"🎯┇› قسم الاذاعة"]
],
[
['text'=>"💤┇› حظر بالمعرف"],['text'=>"🌀┇› الغاء الحظر بالمعرف"]
],
[
['text'=>"📊┇› الاحصائيات"],['text'=>"🔍┇› وضع تعليمات"]
],
[
['text'=>"💬┇› تفعيل التواصل"],['text'=>"💬┇› تعطيل التواصل"]
],
[
['text'=>"📮┇› المشتركين"],['text' =>"📁┇› جلب نسخة"]
],
[
['text'=>"🗂┇› رفع نسخة للاعضاء"],['text'=>""]
],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚸┇› وضع قناة الاشتراك¹" and $from_id == $admin){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🔰¦ أرسل معرف القناة العام الان
👨🏻‍💻¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
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
if($message->forward_from_chat and $sting =="knat" and $from_id == $admin){
file_put_contents("sting.txt","link1");
$idchannel= $message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link1" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linktv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text!=null and $text != "إلغاء ❌" and $sting =="knat" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("tv.txt","$text"); 
unlink("linktv.txt"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"*- مرحبا بك عزيزي 💁‍♂
🌀 ¦ تم حفظ معرف القناة بنجاح √
🔘 ¦ فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($text == "🗑┇› حذف قناة الاشتراك¹" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
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
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($text == "🚸┇› وضع قناة الاشتراك²" and $from_id == $admin) {
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
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
if($message->forward_from_chat and $sting =="sting" and $from_id == $admin){
unlink("sting.txt");
$idchannel= $message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link2" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linkch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if( $text !=null and $text != "إلغاء ❌" and $sting =="sting" and $from_id == $admin and !$message->forward_from_chat ){
file_put_contents("ch.txt","$text"); 
unlink("linkch.txt");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="🗑┇› حذف قناة الاشتراك²" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦ تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
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
//»»»»»»»»»»»»»»»»»»
if($text == "💤┇› حظر بالمعرف" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💤¦› حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
"]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🚷 ¦› تم حظر العضو بنجاح
[$text](https://t.me/$tf) 
",'reply_to_message_id'=>$message_id, 
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
'text'=>"🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
"]);$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="🌀┇› الغاء الحظر بالمعرف" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
"]);file_put_contents("sting.txt","unkband1");} 

if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
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
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
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
"text"=>"📮¦› تم الارسال بنجاح √
"]);}
if($text == "💬┇› تعطيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"❎ ¦› تم تعطيل التواصل بنجاح
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
if($text == "💬┇› تفعيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💬 ¦› تم تفعيل التواصل بنجاح 
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
if($text == "📮┇› المشتركين" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" *📊¦› عدد مشتركين البوت هو $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if($text == "عدد البوتات 🔰" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>count($ok)
	, 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text =="🔱┇› تفعيل التنبيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔔¦› تم تفعيل التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
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
file_put_contents("onstart.txt","start");
} 
if($text =="⚠️┇› تعطيل التنبيه" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔕¦› تم تعطيل ❎ التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
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
//»»»»»»»»»»»»»»»»»»
if($text == "🎯┇› قسم الاذاعة" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"📝┇› نشر رسالة"],['text'=>"📸┇› نشر صورة"]
],
[
['text'=>"📹┇› نشر فيديو"],['text'=>"🏧┇› نشر ملصق"]
],
[
['text'=>"📂┇› نشر ملف"],['text'=>"🎙┇› نشر صوت"]
],
[
['text'=>"Ⓜ️┇› نشر ماركدوان"],['text'=>"⚜┇› نشر HTML"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text' =>"®┇› اذاعة في القنوات"],['text'=>"↩️┇› اذاعة خاص بالتوجيه"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "❌┇› الغاء الامر"){
	unlink("send.txt");
	}
if($text == "❌┇› الغاء الامر" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*❎ ¦› تم الإلغاء بنجاح 💯
🔙 ¦› سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
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
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text'=>"رجوع 🔙"],['text'=>"نشر اعلان في القنوات 💥"]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "📝┇› نشر رسالة" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي شيء لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "📸┇› نشر صورة" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌 ¦› الان ارسل اي صورة لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == '📹┇› نشر فيديو' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌¦› الان ارسل اي فيديو لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == "🏧┇› نشر ملصق" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملصق لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "📂┇› نشر ملف" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف او صورة gif لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "🎙┇› نشر صوت" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "Ⓜ️┇› نشر ماركدوان" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص وسيدعم الماركدون لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "⚜┇› نشر HTML" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص  وسيدعم الHTML لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "❌┇› الغاء الامر"){
if($text != '❌┇› الغاء الامر' and $send == "txt" and $from_id == $admin){
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
if($text == "❌┇› الغاء الامر" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="🔂┇› تفعيل التوجية" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔄 ¦› تم تفعيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
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
	if($text == "🔁┇› تعطيل التوجية" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔒¦› تم تعطيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
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
//»»»»»»»»»»»»»»»»»»
if($text == "🚷┇› حظر خاص" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لحظره من البوت"]) ;
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊 ¦› تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
",'reply_to_message_id'=>$message_id, 
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
'text'=>"🚸 ¦› عذرا عزيزي📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي"]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="🚫┇› الغاء حظر الخاص" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر"]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
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
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($text =="🗃┇› تعيين رسالة /start" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📝¦ أرسل نص البدء { /start } 🙋🏻‍♂️
يمكنك وضع الاسم بشرط ان تضعه بين { }
هكذا {الاسم}
"]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if ($text =="🔍┇› وضع تعليمات" and $from_id == $admin) {
file_put_contents("sting.txt","help");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔰¦ أرسل نص التعليمات 🙋🏻‍♂️
يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
هكذا {الاسم}
"]);
file_put_contents("sting.txt","help");}
if($text and $sting =="help" and $from_id == $admin ){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص التعليمات بنجاح
/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$text);}
//»»»»»»»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🔄┇› اذاعة عام بالتوجية" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📢┇› اذاعة عام للكل" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "↩️┇› اذاعة خاص بالتوجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

//»»»»»»»»»»»»»»»»»»
if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "📊┇› الاحصائيات"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 
┄─━━━━━━━─┄
*📡 ¦ عدد المجموعات المفعله ◄ *[$MoHaMMedd](tg://user?id=$id)*
🤖 ¦ عدد البوتات المصنوعة ◄ $ok ،
👥 ¦ عدد المشترڪين ◄ *[$MOhaMMed](t.me/TH3NK)* ،
⏰ ¦ الوقت ◄ *[$date $aa](t.me/TH3NK)* ،
√*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}}
//»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "📁┇› جلب نسخة" and $from_id = $admin){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
Team Yemen : ". @THTSS ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}
#-----------------------
if($text == "🗂┇› رفع نسخة للاعضاء" and $from_id == $admin) {
		bot("sendMessage",[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
'text'=>"حسـننآ ارسل ملف الان لاكن ارسل صيغ ملف بل txt.",
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
}
$repad = $message->reply_to_message->document;
$aduo = $repad->file_id;
if(isset($repad) and in_array($chat_id,$ad)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$aduo),true);
$path = $url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("alsh/Alsh.txt",file_get_contents($file));
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع نسخه بنجاح.",
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
}
//»»»»»»»»»»»»»»»»»»

$tilitet = "♻️ شارك البوت لاصدقائك ♻️";
$index = "<h2>@AY_AA</link>";
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'اضغط هنا للنشر ',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
*👋¦ مرحبا بك عزيزي في 🧑‍🔧؛
📥¦ بوت التحميل من صفحات اليوتيوب ؛
🔗¦ عن طريق ارسال رابط الاغنية مباشرة ؛
🔍¦ او البحث بطريقة الامر ❪ @vid ❫ ثم النص المراد ؛
┄─━━━━━━━─┄
📡¦ لمـعرفهہ‌‏ المزيد تابع @DeDiCaTeSoNgS ؛
👨‍✈️¦ مـطـور آلبوت @IIIIIX ؛
ـ @NiGGa_SoUrcE🛒 ؛*
"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>"👾 اضغط هنا للدخول 👾",'url'=>'https://telegram.me/@NIGGA_YTbot?start']
               ], 
                [['text'=>"$tilitet", 'switch_inline_query'=>"$from_id"]], 
             ]]
        ]])
    ]);



/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم يمن ⋙ @TH3SS⌯
⌯⁞ تيم نيزك ⋙ @TH3NK⌯
ـ @TH1BS
*/
