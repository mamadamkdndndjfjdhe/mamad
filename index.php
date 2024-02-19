<?php

$telegram_ip_ranges = [['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],['lower' => '91.108.4.0',    'upper' => '91.108.7.255']];
$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {

    $lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
    $upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
    if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;}
if (!$ok) die();



date_default_timezone_set('Asia/Tehran');
error_reporting(0);
$token="6568714786:AAG0fpmj0pWOv9_mSM9f29NwWIO_KyHR_9o";//توکن
define('API_KEY',$token);
mkdir("data");
mkdir("data/gp");
mkdir("data/int");
mkdir("data/gap");
mkdir("data/kalamat");
mkdir("data/spam");
mkdir("data/user");
mkdir("data/users");

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
        return json_decode($res);}}
function Botinfo($what){
    return bot('GetMe',[])->result->$what;}
function sendphoto($chat_id, $photo, $captionl){
    bot('sendphoto',[
        'chat_id'=>$chat_id,
        'photo'=>$photo,
        'caption'=>$caption,
    ]);
}
function sendsticker($chat_id, $sticker){
    bot('sendsticker',[
        'chat_id'=>$chat_id,
        'sticker'=>$sticker
    ]);
}
function sendaudio($chat_id, $audio, $caption){
    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$audio,
        'caption'=>$caption,
    ]);
}
function sendvoice($chat_id, $voice, $caption){
    bot('sendvoice',[
        'chat_id'=>$chat_id,
        'voice'=>$voice,
        'caption'=>$caption,
    ]);
}
function SendVideoVote($chat_id, $videonote, $captionl){
    bot('SendVideoNote',[
        'chat_id'=>$chat_id,
        'video_not'=>$videonote,
        'caption'=>$caption,
    ]);
}
function sendvideo($chat_id, $video, $captionl){
    bot('sendvideo',[
        'chat_id'=>$chat_id,
        'video'=>$video,
        'caption'=>$caption,
    ]);
}
function SM($chat_id,$mode,$text,$message_id)
{
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode'=>$mode,
        'reply_to_message_id'=>$message_id
    ]);
}
function SendDocument($chatid,$document,$caption = null){
    bot('SendDocument',[
        'chat_id'=>$chatid,
        'document'=>$document,
        'caption'=>$caption
    ]);
}
function pinChatMessage($chat_id){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
    ]);
}
/*
function Editmessagetext($chat_id, $message_id, $text){
bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text,]);
         }*/
//━━//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$tc = $update->message->chat->type;
$data = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$textt = $update->callback_query->message->text;
$inline = $update->inline_query->query;
$inline_message_id = $update->callback_query->inline_message_id;
$new_chat_member_id = $update->message->new_chat_member->id;
$new_chat_member_username = $update->message->new_chat_member->username;
$rpto = $update->message->reply_to_message->forward_from->id;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$textmassage = $message->text;
$fromid = $update->callback_query->from->id;
$data = $update->callback_query->data;
$membercall = $update->callback_query->id;
$firstname = $update->callback_query->from->first_name;
$usernameca = $update->callback_query->from->username;
$on = file_get_contents("users/$chat_id/onlines.txt");
// تعریف فانکشن های مورد نیاز
$up                               = json_decode(file_get_contents('php://input'));
$from_id                     = $up->message->from->id;
$chat_id                      = $up->message->chat->id;
$message_id             = $up->message->message_id;
$text                            = $up->message->text;

//┅┅//
$reply = $update->message->reply_to_message;
$rename = $reply->from->first_name;
$reid = $reply->from->id;
$repmsg = $reply->message_id;
$callback_query = $update->callback_query;
$chatid = $callback_query->message->chat->id;
$messageid = $callback_query->message->message_id;
$data = $callback_query->data;
$kos = $callback_query->message->text;
$kosk = $callback_query->from->first_name;
$admins = array("6697495130"); // 
$bottag = "jdshddhbot"; // یوزرنیم ربات بدون@
$channel = "mammadihaaa173"; // یوزرنیم چنل بدون 
$botid = "6568714786"; // شناسه ربات در ابتدای توکن
$IdCl = "xxxxxxx"; // یوزرنیم چنل عکس بدون@
$IdPic = "0000"; // شماره عکس داخل چنل
$fggwu = "O9930854022"; // یوزرنیم پشتیبانی بدون @
$amirr = "O9930854022"; // یوزرنیم مالک بدون @
//┅┅//
$bugun = date('d-M Y',strtotime('3 hour'));
$name_bot = Botinfo('first_name');
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$channel&user_id=".$chat_id));
$user = json_decode(file_get_contents("data/users/$from_id.json"),true);
$stats_n = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
$setp = $user['step']; // User STEP
$status_n = $stats_n['result']['status']; // STATS
$statusq = $statjsonq['result']['status']; // STATS
$tch = $forchaneel->result->status; // True Channel
$all_gaps = file_get_contents("data/allgap.txt");
$all_users = file_get_contents("data/allusers.txt");
$yadauto = file_get_contents("data/autoYAD.txt");
if(isset($data)){
    $fid = $update->callback_query->from->id;}
if(isset($message->from)){
    $fid = $message->from->id;}

//==
@$juser = json_decode(file_get_contents("data/user/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/user/$fromid.json"),true);
@$getgp = json_decode(file_get_contents("data/gp/$chat_id.json"),true);
@$getgpc = json_decode(file_get_contents("data/gp/$chatid.json"),true);
@$database = json_decode(file_get_contents("data/database.json"),true);
@$rival = json_decode(file_get_contents("data/rival.json"),true);
//━━//
function Download($link, $path){
    $file = fopen($link, 'r') or die("Can't Open Url !");
    file_put_contents($path, $file);
    fclose($file);
    return is_file($path);
}
function deletefolder($path){
    if($handle=opendir($path)){
        while (false!==($file=readdir($handle))){
            if($file<>"." AND $file<>".."){
                if(is_file($path.'/'.$file)){
                    @unlink($path.'/'.$file); }
                if(is_dir($path.'/'.$file)) {
                    deletefolder($path.'/'.$file);
                    @rmdir($path.'/'.$file); }} } }}
function step($from_id,$step){
    $user = json_decode(file_get_contents("data/users/$from_id.json"),true);
    $user["step"] = "$step";
    $outjson = json_encode($user,true);
    file_put_contents("data/users/$from_id.json",$outjson);
    return true;}
//━━//
if($yadauto == null ){
    file_put_contents("data/autoYAD.txt","⬜");}
if($tc == "private" ){
    $all_users2 = explode("\n",$all_users);
    if(!in_array($chat_id,$all_users2)){
        $tctctct = fopen("data/allusers.txt", "a") or die("Unable to open file!");
        fwrite($tctctct, "$chat_id\n");
        fclose($tctctct);}}
$user_flood = file_get_contents("data/spam/$fid.txt");
if($user_flood < time()){
    $spamtime = 0.09; // تایم اسپم پشت سرهم
    $tt = time() + $spamtime;
    file_put_contents("data/spam/$fid.txt",$tt);
//━━//
    if($text == "/start"){
        if($tc == "private" ){
            if($tch != 'member' && $tch != 'creator' && $tch != 'administrator' ){
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"❗️کاربر گرامی برای استفاده از ربات و حمایت از ما ابتدا در چنل زیر عضو شوید و سپس /start را ارسال کنید!",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "🛎️ عضویت در کانال️", 'url' => "https://t.me/mammadihaaa173"]],
                            [['text'=>"🌟 عضو شدم",'callback_data'=>"join"]],
                        ]])
                ]);
            }else{
                step($chat_id,"none");
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"👋🏻 سلام [$first_name](tg://user?id=$from_id)
خوش اومدی 🥳
میخوای گروهت جذاب شه؟ $name_bot ! تو گروهت اد کن😎
برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
                    'parse_mode'=>"MarkDown",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                            [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                            [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                                ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                            [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
                        ] ]) ]);  }}}
    if(strpos($text,"'") !== false or strpos($text,'"') !== false or strpos($text,"}") !== false or strpos($text,"{") !== false){
        if($tc == "private" ){
            $tt = time() + 9999999999999999;
            file_put_contents("data/spam/$from_id.txt",$tt);
            if(!in_array($chat_id,$admins)){
                step($chat_id,"none");
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🔔 به دلیل ارسال کد مخرب به ربات، بلاک شدید!",
                    'parse_mode'=>"HTML",
                    'reply_to_message_id'=>$message_id,
                ]);
                bot('sendMessage',[
                    'chat_id'=>$admins[0],
                    'text'=>"[▫️ این کاربر کد مخرب ارسال کرد!](tg://user?id=$from_id)",
                    'parse_mode'=>"MarkDown",
                ]);
            }else{
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🔰 شما از ربات به دلیل به خطر انداختن امنیت مسدود شدید!",
                    'parse_mode'=>"HTML",
                    'reply_to_message_id'=>$message_id,
                ]); }}}
    elseif($data == "back"){
        step($chatid,"none");
        bot('editMessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text' => "📱 به منوی اصلی بازگشتید

برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                    [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                    [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                        ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                    [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
                ]]) ]);}
    elseif($data == "sar"){
        bot('editMessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text' => "🏻 ابتدا ربات را عضو گروه کنید، سپس در گروه ادمین کنید. ( ربات به صورت خودکار نصب میشود )

🏻 سپس جهت مشاهده راهنما دستور پنل را ارسال کنید.",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🤍 اشتراک گزاری جوک",'switch_inline_query'=>"jok"]],
                    [['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],
                ]
            ])
        ]);}
    elseif($data == "addkalame"){
        step($chatid,"addkalame");
        bot('editMessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text' => "🎓 کلمه مورد نظر را ارسال کنید:",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],
                ]
            ])
        ]);}
    elseif($user["step"] == "addkalame" && $tc == "private"){
        if(!file_exists("data/kalamat/$text.txt")){
            if(strlen($text) < 160 ){
                $user["kalame"] = $text;
                $user["step"] = "adduwgw";
                $outjson = json_encode($user,true);
                file_put_contents("data/users/$from_id.json",$outjson);
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🧾 جواب را ارسال کنید
 
 📔 میتوانید جواب های رندوم هرکدام در یک خط ارسال کنید!
 مثال:
 جواب اول
 جواب دوم 
 جواب سوم
 در صورتی که جواب های شما تک باشد پذیرفته نمیشود لطفا برای یک کلمه چندین جواب تعیین کنید💞",
                    'parse_mode'=>"MarkDown",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],
                        ]
                    ])
                ]); }else{
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"💬 کلمه شما بیش از اندازه طولانی است
کلمه ای دیگر ارسال کنید:",
                    'parse_mode'=>"MarkDown",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],
                        ]])
                ]); }}else{
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"💬 این کلمه از قبل در ربات موجود است
کلمه ای دیگر ارسال کنید:",
                'parse_mode'=>"MarkDown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[[['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],]
                ]) ]); }}
    elseif($user["step"] == "adduwgw" && $tc == "private"){
        if(strlen($text) < 250 ){
            $user["step"] = "none";
            $outjson = json_encode($user,true);
            file_put_contents("data/users/$from_id.json",$outjson);
            $Kalame = $user["kalame"];
            if($yadauto == "⬜"){
                file_put_contents("data/kalamat/$Kalame.txt",$text);
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🎀 کلمه ارسالی شما در ربات ثبت شد
🌹 با تشکر",
                    'parse_mode'=>"MarkDown",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],
                        ]
                    ])
                ]);  }else{
                $r = rand(11111111,999999999);
                $rand = $r;
                $users = json_decode(file_get_contents("data/int/$rand.json"),true);
                $users["id"] = $chat_id;
                $users["kalame"] = $Kalame;
                $users["javab"] = $text;
                $outjsons = json_encode($users,true);
                file_put_contents("data/int/$rand.json",$outjsons);
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🦋 کلمه ارسالی شما به لیست تایید پیوست!

⚠️ <b>( از ارسال مجدد این کلمه خود داری کنید )</b>
🪄 پس از تایید به شما اعلام میشود! سپاس از شما🙏🏻🌹",
                    'parse_mode'=>"HTML",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[[['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],]])
                ]);
                $yaro = "[Open Profile](tg://user?id=$from_id)";
                bot('sendMessage',[
                    'chat_id'=>$admins[0],
                    'text'=>"📯 کلمه ( `$Kalame` ) توسط ( $yaro )
با پاسخ های:
`$text`

❗️ به لیست انتظار پیوست!",
                    'parse_mode'=>"MarkDown",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=> "🤍 تایید", 'callback_data'=>"ta_$rand"],['text'=> "🖤 رد کردن", 'callback_data'=>"la_$rand"]],
                            [['text'=> "💔 مسدود کردن شخص 💔", 'callback_data'=>"ba_$from_id"]],
                        ]
                    ])
                ]);}}else{
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"💬 جواب ارسالی شما بیش از اندازه طولانی است!
پاسخی دیگر ارسال کنید:",
                'parse_mode'=>"MarkDown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی", 'callback_data'=>"back"]],
                    ]
                ])
            ]);}}
    elseif(strpos($data,"la_") !== false ){
        $ok = str_replace("la_","",$data);
        $users = json_decode(file_get_contents("data/int/$ok.json"),true);
        $id = $users['id'];
        $kalam = $users['kalame'];
        bot('sendMessage',[
            'chat_id'=>$id,
            'text'=>"💗 کاربر گرامی، کلمه $kalam تایید نشد!
🖋 از ارسال مجدد آن خودداری کنید.",
        ]);
        unlink("data/int/$ok.json");
        bot('editMessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text' => "💘 کلمه رد شد!",
            'parse_mode'=>"MarkDown",
        ]); }
    elseif(strpos($data,"ta_") !== false ){
        $ok = str_replace("ta_","",$data);
        $users = json_decode(file_get_contents("data/int/$ok.json"),true);
        $kalam = $users['kalame'];
        $jav = $users['javab'];
        $id = $users['id'];
        file_put_contents("data/kalamat/$kalam.txt",$jav);
        bot('sendMessage',[
            'chat_id'=>$id,
            'text'=>"🌹کاربر گرامی، کلمه $kalam به ربات اضافه شد.
با تشکر 🙏🏻",
        ]);
        unlink("data/int/$ok.json");
        bot('editMessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text' => "💌 کلمه با موفقیت تایید شد!",
            'parse_mode'=>"MarkDown",
        ]); }
    elseif(strpos($data,"ba_") !== false ){
        $ok = str_replace("ba_","",$data);
        $tt = time() + 9999999999999999;
        file_put_contents("data/spam/$ok.txt",$tt);
        bot('sendMessage',[
            'chat_id'=>$ok,
            'text'=>"🛡️ شما از ربات توسط مدیریت مسدود شدید!",
            'parse_mode'=>"MarkDown",
        ]);
        bot('editMessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text' => "🎭 کاربر از ربات مسدود شد!",
            'parse_mode'=>"MarkDown",
        ]); }
