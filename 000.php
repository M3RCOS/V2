<?php
ob_start();
$userbotss= @$userbot;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;



$update = json_decode(file_get_contents('php://input'));
$forwardM=json_decode(file_get_contents("forwardM.json"),1);
$Js=json_decode(file_get_contents("Js.json"),1);
$Ds=json_decode(file_get_contents("Ds.json"),1);
$Vs=json_decode(file_get_contents("Users/Vs.json"),1);


function SendChatAction($chat_id, $action)
{
	bot('sendChatAction', [
		'chat_id' => $chat_id,
		'action' => $action
	]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendMessage', [
		'chat_id' => $chat_id,
		'text' => $text,
		'parse_mode' => $parse_mode,
		'disable_web_page_preview' => $disable_web_page_preview,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function ForwardMessage($chat_id, $from_chat_id, $message_id)
{
	return bot('forwardMessage', [
		'chat_id' => $chat_id,
		'from_chat_id' => $from_chat_id,
		'disable_notification' => false,
		'message_id' => $message_id
	]);
}
function SendPhoto($chat_id, $photo, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendPhoto', [
		'chat_id' => $chat_id,
		'photo' => $photo,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendAudio($chat_id, $audio, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $performer = null, $title = null, $thumb = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendAudio', [
		'chat_id' => $chat_id,
		'audio' => $audio,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'duration' => $duration,
		'performer' => $performer,
		'title' => $title,
		'thumb' => $thumb,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendDocument($chat_id, $document, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendDocument', [
		'chat_id' => $chat_id,
		'document' => $document,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVideo($chat_id, $video, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null, $supports_streaming = null)
{
	return bot('sendVideo', [
		'chat_id' => $chat_id,
		'video' => $video,
		'duration' => $duration,
		'width' => $width,
		'height' => $height,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'supports_streaming' => $supports_streaming,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendAnimation($chat_id, $animation, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendAnimation', [
		'chat_id' => $chat_id,
		'animation' => $animation,
		'duration' => $duration,
		'width' => $width,
		'height' => $height,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVoice($chat_id, $voice, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendVoice', [
		'chat_id' => $chat_id,
		'voice' => $voice,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'duration' => $duration,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVideoNote($chat_id, $video_note, $duration = null, $length = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendVideoNote', [
		'chat_id' => $chat_id,
		'video_note' => $video_note,
		'duration' => $duration,
		'length' => $length,
		'thumb' => $thumb,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendMediaGroup($chat_id, $media, $reply_to_message_id = null)
{
	return bot('sendMediaGroup', [
		'chat_id' => $chat_id,
		'media' => $media,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id
	]);
}
function SendLocation($chat_id, $latitude, $longitude, $live_period = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendLocation', [
		'chat_id' => $chat_id,
		'latitude' => $latitude,
		'longitude' => $longitude,
		'live_period' => $live_period,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendContact($chat_id, $phone_number, $first_name, $last_name = null, $reply_to_message_id = null, $reply_markup = null, $vcard = null)
{
	return bot('sendContact', [
		'chat_id' => $chat_id,
		'phone_number' => $phone_number,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'vcard' => $vcard,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendPoll($chat_id, $question, $options, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendPoll', [
		'chat_id' => $chat_id,
		'question' => $question,
		'options' => $options,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function GetUserProfilePhotos($user_id, $offset = null, $limit = null)
{
	return bot('getUserProfilePhotos', [
		'user_id' => $user_id,
		'offset' => $offset,
		'limit' => $limit
	]);
}
function GetFile($file_id)
{
	return bot('getFile', [
		'file_id' => $file_id
	]);
}
function File_path($file_path)
{
	$info = file_get_contents("https://api.telegram.org/file/bot" . TOKEN . "/" . $file_path);
	return $info;
}
function KickChatMember($chat_id, $user_id, $until_date = null)
{
	return bot('kickChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'until_date' => $until_date
	]);
}
function UnKickChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
	]);
}
function PromoteChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
		'can_delete_messages' => true,
		'can_invite_users' => true,
		'can_restrict_members' => true,
		'can_pin_messages' => true,
	]);
}
function RestrictChatMember($chat_id, $user_id)
{
	return bot('restrictChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => false,
		'can_send_media_messages' => false,
		'can_invite_users' => false,
		'can_send_other_messages' => false,
	]);
}
function UnRestrictChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
		'can_send_media_messages' => true,
		'can_send_other_messages' => true,
	]);
}
function DemoteChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_change_info' => false,
		'can_post_messages' => false,
		'can_edit_messages' => false,
		'can_delete_messages' => false,
		'can_invite_users' => false,
		'can_restrict_members' => false,
		'can_pin_messages' => false,
		'can_promote_members' => false
	]);
}
function ExportChatInviteLink($chat_id)
{
	return bot('exportChatInviteLink', [
		'chat_id' => $chat_id
	]);
}
function SetChatPhoto($chat_id, $photo)
{
	return bot('setChatPhoto', [
		'chat_id' => $chat_id,
		'photo' => $photo
	]);
}
function DeleteChatPhoto($chat_id)
{
	return bot('deleteChatPhoto', [
		'chat_id' => $chat_id
	]);
}
function SetChatTitle($chat_id, $title)
{
	return bot('setChatTitle', [
		'chat_id' => $chat_id,
		'title' => $title
	]);
}
function SetChatDescription($chat_id, $description)
{
	return bot('setChatDescription', [
		'chat_id' => $chat_id,
		'description' => $description
	]);
}
function PinChatMessage($chat_id, $message_id)
{
	return bot('pinChatMessage', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'disable_notification' => false
	]);
}
function UnpinChatMessage($chat_id)
{
	return bot('unpinChatMessage', [
		'chat_id' => $chat_id,
	]);
}
function LeaveChat($chat_id)
{
	return bot('LeaveChat', [
		'chat_id' => $chat_id
	]);
}
function GetChat($chat_id)
{
	return bot('getChat', [
		'chat_id' => $chat_id
	]);
}
function GetChatAdministrators($chat_id)
{
	return bot('getChatAdministrators', [
		'chat_id' => $chat_id
	]);
}
function GetChatMembersCount($chat_id)
{
	return bot('getChatMembersCount', [
		'chat_id' => $chat_id
	]);
}
function GetChatMember($chat_id, $user_id)
{
	return bot('getChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id
	]);
}
function AnswerCallbackQuery($callback_query_id, $text, $show_alert = false, $url = null, $cache_time = 0)
{
	return bot('answerCallbackQuery', [
		'callback_query_id' => $callback_query_id,
		'text' => $text,
		'show_alert' => $show_alert,
		'url' => $url,
		'cache_time' => $cache_time
	]);
}
function EditMessageText($chat_id, $message_id, $text, $inline_message_id = null, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_markup = null)
{
	return bot('editMessageText', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'text' => $text,
		'parse_mode' => $parse_mode,
		'disable_web_page_preview' => $disable_web_page_preview,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageCaption($chat_id, $message_id, $caption, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
	return bot('editMessageCaption', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageMedia($chat_id, $message_id, $media, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
	return bot('editMessageMedia', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'media' => $media,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageReplyMarkup($chat_id, $message_id, $reply_markup, $inline_message_id = null)
{
	return bot('editMessageReplyMarkup', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'reply_markup' => $reply_markup
	]);
}
function StopPoll($chat_id, $message_id, $reply_markup = null)
{
	return bot('stopPoll', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'reply_markup' => $reply_markup
	]);
}
function DeleteMessage($chat_id, $message_id)
{
	return bot('deletemessage', [
		'chat_id' => $chat_id,
		'message_id' => $message_id
	]);
}
function SendSticker($chat_id, $sticker, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendSticker', [
		'chat_id' => $chat_id,
		'sticker' => $sticker,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function AnswerInlineQuery($inline_query_id, $results, $cache_time = 0, $is_personal = false, $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null)
{
	return bot('answerInlineQuery', [
		'inline_query_id' => $inline_query_id,
		'results' => $results,
		'cache_time' => $cache_time,
		'is_personal' => $is_personal,
		'next_offset' => $next_offset,
		'switch_pm_text' => $switch_pm_text,
		'switch_pm_parameter' => $switch_pm_parameter
	]);
}
function SendGame($chat_id, $game_short_name, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendGame', [
		'chat_id' => $chat_id,
		'game_short_name' => $game_short_name,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function InlineKeyBoard($inlinetext = [], $type, $contents = [], $standar = "column", $count = 1)
{
	for ($i = 0; $i < $count; $i++) {

		$text     = $inlinetext[$i];
		$content = $contents[$i];

		if ($standar == "column") {
			$keyboard['inline_keyboard'][] = [['text' => $text, $type => $content]];
		}
		if ($standar == "row") {
			$keyboard['inline_keyboard'][] = [['text' => $inlinetext[$i], $type => $contents[$i]], ['text' => $inlinetext[++$i], $type => $contents[$i]]];
		}
	}
	$inline = json_encode($keyboard);
	return $inline;
}
function KeyBoard($keytext = [], $standar = "column", $count = 1)
{
	for ($i = 0; $i < $count; $i++) {

		$text = $keytext[$i];

		if ($standar == "column") {
			$keyboard['keyboard'][] = [['text' => $text]];
		}
		if ($standar == "row") {
			$keyboard['keyboard'][] = [['text' => $keytext[$i]], ['text' => $keytext[++$i]]];
		}
	}
	$resize_keyboard = json_encode($keyboard);
	return $resize_keyboard;
}
function myZip($myZip1, $myZip2)
{
	$myZip4 = realpath($myZip1);
	$myZip = new ZipArchive();
	$myZip->open($myZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
	$myZip3 = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($myZip4),
		RecursiveIteratorIterator::LEAVES_ONLY
	);
	foreach ($myZip3 as $myZip5 => $myZip6) {
		if (!$myZip6->isDir()) {
			$myZip7 = $myZip6->getRealPath();
			$myZip8 = substr($myZip7, strlen($myZip4) + 1);
			$myZip->addFile($myZip7, $myZip8);
		}
	}
	}
/////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$inline_query = $update->inline_query;
$callback_query = $update->callback_query;
$text = $message->text;
$data = $callback_query->data;
$chat_id = $message->chat->id;
$chat_id2 = $callback_query->message->chat->id;
$from_id = $message->from->id;
$from_id2 = $callback_query->message->from->id;
$name = $message->from->first_name;
$name2 = $callback_query->from->first_name;

if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"

",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"🔍 بحث ",'switch_inline_query_current_chat'=>" "]],
[['text'=>"🤷🏻‍♂️ ┇ طرق الاستعمال •",'callback_data'=>"help"]],
]
])
]);
}
if($data == "start"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$callback_query->message->message_id,
'text'=>"",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"🔍 بحث ",'switch_inline_query_current_chat'=>" "]],
[['text'=>"🤷🏻‍♂️ ┇ طرق الاستعمال •",'callback_data'=>"help"]],
]
])
]);
}
if($data == "help"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$callback_query->message->message_id,
'text'=>"💌┇*تستطيع التحميل وتحويل مقاطع الفيديوهات او الاغاني الى بصمه صوتيه او ملف صوتي من اليوتيوب .*

📎┇*من خلال  نسخ رابط الفيديو من اليوتيوب وارساله الى هنا لتحميله .*

🔖┇*وايضا تستطيع من خلال ارسال وصف البحث او ارسال اسم الفنان او اسم الاغنيه وسيتم ارسال اليك ازرار تحتوي على  ما بحثت عنه فقط اضغط على الزر الذي تريده لتحميله .*

🌍┇*وايضا تستطيع التحميل من (الفيسبوك،الانستكرام،التويتر،الساوندكلاود) فقط قم بارسال رابط الفيديو او الصوره من المواقع المراده وسيتم تحميله لك باسرع وقت ممكن .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• رجوع '🔙،",'callback_data'=>"start"]],
]
])
]);
}

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


