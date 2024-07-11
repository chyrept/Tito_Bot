<?php
if(strpos($message, "/gen") === 0){
    $starttime = microtime(true);
$mytime = 'time1';
  $lista = substr($message, 5);
  $cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
   $mon = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
   $year = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
   $cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
   $amou = multiexplode(array(":", "/", " ", "|", ""), $lista)[4];
  $cards = [];
  $cc1 = substr($cc, 0, 1);
  $cvvlength = strlen($cvv);
  if(empty($lista)){
  $response = ("<b>VALID INPUT PLEASE \n Ex: <code>!gen 407544|x|25|xx</code></b>");
    sendMessage($chatId,$response,$message_id);
  exit();
  }

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
 
  if($mon > 12){
     $valid = '';
     $response = ("<b>INVALID MONTH</b>");
    sendMessage($chatId,$response,$message_id);
  exit();
  }
  if($year > 2029) {
     $valid = '';
     $response = ("<b>MAXIMUM YEAR SUPPORTED IS 29</b>");
    sendMessage($chatId,$response,$message_id);
  exit();
  }
 
  if(empty($amou)){
  $amou = '10';
  }
$quantity = $amou;
  for($i = 0; $i < $quantity; $i ++){
      $bin = substr($cc, 0, 12);
      
      $digits = 16 - strlen($bin);
      $ccrem = substr(str_shuffle("0123456789"), 0, $digits);
      if($mon == 'xx' or $mon == 'x'){
        $monthdigit = rand(1,12);
        }
        else if (empty($mon)){
        $monthdigit = rand(1,12);
        }
        else{
        $monthdigit = $mon;
        }
        
      if (strlen($monthdigit) == 1){
        $monthdigit = "0".$monthdigit;
      }

        if($year == 'xxxx' or $year == 'xxx' or $year == 'xx' or $year == 'x'){
        $yeardigit = rand(2021,2029);
        }
        else if (empty($year)){
        $yeardigit = rand(2021,2029);
        }
        else{
        $yeardigit = $year;
        }
        
        if($cvv == 'x' or $cvv == '' or $cvv == 'xx' or $cvv == 'xxx'){
          if($cc1 == 3){
           $cvvdigit =rand(1000,9999);
        }
      else if (empty($cvv)){
             $cvvdigit = rand(100,999);
        }
        }
        else {
        $cvvdigit = $cvv;
        }
      $ccgen = $bin.$ccrem;
      
      $cards[]= ''.$ccgen.'|'.$monthdigit.'|'.$yeardigit.'|'.$cvvdigit.'';
      $cards[]= "\n";
    }
    $card = implode ($cards);
    if(empty($mon)){
    $mon = 'Rnd';
    }
    if(empty($year)){
    $year = 'Rnd';
    }
    if(empty($cvv)){
    $cvv = 'Rnd';
    }
if(empty($bin)){
sendMessage($chatId,"None Input",$message_id);
die();
}
$server = "latambots.alwaysdata.net";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'/gen.php?lista='.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: '.$server.'';
$headers[] = 'method: GET';
$headers[] = 'path: /gen.php';
$headers[] = 'scheme: https';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: none';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'lista='.$bin.'');
$curl = curl_exec($ch);
curl_close($ch);

sendMessage($chatId,"<b>

⌧ Welcome TainuxChk 🤖
⌧ Bin: <code>$bin</code> $country $emoji
⌧ Details: $level - $brand - $type
⌧ Input: <code>$bin|$mon|$year|$cvv</code>

<code>$curl</code>
⌧ User: $username $Rank
⌧ Took: <code>{$mytime($starttime)}s</code> 
</b>",$message_id);
}


?>