//━━کامل━//
    if($text == "راهنما" or $text == "پنل"){
        $id_bot = bot('GetMe',[]) -> result -> id;
        $stats_b = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$id_bot),true);
        $status_b = $stats_b['result']['status'];
        if ($status_b == 'creator' or $status_b == 'administrator' ){
            if ($status_n == 'creator' or $status_n == 'administrator' ){
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"⚙️ در این بخش شما میتوانید دستورات مختلف ربات را مشاهده و استفاده کنید:
📆: $bugun",
                    'parse_mode'=>"MarkDown",
                    'reply_to_message_id'=>$message_id,
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"😜 ارسال جوک",'switch_inline_query'=>"jok"],
                                ['text'=>"بخش کاربردی🛠",'callback_data'=>'help_g']],
                            [['text'=>"🎇افکت گذاری",'callback_data'=>'help_ef'],    ['text'=>"بخش سرگرمی😋",'callback_data'=>'help_sar']],
                            [['text'=>"🔀تبدیل گر",'callback_data'=>'help_tb'],    ['text'=>"بخش مدیریت📍",'callback_data'=>'help_mdir']],
                            [['text'=>"⭐️ افزودن $name_bot به گروه ⭐️",'url'=>"https://t.me/$bottag?startgroup=new"]],
                        ]]) ]);
            }else{
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🤨 شما ادمین گروه نیستید!",
                    'parse_mode'=>"MarkDown",
                    'reply_to_message_id'=>$message_id,
                ]); }
        }else{
            bot('sendMessage',[
                'chat_id' =>$chat_id,
                'text' => "⚠️ برای فعالیت در گروه ابتدا من را ادمین کنید!",
                'parse_mode'=>"MarkDown",
                'reply_to_message_id'=>$message_id,
            ]);}}
    if($data == "back_g"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' =>"🔁 به پنل اصلی بازگشتید!
⚙️ در این بخش شما میتوانید دستورات مختلف ربات را مشاهده و استفاده کنید:",
                'parse_mode'=>"MarkDown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"😜 ارسال جوک",'switch_inline_query'=>"jok"],
                            ['text'=>"بخش کاربردی🛠",'callback_data'=>'help_g']],
                        [['text'=>"🎇افکت گذاری",'callback_data'=>'help_ef'],    ['text'=>"بخش سرگرمی😋",'callback_data'=>'help_sar']],
                        [['text'=>"🔀تبدیل گر",'callback_data'=>'help_tb'],    ['text'=>"بخش مدیریت📍",'callback_data'=>'help_mdir']],
                        [['text'=>"⭐️ افزودن $name_bot به گروه ⭐️",'url'=>"https://t.me/$bottag?startgroup=new"]],
                    ]
                ])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}
    elseif($data == "help_sar"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' => "📖 راهنمای دستورات $name_bot گروه!
<b>
به شخمم
⭕️با ریپلی رو پیام شخص میتونید پیام اون شخص را به شخمتان بگیرید
=-=-=-=-=-=-=-=-=-=-=-=-=-=     
شر نگو
با ریپلی روی پیام شخص میتونید بهش بگید کمتر حرف بزنه 🤚
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
عکس+متن
از کلمات زیر جهت دریافت عکس رندوم استفاده کنید📸
🃏مثال:
عکس girls

 《Girls●Abstract●
Animals●Architecture●
Art●Cars●
Bikes●Celebrities●
Food●Games●
Hi-Tech●Holidays●
Military●Movies●
Music●Nature●OS●Quotes●
 Space●Sport●Stock●Images》》
 =-=-=-=-=-=-=-=-=-=-=-=-=-= 
 😂~ دریافت جوک کرونایی:
• jok - جوک
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
🖊~ دریافت فونت موردنظر:
> دستور فارسی برای اسامی فارسی و دستور انگلیسی برای اسامی انگلیسی است

• font+اسم به انگلیسی
•فونت+اسم فارسی
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
خبر|اخبار
دریافت اخبار مهم روز کشور🖥
=-=-=-=-=-=-=-=-=-=-=-=-=-=   
📽~ ساخت گیف با متن مورد نظر:
• gif - گیف
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
🖋~ دریافت متن برای بیو‌گرافی:
• bio - بیوگرافی
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
🤔~ دریافت دانستنی:
• danes - دانستنی
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
〽️~ دریافت فال:
• fal - فال
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
            
            </b>
",
                'parse_mode'=>"html",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی️", 'callback_data'=>"back_g"]],
                    ]])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}
    elseif($data == "help_ef"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' => "📖 افکت گذاری دستورات $name_bot گروه!
            `افکت خاکستری`▪️`افکت یخ زده`▪️`افکت سبز`▪️`افکت خاکستری`▪️`افکت سیاه و سفید`▪️`افکت روشن`▪️`افکت قهوه ای`▪️`افکت بارانی`▪️`افکت قدیمی`▪️`افکت کم نور`▪️`افکت کم نور2`
            
            
            💬 با کلیک بر روی افکت مورد نظر افکت شما کپی میشود 
    
            و با ریپلی بر روی عکس مورد نظر و ارسال افکت مورد نظر افکت روی عکس انجام میگیرد
            ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی️", 'callback_data'=>"back_g"]],
                    ]])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}
    elseif($data == "help_mdir"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' => "📍بخش دستورات مدیریتی
<b>
» تنظیم نام + اسم

• برای تنظیم نام گروه از دستور بالا استفاده کنید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» تنظیم اطلاعات+متن

برای تنظیم متن بیوگرافی گروه از دستور بالا استفاده کنید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» پاک کردن+عدد

برای پاکسازی پیام های  گروه از دستور بالا استفاده کنید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 

</b>

            ",
                'parse_mode'=>"html",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی️", 'callback_data'=>"back_g"]],
                    ]])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}
    elseif($data == "help_tb"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' => "🔀 دستورات بخش تبدیلگر
<b>
» استیکر شو

• وقتایی که میخواین یه عکس رو استیکر کنین به عکس ریپلی کنین و دستور بالا رو بهش بفرستین
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» عکس شو

وقتایی که میخواین یه استیکر به عکس تبدیل کنین روی استیکر ریپلی کنید و دستور بالا رو بفرستید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» ویس شو

وقتایی که میخاید یه موزیکیو به ویس تبدیل کنید از دستور بالا استفاده کنید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» اهنگ شو

وقتایی که میخاید یه ویسیو به اهنگ تبدیل کنید از دستور بالا استفاده کنید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» موزیک شو

وقتایی که میخواید موزیک یه کلیپیو ازش جدا کنید از دستور بالا استفاده کنید 
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
» تبدیل به گیف

وقتایی که میخواید یه ویدیو رو تبدیل به گیف کنید از دستور بالا استفاده کنید
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
</b>

            ",
                'parse_mode'=>"html",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی️", 'callback_data'=>"back_g"]],
                    ]])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}
    elseif($data == "help_ef"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' => "📖 افکت گذاری دستورات $name_bot گروه!
            `افکت خاکستری`▪️`افکت یخ زده`▪️`افکت سبز`▪️`افکت خاکستری`▪️`افکت سیاه و سفید`▪️`افکت روشن`▪️`افکت قهوه ای`▪️`افکت بارانی`▪️`افکت قدیمی`▪️`افکت کم نور`▪️`افکت کم نور2`
            
            
            💬 با کلیک بر روی افکت مورد نظر افکت شما کپی میشود 
    
            و با ریپلی بر روی عکس مورد نظر و ارسال افکت مورد نظر افکت روی عکس انجام میگیرد
            ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی️", 'callback_data'=>"back_g"]],
                    ]])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}

    elseif($data == "help_g"){
        if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$admins) ){
            bot('editMessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text' => "📖 راهنمای دستورات $name_bot گروه!
<b>
✔️~ دریافت دستورات در پیوی:
• panel pv - پنل پیوی
=-=-=-=-=-=-=-=-=-=-=-=-=-= 

📱~ دریافت قیمت گوشی:
• mobile + اسم گوشی به انگلیسی
=-=-=-=-=-=-=-=-=-=-=-=-=-= 

📃~ دریافت معنی کلمات فارسی در لغت نامه :
• معنی + اسم
مثال: معنی میخ
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
📿~ دریافت اوقات شرعی:
• azan+اسم شهر
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
⌛️~ محاسبه سن دقیق شما:
• age - محاسبه سن
> مثال: age 1378/11/15
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
📖ترجمه انگلیسی به فارسی
ترجمه فارسی+جمله
ترجمه فارسی به انگلیسی📖
ترجمه انگلیسی+جمله
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
دریافت اطلاعات امار کرونا کشور ها😷
corona+اسم کشور به انگلیسی
مثال:
corona iran
=-=-=-=-=-=-=-=-=-=-=-=-=-=     
  
این چیه
با ریپلی بر روی عکس و ارسال دستور بالا ربات با هوش مصنوعی محتوا داخل عکس را حدس میزند 🤔😯
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
جهت دریافت اطلاعات خود دستور من را بفرستید🤚
=-=-=-=-=-=-=-=-=-=-=-=-=-= 


⏰~ دریافت زمان:
• time - ساعت
=-=-=-=-=-=-=-=-=-=-=-=-=-= 

💲•قیمت ارز
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
📷•/photo+اسم فارسی
ساخت لوگو دست بندی
=-=-=-=-=-=-=-=-=-=-=-=-=-=     

لوگو+اسم به انگلیسی
دریافت لوگو های جذاب و باحال ✌️
=-=-=-=-=-=-=-=-=-=-=-=-=-=  
📈•country+اسم کشور به انگلیسی
دریاف اطلاعات کشور ها
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
هوای+اسم شهر
🌧دریافت آب و هوا شهر خود
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
بگوو+متن
با این دستور ربات پیام شما رو حذف و جمله شما رو تکرار میکنه
=-=-=-=-=-=-=-=-=-=-=-=-=-=  
🎮 راهنما بازی کردن و نحوه بازی جرات حقیقت:
 
 
▫️ راهنمای اجرای بازی:
• در هر زمان در گروه خود میتوانید با دستور /game بازی جدید بسازید.
 
▫️ راهنمای نحوه بازی:
• ابتدا بازی را شروع میکنیم کاربران (حداقل دو کاربر ) باید در بازی شرکت کنند.

• کاربری که بازی را شروع کرده به عنوان داور انتخاب میشود و باید صحت پاسخ کابران به سوالات جرات یا حقیقت ربات را تایید کند.

• توجه داشته باشید، در صورت تایید نکردن پاسخ یک کاربر از بازی خارج میشود.
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
⌨️~ دریافت پسورد برای اطلاعات:
• new password - ساخت پسورد
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
~ ارسال 🎲 و دریافت سریع عدد تاس
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
📍~ دریافت لیست بازی های آنلاین:
• gamee - لیست بازی ها
=-=-=-=-=-=-=-=-=-=-=-=-=-= 

</b>
",
                'parse_mode'=>"html",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=> "🏛 منوی اصلی️", 'callback_data'=>"back_g"]],
                    ]])
            ]);}else{
            bot('answercallbackquery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "🤨 شما ادمین گروه نیستید!",
                'show_alert' => false
            ]);}}
    elseif(isset($update->inline_query->query) and $update->inline_query->query == 'jok'){
        $rand = rand(1,15);
        $api =file_get_contents("http://api.codebazan.ir/jok");
        bot("answerInlineQuery",[
            "inline_query_id"=>$update->inline_query->id,
            "results"=>json_encode([[
                "type"=>"article",
                "id"=>base64_encode(rand(5,555)),
                "title"=>"Send Jok",
                "input_message_content"=>[
                    'parse_mode'=>"markdown",
                    "message_text"=>"$api"],
                "reply_markup"=>[
                    "inline_keyboard"=>[
                        [['text' => "↪️ اشتراک گزاری", 'switch_inline_query' => "jok"],["text"=>"♻️ جوک بعدی","callback_data"=>"nextjok"]],
                    ]]]])
        ]);}
    elseif($data == "nextjok"){
        $rand = rand(1,15);
        $api =file_get_contents("http://api.codebazan.ir/jok");
        bot("editmessagetext", [
            "text"=>"$api",
            "inline_message_id"=>$inline_message_id,
            'parse_mode'=>"markdown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text' => "↪️ اشتراک گزاری", 'switch_inline_query' => "jok"],["text"=>"♻️ جوک بعدی","callback_data"=>"nextjok"]],
                ]])
        ]);
        bot("answerCallbackQuery",[
            "callback_query_id"=>$update->callback_query->id,
            "text"=>"👁‍🗨 جوک بعدی ..."
        ]);}
    if($tc == "supergroup" or $tc == "group" ){
//┅┅کامل┅//
        $all_gaps2 = explode("\n",$all_gaps);
        if(!in_array($chat_id,$all_gaps2)){
            $tctctct = fopen("data/allgap.txt", "a") or die("Unable to open file!");
            fwrite($tctctct, "\n$chat_id");
            fclose($tctctct);
            bot('sendMessage',[
                'chat_id' =>$chat_id,
                'text' => "🔅 ربات $name_bot نصب شد!

📚 <b>ابتدا ربات را ادمین گروه کرده و سپس کلمه پنل را ارسال کنید!</b>

⚠️ <b>تا زمانی که ادمین گروه نباشم نمیتوانم فعالیتی انجام دهم!</b>",
                'parse_mode'=>"HTML",
            ]);
            bot('sendMessage',[
                'chat_id' =>$admins[0],
                'text' => "⚜ گروه `$chat_id` به ربات اضافه شد!",
                'parse_mode'=>"MarkDown",
            ]);}
        if($text && file_exists("data/kalamat/$text.txt")){
            $file = file_get_contents("data/kalamat/$text.txt");
            $ex = explode("\n",$file);
            $jrand = $ex[rand(0, count($ex)-1)];
            bot('sendMessage',[
                'chat_id' =>$chat_id,
                'text' =>$jrand,
                'reply_to_message_id'=>$message_id,
            ]);}
//------///----///-------
        if($text == "jok" or $text == "جوک" ){
            $rand = rand(1,15);
            $api =file_get_contents("http://api.codebazan.ir/jok");
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"$api",
                'reply_to_message_id'=>$message_id,
            ]);}
//--------////------////-----
        $dice = $message->dice;
        $emoji = $dice->emoji;
        $value = $dice->value;
        if($dice){
            bot('Sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"▪️ اموجی ارسالی: $emoji
▪️ عدد دریافت شده *$value* از 6 در صورت ارسال ( 🎲 )",
                'reply_to_message_id'=>$message_id,
                'parse_mode'=>"MarkDown",
            ]);}
        elseif($text =="پ ن پ"or $text == "pa na pa"){
            $panapa= file_get_contents("http://api.codebazan.ir/jok/pa-na-pa/");
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"$panapa",
                'reply_to_message_id'=>$message_id,
                'parse_mode'=>'MarkDown',
            ]);}/*
if(preg_match('/^[\/\#\!\.]?(effect|افکت) (آبی|زرد|قرمز|سیاه)$/si', $te
    $photo= $message->reply_to_message->photo;
$count = count($photo)-1;
$file_id = $message->reply_to_message->photo[$count]->file_id;
    $getfiile = bot('getfile',['file_id'=>$file_id]);
    $pathh = $getfiile->result->file_path;
    $link = "https://api.telegram.org/file/bot$token/$pathh";
if($mh[2]=="آبی"){
$bot =
"http://web-api.xyz/api/effect/?url=$link&filter=blackwhite";
}elseif($mh[2]=="زرد"){
$bot = "http://web-api.xyz/api/effect/?url=$link&filter=vintage";
}
$r = $bot;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$r",
'caption'=>"افکت مورد نظر اعمال شد ✔️
",
'reply_to_message_id'=>$message_id,
]);}*/
        if(preg_match('/^[\/\#\!\.]?(effect|افکت) (خاکستری|یخ زده|سبز|سیاه و سفید| روشن|قهوه ای|بارانی|سرمه ای|کم نور| کم نور2|روشن|کم رنگ)$/si', $text,$mh) or $rrt){
            $photo= $message->reply_to_message->photo;
            $count = count($photo)-1;
            $file_id = $message->reply_to_message->photo[$count]->file_id;
            $getfiile = bot('getfile',['file_id'=>$file_id]);
            $pathh = $getfiile->result->file_path;
            $link = "https://api.telegram.org/file/bot$token/$pathh";
            if($mh[2]=="خاکستری"){
                $bot =
                    "http://web-api.xyz/api/effect/?url=$link&filter=gray";
            }if($mh[2]=="یخ زده"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=colorise";
            }
            if($mh[2]=="سبز"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=aqua";
            }
            if($mh[2]=="سیاه و سفید"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=blackwite";
            }
            if($mh[2]=="قهوای"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=sepia";
            }
            if($mh[2]=="بارانی"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=rain";
            }
            if($mh[2]=="سرمه ای"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=frozen";
            }
            if($mh[2]=="نورکم"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=old2";
            }
            if($mh[2]=="نورکم2"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=old3";
            }
            if($mh[2]=="روشن"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=light";
            }
            if($mh[2]=="کم رنگ"){
                $bot = "http://web-api.xyz/api/effect/?url=$link&filter=tender";
            }
            $r = $bot;
            bot('sendphoto',[
                'chat_id'=>$chat_id,
                'photo'=>"$r",
                'caption'=>"افکت مورد نظر اعمال شد ✔️
",
                'reply_to_message_id'=>$message_id,
            ]);}


        else if(preg_match("/^[\/\#\!]?(country) (.*)$/i", $text)){
            preg_match("/^[\/\#\!]?(country) (.*)$/i", $text, $p);
            $country = $p[2];
            $uri = json_decode(file_get_contents("https://restcountries.eu/rest/v2/name/$country"),true);
            $tik2 = $uri;
            $a1 = $tik2['0']['name'];
            $a2 = $tik2['0']['topLevelDomain']['0'];
            $a3 = $tik2['0']['population'];
            $a4 = $tik2['0']['alpha2Code'];
            $a5 = $tik2['0']['capital'];
            $a6 = $tik2['0']['region'];
            $a7 = $tik2['0']['subregion'];
            $a8 = $tik2['0']['callingCodes']['0'];
            $a9 = $tik2['0']['currencies']['0']['name'];
            $a17 = $tik2['0']['currencies']['0']['symbol'];
            $a10 = $tik2['0']['languages']['0']['name'];
            $a18 = $tik2['0']['languages']['0']['nativeName'];
            $a11 = $tik2['0']['borders']['0'];
            $a12 = $tik2['0']['borders']['1'];
            $a13 = $tik2['0']['borders']['2'];
            $a14 = $tik2['0']['borders']['3'];
            $a15 = $tik2['0']['borders']['4'];
            $a16 = $tik2['0']['borders']['5'];
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"اطلاعات کشور :
 $a1

دامنه کشور : $a2
کد کشوری : $a4
جمعیت کشور : $a3
پایتخت کشور : $a5
قاره : $a6
مکان در قاره : $a7
کد تماس : $a8
نام واحد ارز : $a9
واحد ارز به زبان محلی : $a17
زبان کشور : $a10
زبان کشور به زبان محلی : $a18
زبان های محلی در کشور:
$a11
$a12
$a13
$a14
$a15
$a16


➰➰➰➰➰➰➰➰
",
                'reply_to_message_id'=>$message_id,

            ]);
        }
        if(isset($text) && $from_id == 777000)
        {
            SM($chat_id,'markdown','کامنت اول با موفقیت تسخیر شد😷✔️',$message_id);
        }
        else if(preg_match("/^[\/\#\!]?(عکس) (.*)$/i", $text)){
            preg_match("/^[\/\#\!]?(عکس) (.*)$/i", $text, $p);
            $wale = $p[2];
            $aliq1="https://www.wirexteam.ga/wallpaper?type=search&text=$wale&page=1";
            $aliq1= json_decode(file_get_contents($aliq1),true);


            $tik2=$aliq1["search"];
            $a1 = $tik2[0]['link_fhd'];
            $b1 = $tik2[1]['link_fhd'];
            $c1 = $tik2[2]['link_fhd'];
            $d1 = $tik2[3]['link_fhd'];
            $e1 = $tik2[4]['link_fhd'];
            $f1 = $tik2[5]['link_fhd'];
            $g1 = $tik2[6]['link_fhd'];
            $h1 = $tik2[7]['link_fhd'];
            $i1 = $tik2[8]['link_fhd'];
            $j1 = $tik2[9]['link_fhd'];
            $k1 = $tik2[10]['link_fhd'];
            $l1 = $tik2[11]['link_fhd'];


            bot('sendphoto',[
                'chat_id'=>$chat_id,
                'photo'=>$tik2[rand(0,12)]['link_fhd'],
                'caption'=>"",
                'reply_to_message_id'=>$message_id,
                'parse_mode'=>"HTML",

            ]);
        }
        elseif(preg_match('/^[!\/#]?(tomusic)$/i',$text) and isset($reply)){
            $file = $reply->video[count($reply->video)-1]->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path;
            Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"audio.mp3");
            sendaudio($chat_id, new CURLFile("audio.mp3"), $reply_messag_id);
            unlink("audio.mp3");

        }
        elseif(strpos($text,"لوگو") !== false){
            $matntrtoen12 =str_replace(['لوگو'],'',$text);
            $texttt =str_replace(' ','+',$matntrtoen12);

            $bot = [
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-265.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-181.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-179.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-178.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-64.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-80.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-81.html&text= $texttt",
                "https://api.codebazan.ir/ephoto/writeText?output=image&effect=create-online-black-and-white-layer-logo-72.html&text=$texttt",
            ];
            $r = $bot[rand(0, count($bot)-1)];
            bot('sendphoto',[
                'chat_id'=>$chat_id,
                'photo'=>"$r",
                'caption'=>"لوگو شما با موفقیت ساخته شد🎈

",
                'reply_to_message_id'=>$message_id,
            ]);}
        elseif($text=="لینک گروه" or $text=="link" or $text=="لینک"){
            if ( $status_n == 'creator' or $status_n == 'administrator'){
                if ($tc == 'group' | $tc == 'supergroup'){

                    $getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
                    $jsonlink = json_decode($getlink, true);
                    $getlinkde = $jsonlink['result'];
                    bot('sendmessage',[
                        'chat_id'=>$chat_id,
                        'text'=>"🔖لینک گروه شما:
`$getlinkde`",
                        'reply_to_message_id'=>$message_id,
                        'parse_mode'=>"MarkDown",
                        'reply_markup'=>$inlinebutton,
                    ]);
                }
            }

            else
            {
                $getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
                $jsonlink = json_decode($getlink, true);
                $getlinkde = $jsonlink['result'];
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🔖لینک گروه شما :
   
`$getlinkde`",
                    'reply_to_message_id'=>$message_id,
                    'parse_mode'=>"MarkDown",
                    'reply_markup'=>$inlinebutton,
                ]);
            }
        }
        /*
           if(preg_match('/^[\/\#\!\.]?(tomatn|تبدیل به متن)$/si', $text)){
            $photo= $message->photo[0]->file_id;
            $getfiile = bot('getfile',['file_id'=>$photo]);
            $pathh = $getfiile->result->file_path;
            $link = "https://api.telegram.org/file/bot$token/$pathh";
            $thissr = json_decode(file_get_contents("https://api.codebazan.ir/pictotext/index.php?url=$link"),true);
            $txtn=$thissr['ParsedResults'][0]['ParsedText'];
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"
        $txtn
        ",
        'reply_to_message_id'=>$message_id,

        ]);
        }}

        else if(preg_match("/^[\/\#\!]?(dlinsta) (.*)$/i", $text)){
        preg_match("/^[\/\#\!]?(dlinsta) (.*)$/i", $text, $pp);
          $instaa= $pp[2];


        $eliya0021=json_decode(file_get_contents("https://www.wirexteam.ga/instagram?type=post&url=$instaa"),true);
        $ok = $eliya0021["result"];
        if($ok==true){
        $videoo=$eliya0021["instagram"]['medias'];
        $captionn=$eliya002['caption'];
        $like=$eliya002['like_count'];
        $coment=$eliya002['comment_count'];
        bot('sendphoto',[
         'chat_id'=>$chat_id,
         'photo'=>"$videoo",

         'reply_to_message_id'=>$message_id,
            ]);
        }*/
        else if(preg_match("/^[\/\#\!]?(insta) (.*)$/i", $text)){
            preg_match("/^[\/\#\!]?(insta) (.*)$/i", $text, $m);
            $query = $m[2];
            $urtl = json_decode(file_get_contents("https://www.wirexteam.ga/instagram?type=info&id=$query"),true);

            $ok = $urtl["result"];
            if($ok==true){
                $res = $urtl["instagram"]["info"];
                $prof=$res["profile_url"];
                $ffa = $res["name"];
                $een = $res["username"];
                $dic = $res["post"];
                $mani = $res["highlight"];
                $moein = $res["follower"];
                $hoda = $res["following"];
                $zad = $res["bio"];

                bot('sendphoto',[
                    'chat_id' => $chat_id,
                    'photo'=>$prof,
                    'caption' =>"
نام : | $ffa |
یوزرنیم : | $een |
بیو : | $zad |
"
                    ,'reply_to_message_id'=>$message_id,
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"اطلاعات اینستاگرام شخص",'callback_data'=>'text']
                            ],
                            [
                                ['text'=>"تعداد پست ها",'callback_data'=>'text'],['text'=>"$dic",'callback_data'=>'text']
                            ],
                            [
                                ['text'=>"تعداد هایلات ها",'callback_data'=>'text'],['text'=>"$mani",'callback_data'=>'text']
                            ],
                            [
                                ['text'=>"تعداد فالور ها",'callback_data'=>'text'],['text'=>"$moein",'callback_data'=>'text']
                            ],


                            [
                                ['text'=>"تعداد فالووینگ ها",'callback_data'=>'text'],['text'=>"$hoda",'callback_data'=>'text']
                            ],

                        ]
                    ])
                ]);
            }}

        if(preg_match('/^[\/\#\!\.]?(this|این چیه)$/si', $text) or $rt){
            $photo= $message->reply_to_message->photo[0]->file_id;
            $getfiile = bot('getfile',['file_id'=>$photo]);
            $pathh = $getfiile->result->file_path;
            $link = "https://api.telegram.org/file/bot$token/$pathh";
            $thiss = json_decode(file_get_contents("https://api.codebazan.ir/caption/?pic=$link"),true);
            $fa = $thiss['messagefa'];
            $en = $thiss['message'];
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"خب من اینا تو این تصویر میبینم📷
        ☆★☆★☆★☆★
        
فارسی : $fa
●○●○●○
انگلیسی : $en

",
                'reply_to_message_id'=>$message_id,

            ]);
        }/*
if(preg_match('/^[\/\#\!\.]?(what)$/si', $text) or $rt){
    $photo= $message->reply_to_message->photo[0]->file_id;
    $getfiile = bot('getfile',['file_id'=>$photo]);
    $pathh = $getfiile->result->file_path;
    $linkk = "https://api.telegram.org/file/bot$token/$pathh";
    $thistss = json_decode(file_get_contents("https://api.codebazan.ir/celebrity/?img=$linkk"),true);
    $op = $thistss['results'][0]['percentage'];
    $oi = $thistss['results'][0]['name'];
    $oje=$thistss['results'][0]['image'];
    bot('sendphoto',[
        'chat_id'=>$chat_id,
        'photo'=>"$oje",
        'caption'=>"
اسم سلبریتی: $oi
——————————————————————
سن سلبریتی :$op

",
'reply_to_message_id'=>$message_id,

]);
}/*
if(preg_match('/^[\/\#\!\.]?(effeect|فکتت)$/si', $text) or $rrt){
    $photo= $message->reply_to_message->photo[0]->file_id;
    $getfiile = bot('getfile',['file_id'=>$photo]);
    $pathh = $getfiile->result->file_path;
    $link = "https://api.telegram.org/file/bot$token/$pathh";
$bot = [
"http://web-api.xyz/api/effect/?url=$link&filter=blackwhite",
"http://web-api.xyz/api/effect/?url=$link&filter=rain",
"http://web-api.xyz/api/effect/?url=$link&filter=vintage",
];
$r = $bot[rand(0, count($bot)-1)];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$r",/*
'caption'=>"افکت مورد نظر اعمال شد ✔️
",
'reply_to_message_id'=>$message_id,
]);}
*/
        elseif(strpos($text,"/photo") !== false){
            $matntrtoen1 =str_replace(['/photo'],'',$text);
            $textt=str_replace(' ','+',$matntrtoen1);
            bot('sendphoto', [
                'chat_id' => $chat_id,
                'photo'=>"https://rta10.ir/creatphoto/api/api.php?text=$textt&color=black&size=45&RL=-25&UD=-30&RO=60&picaddrs=422992784/file_9475.jpg&font=Nikoo.ttf",
                'caption'=>"☝️ لوگوی شما با موفقیت ساخته شد✔️
 
 @$bottag
",
                'reply_to_message_id'=>$message_id,
            ]);
            die();
        }
    }
    if($text == 'kos nago' or $text == 'شر نگو' and !is_null($reply)){
        $inline = json_encode(['inline_keyboard'=>[
            [['text'=>'موافقم که کم شر بگه😑️','callback_data'=>'kossher']],
        ]
        ]);
        bot('SendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"مطالبی که ایشون [$rename](tg://user?id=$reid) فرموندند کسشعر بیش نبود😌\n\nکسایی که موافقن با این قضیه👇 :\n$fname",
            'parse_mode'=>'Markdown', 'reply_to_message_id'=>$repmsg,
            'reply_markup'=>$inline
        ]);
    }
    if($data == 'kossher'){
        if(strstr($callback_query->message->text,$callback_query->from->first_name)){
            bot('AnswerCallbackQuery',[
                'callback_query_id'=>$callback_query->id,
                'text'=>"یبار زدی روش بسه دیه هی بزن روش اه🙄",
                'show_alert'=>true
            ]);
        }else{
            $inline = json_encode(['inline_keyboard'=>[
                [['text'=>'موافقم که کم شر بگه😑️','callback_data'=>'kossher']],
            ]
            ]);
            bot('EditMessageText',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"$kos\n$kosk",
                'reply_markup'=>$inline
            ]);
        }
    }
    if($text == '!bk' or $text == 'به شخمم' and !is_null($reply)){
        $inline = json_encode(['inline_keyboard'=>[
            [['text'=>'من نیز به شخمم😐✋️','callback_data'=>'bk']],
        ]
        ]);
        bot('SendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"مطالبی که ایشون [$rename](tg://user?id=$reid) فرموندند به شخممان😌\n\nامضا کنندگان :\n$fname",
            'parse_mode'=>'Markdown', 'reply_to_message_id'=>$repmsg,
            'reply_markup'=>$inline
        ]);
    }
    if($data == 'bk'){
        if(strstr($callback_query->message->text,$callback_query->from->first_name)){
            bot('AnswerCallbackQuery',[
                'callback_query_id'=>$callback_query->id,
                'text'=>"مگه چندتا شخم داری تو😂",
                'show_alert'=>true
            ]);
        }else{
            $inline = json_encode(['inline_keyboard'=>[
                [['text'=>'من نیز به شخمم😐✋️','callback_data'=>'bk']],
            ]
            ]);
            bot('EditMessageText',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"$kos\n$kosk",
                'reply_markup'=>$inline
            ]);
        }}
    // بخش تبدیلگر
    elseif(preg_match('/^[!\/#]?(استیکر شو)$/i',$text) and isset($reply)){
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $file = $reply->photo[count($reply->photo)-1]->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path;
            Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"photo.png");
            SendSticker($chat_id, new CURLFile("photo.png"), $reply_messag_id);
            unlink("photo.png");

        }
        else
        {
            bot('sendmessage',[
                'chat_id' => $chat_id,
                'text'=>" شما ادمین گروه نیستید اما میتوانید از ربات  همه کاره ما
این کار را انجام دهید🤤",

                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "ورود به ربات همه کاره🛠", 'url' => "https://t.me/botsorce"]],

                    ]
                ])
            ]);}}
    if(preg_match('/^[!\/#]?(موزیک شو)$/i',$text) and isset($reply)){
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $file = $reply->video->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path; Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"audio.mp3");
            SendAudio($chat_id, new CURLFile("audio.mp3"), "ویدیو مورد نظر شما با موفقیت تبدیل به موزیک شد",

                $reply_message_id);
            unlink("audio.mp3");
        }
        else
        {
            bot('sendmessage',[
                'chat_id' => $chat_id,
                'text'=>" شما ادمین گروه نیستید اما میتوانید از ربات  همه کاره ما
این کار را انجام دهید🤤",

                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "ورود به ربات همه کاره🛠", 'url' => "https://t.me/botsorce"]],

                    ]
                ])
            ]);}}
    if(preg_match('/^[!\/#]?(عکس شو)$/i',$text) and isset($reply)){
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $file = $reply->sticker->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path; Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"photo.jpg");
            SendPhoto($chat_id, new CURLFile("photo.jpg"), "▫️استیکر شما با موفقیت به عکس تبدیل شد !",

                $reply_message_id);
            unlink("photo.jpg");
        }
        else
        {
            bot('sendmessage',[
                'chat_id' => $chat_id,
                'text'=>" شما ادمین گروه نیستید اما میتوانید از ربات  همه کاره ما
این کار را انجام دهید🤤",

                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "ورود به ربات همه کاره🛠", 'url' => "https://t.me/Shah_Sourrce"]],

                    ]
                ])
            ]);}}
    if(preg_match('/^[!\/#]?(ویس شو)$/i',$text) and isset($reply)){
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $file = $reply->audio->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path; Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"audio.ogg");
            SendVoice($chat_id, new CURLFile("audio.ogg"), "باموفقیت تبدیل به ویس شد",

                $reply_message_id);
            unlink("audio.ogg");
        }
        else
        {
            bot('sendmessage',[
                'chat_id' => $chat_id,
                'text'=>" شما ادمین گروه نیستید اما میتوانید از ربات  همه کاره ما
این کار را انجام دهید🤤",

                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "ورود به ربات همه کاره🛠", 'url' => "https://t.me/botsorce"]],

                    ]
                ])
            ]);}}

    if(preg_match('/^[!\/#]?(اهنگ شو)$/i',$text) and isset($reply)){
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $file = $reply->voice->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path; Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"audio.mp3");
            SendAudio($chat_id, new CURLFile("audio.mp3"), "ویس شما تبدیل به اهنگ شد",

                $reply_message_id);
            unlink("audio.mp3");
        }
        else
        {
            bot('sendmessage',[
                'chat_id' => $chat_id,
                'text'=>" شما ادمین گروه نیستید اما میتوانید از ربات  همه کاره ما
این کار را انجام دهید🤤",

                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "ورود به ربات همه کاره🛠", 'url' => "https://t.me/xxxxxxx"]],

                    ]
                ])
            ]);}}
    if(preg_match('/^[!\/#]?(تبدیل به گیف)$/i',$text) and isset($reply)){
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $file = $reply->video->file_id;
            $get = bot('getFile',['file_id'=> $file]);
            $patch = $get->result->file_path; Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"audio.gif");
            SendDocument($chat_id, new CURLFile("audio.gif"), "اینم از گیف شما",

                $reply_message_id);
            unlink("audio.gif");
        }
        else
        {
            bot('sendmessage',[
                'chat_id' => $chat_id,
                'text'=>" شما ادمین گروه نیستید اما میتوانید از ربات  همه کاره ما
این کار را انجام دهید🤤",

                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "ورود به ربات همه کاره🛠", 'url' => "https://t.me/botsorce"]],

                    ]
                ])
            ]);}}
    if(preg_match('/^[!\/#]?(notsho)$/i',$text) and isset($reply)){
        $file = $reply->video->file_id;
        $get = bot('getFile',['file_id'=> $file]);
        $patch = $get->result->file_path; Download('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch,"photo.mp4");
        SendVideoNote($chat_id, new CURLFile("photo.mp4"), "▫️استیکر شما با موفقیت به عکس تبدیل شد !",

            $reply_message_id);
        unlink("photo.mp4");
    }
    /*
    elseif(strpos($text, "بگو ") !== false){
            $a = str_replace("بگو ", "", $text);
            bot('sendMessage',[
      'chat_id'=>$chat_id,
             'text'=>$a,
      'parse_mode'=>'html',
          ]);
    }*/
    elseif (strpos($text , "بگوو ") !== false) {
        $text = str_replace('بگوو ','',$text);
        bot('deletemessage',[
            'chat_id' => $chat_id,
            'message_id' => $message_id,
        ]);
        bot('SendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$text,
            'parse_mode'=>'Markdown',
            'reply_to_message_id'=>$reply_msgid,
        ]);
    }