if(preg_match('/^(idv) (.*)/s', $data) and !$text){

$idvv = str_replace('idv ',"",$data);

if($idvv!=null){

$ph="http://i.ytimg.com/vi/$idvv/default.jpg";
bot('sendphoto',[
'chat_id'=>$chat_id,
'sendphoto'=>$ph,
]);
$text="https://www.youtube.com/watch?v=".$idvv;
}}

//#انستا#//

if($text !="/start" and preg_match("/(.*?)instagram(.*?)/",$text)){
$api = json_decode(file_get_contents("https://alwsh.ml/API/Instagram.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(0);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[1]->url,
]);
}

//#بنترست#//
if($text !="/start" and preg_match("/(.*?)pin(.*?)/",$text)){
$api = json_decode(file_get_contents("https://hsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(1);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[0]->url,
]);
}

//#يوتيوب#//

if($text !="/start" and preg_match("/(.*?)youtu.be(.*?)/",$text)){
$api = json_decode(file_get_contents("http:///hhsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(1);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[1]->url,
]);
}

//#فيس#//

if($text !="/start" and preg_match("/(.*?)facebook(.*?)/",$text)){
$api = json_decode(file_get_contents("https://hsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(0);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[1]->url,
]);
}

//#تويتر#//

if($text !="/start" and preg_match("/(.*?)twitter(.*?)/",$text)){
$api = json_decode(file_get_contents("https://hsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(1);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[0]->url,
]);
}

