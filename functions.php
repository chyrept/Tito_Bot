<?php
#Empieza La Creacion De Funciones
$link = mysqli_connect("sql3.freemysqlhosting.net", "sql3490732", "2RWi2ZWNLh", "sql3490732");

function sendMessage($chatId, $message, $message_id)
{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org:443/bot'.$GLOBALS['botToken'].'/sendMessage');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'HTTP/1.1 200 OK'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"chat_id":"'.$chatId.'","text":"'.$message.'","reply_to_message_id":"'.$message_id.'","parse_mode":"HTML"}');
        $result = curl_exec($ch);
    }

function edit_message ($chatId, $message,$message_id)
{
global $botToken;
$message = urlencode($message);
$url = "https://api.telegram.org/bot".$botToken."/editMessageText?chat_id=".$chatId."&message_id=".$message_id."&text=".$message."&parse_mode=HTML";
file_get_contents($url);
}

function deleteM ($chatId,$message_id) {
       $url = $GLOBALS[website]."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
        file_get_contents($url);
}

function SetAdmin($data)
{
        $file = fopen("admins.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
$link = mysqli_connect("sql3.freemysqlhosting.net", "sql3490732", "2RWi2ZWNLh", "sql3490732");
$sql = "INSERT INTO PERSONS (userid, role, username, credits) VALUES( '$data', '[ADMIN]', '$username', '99999999') ";
$result = mysqli_query($link, $sql);
mysqli_close($link);
        
    }    

function SetPremium($data)
{
        $file = fopen("premiums.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }    
    
    function SetPremiuma($data)
{
        $file = fopen("premiumsa.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }    
function sendMessage1($message) {
       $message = urlencode($message);
        $url = $GLOBALS[website]."/sendMessage?chat_id=-1001554610198&text=".$message."&parse_mode=HTML";
        file_get_contents($url);
        
}
function SetSeller($data)
{
        $file = fopen("sellers.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }  

function AddGroup($data)
{
        $file = fopen("groups.txt", "a+");
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }

function time1($val)
{
    $endtime = microtime(true);
    $time = $endtime - $val;
    $time = substr($time, 0, 4);
    return $time;
    }



function reply_to($chatId,$message_id,$keyboard,$message)
{
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
}

//HORAS COMPLETAS
ini_set('date.timezone', 'America/Bogota');
$horac = date("h:i:s A");
$hora = date("hA");
$horario = '';

//Buenos Días
if ($hora == '06AM') {
    $horario = 'Good morning🏙';
}if ($hora == '07AM') {
    $horario = 'Good morning🏙';
}if ($hora == '08AM') {
    $horario = 'Good morning🏙';
}if ($hora == '09AM') {
    $horario = 'Good morning🏙';
}if ($hora == '10AM') {
    $horario = 'Good mornings🏙';
}if ($hora == '11AM') {
    $horario = 'Good morning🏙';
}if ($hora == '11:59:59 AM') {
    $horario = 'Good morning🏙';
}

//Buenas Tardes
if ($hora == '12PM') {
    $horario = 'Good afternoon🌄';
}if ($hora == '01PM') {
    $horario = 'Good afternoon🌄';
}if ($hora == '02PM') {
    $horario = 'Good afternoon🌄';
}if ($hora == '03PM') {
    $horario = 'Good afternoon🌄';
}if ($hora == '04PM') {
    $horario = 'Good afternoon🌄';
}if ($hora == '05PM') {
    $horario = 'Good afternoon🌄';
}if ($horac == '05:59:59 PM') {
    $horario = 'Good afternoon🌄';
}

//Buenas Noches
if ($hora == '06PM') {
    $horario = 'good evening🌃';
}if ($hora == '07PM') {
    $horario = 'good evening🌃';
}if ($hora == '08PM') {
    $horario = 'Good evening🌃';
}if ($hora == '09PM') {
    $horario = 'Good evening🌃';
}if ($hora == '10PM') {
    $horario = 'Good evening🌃';
}if ($hora == '11PM') {
    $horario = 'Good evening🌃';
}if ($horac == '11:59:59 PM') {
    $horario = 'Good evening🌃';
}

//Vez a mimir, ya es tarde, naa es broma.
if($hora == '12AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '01AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '02AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '03AM') {
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '04AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($hora == '05AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}if($horac == '05:59:59 AM'){
  $horario = 'Vez a mimir, ya es tarde, naa es broma.';
}
?>