//=======///======
    if(preg_match('/^(فونت) (.*)/s', $text, $mtch)){
        $matn = strtoupper("$mtch[2]");
        $fa = ['آ','ا','ب','پ','ت','ث','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی'];
        $_a = ['آ','اَِ','بَِ','پَِـَِـ','تَِـ','ثَِ','جَِ','چَِ','حَِـَِ','خَِ','دَِ','ذَِ','رَِ','زَِ','ژَِ','سَِــَِ','شَِـَِ','صَِ','ضَِ','طَِ','ظَِ','عَِ','غَِ','فَِ','قَِ','ڪَِــ','گَِــ','لَِ','مَِــَِ','نَِ','وَِ','هَِ','یَِ'];
        $_b = ['آ','ا','بـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','پـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','تـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ثـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','جـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','چـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','حـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','خـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','د۪ٜ','ذ۪ٜ','ر۪ٜ','ز۪ٜ‌','ژ۪ٜ','سـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','شـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','صـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','ضـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','طـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','ظـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','عـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','غـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','فـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','قـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','کـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','گـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','لـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','مـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌','نـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','و','هـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ','یـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ'];
        $_c= ['آ','ا','بـــ','پــ','تـــ','ثــ','جــ','چــ','حــ','خــ','دّ','ذّ','رّ','زّ','ژّ','ســ','شــ','صــ','ضــ','طــ','ظــ','عــ','غــ','فــ','قــ','کــ','گــ','لــ','مـــ','نـــ','وّ','هــ','یـــ'];
        $_d = ['آ','ا','بـ﹏ـ','پـ﹏ـ','تـ﹏ـ','ثـ﹏ــ','جـ﹏ــ','چـ﹏ـ','حـ﹏ـ','خـ﹏ـ','د','ذ','ر','ز','ژ','سـ﹏ـ','شـ﹏ـ','صـ﹏ــ','ضـ﹏ـ','طـ﹏ـ','ظـ﹏ــ','عـ﹏ـ','غـ﹏ـ','فـ﹏ـ','قـ﹏ـ','کـ﹏ـ','گـ﹏ـ','لـ﹏ــ','مـ﹏ـ','نـ﹏ـ','و','هـ﹏ـ','یـ﹏ـ'];
        $_e = ['آ','ا','ب̈́ـ̈́ـ̈́ـ̈́ـ','پ̈́ـ̈́ـ̈́ـ̈́ـ','ت̈́ـ̈́ـ̈́ـ̈́ـ','ث̈́ـ̈́ـ̈́ـ̈́ـ','ج̈́ـ̈́ـ̈́ـ̈́ـ','چـ̈́ـ̈́ـ̈́ـ','ح̈́ـ̈́ـ̈́ـ̈́ـ','خـ̈́ـ̈́ـ̈́ـ','د','ذ','ر','ز','ژ','سـ̈́ـ̈́ـ̈́ـ','شـ̈́ـ̈́ـ̈́ـ','ص̈́ـ̈́ـ̈́ـ̈́ـ','ض̈́ـ̈́ـ̈́ـ̈́ـ','ط̈́ـ̈́ـ̈́ـ̈́ـ','ظـ̈́ـ̈́ـ̈́ـ̈́ـ','ع̈́ـ̈́ـ̈́ـ̈́ـ','غ̈́ـ̈́ـ̈́ـ̈́ـ','فـ̈́ـ̈́ـ̈́ـ̈́ـ','قـ̈́ـ̈́ـ̈́ـ','کـ̈́ـ̈́ـ̈́ـ','گـ̈́ـ̈́ـ̈́ـ̈́ـ','ل̈́ـ̈́ـ̈́ـ̈́ـ','م̈́ـ̈́ـ̈́ـ̈́ـ','ن̈́ـ̈́ـ̈́ـ̈́ـ','و','ه̈́ـ̈́ـ̈́ـ̈́ـ','ی̈́ـ̈́ـ̈́ـ̈́ـ'];
        $_f = ['آ','اؒؔ','بـ͜͡ــؒؔـ͜͝ـ','پـ͜͡ــؒؔـ͜͝ـ','تـ͜͡ــؒؔـ͜͝ـ','ثـ͜͡ــؒؔـ͜͝ـ','جـ͜͡ــؒؔـ͜͝ـ','چـ͜͡ــؒؔـ͜͝ـ','حـ͜͡ــؒؔـ͜͝ـ','خـ͜͡ــؒؔـ͜͝ـ','د۠۠','ذ','ر','ز','ژ','سـ͜͡ــؒؔـ͜͝ـ','شـ͜͡ــؒؔـ͜͝ـ','صـ͜͡ــؒؔـ͜͝ـ','ضـ͜͡ــؒؔـ͜͝ـ','طـ͜͡ــؒؔـ͜͝ـ','ظـ͜͡ــؒؔـ͜͝ـ','عـ͜͡ــؒؔـ͜͝ـ','غـ͜͡ــؒؔـ͜͝ـ','فـ͜͡ــؒؔـ͜͝ـ','قـ͜͡ــؒؔـ͜͝ـ','کـ͜͡ــؒؔـ͜͝ـ','گـ͜͡ــؒؔـ͜͝ـ','لـ͜͡ــؒؔـ͜͝ـ','مـ͜͡ــؒؔـ͜͝ـ','نـ͜͡ــؒؔـ͜͝ـ','وۘۘ','هـ͜͡ــؒؔـ͜͝ـ','یـ͜͡ــؒؔـ͜͝ـ'];
        $_g= ['❀آ','ا','بـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','پـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','تـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ثـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','جـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','چـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','حैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','خـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــ','❀د','ذै','رؒؔ','ز۪ٜ❀','❀ژै','سـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','شـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','صैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ضैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','طैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ظैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','عـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','غـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','فـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','قـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','ڪैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','گـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','لـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','مـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','نـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','وَّ','هـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ','یـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ'];
        $_h = ['آٰٖـٰٖ℘ـَ͜✾ـ','اٰٖـٰٖ℘ـَ͜✾ـ','بٰٖـٰٖ℘ـَ͜✾ـ','پٰٖـٰٖ℘ـَ͜✾ـ','تٰٖـٰٖ℘ـَ͜✾ـ','ثٰٖـٰٖ℘ـَ͜✾ـ','جٰٖـٰٖ℘ـَ͜✾ـ','چٰٖـٰٖ℘ـَ͜✾ـ','حٰٖـٰٖ℘ـَ͜✾ـ','خٰٖـٰٖ℘ـَ͜✾ـ','دٰٖـٰٖ℘ـَ͜✾ـ','ذٰٖـٰٖ℘ـَ͜✾ـ','رٰٖـٰٖ℘ـَ͜✾ـ','زٰٖـٰٖ℘ـَ͜✾ـ','ژٰٖـٰٖ℘ـَ͜✾ـ','سٰٖـٰٖ℘ـَ͜✾ـ','شٰٖـٰٖ℘ـَ͜✾ـ','صٰٖـٰٖ℘ـَ͜✾ـ','ضٰٖـٰٖ℘ـَ͜✾ـ','طٰٖـٰٖ℘ـَ͜✾ـ','ظٰٖـٰٖ℘ـَ͜✾ـ','عٰٖـٰٖ℘ـَ͜✾ـ','غٰٖـٰٖ℘ـَ͜✾ـ','فٰٖـٰٖ℘ـَ͜✾ـ','قٰٖـٰٖ℘ـَ͜✾ـ','کٰٖـٰٖ℘ـَ͜✾ـ','گٰٖـٰٖ℘ـَ͜✾ـ','لٰٖـٰٖ℘ـَ͜✾ـ','مٰٖـٰٖ℘ـَ͜✾ـ','نٰٖـٰٖ℘ـَ͜✾ـ','وٰٖـٰٖ℘ـَ͜✾ـ','هٰٖـٰٖ℘ـَ͜✾ـ','یٰٖـٰٖ℘ـَ͜✾ـ'];
        $_i = ['آ✺۠۠➤','ا✺۠۠➤','بـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','پـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','تـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','ث✺۠۠➤','جـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','چـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','حـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','خـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','د✺۠۠➤','ذ✺۠۠➤','ر✺۠۠➤','ز✺۠۠➤','ژ✺۠۠➤','سـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','شـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','صـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','ضـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','طـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','ظـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','عـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','غـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','فـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','قـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','کـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','گـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','لـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','مـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','نـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤','و✺۠۠➤','ه➤','یـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤'];$_j = ['آ✭','ا✭','بـ͜͡ـ͜͡✭','پـ͜͡ـ͜͡✭','تـ͜͡ـ͜͡✭','ثـ͜͡ـ͜͡ـ͜͡✭','جـ͜͡ـ͜͡✭','چــ͜͡ـ͜͡✭','حـ͜͡ـ͜͡✭','خــ͜͡ـ͜͡✭','د✭','ذ✭','ر✭','ز͜͡✭','ـ͜͡ژ͜͡✭','ســ͜͡ـ͜͡✭','شـ͜͡ـ͜͡ـ͜͡✭','صـ͜͡ـ͜͡✭','ضـ͜͡ـ͜͡✭','طـ͜͡ـ͜͡✭','ظـ͜͡ـ͜͡✭','عـ͜͡ـ͜͡✭','غـ͜͡ـ͜͡✭','فــ͜͡ـ͜͡✭','قـ͜͡ـ͜͡ـ͜͡✭','ڪــ͜͡ـ͜͡✭','گـ͜͡ـ͜͡✭','لـ͜͡ـ͜͡ـ͜͡✭','مـ͜͡ـ͜͡ـ͜͡✭','نـ͜͡ـ͜͡✭','ـ͜͡و͜͡ـ͜͡✭','هـ͜͡ـ͜͡ـ͜͡✭','یـ͜͡ـ͜͡✭'];
//
        $nn = str_replace($fa,$_a,$matn);
        $a = str_replace($fa,$_b,$matn);
        $b = str_replace($fa,$_c,$matn);
        $c = str_replace($fa,$_d,$matn);
        $d = str_replace($fa,$_e,$matn);
        $e = str_replace($fa,$_f,$matn);
        $f = str_replace($fa,$_g,$matn);
        $g = str_replace($fa,$_h,$matn);
        $h = str_replace($fa,$_i,$matn);
        $i = str_replace($fa,$_j,$matn);
//----
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
1 - $nn
2 - $a
3 - $b
4 - $c
5 - $d
6 - $e
7 - $f
8 - $g
9 - $h
10 - $i

فونت شما آماده شد تیگون : $mtch[2] ♥",
            'parse_mode'=>'MarkDown',
            'reply_markup'=>$or,
        ]);}
