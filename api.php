<?php
ob_start();

define('API_KEY','codertm1');
//-----------------------------------------------------------------------------------------
//فانکشن MrPHPBot :
function MrPHPBot($method,$datas=[]){
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

//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data_id = $update->callback_query->id;
$fm = $update->callback_query->from->id;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners = file_get_contents("data/$chat_id/owner.txt");
$owners2 = file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = codertm2;
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$muteall2 = file_get_contents("data/$chatid/muteall2.txt");
$muteall22 = file_get_contents("data/$chat_id/muteall2.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2= file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2= file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2= file_get_contents("data/$chatid/lockfosh.txt");
$lockbots= file_get_contents("data/$chat_id/lockbots.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$text = $update->inline_qurey->qurey;
$token = 'codertm1';
$stat = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id));
$status = $stat->result->status;
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$namegp = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$chatid"));
$namegp2 = $namegp->result->title;
$namegp1551 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$chat_id"));
$namegp15511 = $namegp1551->result->title;
$you = $info['result']['status'];
$bot_type_ads = file_get_contents("botads.txt");
$datetime = json_decode(file_get_contents("https://api.feelthecode.xyz/date/?timezone=Asia/tehran"));
$time = $datetime->time;
$date = $datetime->date;
//-----------------------------------------------------------------------------------------
//فانکشن ها :
function SendMessage($chat_id, $text){
MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
MrPHPBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
MrPHPBot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
//-----------------------------------------------------------------------------------------
if($textmassage=="/start" && $tc == "private"){
    if($bot_type_ads != "gold"){
  sendAction($chat_id, 'typing');
	MrPHPBot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>"@CoderTM_Robot",
	'message_id'=>13
	]);
	}
}
	if($textmassage=="/start" && $tc == "private"){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"😃سلام دوست گرامی ..👋
‼جهت دریافت ربات ضد اسپم ابتدا در کانال @CoderTeam عضو شده و بعد با پشتیبانی در تماس باشید✨.‼️",
  'parse_mode'=>'MarkDown',
	]);
	}