//#يوت#//

if($text !="/start" and preg_match("/(.*?)youtube(.*?)/",$text)){
$api = json_decode(file_get_contents("https://hhsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(0);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[1]->url,
]);
}

//#لايكي#//

if($text !="/start" and preg_match("/(.*?)likee(.*?)/",$text)){
$api = json_decode(file_get_contents("https://hsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(0);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[0]->url,
]);
}

//#تيك#//

$api = 'https://www.tikwm.com/api/';
$tikUrl = $text;
$postData = ['url'=>$tikUrl,'hd'=>1];
$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
$s = $obj->data->play;
$s1 = $obj->data->audio;
$s2 = $obj->data->music;
$s3 = $obj->data->id;
$s4 = $obj->data->title;
$s5 = $obj->data->origin_cover;
$s6 = $obj->data->play_count;
$s7 = $obj->data->comment_count;
$s8 = $obj->data->share_count;
$s9 = $obj->data->download_count;
$s10 = $obj->data->digg_count;

function curl_request($url, $postData = []){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, false);
//curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);
curl_setopt($curl, CURLOPT_ACCEPTTIMEOUT_MS, 10000);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');

$response = curl_exec($curl);
return $response;}

if($text != "/start" and $text != null){
$json["Ekkkk5"]["tiktok"] = ($json["Ekkkk5"]["tiktok"]+1);
file_put_contents("bot.json",json_encode($json));
bot('sendvideo',['chat_id'=>$chat_id,
'video'=>$s,
'caption'=>"*⌔ وصف الفيديو : $s4*
- تم تحميل الفيد بنجاح".@$userbotss." .",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>": الأعجابات",'callback_data'=>"like"],['text'=>"( $s10 )",'callback_data'=>"like"]],
[['text'=>": المشاهدات",'callback_data'=>"To"],['text'=>"( $s6 )",'callback_data'=>"To"]],
[['text'=>": المشاركات",'callback_data'=>"se"],['text'=>"( $s8 )",'callback_data'=>"se"]],
[['text'=>": التحميلات",'callback_data'=>"do"],['text'=>"( $s9 )",'callback_data'=>"do"]],
]])]);}