///------------/////-----------////------
    elseif($text =="پروکسی" or $text == "proxy"){
        $prox = file_get_contents("https://mrblack.farahost.site/apiha/prox.php");
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"پروکسی های فعال امروز
$prox
",
            'reply_to_message_id'=>$message_id,
            'parse_mode'=>'MarkDown',
            'reply_markup'=>$or,
        ]);}
    elseif($text =="خبر" or $text == "اخبار"){
        $khabar = file_get_contents("http://mrblack.farahost.site/apiha/khabar.php");
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"اخبار مهم کشور🖥

$khabar
",
            'reply_to_message_id'=>$message_id,
            'parse_mode'=>'html',
        ]);}

    elseif($text =="بیوگرافی" or $text == "bio"){
        $bio = file_get_contents("https://api.codebazan.ir/bio/");
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"❡ متن بیوگرافی ⇩
 
`$bio`

برای کپی شدن متن بیو آن را لمس کنید !",
            'reply_to_message_id'=>$message_id,
            'parse_mode'=>'MarkDown',
        ]);}
    else if(preg_match("/^[\/\#\!]?(mobile) (.*)$/i", $text)){
        $matntrtoen13 =str_replace(['mobile'],'',$text);
        $textrt=str_replace(' ','+',$matntrtoen13);
        $url = json_decode(file_get_contents("http://mrblack.farahost.site/apiha/by.php?name=$textrt"),true);

        $car = $url["result"];

        $name1 = $car['1']["name"];
        $moshakhasat1 = $car['1']["price"];
        $karkhane1 = $car['1']["seller"];
        $bazar1 = $car['1']["date"];
        $name2 = $car['2']["name"];
        $moshakhasat2 = $car['2']["price"];
        $karkhane2 = $car['2']["seller"];
        $bazar2 = $car['2']["date"];
        $name3 = $car['3']["name"];
        $moshakhasat3 = $car['3']["price"];
        $karkhane3 = $car['3']["seller"];
        $bazar3 = $car['3']["date"];
        $name4 = $car['4']["name"];
        $moshakhasat4 = $car['4']["price"];
        $karkhane4 = $car['4']["seller"];
        $bazar4 = $car['4']["date"];
        $name5 = $car['5']["name"];
        $moshakhasat5 = $car['15']["price"];
        $karkhane5 = $car['5']["seller"];
        $bazar5 = $car['5']["date"];
        $name6 = $car['6']["name"];
        $moshakhasat6 = $car['6']["price"];
        $karkhane6 = $car['6']["seller"];
        $bazar6 = $car['6']["date"];
        $name7 = $car['7']["name"];
        $moshakhasat7 = $car['7']["price"];
        $karkhane7 = $car['7']["seller"];
        $bazar7 = $car['7']["date"];
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
<b>نام گوشی</b> : $name1 
<b>قیمت</b> : $moshakhasat1 
<b>محل فروش</b> : $karkhane1 
<b>تاریخ</b> : $bazar1 
☆★☆★☆
<b>نام گوشی</b> :$name2  
<b>قیمت</b> : $moshakhasat2 
<b>محل فروش</b> :$karkhane2  
<b>تاریخ</b> :$bazar2  
☆★☆★☆
<b>نام گوشی</b> :$name3  
<b>قیمت</b> : $moshakhasat3 
<b>محل فروش</b> : $karkhane3 
<b>تاریخ</b> : $bazar3 
☆★☆★☆
<b>نام گوشی</b> : $name4 
<b>قیمت</b> :  $moshakhasat4 
<b>محل فروش</b> :$karkhane4  
<b>تاریخ</b> :$bazar4  
☆★☆★☆
<b>نام گوشی</b> : $name5 
<b>قیمت</b> : $moshakhasat5 
<b>محل فروش</b> :$karkhane5  
<b>تاریخ</b> :$bazar5  
☆★☆★☆
<b>نام گوشی</b> :$name6  
<b>قیمت</b> : $moshakhasat6 
<b>محل فروش</b> : $karkhane6 
<b>تاریخ</b> :$bazar6  
☆★☆★☆
<b>نام گوشی</b> : $name7 
<b>قیمت</b> : $moshakhasat7 
<b>محل فروش</b> :$karkhane7 
<b>تاریخ</b> : $bazar7 
☆★☆★☆
➣ <b>@$bottag</b>
  ",
            'parse_mode'=>"html",
            'reply_to_message_id'=>$message_id,
        ]);
    }
///---------////----------
    else if(preg_match("/^[\/\#\!]?(azan) (.*)$/i", $text)){
        preg_match("/^[\/\#\!]?(azan) (.*)$/i", $text, $m);
        $query = $m[2];
        $url = json_decode(file_get_contents("https://api.codebazan.ir/owghat/?city=$query"),true);
        $azann = $url["Result"];
        $azan = $azann[0];
        $sina1 = $azan['shahr'];
        $azan2 = $azan['tarikh'];
        $sina3 = $azan['azansobh'];
        $sina4 = $azan['toloaftab'];
        $sina5 = $azan['azanzohr'];
        $sina6 = $azan['ghorubaftab'];
        $sina7 = $azan['azanmaghreb'];
        $sina8 = $azan['nimeshab'];
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
<b>
نام شهر  : $sina1
تاریخ : $azan2
-------------------
اذان صبح : $sina3
طلوع افتاب : $sina4
اذان ظهر : $sina5
غروب افتاب : $sina6
اذان مغرب : $sina7
نیمه شب : $sina8
-------------------</b>
                    ",
            'parse_mode'=>"html",
            'reply_to_message_id'=>$message_id,
        ]);
    }
    elseif ( strpos($text , '/del ') !== false or strpos($text , 'پاک کردن ') !== false ) {
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $num = str_replace(['/del ','پاک کردن '],'',$text);
            if ($num <= 999999999 && $num >= 1){
                for($i=$message_id; $i>=$message_id-$num; $i--){
                    bot('deletemessage',[
                        'chat_id' => $chat_id,
                        'message_id' =>$i,
                    ]);
                }
                bot('sendmessage',[
                    'chat_id' => $chat_id,
                    'text' =>"$num پیام گروه با موفقیت پاک شد توسط ربات️",
                ]);
            }
            else
            {
                bot('sendmessage',[
                    'chat_id' => $chat_id,
                    'text'=>"عدد وارد شده باید بین 1تا 999999999 باشد",
                ]);
            }
        }
    }

//======//====
    if($text=="ساخت پسورد" or $text == "new password"){
        $passq = rand(123456,98575403221);
        $passq2 = rand(123456,98575403221);
        $passq3 = rand(123456,98575403221);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
▪️ پسورد های ساخته شده برای شما:
$passq
$passq2
$passq3",
            'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",
            'reply_markup'=>NULL,
        ]);}
//==========
    if($text=="پنل پیوی" or $text== "panel pv"){
        if ($status_n == 'creator' or $status_n == 'administrator' ){
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"▪️ پنل دستپرات ربات در پیوی برای شما ارسال شد

جهت مشاهده کلیک کنید👇🏻",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"💡 نمایش 💡",'url'=>"t.me/$bottag"]],
                    ]
                ])
            ]);
            bot('sendmessage',[
                'chat_id'=>$from_id,
                'text'=>"⚙️ در این بخش شما میتوانید دستورات مختلف ربات را مشاهده و استفاده کنید:
📆: $bugun",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"😜 ارسال جوک",'switch_inline_query'=>"jok"],
                            ['text'=>"بخش کاربردی🛠",'callback_data'=>'help_g']],
                        [['text'=>"🎇افکت گذاری",'callback_data'=>'help_ef'],    ['text'=>"بخش سرگرمی😋",'callback_data'=>'help_sar']],
                        [['text'=>"🔀تبدیل گر",'callback_data'=>'help_tb'],    ['text'=>"بخش مدیریت📍",'callback_data'=>'help_mdir']],
                        [['text'=>"⭐️ افزودن $name_bot به گروه ⭐️",'url'=>"https://t.me/$bottag?startgroup=new"]],
                        [['text'=>"🩺 چنل اطلاع رسانی 🩺",'url'=>"t.me/$channel"]],
                        [['text'=> "🖥 رفتن به منوی استارت 🖥️", 'callback_data'=>"back"]],
                    ]
                ])
            ]);}}
