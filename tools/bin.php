<?php
if((strpos($message, '/bin') === 0) or (strpos($message, '.bin') === 0) or ((strpos($message, '/bin') === 0) or (strpos($message, '!bin') === 0)) or ((strpos($message, '/bin') === 0) or (strpos($message, '#bin') === 0)) or (strpos($message, '?bin') === 0)){
$bin = substr($message, 5, 6);
if (strpos($message, '/bin@IsMikuchkbot') === 0){
    sendMessage($chatId, "<b>
━━━•❅•°•❈ - •°•❅•━━━
● Hey enter a valid Bin to check.
● Example: /bin 491268
━━━•❅•°•❈ - •°•❅•━━━
</b>",$message_id);
exit();
}


if (empty($bin)) {
sendMessage($chatId, "<b>[⚠️]You're Fine?<i> Give me a valid Bin❗️</i></b>", $message_id);    
exit();
}

$starttime = microtime(true);
$mytime = 'time1';
$url = 'https://young-badlands-00017.herokuapp.com/?bin='.$bin.'';
$fim = json_decode(file_get_contents($url), true);
$message = $fim["msg"];
$level = $fim["level"];
$type = $fim["type"];
$brand = $fim["brand"];
$prepaid = $fim["prepaid"];
$country = $fim["country"]["name"];
$currency = $fim["country"]["currency"];
$bank = $fim["bank"]["name"];
$bankurl = $fim["bank"]["site"];
$bankphone = $fim["bank"]["phone"];
$emoji = $fim["country"]["flag"];
$pais = $fim["alpha2"];
$curl = curl_exec($ch);
$brand = strtoupper($brand);
$type = strtoupper($type);
$card = strtoupper($card);
$country = strtoupper($country);

if (empty($brand)){
$response = "<b>● BIN: $bin ❌
● Msg: (Invalid bin length) ⚠️
● Took:<code> {$mytime($starttime)}s</code>
━━━━━━━━━━━━━━━
↳ Checked by: $username $Rank</b> ️";
sendMessage($chatId, $response, $message_id);
exit();
}
if(empty($level)){
    $level = "<code>------</code>";
    $brand = "<code>------</code>";
    $type = "<code>------</code>";
    $bank = "<code>------</code>";
}


sendMessage ($chatId,"
<b>[ϟ] Bin Lookup
━━━━━━━━━━━━━━━
[Ϟ] <i>Bin:</i> <code>$bin</code>
[Ϟ] <i>Info:</i> $level - $brand - $type
[Ϟ] <i>Bank:</i> $bank
[Ϟ] <i>Country:</i> $country - $currency [$emoji]
━━━━━━━━━━━━━━━
Checked By: <a href='tg://$userId'>$firstname</a> $Rank
</b>",$message_id);

}
?>