if($text != "/start" and $text != null){
bot('sendaudio',['chat_id'=>$chat_id,
'audio'=>$s2,
'caption'=>"- تم تحميل الصوت بنجاح".@$userbotss." .",
"parse_mode"=>'MarkDown',
"disable_web_page_preview"=>true,
'reply_to_message_id'=>$message->message_id,]);}

//#ساوند كلاود#//

if($text !="/start" and preg_match("/(.*?)soundcloud(.*?)/",$text)){
$api = json_decode(file_get_contents("https://hsoklanr.cf/apii.php?url=$text"));
$SaJaD = bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"*انتظر سيتم التحميل*", 
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
])->result->message_id;
sleep(1);
bot('deletemessage', [
'chat_id' => $chat_id, 
'message_id' =>$SaJaD
]);
bot("SendVideo",[
"chat_id"=>$chat_id,
"video"=>$api->medias[0]->url,
]);
}

if($text != "/start" and !preg_match("/(.*?)(youtube)|(you)(.*?)/",$text) and $hso['data'] == "ser" and !in_array($from_id,$ebu)){
if($text != "/start" and !preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $text) and $hso['data'] == "ser" and !in_array($from_id,$ebu)){
if($text != '/search' ){
$json["yyyyi"]["search"] = ($json["yyyyi"]["search"]+1);
file_put_contents("bot.json",json_encode($json));
$search = json_decode(file_get_contents("https://hsoklanr.cf/api/yytt.php?search=".urlencode($text)),1);
$see = $search['results'][0]['url'];
$keyboard = [];
for($b=0;$b<=12;$b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'],'callback_data'=>'dn#'.$search['results'][$b]['url'].'#'.$from_id]];
$reply_markup=json_encode($keyboard);}
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"تم البحث عن $text 🔦",
'reply_markup'=>$reply_markup]);
$hso['data'] = "stop";
file_put_contents("start.json",json_encode($hso));}}}