//=======

    if ( strpos($text , '/setname ') !== false or strpos($text , 'تنظیم نام ') !== false){

        if ($status_n == 'creator' or $status_n == 'administrator' ){
            $newname= str_replace(['/setname ','تنظیم نام '],'',$text);
            bot('setChatTitle',[
                'chat_id'=>$chat_id,
                'title'=>$newname
            ]);
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"نام گروه تعویض شد✅
➖➖➖➖➖➖
💥نام جدید :  [$newname]

🔖توسط : [ @$username ]
با دستور  { [$first_name](tg://user?id=$from_id)  }",
                'parse_mode'=>"MarkDown",
                'reply_to_message_id'=>$message_id,
                'reply_markup'=>$inlinebutton,
            ]);

        }}
    elseif ( strpos($text , '/setdescription ') !== false or strpos($text , 'تنظیم اطلاعات ') !== false  ) {
        $newdec= str_replace(['/setdescription ','تنظیم اطلاعات '],'',$text);
        if ( $status_n == 'creator' or $status_n == 'administrator'){
            bot('setChatDescription',[
                'chat_id'=>$chat_id,
                'description'=>$newdec
            ]);
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"اطلاعات جدید گروه با موفقیت تغییر کرد✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]
با دستور  { [$first_name](tg://user?id=$from_id)  }",
                'parse_mode'=>"MarkDown",
                'reply_to_message_id'=>$message_id,
                'reply_markup'=>$inlinebutton,
            ]);
        }
    }
    elseif($text=="/setphoto" or $text=="setphoto" or $text=="تنظیم عکس"){

        if ( $status_n == 'creator' or $status_n == 'administrator'){
            $photo = $update->message->reply_to_message->photo;
            $file = $photo[count($photo)-1]->file_id;
            $get = bot('getfile',['file_id'=>$file]);
            $getchat = json_decode($get, true);
            $patch = $getchat["result"]["file_path"];
            file_put_contents("data/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
            bot('setChatPhoto',[
                'chat_id'=>$chat_id,
                'photo'=>new CURLFile("data/photogp.png")
            ]);
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"عکس گروه با موفقیت تغییر کرد ✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]
با دستور  { [$first_name](tg://user?id=$from_id)  ",
                'parse_mode'=>"MarkDown",
                'reply_to_message_id'=>$message_id,
                'reply_markup'=>$inlinebutton,
            ]);
            unlink("data/photogp.png");
        }}
//----------//////-----------
    if(preg_match('/^[!\/#]?(age|محاسبه سن) (\d+)\/(\d+)\/(\d+)$/i',$text,$match)){
        $get = file_get_contents("http://api.novateamco.ir/age/?year=".$match[2]."&month=".$match[3]."&day=".$match[4]);
        if($match[2] < 1000 or $match[3] >= 13 or $match[4] >= 32 or $match[2] >= 1400){
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"لطفا ابتدا از صحت فرمت وارد شده اطمینان حاصل کنید و مجددا امتحان کنید !",'reply_to_message_id'=>$message_id,]);
        }else{
            $result = json_decode($get, true);
            if($result['ok'] === true){
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"⚖️ محاسبه سن انجام شد !
🌲 سن دقیق شما : ".$result['result']['year']." سال و ".$result['result']['month']." ماه و ".$result['result']['day']." روز
🌏 کل روز های سپری شده : ".$result['other']['days']."\n🤤 حیوان سال شما : ".$result['other']['year_name']."\n🦅 روز های مانده به تولد بعدی شما : ".$result['other']['to_birth']."\n\n• Ch : @$channel", 'MarkDown','reply_to_message_id'=>$message_id]);}}}
///--------/////---
    if(preg_match('/^(font) (.*)/s', $text, $mtch)){
        $matn = strtoupper("$mtch[2]");
        $Eng = ['Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
        $Font_0 = ['𝐐','𝐖','𝐄','𝐑','𝐓','𝐘','𝐔','𝐈','𝐎','𝐏','𝐀','𝐒','𝐃','𝐅','𝐆','𝐇','𝐉','𝐊','𝐋','𝐙','𝐗','𝐂','𝐕','𝐁','𝐍','𝐌'];
        $Font_1 = ['𝑸','𝑾','𝑬','𝑹','𝑻','𝒀','𝑼','𝑰','𝑶','𝑷','𝑨','𝑺','𝑫','𝑭','𝑮','𝑯','𝑱','𝑲','𝑳','𝒁','𝑿','𝑪','𝑽','𝑩','𝑵','𝑴'];
        $Font_2 = ['𝑄','𝑊','𝐸','𝑅','𝑇','𝑌','𝑈','𝐼','𝑂','𝑃','𝐴','𝑆','𝐷','𝐹','𝐺','𝐻','𝐽','𝐾','𝐿','𝑍','𝑋','𝐶','𝑉','𝐵','𝑁','𝑀'];
        $Font_3 = ['𝗤','𝗪','𝗘','𝗥','𝗧','𝗬','𝗨','𝗜','𝗢','𝗣','𝗔','𝗦','𝗗','𝗙','𝗚','𝗛','𝗝','𝗞','𝗟','𝗭','𝗫','𝗖','𝗩','𝗕','𝗡','𝗠'];
        $Font_4 = ['𝖰','𝖶','𝖤','𝖱','𝖳','𝖸','𝖴','𝖨','𝖮','𝖯','𝖠','𝖲','𝖣','𝖥','𝖦','𝖧','𝖩','𝖪','𝖫','𝖹','𝖷','𝖢','𝖵','𝖡','𝖭','𝖬'];
        $Font_5 = ['𝕼','𝖂','𝕰','𝕽','𝕵','𝚼','𝖀','𝕿','𝕺','𝕻','𝕬','𝕾','𝕯','𝕱','𝕲','𝕳','𝕴','𝕶','𝕷','𝖅','𝖃','𝕮','𝖁','𝕭','𝕹','𝕸'];
        $Font_6 = ['𝔔','𝔚','𝔈','ℜ','𝔍','ϒ','𝔘','𝔗','𝔒','𝔓','𝔄','𝔖','𝔇','𝔉','𝔊','ℌ','ℑ','𝔎','𝔏','ℨ','𝔛','ℭ','𝔙','𝔅','𝔑','𝔐'];
        $Font_7 = ['𝙌','𝙒','𝙀','𝙍','𝙏','𝙔','𝙐','𝙄','𝙊','𝙋','𝘼','𝙎','𝘿','𝙁','𝙂','𝙃','𝙅','𝙆','𝙇','𝙕','𝙓','𝘾','𝙑','𝘽','𝙉','𝙈'];
        $Font_8 = ['𝘘','𝘞','𝘌','𝘙','𝘛','𝘠','𝘜','𝘐','𝘖','𝘗','𝘈','𝘚','𝘋','𝘍','𝘎','𝘏','𝘑','𝘒','𝘓','𝘡','𝘟','𝘊','𝘝','𝘉','𝘕','𝘔'];
        $Font_9 = ['Q̶̶','W̶̶','E̶̶','R̶̶','T̶̶','Y̶̶','U̶̶','I̶̶','O̶̶','P̶̶','A̶̶','S̶̶','D̶̶','F̶̶','G̶̶','H̶̶','J̶̶','K̶̶','L̶̶','Z̶̶','X̶̶','C̶̶','V̶̶','B̶̶','N̶̶','M̶̶'];
        $Font_10 = ['Q̷̷̶̶','W̷̷̶̶','E̷̷̶̶','R̷̷̶̶','T̷̷̶̶','Y̷̷̶̶','U̷̷̶̶','I̷̷̶̶','O̷̷̶̶','P̷̷̶̶','A̷̷̶̶','S̷̷̶̶','D̷̷̶̶','F̷̷̶̶','G̷̷̶̶','H̷̷̶̶','J̷̷̶̶','K̷̷̶̶','L̷̷̶̶','Z̷̷̶̶','X̷̷̶̶','C̷̷̶̶','V̷̷̶̶','B̷̷̶̶','N̷̷̶̶','M̷̷̶̶'];
        $Font_11 = ['Q͟͟','W͟͟','E͟͟','R͟͟','T͟͟','Y͟͟','U͟͟','I͟͟','O͟͟','P͟͟','A͟͟','S͟͟','D͟͟','F͟͟','G͟͟','H͟͟','J͟͟','K͟͟','L͟͟','Z͟͟','X͟͟','C͟͟','V͟͟','B͟͟','N͟͟','M͟͟'];
        $Font_12 = ['Q͇͇','W͇͇','E͇͇','R͇͇','T͇͇','Y͇͇','U͇͇','I͇͇','O͇͇','P͇͇','A͇͇','S͇͇','D͇͇','F͇͇','G͇͇','H͇͇','J͇͇','K͇͇','L͇͇','Z͇͇','X͇͇','C͇͇','V͇͇','B͇͇','N͇͇','M͇͇'];
        $Font_13 = ['Q̤̤','W̤̤','E̤̤','R̤̤','T̤̤','Y̤̤','Ṳ̤','I̤̤','O̤̤','P̤̤','A̤̤','S̤̤','D̤̤','F̤̤','G̤̤','H̤̤','J̤̤','K̤̤','L̤̤','Z̤̤','X̤̤','C̤̤','V̤̤','B̤̤','N̤̤','M̤̤'];
        $Font_14 = ['Q̰̰','W̰̰','Ḛ̰','R̰̰','T̰̰','Y̰̰','Ṵ̰','Ḭ̰','O̰̰','P̰̰','A̰̰','S̰̰','D̰̰','F̰̰','G̰̰','H̰̰','J̰̰','K̰̰','L̰̰','Z̰̰','X̰̰','C̰̰','V̰̰','B̰̰','N̰̰','M̰̰'];
        $Font_15 = ['디','山','乇','尺','亇','丫','凵','工','口','ㄗ','闩','丂','刀','下','彑','⼶','亅','片','乚','乙','乂','亡','ム','乃','力','从'];
        $Font_16= ['ዓ','ሠ','ይ','ዩ','ፐ','ሃ','ሀ','ፗ','ዐ','የ','ል','ና','ሏ','ፑ','ፘ','ዘ','ጋ','ኸ','ረ','ጓ','ጰ','ር','ህ','ፎ','በ','ጠ'];
        $Font_17= ['Ꭷ','Ꮃ','Ꭼ','Ꮢ','Ꭲ','Ꭹ','Ꮜ','Ꮖ','Ꮻ','Ꮲ','Ꭺ','Ꮪ','Ꭰ','Ꮀ','Ꮐ','Ꮋ','Ꭻ','Ꮶ','Ꮮ','Ꮓ','Ꮱ','Ꮯ','Ꮩ','Ᏼ','N','Ꮇ'];
        $Font_18= ['Ǫ','Ѡ','Σ','Ʀ','Ϯ','Ƴ','Ʋ','Ϊ','Ѳ','Ƥ','Ѧ','Ƽ','Δ','Ӻ','Ǥ','ⴼ','Ɉ','Ҟ','Ɫ','Ⱬ','Ӽ','Ҁ','Ѵ','Ɓ','Ɲ','ᛖ'];
        $Font_19= ['ꐎ','ꅐ','ꂅ','ꉸ','ꉢ','ꌦ','ꏵ','ꀤ','ꏿ','ꉣ','ꁲ','ꌗ','ꅓ','ꊰ','ꁅ','ꍬ','ꀭ','ꂪ','꒒','ꏣ','ꉧ','ꊐ','ꏝ','ꃃ','ꊮ','ꂵ'];
        $Font_20= ['ᘯ','ᗯ','ᕮ','ᖇ','ᙢ','ᖻ','ᑌ','ᖗ','ᗝ','ᑭ','ᗩ','ᔕ','ᗪ','ᖴ','ᘜ','ᕼ','ᒍ','ᖉ','ᒐ','ᘔ','᙭','ᑕ','ᕓ','ᗷ','ᘉ','ᗰ'];
        $Font_21= ['ᑫ','ᗯ','ᗴ','ᖇ','Ꭲ','Ꭹ','ᑌ','Ꮖ','ᝪ','ᑭ','ᗩ','ᔑ','ᗞ','ᖴ','Ꮐ','ᕼ','ᒍ','Ꮶ','Ꮮ','Ꮓ','᙭','ᑕ','ᐯ','ᗷ','ᑎ','ᗰ'];
        $Font_22= ['ℚ','Ꮤ','℮','ℜ','Ƭ','Ꮍ','Ʋ','Ꮠ','Ꮎ','⅌','Ꭿ','Ꮥ','ⅅ','ℱ','Ꮹ','ℋ','ℐ','Ӄ','ℒ','ℤ','ℵ','ℭ','Ꮙ','Ᏸ','ℕ','ℳ'];
        $Font_23= ['Ԛ','ᚠ','ᛊ','ᚱ','ᛠ','ᚴ','ᛘ','ᛨ','θ','ᚹ','ᚣ','ᛢ','ᚦ','ᚫ','ᛩ','ᚻ','ᛇ','ᛕ','ᚳ','Z','ᚷ','ᛈ','ᛉ','ᛒ','ᚺ','ᚥ'];
        $Font_24= ['𝓠','𝓦','𝓔','𝓡','𝓣','𝓨','𝓤','𝓘','𝓞','𝓟','𝓐','𝓢','𝓓','𝓕','𝓖','𝓗','𝓙','𝓚','𝓛','𝓩','𝓧','𝓒','𝓥','𝓑','𝓝','𝓜'];
        $Font_25= ['𝒬','𝒲','ℰ','ℛ','𝒯','𝒴','𝒰','ℐ','𝒪','𝒫','𝒜','𝒮','𝒟','ℱ','𝒢','ℋ','𝒥','𝒦','ℒ','𝒵','𝒳','𝒞','𝒱','ℬ','𝒩','ℳ'];
        $Font_26= ['ℚ','𝕎','𝔼','ℝ','𝕋','𝕐','𝕌','𝕀','𝕆','ℙ','𝔸','𝕊','𝔻','𝔽','𝔾','ℍ','𝕁','𝕂','𝕃','ℤ','𝕏','ℂ','𝕍','𝔹','ℕ','𝕄'];
        $Font_27= ['Ｑ','Ｗ','Ｅ','Ｒ','Ｔ','Ｙ','Ｕ','Ｉ','Ｏ','Ｐ','Ａ','Ｓ','Ｄ','Ｆ','Ｇ','Ｈ','Ｊ','Ｋ','Ｌ','Ｚ','Ｘ','Ｃ','Ｖ','Ｂ','Ｎ','Ｍ'];
        $Font_28= ['ǫ','ᴡ','ᴇ','ʀ','ᴛ','ʏ','ᴜ','ɪ','ᴏ','ᴘ','ᴀ','s','ᴅ','ғ','ɢ','ʜ','ᴊ','ᴋ','ʟ','ᴢ','x','ᴄ','ᴠ','ʙ','ɴ','ᴍ'];
        $Font_29= ['𝚀','𝚆','𝙴','𝚁','𝚃','𝚈','𝚄','𝙸','𝙾','𝙿','𝙰','𝚂','𝙳','𝙵','𝙶','𝙷','𝙹','𝙺','𝙻','𝚉','𝚇','𝙲','𝚅','𝙱','𝙽','𝙼'];
        $Font_30= ['ᵟ','ᵂ','ᴱ','ᴿ','ᵀ','ᵞ','ᵁ','ᴵ','ᴼ','ᴾ','ᴬ','ˢ','ᴰ','ᶠ','ᴳ','ᴴ','ᴶ','ᴷ','ᴸ','ᶻ','ˣ','ᶜ','ⱽ','ᴮ','ᴺ','ᴹ'];
        $Font_31= ['Ⓠ','Ⓦ','Ⓔ','Ⓡ','Ⓣ','Ⓨ','Ⓤ','Ⓘ','Ⓞ','Ⓟ','Ⓐ','Ⓢ','Ⓓ','Ⓕ','Ⓖ','Ⓗ','Ⓙ','Ⓚ','Ⓛ','Ⓩ','Ⓧ','Ⓒ','Ⓥ','Ⓑ','Ⓝ','Ⓜ'];
        $Font_32= ['🅀','🅆','🄴','🅁','🅃','🅈','🅄','🄸','🄾','🄿','🄰','🅂','🄳','🄵','🄶','🄷','🄹','🄺','🄻','🅉','🅇','🄲','🅅','🄱','🄽','🄼'];
        $Font_33= ['🅠','🅦','🅔','🅡','🅣','🅨','🅤','🅘','🅞','🅟','🅐','🅢','🅓','🅕','🅖','🅗','🅙','🅚','🅛','🅩​','🅧','🅒','🅥','🅑','🅝','🅜'];
        $Font_34= ['🆀','🆆','🅴','🆁','🆃','🆈','🆄','🅸','🅾','🅿','🅰','🆂','🅳','🅵','🅶','🅷','🅹','🅺','🅻','🆉','🆇','🅲','🆅','🅱','🅽','🅼'];
        $Font_35= ['🇶 ','🇼 ','🇪 ','🇷 ','🇹 ','🇾 ','🇺 ','🇮 ','🇴 ','🇵 ','🇦 ','🇸 ','🇩 ','🇫 ','🇬 ','🇭 ','🇯 ','🇰 ','🇱 ','🇿 ','🇽 ','🇨 ','🇻 ','🇧 ','🇳 ','🇲 '];
//

        $nn = str_replace($Eng,$Font_0,$matn);
        $a = str_replace($Eng,$Font_1,$matn);
        $b = str_replace($Eng,$Font_2,$matn);
        $c = str_replace($Eng,$Font_3,$matn);
        $d = str_replace($Eng,$Font_4,$matn);
        $e = str_replace($Eng,$Font_5,$matn);
        $f = str_replace($Eng,$Font_6,$matn);
        $g = str_replace($Eng,$Font_7,$matn);
        $h = str_replace($Eng,$Font_8,$matn);
        $i = str_replace($Eng,$Font_9,$matn);
        $j = str_replace($Eng,$Font_10,$matn);
        $k = str_replace($Eng,$Font_11,$matn);
        $l = str_replace($Eng,$Font_12,$matn);
        $m = str_replace($Eng,$Font_13,$matn);
        $n = str_replace($Eng,$Font_14,$matn);
        $o = str_replace($Eng,$Font_15,$matn);
        $p= str_replace($Eng,$Font_16,$matn);
        $q= str_replace($Eng,$Font_17,$matn);
        $r= str_replace($Eng,$Font_18,$matn);
        $s= str_replace($Eng,$Font_19,$matn);
        $t= str_replace($Eng,$Font_20,$matn);
        $u= str_replace($Eng,$Font_21,$matn);
        $v= str_replace($Eng,$Font_22,$matn);
        $w= str_replace($Eng,$Font_23,$matn);
        $x= str_replace($Eng,$Font_24,$matn);
        $y= str_replace($Eng,$Font_25,$matn);
        $z= str_replace($Eng,$Font_26,$matn);
        $aa= str_replace($Eng,$Font_27,$matn);
        $ac= str_replace($Eng,$Font_28,$matn);
        $ad= str_replace($Eng,$Font_29,$matn);
        $af= str_replace($Eng,$Font_30,$matn);
        $ag= str_replace($Eng,$Font_31,$matn);
        $ah= str_replace($Eng,$Font_32,$matn);
        $am= str_replace($Eng,$Font_33,$matn);
        $as= str_replace($Eng,$Font_34,$matn);
        $pol= str_replace($Eng,$Font_35,$matn);

        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
🌕فونت درخواستی شما ساخته شد🌕

`$nn`
`$a`
`$b`
`$c`
`$d`
`$e`
`$f`
`$g`
`$h`
`$i`
`$j`
`$k`
`$l`
`$m`
`$n`
`$o`
`$p`
`$q`
`$r`
`$s`
`$t`
`$u`
`$v`
`$w`
`$x`
`$y`
`$z`
`$aa`
`$ac`
`$ad`
`$af`
`$ag`
`$ah`
`$am`
`$as`
`$pol`
" ,
            'parse_mode'=>'MarkDown',
        ]);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
🌕فونت درخواستی شما ساخته شد🌕

➲⟦🐛ᏦᏆΝᏀ🥀⟧𖢏| $ad 🍃🦩|𖢏⟦👑⟧ 

➲⟦QUEEN⟧𖢏| $ad |𖢏⟦🧞‍♀️⟧

  ༒⇲͟ 🦄🍭{ ☠️ }≎≝➽[ 💸🩸 $e ]༒ 

  ✿꯭ꦿᷟꦿᷝꦿᷤꦿᷤ⸽⸽꯭🌼⸽⸽ꠋꠋ❰꯭͞🥡🪂🕊    $as ❱꯭꯭❥ 

  🌙•|ɪᴍ $ac ℡∙͜•ٖ⍋💸^•^ 

 🌿🕊ᵐᶤᶳᶳ.͜🏴‍☠️❌.⃤̶̅🍕↬ $pol ↫͛̾❨̶꯭🌙❩ 

 ▼̶��꯭͝🤟🏿̶͞¦᠙̶͞⇔$v🐙🍋  ❰̶͞🐝❰⚠️

⇣🥂⟁⇡[ɪ͟ᴍོ༎꯭🚧〠 $w ➣⃟💞‌⃤▵ 

- |🥂| $ad .͜.-⟦♥️⟧

 ▸͞͞↳̽🌙☄🏗  $ag ↵ᵎ.͜. ᙮⸼ᷝⷮ⏨🩸⛓ ⸸ᔿᣔᕐᣴᐤᣴ↰!🩺-

⟦🌙⟧---🐾 $nn    ⃟⃘݊𓎂🐾---⟦🌙⟧

ɪᴍ⸙.͟҉.🏹🪓❰̶❨̶🔞❨ $w   🧸♥️❩̶❱̶҉╁͟͞҉🇲🇽∇

▸͞͞↳̽  🚸$ag ↵ᵎ.͜. ᙮⸼ᷝⷮ⏨ 🎟⸸ᔿᣔᕐᣴᐤᣴ🎗↰!-

ၜ͜ၜ✨ꀤᘻ🍓ꦿ $u 🐼ꦿ❖

❨̶ ̶ ̶ⷮ ⷩ ̶ⷷ❲👑📿💫❳ᯫ༎ᯫᯫᯱ┌►͎ $ac ▸↱🍭¦▼̶͞ ٜٜ

⨭͛▴⸼ $u 🕯ᓚᵉᔿᣖᵉᣴᐤᣴ🇯🇪✞᜴₎ ͛▴⸼↱ ᙮⸼ ᷝⷮ⸸🌿🩸⊂〽️⊃

📿⇉▴⃯ɪᔿ ࿏⸸ ͛$af  🩸🕊🌿⸼۠⊆۪⁴₀²۪⊇۠⸼࿏⇲

[࿙ུ݊݊࿚ུ]🩺🎟 ภ $s 🥀ꦿ[  ͭ  ⷶ  ᷯ  ͥ]̶͞🕊➳†⃟̎̄✨꙰..͟

▼╋🕊🌿┌ $ad ┘<🏴‍☠┌>ᵐᵃʳᵍ<ᵐᵃᵍʰᶻᶤ🧸📿▽.͟. ͟͟▃ⷯ▂

╁̶͟҉💋҉╀ ᷟ▸͞͞✚↳ $am 🥬↰◥⃟◤⃟  ❰͞͞҉💞❱

⚘⃟༗꯭꯭ ꯭🍭🥢ᴹ̶꯭ᴵᶳ꯭꯭ᶳ̶꯭༼࿆࿈꯭࿆༽꯭࿆℡꯭🔪🥗↳ $b   ꯭⚘⃟༗

† ᷝ ᷟ.͟.🍒• ̶$d .͜.ᷝⷮ🗝 🌙⇪

.͟͟.‌ ‌ ͛▴⸼𖠣 ❌〽️$af ː⊑₉̽⁶͎🍇₉̽⊒͢|▸ᷝⷮ↱̶͟🍟ᓗ

⇣ ↬.͟. 🏳🚩$ac ✖️⸼ ᷝⷮ⏨⸸ ⊂🌵🥀² ₂ ²⊃

▸͞͞↳̽🌴🌸$u  .̽͟.̄̽↱ᵉᘁᴵᒻ⸦ 🐣⸸ ⸧

🐼🌿🍁↱̶̓✚̶͟«̶ᣳ̶ᔿ̶»̶❥🦃ꦿ $u 🕆̶͟⇡🍇ܧࡋ

⍖ ↳  ᶤᔿ🕊🍁⸦₁۪¹۪۪₂۪۪₂۪۪꙰⁸۪۪₈۪⸧ $y 𖠷 🦄╾➧͓̐⇟🦋⸼.͜.

⇡.͜.̆▴⃯🍃🦗↳̽ᴵᔿ↲🍬⊂₉⁹₉⊃⸼🥡🌿↳ $v↰【🦋🦕🧚‍♀】↲

💕↵ᶤ͚ᔿ͚⇣🔪🌽ᓖ⁷₇⁷ᓘ 🪂 $af ̽- ⸼ⷮ↱🐝

↬❬🌸❭△̸̽▸̽↳ 🥥$ac ⊑💍 ⊒🍿|▸ᷝⷮ↱⋐₃³₃⋑🍭↫

𖠌▸͞͞↳̸̽ ̽ ̽🩸ᶤᔿ⊑⁰↳₆⁴⊒ $u ⸼◤͒🥬╭͡🍕╮

.͟͟.‌ ‌ ͛▴🇦🇨⸼𖠣 $ah ː⊑🩸₉̽⁶͎₉̽⊒͢💸🖇|▸ᷝⷮ↱̶͟?

🌙•|ɪᴍ $af❌ ℡∙͜•ٖ⍋💸🏴‍☠️^•^

⃟🦄💅➺⭞ $z ⭝➥⃟🦋⃟ᕽ🚨⭛⟫➾⃟💅

▸͞͞↳̽🍇🎡 $af ↵ᵎ.͜. ᙮⸼ ᷝⷮ⏨🌙 ⸸ᔿᣔᕐᣴᐤᣴ↰🔥!-

△̸̽🐾🦍▸̽↳ $ac  ⊑🏳‍🌈 ⊒|▸ᷝⷮ↱⋐🥀🍂₃³₃⋑↫

↓▼ᶤᔿ❲🐾🦎🕷❳ꔷ❨³ ₃ ³❩ꔷ x $y    ͟͞⃟̶🦩🌿?

●━━━━━━─ $ad ─────
─ ⇆ㅤㅤ ◁ㅤㅤ❚❚ㅤㅤ▷ ㅤ

▸  🦄▿ ꜛꜜ $a ᒻ🍃🥀 🕷🕸 ᒽ ↵

▸͞͞↳̽$af  ⃪  ᵎ.͜. ᙮⸼ ᷝⷮ⏨ ⸸↰♻️!-‌
",
            'parse_mode'=>'MarkDown',
        ]);
    }
    if($text == "قیمت ارز"){
        $arz= json_decode(file_get_contents("https://api.codebazan.ir/arz/?type=arz"),true);

        $yoro=$arz ['0']['price'];
        $emarat=$arz ['1']['price'];
        $swead=$arz ['2']['price'];
        $norway=$arz ['3']['price'];
        $iraq=$arz ['4']['price'];
        $swit=$arz ['5']['price'];
        $armanestan=$arz ['6']['price'];
        $gorgea=$arz ['7']['price'];
        $pakestan=$arz ['8']['price'];
        $soudi=$arz ['9']['price'];
        $russia=$arz ['10']['price'];
        $india=$arz ['11']['price'];
        $kwait=$arz ['12']['price'];
        $astulia=$arz ['13']['price'];
        $oman=$arz ['14']['price'];
        $qatar=$arz ['15']['price'];
        $kanada=$arz ['16']['price'];
        $tailand=$arz ['17']['price'];
        $turkye=$arz ['18']['price'];
        $england=$arz ['19']['price'];
        $hong=$arz ['20']['price'];
        $azarbayjan=$arz ['21']['price'];
        $malezy=$arz ['22']['price'];
        $danmark=$arz ['23']['price'];
        $newzland=$arz ['24']['price'];
        $china=$arz ['25']['price'];
        $japan=$arz ['26']['price'];
        $bahrin=$arz ['27']['price'];
        $souria=$arz ['28']['price'];
        $dolar=$arz ['29']['price'];


        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "<b>
🇪🇺 یورو : $yoro  
○●○●○  
🇺🇸 دلار : $dolar  
○●○●○  
🇦🇪درهم امارات  : $emarat  
○●○●○  
🇸🇪 کرون سوئد : $swead  
○●○●○  
🇳🇴 کرون نروژ : $norway  
○●○●○  
🇮🇶 دینار عراق : $iraq  
○●○●○  
🇨🇭فرانک سوئیس : $swit  
○●○●○  
🇦🇲 درام ارمنستان : $armanestan  
○●○●○  
🇬🇪لاری گرجستان : $gorgea  
○●○●○  
🇵🇰 روپیه پاکستان : $pakestan  
○●○●○ 
🇷🇺 روبل روسیه : $russia  
○●○●○  
🇮🇳 روپیه هندوستان : $india  
○●○●○  
🇰🇼 دینار کویت : $kwait  
○●○●○  
🇦🇺 دلار استرلیا : $astulia  
○●○●○  
🇴🇲 ریال عمان : $oman  
○●○●○  
🇶🇦 ریال قطر : $qatar  
○●○●○  
🇨🇦 دلار کانادا : $kanada  
○●○●○  
🇹🇭بات تایلند : $tailand  
○●○●○  
🇹🇷 لیر ترکیه : $turkye  
○●○●○  
🇬🇧 پوند انگلیس : $england  
○●○●○  
🇭🇰 دلار هنگ کنگ : $hong  
○●○●○  
🇦🇿 منات اذربایجان : $azarbayjan  
○●○●○  
🇲🇾رینگیت مالزی : $malezy  
○●○●○  
🇩🇰 کرون دانمارک : $danmark  
○●○●○  
🇳🇿 دلار نیوزلند : $newzland  
○●○●○  
🇨🇳 یوان چین : $china  
○●○●○  
🇯🇵 ین ژآپن : $japan  
○●○●○  
🇧🇭 دینار بحرین : $bahrin  
○●○●○  
🇸🇾 لیر سوریه : $souria  </b>
" ,
            'parse_mode'=>'html',
            'reply_to_message_id'=>$message_id,
        ]);
    }
    else if(preg_match("/^[\/\#\!]?(هوای|weather) (.*)$/i", $text)){
        preg_match("/^[\/\#\!]?(هوای|weather) (.*)$/i", $text, $m);
        $query = $m[2];
        $url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
        $city = $url["name"];
        $deg = $url["main"]["temp"];
        $bad = $url["wind"]["speed"];
        $did = $url["visibility"];
        $feshar = $url["main"]["pressure"];
        $type1 = $url["weather"][0]["main"];
        if($type1 == "Clear"){
            $tpp = 'آفتابی☀';
            file_put_contents('type.txt',$tpp);
        }
        elseif($type1 == "Clouds"){
            $tpp = 'ابری ☁☁';
            file_put_contents('type.txt',$tpp);
        }
        elseif($type1 == "Rain"){
            $tpp = 'بارانی ☔';
            file_put_contents('type.txt',$tpp);
        }
        elseif($type1 == "Thunderstorm"){
            $tpp = 'طوفانی ☔☔☔☔';
            file_put_contents('type.txt',$tpp);
        }
        elseif($type1 == "Mist"){
            $tpp = 'مه 💨';
            file_put_contents('type.txt',$tpp);
        }
        if($city != ''){
            $ziro = file_get_contents('type.txt');

            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text' => "
  
✦<b> دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد . 
✦ سرعت باد $bad متر بر ثانیه است . 
✦ دید افقی $did متر است . 
✦ فشار هوای $feshar میلی بار است . 
✦ شرایط فعلی آب و هوا: $ziro </b>
",
                'parse_mode' => 'MarkDown',
                'reply_to_message_id' => $message_id
                , 'parse_mode' => 'html' ]);
            unlink('type.txt');
        }else{

            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text' => "⚠️شهر مورد نظر شما يافت نشد"]);

        }
    }

    elseif($text == "من" or $text == "me"){
        $profile = "https://telegram.me/$username";

        bot('sendphoto',[
            'chat_id' => $chat_id,
            'photo'=>$profile,
            'caption' =>"
#پروفایل_شما  :)
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
✔First Name : $first_name
↻Last Name : $last_name
↯Username : @$username
➣Userid: $from_id
=-=-=-=-=-=-=-=-=-=-=-=-=-= 
",
            'reply_to_message_id'=>$message_id,
        ]);
    }
    if(strpos($text , "ترجمه فارسی") !== false or strpos($text , "farci") !== false){
        $matntrtoen1 =str_replace(['ترجمه فارسی','farci '],'',$text);

        $matntrtoen2 =str_replace(' ','+',$matntrtoen1);

        $rev=   file_get_contents("http://api.codebazan.ir/lang/google/?FROM=en&TO=fa&TEXT=$matntrtoen2");
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
<b>$rev</b>
",
            'parse_mode' => 'html',
            'reply_to_message_id' => $message_id
            , 'parse_mode' => 'html' ]);
    }
    if(strpos($text , "ترجمه انگلیسی") !== false or strpos($text , "farci") !== false){
        $matntrtoen1 =str_replace(['ترجمه انگلیسی','farci '],'',$text);

        $matntrtoen2 =str_replace(' ','+',$matntrtoen1);

        $rev=   file_get_contents("http://api.codebazan.ir/lang/google/?FROM=fa&TO=en&TEXT=$matntrtoen2");
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "
<b>$rev</b>
",
            'parse_mode' => 'html',
            'reply_to_message_id' => $message_id
            , 'parse_mode' => 'html' ]);
    }
    else if(preg_match("/^[\/\#\!]?(corona) (.*)$/i", $text)){
        preg_match("/^[\/\#\!]?(corona) (.*)$/i", $text, $p);
        $cron = $p[2];
        $linkcrona = json_decode(file_get_contents("https://api.codebazan.ir/corona/?type=country&country=$cron"),true);
        $link22 = $linkcrona["result"];
        $crona1 = $link22['last_updated'];
        $crona2 = $link22['continent'];
        $crona3 = $link22['country'];
        $crona4 = $link22['cases'];
        $crona5 = $link22['deaths'];
        $crona6 = $link22['recovered'];
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text' => "<b>
اخرین اپدیت: 
$crona1 
قاره: 
$crona2 
کشور: 
$crona3 
امار مبتلایان: 
$crona4 
امار مرگ و میر: 
$crona5 
امار بهبود یافته: 
$crona6 

</b>
",
            'parse_mode' => 'MarkDown',
            'reply_to_message_id' => $message_id
            , 'parse_mode' => 'html' ]);
    }
}
//---------/////--/////-------------
if(preg_match('~^معنی (.+)~s',$text,$match) and $match=$match[1]) {
    preg_match('~<p class="">(.+?)</p>~si',file_get_contents('https://www.vajehyab.com/?q='.urlencode($match)),$p);
    $p=trim(strip_tags(preg_replace(['~<[a-z0-9]+?>.+?</[a-z0-9]+?>|&.+?;~','~<br.+?>~s'],['',"\n"],$p[1])));
    if($p)
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"کلمه اولیه : $match
 معنی: 
$p",'reply_to_message_id'=>$message_id, 'reply_markup'=>$or,]);
    else
        $bot = [
            "این یکی نیست😐",
            "مسخره کردی منو😕",
            "نیست آقا ، خانم نیست 🤬",
        ];
    $r = $bot[rand(0, count($bot)-1)];
    bot('sendMessage',[
        'chat_id' =>$chat_id,
        'text' => "$r",
        'reply_to_message_id'=>$message_id,
        'reply_markup'=>$or,
    ]);}