if($text=="/add" | $textmassage=="اضافه" && $tc == "supergroup" | $tc == "group"){
    if($bot_type_ads != "gold"){
  sendAction($chat_id, 'typing');
MrPHPBot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>"@CoderTM_Robot",
	'message_id'=>13
	]);
	}	
}
	if($textmassage=="/creator" | $textmassage=="سازنده" && $tc == "private"){
  sendAction($chat_id, 'typing');
	MrPHPBot('ForwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>"@CoderTM_Robot",
	'message_id'=>13
	]);
	}	

 //groupmanager
 elseif($data=="settings" && $fm == $owners2 | $fm == $Dev){
         MrPHPBot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="back" && $fm == $owners2 | $fm == $Dev){
      if($bot_type_ads != "gold"){
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"شما به منوی اصلی برگشتید",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⛓تنظیمات⚙️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"❕اطلاعات گروه👥",'callback_data'=>'groupe'],['text'=>"❔راهنمای مدیریتی📖",'callback_data'=>'help']
   ],
   [
['text'=>"🌟عضویت در کانال✨",'url'=>"https://telegram.me/CoderTeam"]
  ],
    ]
    ])
    ]);
    }else{
       MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"شما به منوی اصلی برگشتید",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⛓تنظیمات⚙️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"❕اطلاعات گروه👥",'callback_data'=>'groupe'],['text'=>"❔راهنمای مدیریتی📖",'callback_data'=>'help']
   ],
    ]
    ])
    ]); 
    }
  }
  elseif($textmassage=="/panel" | $textmassage=="/setting" | $textmassage=="/help" | $textmassage=="تنظیمات" && $from_id == $owners | $from_id == $Dev){
      if($bot_type_ads != "gold"){
  if ($tc == 'group' | $tc == 'supergroup'){
    sendAction($chat_id, 'typing');
  	MrPHPBot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"به تنظیمات ربات خوش آمدید
  	لطفا یکی از گذینه های زیر را انتخاب کنید",
    'parse_mode'=>'MarkDown',
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"⛓تنظیمات⚙️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"❕اطلاعات گروه👥",'callback_data'=>'groupe'],['text'=>"❔راهنمای مدیریتی📖",'callback_data'=>'help']
   ],
   [
['text'=>"🌟عضویت در کانال✨",'url'=>"https://telegram.me/CoderTeam"]
  ],
  	]
  	])
  	]);
  }
  	}else{
  	    if ($tc == 'group' | $tc == 'supergroup'){
    sendAction($chat_id, 'typing');
  	MrPHPBot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"به تنظیمات ربات خوش آمدید
  	لطفا یکی از گذینه های زیر را انتخاب کنید",
    'parse_mode'=>'MarkDown',
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"⛓تنظیمات⚙️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"❕اطلاعات گروه👥",'callback_data'=>'groupe'],['text'=>"❔راهنمای مدیریتی📖",'callback_data'=>'help']
   ],
  	]
  	])
  	]);
  	}
      }
      }
    elseif($data=="groupe" && $fm == $owners2 | $fm == $Dev){
            MrPHPBot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🔰 اطلاعات گروه:\n\n🔘نام گروه : $gpname\n 🆔شناسه گروه : $chatid\n 📊تعداد پیام ها : $messageid\n 😎صاحب گروه : $owners2\n",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔙برگشت🔙",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
    elseif($data=="help" && $fm == $owners2 | $fm == $Dev){
            MrPHPBot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"_✨لیست راهنما:✨_
             ➖➖➖➖➖➖
             *🔒[/]lock link*
             *🔒[/]lock username*
             *🔒[/]lock sticker*
             *🔒[/]lock contact*
             *🔒[/]lock forward*
             *🔒[/]lock photo*
             *🔒[/]lock audio*
             *🔒[/]lock voice*
             *🔒[/]lock edit*
             *🔒[/]lock game*
             *🔒[/]lock location*
             *🔒[/]lock fosh*
             *🔒[/]lock join*
             *🔒[/]lock operator*
             *🔒[/]lock bots*
             *🔒[/]flood manage*  
             *➖➖➖➖➖➖*
             _⚜️امکانات ربات_
              *💣[/]rmsg {number}*
              *✔️[/]welcome enable*
              *❌[/]welcome enable*
              *🔘[/]set welcome*
              *🅰️ [/]setname {Name}*
              *✏️ [/]setdescription {Text}*
              *🖼[/]setphoto*
              *🗑[/]delphoto*
              *🖱[/]link*
              *🔎[/]me*
              *✅[/]promote{reply}*
              *❎[/]demote*
              *👑[/]setowner{TelegramId}*
              *📋[/]panel*
              *✅[/]promote{reply}*
              *❎[/]demote*
              *👑[/]setowner{TelegramId}*لای)
              *⭕️[/]leave*
              *☠️[/]kick*
              *🔥[/]del*
             *➖➖➖➖➖➖*
             *✨Creat by 🌟Coder™*
             *📢Channel:* @CoderTeam",
            'parse_mode'=>'MarkDown',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"برگشت",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
  elseif($data=="lockphoto" && $lockphoto2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockphoto.txt","✖️");
   MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل تصویر با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockphoto" && $lockphoto2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockphoto.txt","✔️");
    MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل تصویر با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockvideo" && $lockvideo2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockvideo.txt","✖️");
         MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل فیلم با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockvideo" && $lockvideo2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockvideo.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل فیلم با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockgame" && $lockgame2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockgame.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل بازی در گروه با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockgame" && $lockgame2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockgame.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل بازی در گروه با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="locksticker" && $locksticker2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/locksticker.txt","✖️");
         MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل استیکر با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="locksticker" && $locksticker2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/locksticker.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل استیکر با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockvoice" && $lockvoice2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockaudio.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل صدا با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockvoice" && $lockvoice2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockvoice.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل صدا با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockaudio" && $lockaudio2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockaudio.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل موسیقی با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockaudio" && $lockaudio2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockaudio.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل موسیقی با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockforward" && $lockforward2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockforward.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل فوروارد با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockforward" && $lockforward2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockforward.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل فوروارد با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockcontact" && $lockcontact2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockcontact.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل اشتراک گذاری شماره با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockcontact.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل اشتراک گذاری شماره با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="locklucton" && $locklocation2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/locklocation.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل اشتراک گذاری مکان با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockluction" && $locklocation2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/locklocation.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل اشتراک گذاری مکان با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockfosh" && $lockfosh2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockfosh.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل فحش با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockfosh" && $lockfosh2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockfosh.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل فحش با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockbots']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockoperator" && $lockoperator2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockoperator.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل تبلیغات اوپراتور ها با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockbots']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockoperator" && $lockoperator2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockoperator.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل تبلیغات اوپراتور ها با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockedit" && $lockedit2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockedit.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل ویرایش پیام با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
    elseif($data=="muteall2" && $muteall2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/muteall2.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل سکوت همگانی در گروه با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="muteall2" && $muteall2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/muteall2.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل سکوت همگانی در گروه با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
    elseif($rt && $textmassage=="/unkick" && $from_id == "$owners" | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
	MrPHPBot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"از اخراج خارج شد:|♥",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif( $textmassage == "/leave" | $textmassage== "خروج" && $from_id == $Dev){
	sendmessage($chat_id,"با اجازه مدیر رفتم بای😂🥀");
	MrPHPBot('leaveChat',[
	'chat_id'=>$chat_id,
	]);
}
elseif($rt && $textmassage == "/del" | $textmassage== "حذف"  && $from_id == "$owners" | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$update->message->reply_to_message->message_id
    ]);
	}
}
  elseif($data=="lockedit" && $lockedit2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockedit.txt","✔️");
  MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل ویرایش پیام با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
      'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockusername" && $lockusername2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockusername.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل یوزرنیم با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockusername" && $lockusername2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockusername.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل یوزرنیم با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="locklink" && $locklink2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/locklink.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل لینک با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="locklink" && $locklink2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/locklink.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل لینک  با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockbots2" && $lockbots2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockbots.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل ورود ربات ها با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="lockbots2" && $lockbots2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockbots.txt","✔️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل  ورود ربات ها با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockbots']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"برگشت",'callback_data'=>'back']
],
	]
	])
	]);
	}