$save = explode('#', $data);
$photo = "http://www.youtube.com/watch?v=".$save[1];
if($save[0] == "dn"){
bot('deleteMessage',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot('sendphoto',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo'=>$photo,
'caption'=>"*🤵| 𝐰𝐞𝐥𝐜𝐨𝐦𝐞 𝐭𝐨 𝐲𝐨𝐮𝐫 𝐛𝐨𝐭 📥...
| 🎞 𝐯𝐢𝐝𝐞𝐨 | 🎧 𝐦𝐩3 |🎙 𝐯𝐨𝐢𝐜𝐞 .....*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🎶  ملف صوتي .','callback_data'=>'mp3#'.$save[1]],['text'=>'🔊  بصمه صوتيه .','callback_data'=>'ogg#'.$save[1]]], 
[['text'=>'📽 مقطع فيديو .','callback_data'=>'mp4#'.$save[1]]],]])
]);}
$save[1] = file_get_contents("$chat_id2.txt");
if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $text, $match)) {
$i = $match[1]; 
file_put_contents("$cht_id.txt",$i);
bot('sendphoto',['chat_id'=>$chat_id,
'photo'=>$text,
'caption'=>"*🤵| 𝐰𝐞𝐥𝐜𝐨𝐦𝐞 𝐭𝐨 𝐲𝐨𝐮𝐫 𝐛𝐨𝐭 📥...
| 🎞 𝐯𝐢𝐝𝐞𝐨 | 🎧 𝐦𝐩3 |🎙 𝐯𝐨𝐢𝐜𝐞 .....*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🎶  ملف صوتي .','callback_data'=>'mp3#'.$text],
['text'=>'🔊  بصمه صوتيه .','callback_data'=>'ogg#'.$text]], 
[['text'=>'📽 مقطع فيديو .','callback_data'=>'mp4#'.$text]],]])]);}