///------------/////-----------/////-----
if($text=="دانستنی" or $text == "danes"){
    $get = file_get_contents("http://api.novateamco.ir/danestani/");
    $result = json_decode($get, true);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"• دانستنی ~ ".$result['result']."\n💬 شماره : *".$result['code']."*",
        'reply_to_message_id'=>$message_id,
        'parse_mode'=>'MarkDown',
        'reply_markup'=>$or,
    ]);}
//------------///////------------------////----
if(preg_match('/^(gif|گیف) (.*)/s', $text, $mtch)){
    $matn = strtoupper("$mtch[2]");
    $bot = [
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=alien-glow-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=flash-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=shake-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=highlight-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=blue-fire&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=burn-in-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=whirl-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=inner-fire-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=glitter-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=flaming-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
        "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=memories-anim-logo&text=$matn&doScale=true&scaleWidth=240&scaleHeight=120",
    ];
    $r = $bot[rand(0, count($bot)-1)];
    bot('senddocument',[
        'chat_id'=>$chat_id,
        'document'=>"$r",
        'caption'=>"@$channel",
        'reply_to_message_id'=>$message_id,
    ]);}
//--------//////--------/////-----
if($text == "fal" or $text == "فال"){
    $add = "http://www.beytoote.com/images/Hafez/".rand(1,149).".gif";
    bot('sendphoto', [
        'chat_id' => $chat_id,
        'photo'=>$add,
        'caption' =>"📜 فال شما ارسال شد!",
        'reply_to_message_id'=>$message_id,
    ]); }
if($text == "ساعت" or $text == "تاریخ"){
    Download('http://web-api.xyz/api/pic-time',"photo.png");
    SendSticker($chat_id, new CURLFile("photo.png"), $reply_messag_id);
    unlink("photo.png");
}
///-------/////------////--------
//==============
if($text=="لیست بازی ها" or $text== "gamee"){
    if ($status_n == 'creator' or $status_n == 'administrator' ){
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"▪️ بازی مورد نظر خود را انتخاب کنید و در گروه مورد نظر ارسال کنید!",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"▶ بازی - MotoFX",'url'=>'t.me/gamee?game=MotoFX']],
                    [['text'=>"▶ بازی - Gravity Ninja",'url'=>'t.me/gamee?game=GravityNinja']],
                    [['text'=>"▶ بازی - Qubo",'url'=>'t.me/gamee?game=Qubo']],
                    [['text'=>"▶ بازی - Sunshine Solitaire",'url'=>'t.me/gamee?game=SunshineSolitaire']],
                    [['text'=>"▶ بازی - Space Traveler",'url'=>'t.me/gamee?game=SpaceTraveler']],
                ]
            ])
        ]);}}
//===============
if(isset($update->inline_query)){
    bot("answerInlineQuery",[
        "inline_query_id"=>$update->inline_query->id,
        "results"=>json_encode([[
            "type"=>"article",
            "id"=>base64_encode(rand(5,555)),
            "title"=>"🦋 لیست بازی ها",
            "input_message_content"=>["parse_mode"=>"MarkDown","message_text"=>"▪️ بازی مورد نظر خود را انتخاب کنید و در گروه مورد نظر ارسال کنید!
@$channel"],
            "reply_markup"=>["inline_keyboard"=>[
                [['text'=>"▶ بازی - MotoFX",'url'=>'t.me/gamee?game=MotoFX']],
                [['text'=>"▶ بازی - Gravity Ninja",'url'=>'t.me/gamee?game=GravityNinja']],
                [['text'=>"▶ بازی - Qubo",'url'=>'t.me/gamee?game=Qubo']],
                [['text'=>"▶ بازی - Sunshine Solitaire",'url'=>'t.me/gamee?game=SunshineSolitaire']],
                [['text'=>"▶ بازی - Space Traveler",'url'=>'t.me/gamee?game=SpaceTraveler']],
                [["text"=>"▪️ اشتراک گذاری ▪️","switch_inline_query"=>""]]
            ]]
        ],[
            "type"=>"article",
            "id"=>base64_encode(rand(5,555)),
            "title"=>"♥️ کانال های ربات",
            "input_message_content"=>["parse_mode"=>"MarkDown","message_text"=>"برای عضویت در کانال ربات روی کیبورد زیر کلیک کنید"],
            "thumb_url"=>"$banner",
            "reply_markup"=>["inline_keyboard"=>[
                [["text"=>"▪️ مشاهده چنل️","url"=>"t.me/$channel"]]]]
        ]])
    ]);}
//================
elseif(preg_match('/^\/([Cc][Rr][Ee][Aa][Tt][Oo][Rr])/',$textmassage)){
    if($tc == "private" ){
        $forchannel = bot('getChatMember',['chat_id'=>"@$channel",'user_id'=>"$from_id"]);
        $tch = $forchannel->result->status;
        if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"▪️ این ربات توسط $amirr ساخته شده است.",
                'reply_to_message_id'=>$message_id,
            ]);
        }else{
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"سلام ❗️کاربر گرامی برای استفاده از ربات و حمایت از ما ابتدا در چنل زیر عضو شوید و سپس /start را ارسال کنید!",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text' => "🛎️ عضویت در کانال️", 'url' => "https://t.me/$channel"]],
                        [['text'=>"🌟 عضو شدم",'callback_data'=>"join"]],
                    ]
                ])
            ]);}}
    if(!file_exists("data/$from_id.json")){
        $juser = json_decode(file_get_contents("data/user/$from_id.json"),true);
        $juser["userfild"]["step"]="none";
        $juser = json_encode($juser,true);
        file_put_contents("data/user/$from_id.json",$juser);}}
if($tc == "private" ){
    if(strpos($textmassage , '/start ') !== false  ) {
        $start = str_replace("/start ","",$textmassage);
        if($start != $from_id){
            if($juser["userfild"]["ingame"] == "on"){
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🌟 شما یک بازی در حال انجام دارید ابتدا ان را پایان دهید",
                    'reply_markup'=>json_encode([
                        'keyboard'=>[
                            [['text'=>"⁉️ پایان بازی ⁉️"]],
                        ],
                        'resize_keyboard'=>true
                    ])
                ]);
            }else{
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"🔄 در حال پردازش بازی ...
	
در حال انداختن قرعه برای شروع بازی ✅",
                    'reply_markup'=>json_encode([
                        'keyboard'=>[
                            [['text'=>"⁉️ پایان بازی ⁉️"]],
                        ],
                        'resize_keyboard'=>true
                    ])
                ]);
                $name = str_replace(["`","*","_","[","]"],["","","","",""],$first_name);
                bot('sendmessage',[
                    'chat_id'=>$start,
                    'text'=>"🌟 کاربر [$name](tg://user?id=$from_id) با استفاده از لینک دعوت شما وارد ربات شده
	
🔄 در حال پردازش بازی ...
	
در حال انداختن قرعه برای شروع بازی ✅",
                    'parse_mode'=>'MarkDown',
                    'reply_markup'=>json_encode([
                        'keyboard'=>[
                            [['text'=>"⁉️ پایان بازی ⁉️"]],
                        ],
                        'resize_keyboard'=>true
                    ])
                ]);
                $array = array("$from_id",$start);
                $random = array_rand($array);
                bot('sendmessage',[
                    'chat_id'=>$array[$random],
                    'text'=>"❓ نوبت شماست که سوال بپرسید

▪️ منتظربمانید تا حریف شما جرئت یا حقیقت رو انتخاب کند",
                ]);
                $result = array_diff($array , array($array[$random]));
                bot('sendmessage',[
                    'chat_id'=>$result[0],
                    'text'=>"❓ کدام رو انتخاب میکنید !",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"😤 جرات",'callback_data'=>"jorats"],['text'=>"🥺 حقیقت",'callback_data'=>"haghights"]],
                        ]
                    ])
                ]);
                bot('sendmessage',[
                    'chat_id'=>$result[1],
                    'text'=>"❓ کدام رو انتخاب میکنید !",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"😤 جرات",'callback_data'=>"jorats"],['text'=>"🥺 حقیقت",'callback_data'=>"haghights"]],
                        ]
                    ])
                ]);
                $juser["userfild"]["rival"]="$start";
                $juser["userfild"]["ingame"]="on";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);
                $userrival = $start;
                $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
                $getrival["userfild"]["rival"]="$from_id";
                $getrival["userfild"]["ingame"]="on";
                $getrival = json_encode($getrival,true);
                file_put_contents("data/user/$userrival.json",$getrival);}
        }else{
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"▪️ خودت که نمیتونی با خودت بازی کنی !
	
ℹ️ لینک رو برای دوستات ارسال کن و اونارو به بازی دعوت کن",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                        [['text'=>"🎓 راهنما 🎓",'callback_data'=>"help"]],
                    ]
                ])
            ]);}}
    elseif($textmassage=="/game" or $textmassage=="/game@$bottag"){
        if($tc == "group" or $tc == "supergroup"){
            if(count($getgp["gamer"]) < 2){
                unset($getgp["gamer"]);
                $getgp["gamer"][]="$from_id";
                $getgamer = $getgp["gamer"];
                for($z = 0;$z <= count($getgamer) - 1;$z++){
                    $stat = bot('getChatMember',['chat_id'=>"$getgamer[$z]",'user_id'=>"$getgamer[$z]"]);
                    $name = $stat->result->user->first_name;
                    $zplus = $z + 1 ;
                    $ingamer = $ingamer."$zplus - $name"."\n";}
                bot('sendmessage',[
                    "chat_id"=>$chat_id,
                    "text"=>"🎮 بیاین جرات حقیقت بازی کنیم

🧾 بازیکنان پایه:

$ingamer",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"📯 شروع بازی",'callback_data'=>"startgame"],['text'=>"🤚🏻 من پایه ام",'callback_data'=>"togame"]],
                            [['text'=>"🏆 چنل ( کانال اطلاع رسانی ) 🏆",'url'=>"https://t.me/$channel"]],
                        ]
                    ])
                ]);
                $getgp["creator"]="$from_id";
                $getgp = json_encode($getgp,true);
                file_put_contents("data/gp/$chat_id.json",$getgp);
            }else{
                bot('sendmessage',[
                    "chat_id"=>$chat_id,
                    "text"=>"🎮 بازی قبلی هنوز تموم نشده ! امکان ساخت بازی جدید وجود ندارد 
		
▫️ ابتدا بازی قبلی را حذف کنید یا ادامه دهید",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"🗑 حذف بازی",'callback_data'=>"removegame"]],
                        ]
                    ])
                ]);}
        }else{
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"▪️ اجرای این دستور تنها در گروه امکان پذیر است",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"🍾 بازی در گپ",'url'=>"https://telegram.me/$bottag?startgroup=playgame"]],
                    ]
                ])
            ]);}}
    elseif($textmassage=="⁉️ پایان بازی ⁉️"){
        if($tc == "private" ){
            bot('sendmessage',[
                "chat_id"=>$chat_id,
                "text"=>"▪️ ایا با پایان دادن به بازی موافق هستی ؟",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"✅ بله",'callback_data'=>"yes"],['text'=>"⛔ خیر",'callback_data'=>"no"]],
                    ]
                ])
            ]);
        }}}
elseif($update->message->new_chat_member->id == $botid){
    unset($getgp["gamer"]);
    $getgp["gamer"][]="$from_id";
    $getgamer = $getgp["gamer"];
    for($z = 0;$z <= count($getgamer) - 1;$z++){
        $stat = bot('getChatMember',['chat_id'=>"$getgamer[$z]",'user_id'=>"$getgamer[$z]"]);
        $name = $stat->result->user->first_name;
        $zplus = $z + 1 ;
        $ingamer = $ingamer."$zplus - $name"."\n";}
    bot('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"🎮 بیاین جرات حقیقت بازی کنیم!
  
🧾 بازیکنان پایه:

$ingamer",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"📯 شروع بازی",'callback_data'=>"startgame"],['text'=>"🤚🏻 من پایه ام",'callback_data'=>"togame"]],
                [['text'=>"🏆 چنل ( کانال اطلاع رسانی ) 🏆",'url'=>"https://t.me/$channel"]
                ],
            ]
        ])
    ]);
    $getgp["creator"]="$from_id";
    $getgp = json_encode($getgp,true);
    file_put_contents("data/gp/$chat_id.json",$getgp);
}
elseif($data=="togame"){
    $forchannel = bot('getChatMember',['chat_id'=>"@$channel",'user_id'=>"$fromid"]);
    $tch = $forchannel->result->status;
    if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
        $key = array_search($fromid,$getgpc["gamer"]);
        if(!is_numeric($key)){
            $getgpc["gamer"][]="$fromid";
            $getgamer = $getgpc["gamer"];
            for($z = 0;$z <= count($getgamer) - 1;$z++){
                $stat = bot('getChatMember',['chat_id'=>"$getgamer[$z]",'user_id'=>"$getgamer[$z]"]);
                $name = $stat->result->user->first_name;
                $zplus = $z + 1 ;
                $ingamer = $ingamer."$zplus - $name"."\n";}
            bot('editmessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"🎮 بیاین جرات حقیقت بازی کنیم 
🙃 بازیکنان پایه  : 

$ingamer",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"📯 شروع بازی",'callback_data'=>"startgame"],['text'=>"🤚🏻 من پایه ام",'callback_data'=>"togame"]],
                        [['text'=>"🏆 چنل ( کانال اطلاع رسانی ) 🏆",'url'=>"https://t.me/$channel"]],
                    ]
                ])
            ]);
            $getgpc = json_encode($getgpc,true);
            file_put_contents("data/gp/$chatid.json",$getgpc);
        }else{
            bot('answercallbackquery', [
                'callback_query_id' =>$membercall,
                'text' => "▫️ شما قبلا در این بازی حضور داشتید",
                'show_alert' =>true
            ]);}
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ برای استفاده از ربات باید در کانال @$channel عضو باشید",
            'show_alert' =>true
        ]);}}
elseif($data=="startgame"){
    $forchannel = bot('getChatMember',['chat_id'=>"@$channel",'user_id'=>"$fromid"]);
    $tch = $forchannel->result->status;
    if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
        $getstats = bot('getChatMember',['chat_id'=>"$chatid",'user_id'=>"$fromid"]);
        $stats = $getstats->result->status;
        if ($stats == 'creator' or $fromid == $getgpc["creator"]) {
            if(count($getgpc["gamer"]) >= 2){
                $getgamer = $getgpc["gamer"];
                $random = array_rand($getgamer);
                $stat = bot('getChatMember',['chat_id'=>"$getgamer[$random]",'user_id'=>"$getgamer[$random]"]);
                $name = $stat->result->user->first_name;
                bot('sendmessage',[
                    'chat_id'=>$chatid,
                    'text'=>"▫️ نوبت $name شد ! انتخاب کن ! ",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [['text'=>"💉 جرات",'callback_data'=>"jo"],['text'=>"💬 حقیقت",'callback_data'=>"ha"]],
                            [['text'=>"📯 شانسی",'callback_data'=>"random"]],
                            [['text'=>"❗️ نفر بعدی ❗️",'callback_data'=>"othergamer"]],
                        ]
                    ])
                ]);
                bot('deletemessage',[
                    'chat_id'=>$chatid,
                    'message_id'=>$messageid
                ]);
                $getgpc["turn"]="$getgamer[$random]";
                $getgpc = json_encode($getgpc,true);
                file_put_contents("data/gp/$chatid.json",$getgpc);
            }else{
                bot('answercallbackquery', [
                    'callback_query_id' =>$membercall,
                    'text' => "▫️ تعداد بازی کنان بازی باید دو نفر یا بیش تر باشد",
                    'show_alert' =>true
                ]);}
        }else{
            bot('answercallbackquery', [
                'callback_query_id' =>$membercall,
                'text' => "▫️ شما دست رسی به اغاز بازی را ندارید [تنها برای سازنده گروه یا بازی]",
                'show_alert' =>true
            ]);}
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ برای استفاده از ربات باید در کانال @$channel عضو باشید",
            'show_alert' =>true
        ]);}}
elseif(in_array($data,array("jo","ha","random"))){
    if($getgpc["turn"] == $fromid){
        if($data == "random"){
            $array = array("ha","jo");
            $random = array_rand($array);
            $data = "$array[$random]";}
        $replace = str_replace(["jo","ha"],["جرات رو انتخاب کرد","حقیقت رو انتخاب کرد"],$data);
        bot('editmessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text'=>"🌟 خب $firstname $replace

▫️ نوع سوال رو مشخص کن",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"😊 عادی",'callback_data'=>"normal"],['text'=>"🔞 + 18",'callback_data'=>"plus"]],
                ]
            ])
        ]);
        $getgpc["stats"]="$data";
        $getgpc = json_encode($getgpc,true);
        file_put_contents("data/gp/$chatid.json",$getgpc);
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ نوبت شما برای انتخاب نیست",
            'show_alert' =>true
        ]);}}
elseif(in_array($data,array("normal","plus"))){
    if($getgpc["turn"] == $fromid){
        if($data == "normal"){
            $stats = $getgpc["stats"];
            $randomchalange = array_rand($database["$stats"]["$data"]);
            $randomch = $database["$stats"]["$data"]["$randomchalange"];
            $replace = str_replace(["jo","ha"],["انجام بده","حقیقت رو بگو"],$stats);
            $replaces = str_replace(["jo","ha"],["انجام بدی","حقیقت رو بگی"],$stats);
            bot('editmessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"🌟 خب $firstname $replace

$randomch

👮🏻 داور بازی باید پس از پاسخ کاربر آن را تایید یا رد کند!

▫️ 5 دقیقه فرصت داری $replaces",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"🟢 پاسخ صحیح",'callback_data'=>"okkard"],['text'=>"🔴 پاسخ اشتباه",'callback_data'=>"oknakard"]],
                    ]
                ])
            ]);
        }else{
            bot('editmessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"🌟 خب $firstname

▫️ جنسیت خودت رو انتخاب کن",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"🤴🏻 پسر",'callback_data'=>"boy"],['text'=>"👸🏻 دختر",'callback_data'=>"girl"]],
                    ]
                ])
            ]);}
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ نوبت شما برای انتخاب نیست",
            'show_alert' =>true
        ]);}}
elseif(in_array($data,array("boy","girl"))){
    if($getgpc["turn"] == $fromid){
        $stats = $getgpc["stats"];
        $randomchalange = array_rand($database["$stats"]["plus"]["$data"]);
        $randomch = $database["$stats"]["plus"]["$data"]["$randomchalange"];
        $replace = str_replace(["jo","ha"],["انجام بده","حقیقت رو بگو"],$stats);
        $replaces = str_replace(["jo","ha"],["انجام بدی","حقیقت رو بگی"],$stats);
        bot('editmessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text'=>"🌟 خب $firstname $replace

$randomch

👮🏻 داور بازی باید پس از پاسخ کاربر آن را تایید یا رد کند!

▫️ 5 دقیقه فرصت داری $replaces",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🟢 پاسخ صحیح",'callback_data'=>"okkard"],['text'=>"🔴 پاسخ اشتباه",'callback_data'=>"oknakard"]],
                ]
            ])
        ]);
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ نوبت شما برای انتخاب نیست",
            'show_alert' =>true
        ]);}}