elseif (strpos($textmassage, "/setowner") !== false && $from_id == $owners | $from_id == $Dev) {
$owner = str_replace("/setowner ","",$textmassage);
save("data/$from_id/file.txt","none");
MrPHPBot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"این فرد  _".$owner."_ مدیر گروه شد.😃 ",
		'parse_mode'=>'MarkDown'
    		]);
save("data/$chat_id/owner.txt","$owner");
}
elseif ( strpos($textmassage , '/setrank') !== false && $rt && $from_id == $owners | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
$rank = str_replace("/setrank","",$textmassage);
Save("data/$rtid/rank.txt","$rank");
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقام کاربر ثبت شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/delrank') !== false && $rt && $from_id == $owners | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
Save("data/$rtid/rank.txt","");
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقام کاربر پاک شد",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping" | $textmassage== "آنلاینی" && $from_id == $Dev | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"آنلاینم بابایی😊",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"آنلاینم مدیرجون😃",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"آنلاینم داداچ😉",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/who') !== false && $rt) {
    $ran = file_get_contents("data/$rtid/rank.txt");
if ($tc == 'group' | $tc == 'supergroup'){
    if ($ran != ""){
  sendAction($chat_id, 'typing');
 MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقام:
     $ran",
  'parse_mode'=>'MarkDown',
 ]);
 }else{
     sendmessage($chat_id,"شما هیچ مقامی در ربات ندارید!!");
 }
}
}
elseif(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock link" | $textmassage=="قفل لینک" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✔️");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 لینک تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت لینک فعال شد🚫
⚠️گروه در حال قفل لینک میباشد و تمامی لینک ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا لینک نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock link" | $textmassage=="بازکردن لینک" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✖️");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 لینک از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن لینک خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->photo){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockphoto == "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock photo" | $textmassage=="قفل عکس" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✔️");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 عکس تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال عکس فعال شد🚫
⚠️گروه در حال قفل عکس میباشد و تمامی عکس ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا عکس نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock photo" | $textmassage=="بازکردن عکس" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✖️");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 عکس از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن عکس خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif ($textmassage == "/automatic manage" | $textmassage=="تنظیمات اتوماتیک" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✔️");
save("data/$chat_id/locklink.txt","✔️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✔️");
save("data/$chat_id/lockoperator.txt","✔️");
save("data/$chat_id/lockforward.txt","✔️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✔️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✔️");
save("data/$chat_id/lockflood.txt","✔️");
save("data/$chat_id/numflood.txt","3");
save("data/$chat_id/welcome.txt","Welcome NewMember To Group");
SendMessage($chat_id,"تنظیمات گروه به حالت اتوماتیک تبدیل شد✅
‼️برای تغییر از قسمت تنظیمات اقدام کنید⚠️");
}
}
elseif ($textmassage == "/add" | $textmassage=="اضافه" && $from_id == $owners | $from_id == $Dev){
   if($tc == 'group' | $tc == 'supergroup'){
     $txxt = file_get_contents('data/gps.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('data/gps.txt');
      $aaddd .= $chat_id."\n";
		file_put_contents('data/gps.txt',$aaddd);
    }
    if($locklink == null){
save("data/$chat_id/owner.txt","$from_id");
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✖️");
save("data/$chat_id/locklink.txt","✖️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✖️");
save("data/$chat_id/lockoperator.txt","✖️");
save("data/$chat_id/lockforward.txt","✖️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✖️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/muteall2.txt","✖️");
save("data/$chat_id/numflood.txt","0");
save("data/$chat_id/welcome.txt","Welcome NewMember To Group");
SendMessage($chat_id,"ربات با موفقیت به این گروه با مشخصات زیر در ساعت $time و تاریخ $date به لیست گروه ها اضافه شد✅
〰〰〰〰〰〰〰〰〰〰〰
🔖 نام گروه : $namegp15511 
🆔 ایدی گروه : $chat_id
😎 ایدی عددی ادمین : $from_id");
}else{
    SendMessage($chat_id,"این گروه از قبل در لیست گروه های ربات بوده است!!");
}
}
}
elseif($rt && $textmassage=="/promote" | $textmassage=="پروموت" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
    $txxt = file_get_contents("data/$chat_id/owner.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($rtid,$pmembersid)){
      $aaddd = file_get_contents("data/$chat_id/owner.txt");
      $aaddd .= $rtid."\n";
		file_put_contents("data/$chat_id/owner.txt",$aaddd);
    }
sendAction($chat_id, 'typing');
 MrPHPBot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
	'can_edit_messages'=>true,
	'can_delete_messages'=>true,
	'can_invite_users'=>true,
	'can_restrict_members'=>true,
	'can_pin_messages'=>true,
	'can_promote_members'=>true
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"شخص مورد نظر با ایدی $rtid پروموت شد✅",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/demote" | $textmassage=="دیموت" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>false,
    'can_post_messages'=>false,
	'can_edit_messages'=>false,
	'can_delete_messages'=>false,
	'can_invite_users'=>false,
	'can_restrict_members'=>false,
	'can_pin_messages'=>false,
	'can_promote_members'=>false
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"شخص مورد نظر با ایدی $rtid دیموت شد❌",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
if($update->message->document){
if($tc == 'group' | $tc == 'supergroup'){
if($lockgif == "✔️"){
if($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock gif" | $textmassage=="قفل گیف" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 گیف تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال گیف فعال شد🚫
⚠️گروه در حال قفل گیف میباشد و تمامی گیف ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا گیف نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock gif" | $textmassage=="بازکردن گیف" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 گیف از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن گیف خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->video){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if($update->message->voice || $update->message->forward_from || $update->message->decument || $update->message->audio || $update->message->contact || $update->message->video || $update->message->photo || $update->message->text || $update->message->sticker || $update->message->gif || $update->message->text || $update->message->game || $update->message->location){
if ($muteall22 == "✔️"){
if ($status != "creator" && $status != "administrator" && $from_id != $Dev){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
elseif($textmassage=="/lock video" | $textmassage=="قفل فیلم" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 فیلم تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال فیلم فعال شد🚫
⚠️گروه در حال قفل فیلم میباشد و تمامی فیلم ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا فیلم نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock video" | $textmassage=="بازکردن فیلم" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 فیلم از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن فیلم خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}

if($textmassage=="/muteall" | $textmassage=="سکوت" | $textmassage=="قفل همه" | $textmassage=="قفل گروه" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✔️");
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"🔏 گروه تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال پیام ها فعال شد🚫
⚠️گروه در حال #سکوت میباشد و تمامی پیامها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا پیام نفرستید.",
  'parse_mode'=>'MarkDown',
  ]);
  }
}
if($textmassage=="/unmute all" | $textmassage=="لغو سکوت" | $textmassage=="بازکردن همه" | $textmassage=="بازکردن گروه" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
    if($muteall22 != "✖️"){
  save("data/$chat_id/muteall2.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 گروه از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فعالیت خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}else{
	 sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"گروه بسته نمیباشد",
  'parse_mode'=>'MarkDown',
	]);   
	}
}
}

if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$edit)){
  preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($lockedit3== "✔️"){
if ($you != "creator" && $you != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
	}
}
}
elseif($textmassage=="/lock edit" | $textmassage=="قفل ویرایش" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 ویرایش تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ویرایش فعال شد🚫
⚠️گروه در حال قفل ویرایش میباشد و تمامی ویرایش ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا ویرایش نکنید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock edit" | $textmassage=="بازکردن ویرایش" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 ویرایش از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به ویرایش متن های خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgame== "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock game" | $textmassage=="قفل بازی" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✔️");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 انجام بازی تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت بازی فعال شد🚫
⚠️گروه در حال قفل بازی میباشد و تمامی بازی ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا بازی نکنید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock game" | $textmassage=="بازکردن بازی" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✖️");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 انجام بازی از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به بازی خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklocation== "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock location" | $textmassage=="قفل مکان" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری مکان فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock location" | $textmassage=="بازکردن مکان" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری مکان باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockcontact== "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock contact" | $textmassage=="قفل اشتراک گذاری" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 اشتراک گزاری شماره تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت شماره فعال شد🚫
⚠️گروه در حال قفل اشتراک گزاری میباشد و تمامی اشتراک ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا اشتراک گزاری نکنید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock contact" | $textmassage=="بازکردن اشتراک گذاری" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓اشتراک گزاری شماره از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به اشتراک گزاری خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock username" | $textmassage=="قفل یوزرنیم" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 ارسال یوزرنیم تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت یوزرنیم فعال شد🚫
⚠️گروه در حال قفل یوزرنیم میباشد و تمامی یوزرنیم ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا یوزرنیم ارسال نکنید",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock username" | $textmassage=="بازکردن یوزرنیم" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 ارسال یوزرنیم از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن یوزرنیم خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockaudio== "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock audio" | $textmassage=="قفل موسیقی" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏موسیقی تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال صدا فعال شد🚫
⚠️گروه در حال قفل موسیقی میباشد و تمامی موسیقی ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا موسیقی نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock audio" | $textmassage=="بازکردن موسیقی" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 موسیقی از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن موسیقی خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvoice == "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock voice" | $textmassage=="قفل صدا" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏صدا تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال صدا فعال شد🚫
⚠️گروه در حال قفل صدا میباشد و تمامی صدا ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا صدا نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock voice" | $textmassage=="بازکردن صدا" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 صدا از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن صدا خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locksticker== "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock sticker" | $textmassage=="قفل استیکر" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 استیکر تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ارسال استیکر ها فعال شد🚫
⚠️گروه در حال قفل استیکر میباشد و تمامی استیکر ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا استیکر نفرستید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock sticker" | $textmassage=="بازکردن استیکر" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 استیکر از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فرستادن استیکر خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->decument){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdecument== "✔️"){
if ($status != "creator" && $status != "administrator"){
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock decument" | $textmassage=="قفل فایل" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock decument" | $textmassage=="بازکردن فایل" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->forward_from){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockforward== "✔️"){
if ($status != "creator" && $status != "administrator"){
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="/lock forward" | $textmassage=="قفل فوروارد" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔏 فوروارد تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت فروارد فعال شد🚫
⚠️گروه در حال قفل فروارد میباشد و تمامی فروارد ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا فروارد نکنید",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock forward" | $textmassage=="بازکردن فوروارد" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔓 فوروارد از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به فروارد خود ادامه دهند.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Operator
if(preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage)){
preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

elseif($textmassage=="/lock operator" | $textmassage=="قفل اوپراتور" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock operator" | $textmassage=="بازکردن اوپراتور" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Fosh
elseif(preg_match("'^(کس)(.*)'",$textmassage)){
preg_match("'^(کس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کس ننت)(.*)'",$textmassage)){
preg_match("'^(کس ننت)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(بی ناموس)(.*)'",$textmassage)){
preg_match("'^(بی ناموس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(دیوث)(.*)'",$textmassage)){
preg_match("'^(دیوث)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کیر)(.*)'",$textmassage)){
preg_match("'^(کیر)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock fosh" | $textmassage=="قفل فحش" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock fosh" | $textmassage=="بازکردن فحش" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_title){
if ($tc == 'group' | $tc == 'supergroup'){
$newname = $update->message->new_chat_title;
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"نام گروه تغییر یافت به : $newname",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if ($welcome == "✔️"){
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$textwelcome",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
 elseif($textmassage=="/fsfaefawewefsfwefwtw4twe" | $textmassage=="شنیتشمصیشمصنتیشما" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لیست راهنما :\n>راهنمای بخش دریافت تنظیمات و مدیریت کاربران
*[/]manage* ➖ (دریافت تنظیات ربات به صورت اینلاین)
*[/]kick |reply|* ➖ (اخراج کاربر با ریپلی)
*➖➖➖➖➖➖*
>راهنمای دستورات مدیریتی
*[/]lock|unlock link* ➖ (فعال سازی/غیرفعال سازی قفل ارسال لینک)
*[/]lock|unlock username* ➖ (فعال سازی/غیرفعال سازی قفل ارسال یوزرنیم)
*[/]lock|unlock sticker* ➖ (فعال سازی/غیرفعال سازی قفل ارسال استیکر)
*[/]lock|unlock contact* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری شماره)
*[/]lock|unlock forward* ➖ (فعال سازی/غیرفعال سازی قفل ارسال فوروارد)
*[/]lock|unlock photo* ➖ (فعال سازی/غیرفعال سازی قفل ارسال تصویر)</code>
*[/]lock|unlock audio* ➖ (فعال سازی/غیرفعال سازی قفل ارسال موسیقی(Audio))
*[/]lock|unlock voice* ➖ (فعال سازی/غیرفعال سازی قفل ارسال صدا(Voice))
*[/]lock|unlock edit* ➖ (فعال سازی/غیرفعال سازی قفل ویرایش پیام)
*[/]lock|unlock game* ➖ (فعال سازی/غیرفعال سازی قفل انجام بازی در گروه)
*[/]lock|unlock location* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری مکان)
*[/]lock|unlock fosh* ➖ (فعال سازی/غیرفعال سازی قفل فحاشی)
*[/]lock|unlock join* ➖ (فعال سازی/غیرفعال سازی قفل ورود به گروه)
*[/]lock|unlock operator* ➖ (فعال سازی/غیرفعال سازی قفل تبلیغات اوپراتورها)
*[/]lock|unlock video* ➖ (فعال سازی/غیرفعال سازی قفل ارسال ویدیو)
*[/]lock|unlock bots* ➖ (فعال سازی/غیرفعال سازی قفل ورود ربات ها)
*➖➖➖➖➖➖*
>راهنمای فلود
*[/]flood manage* ➖ (دریافت تنظیمات فلود به صورت اینلاین)
*[/]lock|unlock flood* ➖ (فعال سازی/غیرفعال سازی قفل فلود)
*[/]setflood [Number]* ➖ (تنظیم میزان فلود)
*➖➖➖➖➖➖*
>راهنمای حذف پیام
*[/]rmsg [Number]* ➖ (حذف پیام به تعداد معین (بین 0 و100))
*➖➖➖➖➖➖*
>راهنمای بخش خوش امدگویی
*[/]welcome enable|disable * ➖ (فعال سازی/غیرفعال سازی عملیات خوش امدگویی)
*[/]set welcome* ➖ (تنظیم پیغام خوش امدگویی)
*➖➖➖➖➖➖*
>راهنمای دستورات جدید
*➖➖➖➖➖➖*
*[/]setname [Name]* ➖ (تنظیم نام گروه)
*[/]setdescription [Text]* ➖ (تنظیم توضیحات گروه)
*[/]setphoto* ➖ (تنظیم تصویر گروه)
*[/]delphoto* ➖ (حذف تصویر گروه)
*[/]pin [reply]* ➖ (پین کردن یک پیام با ریپلای)
*[/]unpin [reply]* ➖ (برداشتن پین با ریپلای)
*[/]link* ➖ (دریافت لینک گروه)
*[/]setowner [TelegramID]* ➖ (تغییر صاحب گروه با شناسه کاربری)
*[/]automatic [manage]* ➖ (مدیریت گروه به صورت خودکار توسط ربات)",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
elseif($rt && $textmassage=="/pin" && $from_id == "$owners" | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="پین" && $from_id == "$owners" | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
  elseif($rt && $textmassage=="/kick" | $textmassage=="کیک" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سیک شد :|",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/info" | $textmassage=="درباره گروه" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شناسه کاربری گروه : *$chat_id*\nنام گروه : *$namegroup*\nتعداد پیام ها : *$tedadmsg*\nنوع گروه : *$tc*",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="آمار ربات" && $from_id = $Dev){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
save("data/$from_id/file.txt","/sendtoall");
         MrPHPBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     MrPHPBot('sendmessage',[
          'chat_id'=>$memuser,        'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
    MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
             'text'=>"پیام شما به همه کاربران و گروه ها ارسال شد.
             به پنل مدیریت برگشتید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"آمار ربات",'callback_data'=>'amarbot'],['text'=>"ارسال به همه",'callback_data'=>'send all']
                   ],
                    [
                   ['text'=>"فوروارد به همه",'callback_data'=>'fwd all'],['text'=>"تعداد گروه ها",'callback_data'=>"amargpbot"]
                   ],
                    ]
             ])
         ]);
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         MrPHPBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
    MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
             'text'=>"پیام شما به همه کاربران و گروه ها فرورارد شد
             به پنل مدیریت برگشتید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"آمار ربات",'callback_data'=>'amarbot'],['text'=>"ارسال به همه",'callback_data'=>'send all']
                   ],
                    [
                   ['text'=>"فوروارد به همه",'callback_data'=>'fwd all'],['text'=>"تعداد گروه ها",'callback_data'=>"amargpbot"]
                   ],
                    ]
             ])
         ]);
}
elseif (strpos($textmassage , "/setwelcome") !== false && $from_id == $owners| $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup' && $from_id == $owners | $from_id == $Dev){
$we = str_replace("/setwelcome","",$textmassage);
save("data/$chat_id/textwelcome.txt","$we");
SendMessage($chat_id,"#انجام شد");
}
}
elseif (strpos($textmassage , "/setflood") !== false && $from_id == $owners | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup' && $from_id == $owners | $from_id == $Dev){
$we = str_replace("/setflood","",$textmassage);
if ($we <= 20 && $we >= 1){
save("data/$chat_id/numflood.txt","$we");
SendMessage($chat_id,"#انجام شد");
}
else{
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار\nعدد باید بین 1 و  20 باشد.",
              ]);
}
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/flood check" && $from_id == $Dev) {
rmdir("data/spam");
mkdir("data/spam");
SendMessage($chat_id,"#انجام شد");
}
elseif ($textmassage == "/lock flood" | $textmassage=="قفل فلود" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/unlock flood" | $textmassage=="بازکردن فلود" && $from_id == $owners | $from_id == $Dev && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✖️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners | $from_id == $Dev) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/lock bots" | $textmassage=="قفل ربات ها" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✔️");
SendMessage($chat_id,"🔏 ورود ربات  تا اطلاع ثانوے بسته شد.

━━━━━━━━━━━━
🚫ممنوعیت ربات فعال شد🚫
⚠️گروه در حال قفل ربات میباشد و تمامی ربات ها توسط ربات هوشمند #پاک خواهد شد🗑
━━━━━━━━━━━━
❗️لطفا ربات دعوت نکنید");
}
}
elseif ($textmassage == "/unlock bots" | $textmassage=="بازکردن ربات ها" && $from_id == $owners | $from_id = $Dev && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✖️");
SendMessage($chat_id,"🔓 ورود ربات از وضعیت بسته خارج شد.
😎 اڪنون ڪاربران مےتوانند به دعوت ربات خود ادامه دهند.");
}
}
elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbots == "✔️" && $newchatmemberu != "SPDLBot") {
 MrPHPBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'ربات ها اجازه ورود ندارند.\n#اخراج شد',
  'parse_mode'=>'HTML'
 ]);
 MrPHPBot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