$xx = " ";
$save = explode('#', $data);
if($save[0] == "mp3"){
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"💾 : *يتم الرفع لخوادم تليجرام ...*",
'parse_mode'=>"MarkDown",]),]);
if($s['audio']['MP3:'.$save[1]]['file_id'] != null){
 $audio = bot('sendaudio',[
'chat_id'=>$chat_id2,
'audio'=>$s['audio']['MP3:'.
$save[1]]['file_id'],
'caption'=>"*-تم التحميل بنجاح @$userbotss*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"شارك",'switch_inline_query'=>'MP3:'.$save[1]]],	     
]])]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>" *تم التحميل * ✅",
'parse_mode'=>"MarkDown",
]),]);
} else {
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"📥 : *يتم التحميل ...*",
'parse_mode'=>"MarkDown",
]),]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"💾 : *يتم الرفع لخوادم تليجرام ...*",
'parse_mode'=>"MarkDown",
]),]);
$Api = json_decode(file_get_contents("https://hsoklanr.cf/api/yt.php?q=360&vid=$save[1]&type=mp3"),true);
$Url =$Api['url'];
$Url = file_get_contents($Url);
$title = $Api['title'];
$img = $Api['img'];
$thumb = file_get_contents($img);
$ggggw=$Api['url'];
$file = $ggggw;
$t=$Api['title'];
$title = $t;
file_put_contents("$chat_id2.mp3",file_get_contents($file));
if ($file== null) {
$d = "*😔 عذرا، العملية المطلوبة لا يمكن تنفيذها حالياً. حاول مرة أخرى لاحقاً.*";
} else {
$d = "*تم التحميل ✅*";}
$audio = bot('sendaudio',['chat_id'=>$chat_id2,
'audio'=>new CURLFile("$chat_id2.mp3"),
'caption'=>"*- تم التحميل بنجاح @$userbotss*",
'performer'=>$xx,
'title'=>$t,
'thumb'=>$img,
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"",'switch_inline_query'=>'MP3:'.$save[1]]],	     
]])]);
bot('deleteMessage',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"$d",
'parse_mode'=>"MarkDown",
]),]);
$s['audio']['MP3:'.$save[1]] = ['file_id'=>$audio->result->audio->file_id,'title'=>$title];
file_put_contents('jbj.json', json_encode($s));
unlink("$chat_id2.mp3");
unlink("$chat_id2.txt");}}
$save = explode('#', $data);
if($save[0] == "ogg"){
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"💾 : *يتم الرفع لخوادم تليجرام ...*",
'parse_mode'=>"MarkDown",
]),]);
if($s['voice']['OGG:'.$save[1]]['file_id'] != null){
bot('sendvoice',['chat_id'=>$chat_id2,
'voice'=>$s['voice']['OGG:'.$save[1]]['file_id'],
'caption'=>"*- تم التحميل بنجاح @$userbotss*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"شارك",'switch_inline_query'=>'OGG:'.$save[1]]],	     
]])]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>" *تم التحميل * ✅",
'parse_mode'=>"MarkDown",
]),]);
} else {
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"📥 : *يتم التحميل ...*",
'parse_mode'=>"MarkDown",
]),]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"يتم الرفع لخوادم تليجرام ...*",
'parse_mode'=>"MarkDown",
]),]);
$Api = json_decode(file_get_contents("https://hsoklanr.cf/api/yt.php?q=360&vid=$save[1]&type=mp3"),true);
$Url =$Api['url'];
$Url = file_get_contents($Url);
$title = $Api['title'];
$img = $Api['img'];
$thumb = file_get_contents($img);
$ggggw=$Api['url'];
$file = $ggggw;
$t=$Api['title'];
$title = $t;
file_put_contents("$chat_id2.ogg",file_get_contents($file));
if ($file == null) {
$d = "*😔 عذرا، العملية المطلوبة لا يمكن تنفيذها حالياً. حاول مرة أخرى لاحقاً.*";
} else {
$d = "*تم التحميل ✅*";}
$voice = bot('sendvoice',['chat_id'=>$chat_id2,
'voice'=>new CURLFile("$chat_id2.ogg"),
'caption'=>"*- تم التحميل بنجاح @$userbotss*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"",'switch_inline_query'=>'OGG:'.$save[1]]],	    
]])]);
bot('deleteMessage',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"$d",
'parse_mode'=>"MarkDown",
]),]);
$s['voice']['OGG:'.$save[1]] = ['file_id'=>$voice->result->voice->file_id,'title'=>$title];
file_put_contents('jbj.json', json_encode($s));
unlink("$chat_id2.ogg");
unlink("$chat_id2.txt");}}