elseif($data=="okkard"){
    $getstats = bot('getChatMember',['chat_id'=>"$chatid",'user_id'=>"$fromid"]);
    $stats = $getstats->result->status;
    if ($stats == 'creator' or $fromid == $getgpc["creator"]) {
        $replace = str_replace(["jo","ha"],["انجام داد","حقیقت رو گفت"],$getgpc["stats"]);
        $turn = $getgpc["turn"];
        $statturn = bot('getChatMember',['chat_id'=>"$turn",'user_id'=>"$turn"]);
        $nameturn = $statturn->result->user->first_name;
        $getgamer = $getgpc["gamer"];
        $random = array_rand($getgamer);
        $stat = bot('getChatMember',['chat_id'=>"$getgamer[$random]",'user_id'=>"$getgamer[$random]"]);
        $name = $stat->result->user->first_name;
        bot('sendmessage',[
            'chat_id'=>$chatid,
            'text'=>"▫️ خوب خوب ! $nameturn $replace
	
▫️ نوبت $name شد ! انتخاب کن ! 

👮🏻 داور بازی : @$usernameca",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"💉 جرات",'callback_data'=>"jo"],['text'=>"💬 حقیقت",'callback_data'=>"ha"]],
                    [['text'=>"📯 شانسی",'callback_data'=>"random"]],
                    [['text'=>"❗️ نفر بعدی ❗️",'callback_data'=>"othergamer"]],
                ]
            ])
        ]);
        bot('deletemessage',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid
        ]);
        $getgpc["turn"]="$getgamer[$random]";
        $getgpc = json_encode($getgpc,true);
        file_put_contents("data/gp/$chatid.json",$getgpc);
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ شما دست رسی به داوری بازی را ندارید [تنها برای سازنده گروه یا بازی]",
            'show_alert' =>true
        ]);}}
elseif($data=="oknakard"){
    $getstats = bot('getChatMember',['chat_id'=>"$chatid",'user_id'=>"$fromid"]);
    $stats = $getstats->result->status;
    if ($stats == 'creator' or $fromid == $getgpc["creator"]) {
        $turn = $getgpc["turn"];
        $key = array_search($turn,$getgpc["gamer"]);
        unset($getgpc["gamer"][$key]);
        $getgpc["gamer"] = array_values($getgpc["gamer"]);
        $replace = str_replace(["jo","ha"],["انجام نداد","حقیقت رو نگفت"],$getgpc["stats"]);
        if(count($getgpc["gamer"]) >= 2){
            $statturn = bot('getChatMember',['chat_id'=>"$turn",'user_id'=>"$turn"]);
            $nameturn = $statturn->result->user->first_name;
            $getgamer = $getgpc["gamer"];
            $random = array_rand($getgamer);
            $stat = bot('getChatMember',['chat_id'=>"$getgamer[$random]",'user_id'=>"$getgamer[$random]"]);
            $name = $stat->result->user->first_name;
            bot('sendmessage',[
                'chat_id'=>$chatid,
                'text'=>"▫️ خوب خوب ! $nameturn $replace 
▪️ از بازی حذف شد
	
▫️ نوبت $name شد ! انتخاب کن ! 

👮🏻 داور بازی : @$usernameca",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"💉 جرات",'callback_data'=>"jo"],['text'=>"💬 حقیقت",'callback_data'=>"ha"]],
                        [['text'=>"📯 شانسی",'callback_data'=>"random"]],
                        [['text'=>"❗️ نفر بعدی ❗️",'callback_data'=>"othergamer"]],
                    ]
                ])
            ]);
            bot('deletemessage',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid
            ]);
            $getgpc["turn"]="$getgamer[$random]";
            $getgpc = json_encode($getgpc,true);
            file_put_contents("data/gp/$chatid.json",$getgpc);
        }else{
            $gamer = $getgpc["gamer"][0];
            $statgamer = bot('getChatMember',['chat_id'=>"$gamer",'user_id'=>"$gamer"]);
            $namegamer = $statgamer->result->user->first_name;
            $statturn = bot('getChatMember',['chat_id'=>"$turn",'user_id'=>"$turn"]);
            $nameturn = $statturn->result->user->first_name;
            bot('sendmessage',[
                'chat_id'=>$chatid,
                'text'=>"❄️ خوب خوب ! $nameturn $replace 
▪️ از بازی حذف شد
	
▫️ تعداد بازیکنان باقی مانده این بازی به حداقل رسیده 
	
🌟 برنده بازی : $namegamer
▪️ برای شروع دوباره بازی /game را ارسال کنید",
            ]);
            bot('deletemessage',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid
            ]);
            unset($getgpc["gamer"]);
            $getgpc = json_encode($getgpc,true);
            file_put_contents("data/gp/$chatid.json",$getgpc);}
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ شما دست رسی به داوری بازی را ندارید [تنها برای سازنده گروه یا بازی]",
            'show_alert' =>true
        ]);}}
elseif($data=="othergamer"){
    $getstats = bot('getChatMember',['chat_id'=>"$chatid",'user_id'=>"$fromid"]);
    $stats = $getstats->result->status;
    if ($stats == 'creator' or $fromid == $getgpc["creator"]) {
        $getgamer = $getgpc["gamer"];
        $random = array_rand($getgamer);
        $stat = bot('getChatMember',['chat_id'=>"$getgamer[$random]",'user_id'=>"$getgamer[$random]"]);
        $name = $stat->result->user->first_name;
        bot('sendmessage',[
            'chat_id'=>$chatid,
            'text'=>"▫️ نوبت $name شد ! انتخاب کن ! ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"💉 جرات",'callback_data'=>"jo"],['text'=>"💬 حقیقت",'callback_data'=>"ha"]],
                    [['text'=>"📯 شانسی",'callback_data'=>"random"]],
                    [['text'=>"❗️ نفر بعدی ❗️",'callback_data'=>"othergamer"]],
                ]
            ])
        ]);
        bot('deletemessage',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid
        ]);
        $getgpc["turn"]="$getgamer[$random]";
        $getgpc = json_encode($getgpc,true);
        file_put_contents("data/gp/$chatid.json",$getgpc);
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ شما دست رسی به تعویض بازیکن را ندارید [تنها برای سازنده گروه یا بازی]",
            'show_alert' =>true
        ]);}}
elseif($data=="removegame"){
    $getstats = bot('getChatMember',['chat_id'=>"$chatid",'user_id'=>"$fromid"]);
    $stats = $getstats->result->status;
    if ($stats == 'creator' or $stats == 'administrator' or $fromid == $getgpc["creator"]) {
        unset($getgpc["gamer"]);
        $getgpc["gamer"][]="$fromid";
        $getgamer = $getgpc["gamer"];
        for($z = 0;$z <= count($getgamer) - 1;$z++){
            $stat = bot('getChatMember',['chat_id'=>"$getgamer[$z]",'user_id'=>"$getgamer[$z]"]);
            $name = $stat->result->user->first_name;
            $zplus = $z + 1 ;
            $ingamer = $ingamer."$zplus - $name"."\n";}
        bot('sendmessage',[
            "chat_id"=>$chatid,
            "text"=>"🎮 بیاین جرات حقیقت بازی کنیم!
  
🧾 بازیکنان پایه:

$ingamer",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"📯 شروع بازی",'callback_data'=>"startgame"],['text'=>"🤚🏻 من پایه ام",'callback_data'=>"togame"]],
                    [['text'=>"🏆 چنل ( کانال اطلاع رسانی ) 🏆",'url'=>"https://t.me/$channel"]],
                ]
            ])
        ]);
        bot('deletemessage',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid
        ]);
        $getgpc["creator"]="$fromid";
        $getgpc = json_encode($getgpc,true);
        file_put_contents("data/gp/$chatid.json",$getgpc);
    }else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ شما دست رسی به حذف بازی را ندارید [تنها برای ادمین ها و سازنده گروه یا بازی]",
            'show_alert' =>true
        ]);}}
elseif($data=="join"){
    $forchannel = bot('getChatMember',['chat_id'=>"@$channel",'user_id'=>"$fromid"]);
    $tch = $forchannel->result->status;
    if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "▫️ هنوز داخل کانال @$channel عضو نیستید",
            'show_alert' =>true
        ]);
    }else{
        bot('editmessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text'=>"👋🏻 سلام
خوش اومدی 🥳
میخوای گروهت جذاب شه؟ $name_bot ! تو گروهت اد کن😎
برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                    [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                    [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                        ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                    [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
                ]
            ])
        ]);}}
elseif($data=="gamebylink"){
    $forchannel = bot('getChatMember',['chat_id'=>"@$channel",'user_id'=>"$fromid"]);
    $tch = $forchannel->result->status;
    if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
        bot('sendphoto',[
            'chat_id'=>$chatid,
            'photo'=>"https://t.me/$IdCl/$IdPic",
            'caption'=>"🎮 بیا باهم جرئت حقیقت بازی کنیم
	
🌟 از  طریق این لینک وارد شو تا بازی شروع بشه !

telegram.me/$bottag?start=$fromid",
        ]);
        bot('sendmessage',[
            'chat_id'=>$chatid,
            'text'=>"لینک مخصوص شما برای بازی با دوستت ساخته شد ✅
	
💎 میتونی با ارسال لینک برای دوستت اونو به بازی دعوت کنی و باهم جرئت حقیقت بازی کنید",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🔙 برگشت",'callback_data'=>"back"]],
                ]
            ])
        ]);
    }else{
        bot('editmessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text'=>" ❗️کاربر گرامی برای استفاده از ربات و حمایت از ما ابتدا در چنل زیر عضو شوید و سپس /start را ارسال کنید!",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text' => "🛎️ عضویت در کانال️", 'url' => "https://t.me/$channel"]],
                    [['text'=>"🌟 عضو شدم",'callback_data'=>"join"]],
                ]
            ])
        ]);}}
elseif($data=="gamerandom"){
    $forchannel = bot('getChatMember',['chat_id'=>"@$channel",'user_id'=>"$fromid"]);
    $tch = $forchannel->result->status;
    if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
        $rival = json_decode(file_get_contents("data/rival.json"),true);
        if($rival["user"] != false and $rival["user"] != $fromid){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"▫️ جست جو به پایان رسید",
            ]);
            bot('sendmessage',[
                'chat_id'=>$chatid,
                'text'=>"حریف شما با موفقیت پیدا شد ✅
	
🔄 در حال پردازش بازی ...",
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"⁉️ پایان بازی ⁉️"]],
                    ],
                    'resize_keyboard'=>true
                ])
            ]);
            bot('sendmessage',[
                'chat_id'=>$rival["user"],
                'text'=>"حریف شما با موفقیت پیدا شد ✅
	
🔄 در حال پردازش بازی ...",
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"⁉️ پایان بازی ⁉️"]],
                    ],
                    'resize_keyboard'=>true
                ])
            ]);
            $array = array("$fromid",$rival["user"]);
            $random = array_rand($array);
            bot('sendmessage',[
                'chat_id'=>$array[$random],
                'text'=>"❓ نوبت شماست که سوال بپرسید

▪️ منتظربمانید تا حریف شما جرئت یا حقیقت رو انتخاب کند",
            ]);
            $result = array_diff($array , array($array[$random]));
            bot('sendmessage',[
                'chat_id'=>$result[0],
                'text'=>"❓ کدام رو انتخاب میکنید !",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"😤 جرات",'callback_data'=>"jorats"],['text'=>"🥺 حقیقت",'callback_data'=>"haghights"]],
                    ]
                ])
            ]);
            bot('sendmessage',[
                'chat_id'=>$result[1],
                'text'=>"❓ کدام رو انتخاب میکنید !",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"😤 جرات",'callback_data'=>"jorats"],['text'=>"🥺 حقیقت",'callback_data'=>"haghights"]],
                    ]
                ])
            ]);
            $cuser["userfild"]["rival"]=$rival["user"];
            $cuser = json_encode($cuser,true);
            file_put_contents("data/user/$fromid.json",$cuser);
            $userrival = $rival["user"];
            $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
            $getrival["userfild"]["rival"]=$fromid;
            $getrival = json_encode($getrival,true);
            file_put_contents("data/user/$userrival.json",$getrival);
            unset($rival["user"]);
            $rival = json_encode($rival,true);
            file_put_contents("data/rival.json",$rival);
        }else{
            bot('editmessagetext',[
                'chat_id'=>$chatid,
                'message_id'=>$messageid,
                'text'=>"🎮 برای شروع بازی کسی پیدا نشد !
	
⌛️ شما در لیست انتظار قرار دارید به زودی به یک نفر برای شروع بازی متصل میشوید",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"▫️ لغو جستجو",'callback_data'=>"cancel"]],
                    ]
                ])
            ]);
            $rival["user"]="$fromid";
            $rival = json_encode($rival,true);
            file_put_contents("data/rival.json",$rival);}
    }else{
        bot('editmessagetext',[
            'chat_id'=>$chatid,
            'message_id'=>$messageid,
            'text'=>" ❗️کاربر گرامی برای استفاده از ربات و حمایت از ما ابتدا در چنل زیر عضو شوید و سپس /start را ارسال کنید!",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text' => "🛎️ عضویت در کانال️", 'url' => "https://t.me/$channel"]],
                    [['text'=>"🌟 عضو شدم",'callback_data'=>"join"]],
                ]
            ])
        ]);}}
elseif($data=="no"){
    bot('editmessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"🎮 خوب پس ! به بازیت ادامه بده",
    ]);}
elseif($data=="yes"){
    bot('sendmessage',[
        "chat_id"=>$chatid,
        "text"=>"🎮 بازی به درخواست طرف مقابل به پایان رسید !",
        'reply_markup'=>json_encode(['KeyboardRemove'=>[
        ],'remove_keyboard'=>true
        ])
    ]);
    bot('sendmessage',[
        "chat_id"=>$cuser["userfild"]["rival"],
        "text"=>"🎮 بازی به درخواست طرف مقابل به پایان رسید !",
        'reply_markup'=>json_encode(['KeyboardRemove'=>[
        ],'remove_keyboard'=>true
        ])
    ]);
    bot('sendmessage',[
        'chat_id'=>$chatid,
        'text'=>"📱 به منوی اصلی بازگشتید

برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                    ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
            ]
        ])
    ]);
    bot('sendmessage',[
        'chat_id'=>$cuser["userfild"]["rival"],
        'text'=>"📱 به منوی اصلی بازگشتید

برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                    ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
            ]
        ])
    ]);
    $cuser["userfild"]["step"]="none";
    $cuser["userfild"]["ingame"]="off";
    $cuser = json_encode($cuser,true);
    file_put_contents("data/user/$fromid.json",$cuser);
    $userrival = $cuser["userfild"]["rival"];
    $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
    $getrival["userfild"]["step"]="none";
    $getrival["userfild"]["ingame"]="off";
    $getrival = json_encode($getrival,true);
    file_put_contents("data/user/$userrival.json",$getrival);}
elseif($data=="jorats"){
    bot('sendmessage',[
        'chat_id'=>$cuser["userfild"]["rival"],
        'text'=>"▪️ حریف شما جرئت را انتخاب کرد
	
🌟 لطفا درخواستت رو ارسال کن
▫️ فقط به صورت متن !",
    ]);
    bot('editmessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"▪️ منتظر ارسال سوال باش ...",
    ]);
    $userrival = $cuser["userfild"]["rival"];
    $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
    $getrival["userfild"]["step"]="game";
    $getrival = json_encode($getrival,true);
    file_put_contents("data/user/$userrival.json",$getrival);}
elseif($data=="haghights"){
    bot('sendmessage',[
        'chat_id'=>$cuser["userfild"]["rival"],
        'text'=>"▪️ حریف شما حقیقت را انتخاب کرد
	
🌟 لطفا درخواستت رو ارسال کن
▫️ فقط به صورت متن !",
    ]);
    bot('editmessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"▪️ منتظر ارسال سوال باش ...",
    ]);
    $userrival = $cuser["userfild"]["rival"];
    $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
    $getrival["userfild"]["step"]="game";
    $getrival = json_encode($getrival,true);
    file_put_contents("data/user/$userrival.json",$getrival);}
elseif($data=="back2"){
    bot('editmessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📱 به منوی اصلی بازگشتید

برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                    ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
            ]
        ])
    ]);
    $cuser["userfild"]["step"]="none";
    $cuser = json_encode($cuser,true);
    file_put_contents("data/user/$fromid.json",$cuser);
    unset($rival["user"]);
    $rival = json_encode($rival,true);
    file_put_contents("data/rival.json",$rival);}
elseif($data=="cancel"){
    bot('editmessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📱 عملیات لغو شد! به منوی اصلی بازگشتید

برا اجرای دستوراتم از دکمه ها استفاده کن 😇",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💞 افزودن $name_bot به گروه 💞",'url'=>"https://t.me/$bottag?startgroup=new"]],
                [['text'=>"📧 یاد دادن کلمه",'callback_data'=>'addkalame'],['text'=>"🪄 راهنمای نصب",'callback_data'=>'sar']],
                [['text'=>"🎲 بازی با ناشناس",'callback_data'=>"gamerandom"],
                    ['text'=>"🎮 بازی دوستانه",'callback_data'=>"gamebylink"],],
                [['text' => "💬 پشتیبانی ربات 💬", 'url' => "https://t.me/$fggwu"]],
            ]
        ])
    ]);
    unset($rival["user"]);
    $rival = json_encode($rival,true);
    file_put_contents("data/rival.json",$rival);}
elseif ($juser["userfild"]["step"] == "game") {
    if($textmassage == true){
        bot('sendmessage',[
            'chat_id'=>$juser["userfild"]["rival"],
            'text'=>"🌟 درخواست دوستت از شما :			
`$textmassage`

▪️ لطفا پاسخ رو به صورت متن , عکس یا هرچیزی ارسال کن !",
            'parse_mode'=>'Markdown',
        ]);			         bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"ارسال شد ✅ 
			
▪️ لطفا منتظر دریافت پاسخ باشید",
        ]);
        $userrival = $juser["userfild"]["rival"];
        $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
        $getrival["userfild"]["step"]="answergame";
        $getrival = json_encode($getrival,true);
        file_put_contents("data/user/$userrival.json",$getrival);
    }else{
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"▪️ تنها ارسال متن ممکن است !",
            'parse_mode'=>'Markdown',
        ]);}}
elseif ($juser["userfild"]["step"] == "answergame") {
    $photo = $message->photo;
    $filephoto = $photo[count($photo)-1]->file_id;
    $voice = $message->voice;
    $filevoice = $voice->file_id;
    $document = $update->message->document;
    $filedocument = $document->file_id;
    $sticker = $update->message->sticker;
    $filesticker = $sticker->file_id;
    $caption = $update->message->caption;
    $userrival = $juser["userfild"]["rival"];
    bot('sendmessage',[
        'chat_id'=>$userrival,
        'text'=>"$textmassage",
    ]);
    bot('sendphoto',[
        'chat_id'=>"$userrival",
        'photo'=>$filephoto,
        'caption'=>$caption,
    ]);
    bot('senddocument',[
        'chat_id'=>"$userrival",
        'document'=>$filedocument,
        'caption'=>$caption,
    ]);
    bot('sendsticker',[
        'chat_id'=>"$userrival",
        'sticker'=>"$filesticker",
    ]);
    bot('sendvoice',[
        'chat_id'=>$userrival,
        'voice'=>$filevoice,
        'caption'=>$caption,
    ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"ارسال شد ✅",
    ]);
    bot('sendmessage',[
        'chat_id'=>$userrival,
        'text'=>"👆🏻 پاسخ درخواست شما 👆🏻",
    ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"▪️ منتظر بمانید ربات در حال قرعه انداختن دوباره است ...
	
🔄 در حال پردازش بازی ...",
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>"⁉️ پایان بازی ⁉️"]],
            ],
            'resize_keyboard'=>true
        ])
    ]);
    bot('sendmessage',[
        'chat_id'=>$userrival,
        'text'=>"▪️ منتظر بمانید ربات در حال قرعه انداختن دوباره است ...
	
🔄 در حال پردازش بازی ...",
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>"⁉️ پایان بازی ⁉️"]],
            ],
            'resize_keyboard'=>true
        ])
    ]);
    $array = array("$from_id","$userrival");
    $random = array_rand($array);
    bot('sendmessage',[
        'chat_id'=>$array[$random],
        'text'=>"❓ نوبت شماست که سوال بپرسید

▪️ منتظربمانید تا حریف شما جرئت یا حقیقت رو انتخاب کند",
    ]);
    $result = array_diff($array , array($array[$random]));
    bot('sendmessage',[
        'chat_id'=>$result[0],
        'text'=>"❓ کدام رو انتخاب میکنید !",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"😤 جرات",'callback_data'=>"jorats"],['text'=>"🥺 حقیقت",'callback_data'=>"haghights"]],
            ]
        ])
    ]);
    bot('sendmessage',[
        'chat_id'=>$result[1],
        'text'=>"❓ کدام رو انتخاب میکنید !",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"😤 جرات",'callback_data'=>"jorats"],['text'=>"🥺 حقیقت",'callback_data'=>"haghights"]],]
        ])
    ]);
    $juser["userfild"]["step"]="none";
    $juser = json_encode($juser,true);
    file_put_contents("data/user/$from_id.json",$juser);
    $getrival = json_decode(file_get_contents("data/user/$userrival.json"),true);
    $getrival["userfild"]["step"]="none";
    $getrival = json_encode($getrival,true);
    file_put_contents("data/user/$userrival.json",$getrival);}