elseif ( strpos($textmassage , '/rmsg') !== false  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($from_id == $owners | $from_id = $Dev){
$num = str_replace("/rmsg","",$textmassage);
if ($num <= 50 && $num >= 1){
for($i=$message_id; $i>=$message_id-$num; $i--){
MrPHPBot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"تعداد $num پیام پاک شد",
              ]);
}else{
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار
عدد باید بین 1 و 50 باشد.",
              ]);
}
}
}
}
elseif ( strpos($textmassage , 'حذف') !== false  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($from_id == $owners | $from_id = $Dev){
$num = str_replace("حذف","",$textmassage);
if ($num <= 50 && $num >= 1){
for($i=$message_id; $i>=$message_id-$num; $i--){
MrPHPBot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"تعداد $num پیام پاک شد",
              ]);
}else{
MrPHPBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار
عدد باید بین 1 و 50 باشد.",
              ]);
}
}
}
}
elseif ( strpos($textmassage , '/setname') !== false  ) {
  $newname= str_replace("/setname","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup' && $from_id == $owners | $from_id == $Dev){
sendAction($chat_id, 'typing');
 MrPHPBot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , 'تنظیم نام') !== false  ) {
  $newname= str_replace("تنظیم نام","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup' && $from_id == $owners | $from_id == $Dev){
sendAction($chat_id, 'typing');
 MrPHPBot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/setdescription') !== false  ) {
  $newdec= str_replace("/setdescription","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup' && $from_id == $owners | $from_id == $Dev){
sendAction($chat_id, 'typing');
 MrPHPBot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/unpin" | $textmassage=="آنپین" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 MrPHPBot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/delphoto" | $textmassage=="حذف عکس" && $from_id == $owners | $from_id == $Dev){
  save("data/$from_id/file.txt","setphoto");
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
MrPHPBot('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/me" | $textmassage=="من" && $from_id == $owners){
$sti = "https://provps.ir/anti/Owner.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sti,
	]);
	}
}
elseif($textmassage=="/me" && $from_id == $Dev){
$sti = "https://provps.ir/anti/Dev.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sti,
	]);
	}
}
elseif($textmassage=="/me"){
$sti = "https://provps.ir/anti/Member.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sti,
	]);
	}
}
elseif($textmassage=="/link" | $textmassage=="لینک" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$configlink = $jsonlink['error_code'];
if($configlink != "400"){
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🌐  لینڪ  گروه $namegp15511 :
──┅─═ঊঈঊঈ═─┅──
[برای ورود به گروه کلیک کنید]($getlinkde)
━━━━━━━━━━━━━━",
    'parse_mode'=>'MarkDown',
     'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[
 [
 ['text'=>"اشتراک گذاری لینک گروه",'url'=>"https://telegram.me/share/url?url=@bold 🌐  لینڪ  گروه $namegp15511 :
──┅─═ঊঈঊঈ═─┅──
[برای ورود به گروه کلیک کنید]($getlinkde)
━━━━━━━━━━━━━━"]
 ],
  ]
  ])
  ]);
 }
 else{
     sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"با عرض پوزش من سطح دسترسی به لینک گروه را ندارم!
ابتدا سطح دسترسی مدیریت من را افزایش دهید",
    'parse_mode'=>'html',
     ]);
 }
}
}
elseif($textmassage=="/setphoto" | $textmassage=="تنظیم عکس" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
save("data/$from_id/file.txt","setphoto");
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس خود را بفرستید :",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($step=="setphoto"){
  save("data/$from_id/file.txt","none");
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
$photo = $update->message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = MrPHPBot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
MrPHPBot('setChatPhoto',[
   'chat_id'=>$chat_id,
   'photo'=>new CURLFile("data/$chat_id/photogp.png")
     ]);
MrPHPBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 unlink("data/$chat_id/photogp.png");
 }
}
elseif($textmassage=="/flood manage" | $textmassage=="تنظیمات فلود" && $from_id == $owners | $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"تنطیمات فلود بارگزاری شد.\nتوجه فلود فقط باید عددی بین 1 و 20 باشد.",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[
 [
 ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods",'callback_data'=>'lockflood']
 ],
  [
 ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
 ],
  ]
  ])
  ]);
  }}
  elseif($data=="f-"  && $fm == $owners2 | $fm == $Dev){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt","$floodnew");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات فلود گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="f+"  && $fm == $owners2 | $fm == $Dev){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt","$floodne");
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات فلود گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✖️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockflood.txt","✔️");
MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"✅قفل  ورود ربات ها با موفقیت فعال شد✅",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات فلود گروه : $namegp2
      ایدی گروه : $chatid",
      'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✔️" && $fm == $owners2 | $fm == $Dev){
    save("data/$chatid/lockflood.txt","✖️");
          MrPHPBot('answerCallbackQuery',[
        'callback_query_id'=>$data_id,
        'text'=>"❌قفل فلود با موفقیت غیر فعال شد❌",
		'show_alert'=>$show_alert
    ]);
          MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لیست تنظیمات فلود گروه : $namegp2
      ایدی گروه : $chatid",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'text')
{
MrPHPBot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"ربات حرفه ای مدیریت گروه.",
]);
}
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am","",$timing);
$metti_khan = file_get_contents("data/spam/$timing-$from_id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("data/spam/$timing-$from_id.txt","$timing_spam");
$metti_khan2 = file_get_contents("data/spam/$timing-$from_id.txt");
if($metti_khan2 >= $flood){
if($floods == "✔️"){
MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
    MrPHPBot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"این فرد $first_name به دلیل تکرار پیام مکرر در گروه اخراج شد.",
      'parse_mode'=>'MarkDown',
    	]);

}
}
if($textmassage== "/panel" && $tc == "private" && $from_id == $Dev){
  sendAction($chat_id, 'typing');
    MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
             'text'=>"به مدیریت خوش آمدید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"آمار ربات",'callback_data'=>'amarbot'],['text'=>"ارسال به همه",'callback_data'=>'send all']
                   ],
                    [
                   ['text'=>"فوروارد به همه",'callback_data'=>'fwd all'],['text'=>"تعداد گروه ها",'callback_data'=>"amargpbot"]
                   ],
                    ]
             ])
         ]);
}
elseif($data== 'amarbot' && $fm == $Dev){
    $txtt = file_get_contents('data/users.txt');
    $membersidd= explode("\n",$txtt);
    $mmemcount = count($membersidd) -1;
    MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"تعداد افراد عضو شده در ربات شما : $mmemcount",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"آمار ربات",'callback_data'=>'amarbot'],['text'=>"ارسال به همه",'callback_data'=>'send all']
                   ],
                    [
                   ['text'=>"فوروارد به همه",'callback_data'=>'fwd all'],['text'=>"تعداد گروه ها",'callback_data'=>"amargpbot"]
                   ],
                    ]
             ])
         ]);
}
elseif($data== 'amargpbot' && $fm == $Dev){
    $txtt = file_get_contents('data/gps.txt');
    $membersidd= explode("\n",$txtt);
    $mmemcount = count($membersidd) -1;
    MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"تعداد گروه های ربات شما : $mmemcount",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"آمار ربات",'callback_data'=>'amarbot'],['text'=>"ارسال به همه",'callback_data'=>'send all']
                   ],
                    [
                   ['text'=>"فوروارد به همه",'callback_data'=>'fwd all'],['text'=>"تعداد گروه ها",'callback_data'=>"amargpbot"]
                   ],
                    ]
             ])
         ]);
}
elseif($data== 'send all' && $fm == $Dev){
save("data/$fm/file.txt","sendtoall");
MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لطفا پیام خود را ارسال کنید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"برگشت",'callback_data'=>'back panel']
                   ],
                    ]
             ])
         ]);
}
elseif($data== 'fwd all' && $fm == $Dev){
save("data/$fm/file.txt","fortoall");
MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"لطفا پیام خود را فوروارد کنید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"برگشت",'callback_data'=>'back panel']
                   ],
                    ]
             ])
         ]);
}
elseif($data== 'back panel' && $fm == $Dev){
    MrPHPBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"به مدیریت خوش آمدید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"آمار ربات",'callback_data'=>'amarbot'],['text'=>"ارسال به همه",'callback_data'=>'send all']
                   ],
                    [
                   ['text'=>"فوروارد به همه",'callback_data'=>'fwd all'],['text'=>"تعداد گروه ها",'callback_data'=>"amargpbot"]
                   ],
                    ]
             ])
         ]);
}
?>