$save = explode('#', $data);
if($save[0] == "mp4"){
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"💾 : *يتم الرفع لخوادم تليجرام ...*",
'parse_mode'=>"MarkDown",
]),]);
if($s['video']['MP4:'.$save[1]]['file_id'] != null){
bot('sendvideo',['chat_id'=>$chat_id2,
'video'=>$s['video']['MP4:'.$save[1]]['file_id'],
'caption'=>"*- تم التحميل بنجاح @$userbotss*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"",'switch_inline_query'=>'MP4:'.$save[1]]],	     
]])]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>" *تم التحميل * ✅",
'parse_mode'=>"MarkDown",
]),]);
} else {
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"📥 : *يتم التحميل ...*",
'parse_mode'=>"MarkDown",]),]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"💾 : *يتم الرفع لخوادم تليجرام ...*",
'parse_mode'=>"MarkDown",
]),]);
$Api = json_decode(file_get_contents("https://hsoklanr.cf/api/yt.php?q=360&vid=$save[1]&type=mp4"),true);
$Url =$Api['url'];
$Url = file_get_contents($Url);
$title = $Api['title'];
$img = $Api['img'];
$thumb = file_get_contents($img);
$ggggw=$Api['url'];
$file = $ggggw;
$t=$Api['title'];
$title = $t;
file_put_contents("$chat_id2.mp4",file_get_contents($file));
if ($file == null) {
$d = "*😔 عذرا، العملية المطلوبة لا يمكن تنفيذها حالياً. حاول مرة أخرى لاحقاً.*";
} else {
$d = "*تم التحميل ✅*";}
$video = bot('sendvideo',['chat_id'=>$chat_id2,
'video'=>new CURLFile("$chat_id2.mp4"),
'caption'=>"*- تم التحميل بنجاح @$userbotss*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"",'switch_inline_query'=>'MP4:'.$save[1]]],	    
]])]);
bot('deleteMessage',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot('editMessageMedia',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode(['type'=>'photo',
'media'=>$save[1],
'caption'=>"$d",
'parse_mode'=>"MarkDown",
]),]);
$s['video']['MP4:'.$save[1]] = ['file_id'=>$video->result->video->file_id,'title'=>$title];
file_put_contents('jbj.json', json_encode($s));
unlink("$chat_id2.mp4");
unlink("$chat_id2.txt");}}

if($update->inline_query->query){
$labban = json_decode(file_get_contents("https://belal.aba.vg/inlinbot/Api-yousef.php?search=".urlencode($update->inline_query->query)))->results;
$keyboard["inline_keyboard"]=[];
for($i=0;$i < count($labban);$i++){
$Searches[$i] = [
'type'=>'article',
'id'=>base64_encode(rand(9,9999)),
'thumb_url'=>$labban[$i]->image,
'title'=>$labban[$i]->title,
'input_message_content'=>['parse_mode'=>'HTML','message_text'=>$labban[$i]->url],
];
}
$Search = json_encode($Searches);
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id, 
'results' =>$Search
]);
}