//━━کامل━━//
if($text == "/panel" or $text == "▪️ منوی اصلی ▪️"){
    if($tc == "private" ){
        if(in_array($chat_id,$admins)){
            step($chat_id,"none");
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"💒 به پنل مدیریتی ربات خوش آمدید.",
                'parse_mode'=>"MarkDown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>"🎳 تنظیمات جرات و حقیقت 🎳",'callback_data'=>'ba5u']],
                        [['text'=>"🪄 پاکسازی لیست انتظار 🪄",'callback_data'=>'delint']],
                        [['text'=>"▫️ پاکسازی لیست اسپم و مسدود ▫️",'callback_data'=>'delspam']],
                        [['text'=>"📗 تایید اجباری کلمه : $yadauto",'callback_data'=>'setAuto']],
                        [['text'=>"📊 آمار کلی",'callback_data'=>'stats'],['text'=>"🗑 حذف کلمه",'callback_data'=>'delkalame']],
                        [['text'=>"❓ بلاک شخص",'callback_data'=>'black'],['text'=>"❔ آنبلاک شخص",'callback_data'=>'unblack']],
                        [['text'=>"📨 فوروارد به گروه ها",'callback_data'=>'forgp'],['text'=>"📨 فوروارد به کاربران",'callback_data'=>'foruser']],
                        [['text'=>"🗳 ارسال به گروه ها",'callback_data'=>'sendgp'],['text'=>"🗳 ارسال به کاربران",'callback_data'=>'senduser']],
                        [['text'=>"📮 ارسال به همه",'callback_data'=>'sendall'],['text'=>"📮 فوروارد به همه",'callback_data'=>'forall']],
                        [['text'=> "🖥 منوی استارت", 'callback_data'=>"back"]],]])
            ]); }}}

if($data == "stats" ){
    $allhagh1 = count($database["ha"]["normal"]);
    $allhagh2 = count($database["ha"]["normal"]["boy"]);
    $allhagh3 = count($database["ha"]["normal"]["girl"]);
    $alljorat1 = count($database["jo"]["normal"]);
    $alljorat2 = count($database["jo"]["plus"]["boy"]);
    $alljorat3 = count($database["jo"]["plus"]["girl"]);
    $ex1 = explode("\n",$all_users);
    $ex2 = explode("\n",$all_gaps);
    $c1 = count($ex1)-1;
    $c2 = count($ex2)-1;
    $document = 'data/kalamat';
    $scan = scandir($document);
    $scan = array_diff($scan, ['.','..']);
    $fil = count($scan);
    $ca = count($admins);
    $ver = phpversion();
    $load = sys_getloadavg();
    $mem = memory_get_usage();
    $updates = json_decode(file_get_contents('php://input'));
    $messages = $updates->message;
    $texts = $messages->text;
    $chat_ids = $messages->chat->id;
    bot('answercallbackquery', [
        'callback_query_id' => $update->callback_query->id,
        'text'=>"📊 آمار ربات شما:

🚻 کاربران: $c1
👥 گروه ها: $c2
🛃 ادمین ها: $ca
🛄 کلمات: $fil

📖 تعداد جرات ها : $alljorat1 | $alljorat2 | $alljorat3
📖 تعداد حقیقت ها : $allhagh1 | $allhagh2 | $allhagh3

❗️پینگ: $load[0]
❕ورژن php  هاست: $ver
❗️حافظه مصرفی: $mem
",
        'show_alert' => true
    ]);}

if($data == "back_p" ){
    step($chatid,"none");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"💒 به منوی اصلی پنل مدیریت بازگشتید!",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🎳 تنظیمات جرات و حقیقت 🎳",'callback_data'=>'ba5u']],
                [['text'=>"🪄 پاکسازی لیست انتظار 🪄",'callback_data'=>'delint']],
                [['text'=>"▫️ پاکسازی لیست اسپم و مسدود ▫️",'callback_data'=>'delspam']],
                [['text'=>"📗 تایید اجباری کلمه : $yadauto",'callback_data'=>'setAuto']],
                [['text'=>"📊 آمار کلی",'callback_data'=>'stats'],['text'=>"🗑 حذف کلمه",'callback_data'=>'delkalame']],
                [['text'=>"❓ بلاک شخص",'callback_data'=>'black'],['text'=>"❔ آنبلاک شخص",'callback_data'=>'unblack']],
                [['text'=>"📨 فوروارد به گروه ها",'callback_data'=>'forgp'],['text'=>"📨 فوروارد به کاربران",'callback_data'=>'foruser']],
                [['text'=>"🗳 ارسال به گروه ها",'callback_data'=>'sendgp'],['text'=>"🗳 ارسال به کاربران",'callback_data'=>'senduser']],
                [['text'=>"📮 ارسال به همه",'callback_data'=>'sendall'],['text'=>"📮 فوروارد به همه",'callback_data'=>'forall']],
                [['text'=> "🖥 منوی استارت", 'callback_data'=>"back"]],]]) ]); }

if($data == "ba5u" ){
    step($chatid,"none");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"▫️ به منوی تنظیمات قابلیت جرات، حقیقت خوش آمدید.

▪️ جهت نمایش منوی کاملی از تنظیمات /setGtyh را ارسال کنید!!",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"▫️ پاکسازی لیست گروه های درحال بازی ▫️",'callback_data'=>'delgp']],
                [['text'=>"▫️ پاکسازی لیست کاربران درحال بازی ▫️",'callback_data'=>'delus']],
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],]]) ]); }

elseif($data == "setAuto" ){
    if($yadauto == "✅"){
        file_put_contents("data/autoYAD.txt","⬜");}
    if($yadauto == "⬜"){
        file_put_contents("data/autoYAD.txt","✅");}
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>$textt,
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🎳 تنظیمات جرات و حقیقت 🎳",'callback_data'=>'ba5u']],
                [['text'=>"🪄 پاکسازی لیست انتظار 🪄",'callback_data'=>'delint']],
                [['text'=>"▫️ پاکسازی لیست اسپم و مسدود ▫️",'callback_data'=>'delspam']],
                [['text'=>"📗 تایید اجباری کلمه : $yadauto",'callback_data'=>'setAuto']],
                [['text'=>"📊 آمار کلی",'callback_data'=>'stats'],['text'=>"🗑 حذف کلمه",'callback_data'=>'delkalame']],
                [['text'=>"❓ بلاک شخص",'callback_data'=>'black'],['text'=>"❔ آنبلاک شخص",'callback_data'=>'unblack']],
                [['text'=>"📨 فوروارد به گروه ها",'callback_data'=>'forgp'],['text'=>"📨 فوروارد به کاربران",'callback_data'=>'foruser']],
                [['text'=>"🗳 ارسال به گروه ها",'callback_data'=>'sendgp'],['text'=>"🗳 ارسال به کاربران",'callback_data'=>'senduser']],
                [['text'=>"📮 ارسال به همه",'callback_data'=>'sendall'],['text'=>"📮 فوروارد به همه",'callback_data'=>'forall']],
                [['text'=> "🖥 منوی استارت", 'callback_data'=>"back"]],
            ]
        ])
    ]);
    bot('answercallbackquery', [
        'callback_query_id' => $update->callback_query->id,
        'text' => "✅ تغییرات انجام شد.",
        'show_alert' => false
    ]);}
if($data == "delint"){
    deletefolder("data/int");
    bot('answercallbackquery', [
        'callback_query_id' => $update->callback_query->id,
        'text' => "🗑️ لیست انتظار پاکسازی شد!",
        'show_alert' => true
    ]);}
if($data == "delspam"){
    deletefolder("data/spam");
    bot('answercallbackquery', [
        'callback_query_id' => $update->callback_query->id,
        'text' => "🗑️ لیست مسدود و اسپم پاکسازی شد!",
        'show_alert' => true
    ]);}
if($data == "delgp"){
    deletefolder("data/gp");
    bot('answercallbackquery', [
        'callback_query_id' => $update->callback_query->id,
        'text' => "🗑️ لیست گروه های درحال بازی پاکسازی شد!",
        'show_alert' => true
    ]);}
if($data == "delus"){
    deletefolder("data/user");
    bot('answercallbackquery', [
        'callback_query_id' => $update->callback_query->id,
        'text' => "🗑️ لیست کاربران در حال بازی پاکسازی شد!",
        'show_alert' => true
    ]);}
//====
elseif($textmassage=="برگشت 🔙" or $textmassage=="/setGtyh"){
    if ($tc == "private") {
        if (in_array($from_id,$admins)){
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"▪️ با استفاده ازین منو میتوانید بخش های تنظیمی بازی را بهتر مدیریت کنید.",
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"▪️ منوی اصلی ▪️"]],
                        [['text'=>"▪️ افزودن حقیقت"],['text'=>"▪️ افزودن جرات"]],
                    ],
                    'resize_keyboard'=>true
                ])
            ]);
            $juser["userfild"]["step"]="none";
            $juser = json_encode($juser,true);
            file_put_contents("data/user/$from_id.json",$juser);}}}
if($tc == "private" ){
    if ($textmassage == '▪️ افزودن جرات' ) {
        if (in_array($from_id,$admins)){
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"لطفا سوال مربوط به جرات را ارسال کنید 🚀",
                'reply_to_message_id'=>$message_id,
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"برگشت 🔙"]]],
                    'resize_keyboard'=>true
                ])
            ]);
            $juser["userfild"]["step"]="setju";
            $juser = json_encode($juser,true);
            file_put_contents("data/user/$from_id.json",$juser);	}}

    elseif ($juser["userfild"]["step"] == 'setju') {
        if ($textmassage != "برگشت 🔙") {
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"ذخیر شد  ✅
			
▪️ سوال اضافه شده مربوط ب کدام بخش است ؟
normal  = عادی 
plus = +18",
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"normal"],['text'=>"plus"]],
                        [['text'=>"برگشت 🔙"]]
                    ],
                    'resize_keyboard'=>true
                ])
            ]);
            $juser["userfild"]["step"]="setju2";
            $juser["userfild"]["qu"]="$textmassage";
            $juser = json_encode($juser,true);
            file_put_contents("data/user/$from_id.json",$juser);}}
    elseif ($juser["userfild"]["step"] == 'setju2') {
        $qu = $juser["userfild"]["qu"];
        if ($textmassage != "برگشت 🔙") {
            if ($textmassage == "normal") {
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"با موفقیت اضافه شد  ✅
			
▪️ در صورتی که میخواهید سوال جرات دیگری رو اضافه کنید ان را ارسال کنید",
                ]);
                $database["jo"]["normal"][]="$qu";
                $database = json_encode($database,true);
                file_put_contents("data/database.json",$database);
                $juser["userfild"]["step"]="setju";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);}
            if ($textmassage == "plus") {
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"▪️ مربوط ب کدام جنسیت ؟ 
boy  = پسر 
girl =دختر",
                    'reply_markup'=>json_encode([
                        'keyboard'=>[
                            [['text'=>"boy"],['text'=>"girl"]],
                            [['text'=>"برگشت 🔙"]]
                        ],
                        'resize_keyboard'=>true
                    ])
                ]);
                $juser["userfild"]["step"]="setju3";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);}}}
    elseif ($juser["userfild"]["step"] == 'setju3') {
        $qu = $juser["userfild"]["qu"];
        if ($textmassage != "برگشت 🔙") {
            if ($textmassage == "boy" or $textmassage == "girl") {
                $stats = $juser["userfild"]["stats"];
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"با موفقیت اضافه شد  ✅
			
▪️ در صورتی که میخواهید سوال جرات دیگری رو اضافه کنید ان را ارسال کنید",
                ]);
                $database["jo"]["plus"]["$textmassage"][]="$qu";
                $database = json_encode($database,true);
                file_put_contents("data/database.json",$database);
                $juser["userfild"]["step"]="setju";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);	}}}}
if($tc == "private" ){
    if ($textmassage == '▪️ افزودن حقیقت' ) {
        if (in_array($from_id,$admins)){
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"لطفا سوال مربوط به حقیقت رو ارسال کنید 🚀",
                'reply_to_message_id'=>$message_id,
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"برگشت 🔙"]]
                    ],
                    'resize_keyboard'=>true
                ])
            ]);
            $juser["userfild"]["step"]="setha";
            $juser = json_encode($juser,true);
            file_put_contents("data/user/$from_id.json",$juser);	}}

    elseif ($juser["userfild"]["step"] == 'setha') {
        if ($textmassage != "برگشت 🔙") {
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"ذخیر شد  ✅
			
▪️ سوال اضافه شده مربوط ب کدام بخش است ؟
normal  = عادی 
plus = +18",
                'reply_markup'=>json_encode([
                    'keyboard'=>[
                        [['text'=>"normal"],['text'=>"plus"]],
                        [['text'=>"برگشت 🔙"]]
                    ],
                    'resize_keyboard'=>true
                ])
            ]);
            $juser["userfild"]["step"]="setha2";
            $juser["userfild"]["qu"]="$textmassage";
            $juser = json_encode($juser,true);
            file_put_contents("data/user/$from_id.json",$juser);}}

    elseif ($juser["userfild"]["step"] == 'setha2') {
        $qu = $juser["userfild"]["qu"];
        if ($textmassage != "برگشت 🔙") {
            if ($textmassage == "normal") {
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"با موفقیت اضافه شد  ✅
			
▪️ در صورتی که میخواهید سوال جرات دیگری رو اضافه کنید ان را ارسال کنید",
                ]);
                $database["ha"]["normal"][]="$qu";
                $database = json_encode($database,true);
                file_put_contents("data/database.json",$database);
                $juser["userfild"]["step"]="setha";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);}
            if ($textmassage == "plus") {
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"▪️ مربوط ب کدام جنسیت ؟ 
boy  = دختر 
girl = پسر",
                    'reply_markup'=>json_encode([
                        'keyboard'=>[
                            [['text'=>"boy"],['text'=>"girl"]],
                            [['text'=>"برگشت 🔙"]]
                        ],
                        'resize_keyboard'=>true
                    ])
                ]);
                $juser["userfild"]["step"]="setha3";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);}}}

    elseif ($juser["userfild"]["step"] == 'setha3') {
        $qu = $juser["userfild"]["qu"];
        if ($textmassage != "برگشت 🔙") {
            if ($textmassage == "boy" or $textmassage == "girl") {
                $stats = $juser["userfild"]["stats"];
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"با موفقیت اضافه شد  ✅
			
▪️ در صورتی که میخواهید سوال جرات دیگری رو اضافه کنید ان را ارسال کنید",
                ]);
                $database["ha"]["plus"]["$textmassage"][]="$qu";
                $database = json_encode($database,true);
                file_put_contents("data/database.json",$database);
                $juser["userfild"]["step"]="setha";
                $juser = json_encode($juser,true);
                file_put_contents("data/user/$from_id.json",$juser);}}}}
//====
if($data == "forall" ){
    step($chatid,"forall");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📥 پیام را فوروارد کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[[['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],]])
    ]); }
elseif($user['step'] == "forall"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📳 در حال انجام، لطفا صبر کنید ...",
            'parse_mode'=>"MarkDown",
        ]);
        $ex = explode("\n",$all_users);
        foreach($ex as $key){
            bot('ForwardMessage',[
                'chat_id'=>$key,
                'from_chat_id'=>$chat_id,
                'message_id'=>$message_id
            ]);}
        $exs = explode("\n",$all_gaps);
        foreach($exs as $key){
            bot('ForwardMessage',[
                'chat_id'=>$key,
                'from_chat_id'=>$chat_id,
                'message_id'=>$message_id
            ]);}
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📑 پیام برای همه فوروارد شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ]
            ]) ]);  } }
if($data == "sendall" ){
    step($chatid,"sendall");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📥 پیام را ارسال کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ]) ]); }
elseif($user['step'] == "sendall"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📳 در حال انجام، لطفا صبر کنید ...",
            'parse_mode'=>"MarkDown",
        ]);
        $ex = explode("\n",$all_users);
        foreach($ex as $key){
            bot('sendMessage',[
                'chat_id'=>$key,
                'text'=>$text,
                'disable_web_page_preview'=>true,
            ]);}
        $exs = explode("\n",$all_gaps);
        foreach($exs as $key){
            bot('sendMessage',[
                'chat_id'=>$key,
                'text'=>$text,
                'disable_web_page_preview'=>true,
            ]);}
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📑 پیام برای همه ارسال شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ]
            ]) ]);  } }
if($data == "senduser" ){
    step($chatid,"senduser");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📥 پیام را ارسال کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ]) ]); }
elseif($user['step'] == "senduser"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📳 در حال انجام، لطفا صبر کنید ...",
            'parse_mode'=>"MarkDown",
        ]);
        $ex = explode("\n",$all_users);
        foreach($ex as $key){
            bot('sendMessage',[
                'chat_id'=>$key,
                'text'=>$text,
                'disable_web_page_preview'=>true,
            ]);}
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📑 پیام به همه کاربران ارسال شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ]  ]) ]);  } }
if($data == "sendgp" ){
    step($chatid,"sendgp");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📥 پیام را ارسال کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ])
    ]); }
elseif($user['step'] == "sendgp"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📳 در حال انجام، لطفا صبر کنید ...",
            'parse_mode'=>"MarkDown",
        ]);
        $ex = explode("\n",$all_gaps);
        foreach($ex as $key){
            bot('sendMessage',[
                'chat_id'=>$key,
                'text'=>$text,
                'disable_web_page_preview'=>true,
            ]);}
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📑 پیام به همه گروه ها ارسال شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ] ]) ]);  } }
if($data == "foruser" ){
    step($chatid,"foruser");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📥 پیام را فوروارد کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ] ]) ]); }
elseif($user['step'] == "foruser"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📳 در حال انجام، لطفا صبر کنید ...",
            'parse_mode'=>"MarkDown", ]);
        $ex = explode("\n",$all_users);
        foreach($ex as $key){
            bot('ForwardMessage',[
                'chat_id'=>$key,
                'from_chat_id'=>$chat_id,
                'message_id'=>$message_id
            ]);}
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📑 پیام به همه کاربران فوروارد شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ] ]) ]);  } }
if($data == "forgp" ){
    step($chatid,"forgp");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"📥 پیام را فوروارد کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ]) ]); }
elseif($user['step'] == "forgp"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📳 در حال انجام، لطفا صبر کنید ...",
            'parse_mode'=>"MarkDown",
        ]);
        $ex = explode("\n",$all_gaps);
        foreach($ex as $key){
            bot('ForwardMessage',[
                'chat_id'=>$key,
                'from_chat_id'=>$chat_id,
                'message_id'=>$message_id
            ]);}
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"📑 پیام به همه گروه ها فوروارد شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ]
            ]) ]);  } }
if($data == "unblack" ){
    step($chatid,"unblack");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"🎓 شناسه کاربر را ارسال کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ]) ]); }
elseif($user['step'] == "unblack"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        $tt = time();
        file_put_contents("data/spam/$text.txt",$tt);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"🗑️ کاربر از بلاک لیست خارج شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ]
            ]) ]);
        bot('sendMessage',[
            'chat_id'=>$text,
            'text'=>"♥️ شما توسط میدیرت از لیست بلاک خارج شدید!",
            'parse_mode'=>"MarkDown",
        ]);  } }
if($data == "black" ){
    step($chatid,"black");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"🎓 شناسه کاربر را ارسال کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ]) ]); }
elseif($user['step'] == "black"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        $tt = time() + 9999999999999999999;
        file_put_contents("data/spam/$text.txt",$tt);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"🛡️ کاربر از ربات بلاک شد!",
            'parse_mode'=>"MarkDown",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                ]
            ]) ]);
        bot('sendMessage',[
            'chat_id'=>$text,
            'text'=>"💬 شما توسط مدیریت از ربات مسدود شدید!",
            'parse_mode'=>"MarkDown",
        ]);  } }
if($data == "delkalame" ){
    step($chatid,"delkalame");
    bot('editMessagetext',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        'text'=>"🎓 کلمه مورد نظر را ارسال کنید:",
        'parse_mode'=>"MarkDown",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
            ]
        ]) ]); }
elseif($user['step'] == "delkalame"  && $tc == "private"){
    if($tc == "private" && in_array($chat_id,$admins)){
        if(file_exists("data/kalamat/$text.txt")){
            unlink("data/kalamat/$text.txt");
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"🗑️ کلمه ارسالی از لیست ربات حذف شد!",
                'parse_mode'=>"MarkDown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[ [['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']],
                    ]
                ])
            ]);
        }else{
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"🎓 این کلمه از قبل در ربات ثبت نشده!",
                'parse_mode'=>"MarkDown",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[[['text'=>"🏛 منوی اصلی️",'callback_data'=>'back_p']], ]  ]) ]);  }
    }}

?>
