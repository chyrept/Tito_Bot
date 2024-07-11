<?php
#BOT CREADO POR  Andresitoww
$botToken = '5359484704:AAH-jUHJcjoCp05qrV5RuwEL1Is35V3KU9g'; #AGREGAMOS EL TOKEN DEL BOT Aqui Ponemos El 
$website  = "https://api.telegram.org/bot".$botToken;
$update   = file_get_contents('php://input');
$update   = json_decode($update, true);
$e        = print_r($update); //
#EMPIEZA LA CAPTURA DE VARIABLES ENVIADOS AL CHAT
$My_ID           = "1887258668";
$chatname        = $update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$userId          = $update["message"]["from"]["id"];
$message         = $update["message"]["text"]; 
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$message_id      = $update["message"]["message_id"]; 
$username        = ('@'.$username2);
// $username3       = '@'.$username2;
// $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>cyberxbd</code>';
$cofuid = '1733025602';
$cofuid2 = '1515158846';
$cofuid3 = '1889292794';
#FIN DE LA CAPTURA

//FUNCIONES
include 'functions.php';
//DATABASE CONNECT
$link = mysqli_connect("sql3.freemysqlhosting.net", "sql3490732", "2RWi2ZWNLh", "sql3490732");
if($link === false){
    sendMessage1("ERROR: Could not connect. " . mysqli_connect_error());
    echo '<hr>' . mysqli_connect_error();
}

//RANGOS DE OWNERS
if ($chatId == $My_ID || $userId == $My_ID) { 
$Rank = '[Owner]'; 
$GLOBALS['Rank'] = $Rank;            
       }  
if ($chatId == $cofuid || $userId == $cofuid) { 
$Rank = '[CO-FU]'; 
$GLOBALS['Rank'] = $Rank;            
       } 
if ($chatId == $cofuid2 || $userId == $cofuid2) { 
$Rank = '[CO-FU]'; 
$GLOBALS['Rank'] = $Rank;            
       } 
       if ($chatId == $cofuid3 || $userId == $cofuid3) { 
$Rank = '[CO-FU]'; 
$GLOBALS['Rank'] = $Rank;            
       } 

#EMPIEZA LA CREACION DEL BOT

//ADDGROUP
if (strpos($message, "!addgp") === 0 || strpos($message, "/addgp") === 0) {
     if(($userId == $cofuid) or ($userId == $My_ID) or ($userId == $cofuid2)){
            $data = substr($message, 7);
            $file = array_values(array_unique(file('groups.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
            if(empty($data)){
            sendMessage($chatId, '<b>you are fine, enter a valid ID ✳️</b>', $message_id);    
            exit();
            }if(in_array($data, $file)){
            sendMessage($chatId, '<b>Welcome to activated membership Group ✳️</b>', $message_id);    
            exit();
            }
            AddGroup($data);
            $message_admin = "<b>membership activated ✳️</b>";
            $message_user = "<b>$emojil️ Este grupo fue añadido a los permitidos, disfruten de la membresia<b> ";
            sendMessage($chatId, $message_admin, $message_id);
            sendMessage($data, $message_user, "");

    }else{
            $message = "No estas autorizado para subir el rango a usuarios y/o grupos.";
            sendMessage($chatId, $message, $message_id);
            exit();
        }
    
}


//SETSELLER
if (strpos($message, '/seller') === 0 || strpos($message, '$seller') === 0) {
     if(($userId == $cofuid) or ($userId == $My_ID) or ($userId == $cofuid2)){
            $data = substr($message, 8);
            $file = array_values(array_unique(file('sellers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
            if(empty($data)){
            sendMessage($chatId, '<b>you are fine, enter a valid ID ✳️</b>', $message_id);    
            exit();
            }if(in_array($data, $file)){
            sendMessage($chatId, '<b>you are fine, This user already has this rank</b>', $message_id);    
            exit();
            }if(($data == $My_ID) or ($data == $cofuid) or ($data == $cofuid2)){
            sendMessage($chatId, 'Este usuario no puede ser degradado a ese rango', $message_id);    
            exit();
            }
            SetSeller($data);
            $message_admin = "<b>SELLER Added ✳️</b>";
            $message_user = "$emojil️ Tu cuenta fue actualizada a SELLER es un placer trabajar contigo ";
            sendMessage($chatId, $message_admin, $message_id);
            sendMessage($data, $message_user, "");

    }else{
            $message = "<b>only admins, Dev users.❇</b>️";
            sendMessage($chatId, $message, $message_id);
            exit();
        }
    
}

//VERIFICAR RANGO SELLER
 $filepremiums = array_values(array_unique(file('sellers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
if(in_array($userId, $filepremiums)){
$seller = 'true';
}else{
$seller = 'false';
}
if ($premium == 'true'){
$Rank = '[PREMIUM]'; 
$GLOBALS['Rank'] = $Rank;
}

//SETPREMIUM
if (strpos($message, '#prem') === 0 || strpos($message, '$prem') === 0) {
     if(($userId == $cofuid) or ($userId == $My_ID) or ($userId == $cofuid2) or ($Rank == '[SELLER]')){
            $data = substr($message, 6);
            $file = array_values(array_unique(file('premiums.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
            if(empty($data)){
            sendMessage($chatId, '<b>you are fine, enter a valid ID ✳️</b>', $message_id);    
            exit();
            }if(in_array($data, $file)){
            sendMessage($chatId, '<b>you are fine, This user already has this rank</b>', $message_id);    
            exit();
            }if(($data == $My_ID) or ($data == $cofuid) or ($data == $antrax)){
            sendMessage($chatId, 'Este usuario no puede ser degradado a ese rango', $message_id);    
            exit();
            }
            SetPremium($data);
    $message_admin = "<b>membership activated ✳️</b>";
    $message_user = "$emojil️ Tu cuenta fue actualizada a PREMIUM, disfruta de tu membresia con @IsMikuChkBot ";
    sendMessage($chatId, $message_admin, $message_id);
    sendMessage($data, $message_user, "");

    }else{
            $message = "<b>only admins, Dev users.❇</b>️";
            sendMessage($chatId, $message, $message_id);
            exit();
        }
    
}


//SETPREMIUMA
if (strpos($message, '!addprem') === 0 || strpos($message, '$addprem') === 0) {
     if(($userId == $cofuid) or ($userId == $My_ID) or ($userId == $cofuid2) or ($userId == '1965658001')){
            $data = substr($message, 9);
            $file = array_values(array_unique(file('premiumsa.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
            if(empty($data)){
            sendMessage($chatId, '<b>you are fine, enter a valid ID ✳️</b>', $message_id);    
            exit();
            }if(in_array($data, $file)){
            sendMessage($chatId, '<b>you are fine, This user already has this rank</b>', $message_id);    
            exit();
            }if(($data == $My_ID) or ($data == $cofuid) or ($data == $antrax)){
            sendMessage($chatId, 'Este usuario no puede ser degradado a ese rango', $message_id);    
            exit();
            }
            SetPremiuma($data);
    $message_admin = "<b>membership activated ✳️</b>";
    $message_user = "$emojil️ Tu cuenta fue actualizada a PREMIUM, disfruta de tu membresa ";
    sendMessage($chatId, $message_admin, $message_id);
    sendMessage($data, $message_user, "");

    }else{
            $message = "<b>only admins, Dev users.❇</b>️";
            sendMessage($chatId, $message, $message_id);
            exit();
        }
    
}


//SETADMIN
if (strpos($message, "!addadmin") === 0 || strpos($message, "/addadmin") === 0) {
     if(($Rank == '[Owner]') or ($Rank == '[CO-FU]')){
            $data = substr($message, 10);
            $file = array_values(array_unique(file('admins.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
            if(empty($data)){
            sendMessage($chatId, '<b>Give me a valid id❗</b>', $message_id);    
            exit();
            }if(in_array($data, $file)){
            sendMessage($chatId, 'Este usuario ya tiene este rango', $message_id);    
            exit();
            }if(($data == $My_ID) or ($data == $cofuid)){
            sendMessage($chatId, 'Este usuario no puede ser degradado a ADMIN', $message_id);    
            exit();
            }
            SetAdmin($data);
    $message_admin = "<b> Membership Activated ✳️</b>";
    $message_user = "$emojil️ welcome to the rank admin senpai nice to work with you";
    sendMessage($chatId, $message_admin, $message_id);
    sendMessage($data, $message_user, "");

    }else{
            $message = "No estas autorizado para subir el rango a usuarios y/o grupos.";
            sendMessage($chatId, $message, $message_id);
            exit();
        }
    
}



//VERIFICAR RANGO PREMIUM
 $filepremiums = array_values(array_unique(file('premiums.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
if(in_array($userId, $filepremiums)){
$premium = 'true';
}else{
$premium = 'false';
}
if ($premium == 'true'){
$Rank = '[PREMIUM]'; 
$GLOBALS['Rank'] = $Rank;
}

//VERIFICAR RANGO PREMIUM
 $filepremiums = array_values(array_unique(file('premiumsa.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
if(in_array($userId, $filepremiums)){
$premium = 'true';
}else{
$premium = 'false';
}
if ($premium == 'true'){
$Rank = '[PREMIUM]'; 
$GLOBALS['Rank'] = $Rank;
}

//VERIFICAR RANGO ADMIN
$fileadmins = array_values(array_unique(file('admins.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
if(in_array($userId, $fileadmins)){
$admin = 'true';
}else{
$admin = 'false';
}
if ($admin == 'true'){
$Rank = '[ADMIN]'; 
$GLOBALS['Rank'] = $Rank;
}

//VERIFICAR RANGO GRUPOS
$filegroups = array_values(array_unique(file('groups.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
if(in_array($chatId, $filegroups)){
$group = 'PREMIUM';
}else{
$group = 'FREE';
}
if ($group == 'true'){
$GLOBALS['Rank'] = $Rank;
}

//FREE USERS
if(empty($Rank)){
$Rank = '[FREE USER]';    
}

//CMDS
if((strpos($message, '/cmds') === 0) or ((strpos($message, '!cmds') === 0)) or ((strpos($message, '.cmds') === 0) or (strpos($message, '#cmds') === 0)) or (strpos($message, '?cmds') === 0)){ 
$keyboard = [ 
    'inline_keyboard' => [ 
        [ 
 
           ['text' =>  'TOOLS️', 'callback_data' => 'free'],  
           ['text' => 'GATES', 'callback_data' => 'gates'],  
           ['text' => '', 'callback_data' => 'back'],  
        ] 
        ]]; 
$freecommands = urlencode("<b>Hello, $horario 
<a href='tg://user?id=$userId'>$firstname</a>, it seems to me that you are interested in my commands, you can explore by pressing any of the buttons</b>"); 
$free = json_encode($keyboard); 
$free08 = $free;
        reply_to($chatId, $message_id, $free, $freecommands);
}
if ($cdata2 == "free"){ 
$islive = 'ON'; 
    $keyboard = [ 
    'inline_keyboard' => [ 
        [ 
 
           ['text' => 'RETURN️️', 'callback_data' => 'back'],  
           ['text' => '', 'callback_data' => 'others'],  
           ['text' => '', 'callback_data' => 'buy'],  
           // ['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'],  
           ['text' => 'CLOSE', 'callback_data' => 'end'] 
        ] 
        ]]; 
$freecommands = urlencode("<b> 
↳ ?bin: Chk Your bin 
•·················•·················•
↳ ?Gen: Gen your bin a valid CC,S 
•·················•·················•
↳ ?sk: Your Key stripe chk
•·················•·················•
↳ ?iban: Iban Generator
•·················•·················•
↳ ?rand: Rand data
•·················•·················•
soon more commands added wait for our update
● NOTE:  any errors contact <code>@cyberxbd</code>
</b>"); 
$free = json_encode($keyboard); 
        file_get_contents("https://api.telegram.org/bot".$GLOBALS['botToken']."/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$free"); 
 
}
if ($cdata2 == "back"){ 
    $keyboard = [ 
    'inline_keyboard' => [ 
        [ 
 
           ['text' =>  '🌀TOOLS🌀️', 'callback_data' => 'free'],  
           ['text' => '', 'callback_data' => 'back'],  
           ['text' => 'OWNER👑', 'url' => 'https://t.me/cyberxbd'],  
           ['text' => '❗FINALIZE❗', 'callback_data' => 'end'] 
        ] 
        ]]; 
$freecommands = urlencode("<b>Hello, $horario 
<a href='tg://user?id=$userId2'>$firstname2</a>, if you want to know all my commands, press any of the following buttons</b>"); 
$free = json_encode($keyboard); 
        file_get_contents("https://api.telegram.org/bot".$GLOBALS['botToken']."/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$free"); 
 
}
if ($cdata2 == "end"){ 
$islive = 'ON'; 
$freecommands = urlencode("<b> 
✳️session ended[<code>$userId2</code>]see you soon sempai </b>"); 
//$free = json_encode($keyboard); 
        file_get_contents("https://api.telegram.org/bot".$GLOBALS['botToken']."/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML"); 

}

//INFO
if((strpos($message, '/info') === 0) or ((strpos($message, '!info') === 0)) or ((strpos($message, '.info') === 0) or (strpos($message, '#info') === 0)) or (strpos($message, '?info') === 0)){
$starttime = microtime(true);
$mytime = 'time1';
sendMessage($chatId, "<b>ID:</b><code>$userId</code> <b>| Took:</b><code> {$mytime($starttime)}'sg</code>
<b>User: <a href='tg://user?id=$userId'>$firstname</a>
Alias: $username
Rank:</b> <code>$Rank</code>
<b>Premium:</b> <code>$premium</code> <b>| Admin:</b> <code>$admin</code>
<b>Date:</b> <code>$horac</code>",$message_id);
}

if((strpos($message, '/id') === 0) or ((strpos($message, '!id') === 0)) or ((strpos($message, '.id') === 0) or (strpos($message, '#id') === 0)) or (strpos($message, '?id') === 0)){
$starttime = microtime(true);
$mytime = 'time1';
sendMessage($chatId, "<b>User ID:<code> $userId </code> | Took:<code> {$mytime($starttime)}s</code>
Chat ID: <code>$chatId</code></b>",$message_id);
}

//START
if((strpos($message, '/start') === 0) or ((strpos($message, '!start') === 0)) or ((strpos($message, '.start') === 0) or (strpos($message, '#start') === 0)) or (strpos($message, '?start') === 0)){ 
$keyboard = [ 
    'inline_keyboard' => [ 
        [ 
            ['text' => 'Owner', 'url' => 'https://t.me/cyberxbd'],  

        ] 
        ]]; 
$freecommands = urlencode("<b>¡hey $username!
If you are interested in knowing my commands send /cmds
By the way your userid is: <code>$userId</code> In addition, the current date and time in Colombia is: <code>$horac</code>
propietario: @cyberxbd</b>"); 
$free = json_encode($keyboard); 
$free08 = $free;
        reply_to($chatId, $message_id, $free, $freecommands);
} 

$filegroups = array_values(array_unique(file('groups.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
if(($Rank == '[Owner]') or ($Rank == '[CO-FU]') or ($Rank == '[ADMIN]') or ($Rank == '[PREMIUM]') or (in_array($chatId, $filegroups))){
//CODIG

foreach (glob("tools/*.php") as $filename)
{
    include $filename;
}

foreach (glob("tools/gates/*.php") as $filename)
{
    include $filename;
}
if(strpos($message, '/test') === 0){
    $aLineas = fread("premiumsa.txt");

    sendMessage($chatId, $aLineas, $message_id);
}
  
//SALUDO
if (strpos($message, "/rank") === 0){
sendMessage($chatId, "<b>
Chat id:</b> <code>$chatId</code>
<b>Rango del grupo:</b> $group
",$message_id);
}if (strpos($message, "Bot") === 0){
sendMessage($chatId, "<b>
━━━•❅•°•❈ - •°•❅•━━━
● Hello, $horario 
● <a href='tg://user?id=$userId'>$firstname</a>, envia /cmds
para conocer mis comandos.
━━━•❅•°•❈ - •°•❅•━━━
</b>",$message_id);
}

}else{
if((strpos($message, '/gen') === 0) or (strpos($message, '.gen') === 0) or (strpos($message, '!gen') === 0) or (strpos($message, '#gen') === 0) or (strpos($message, '?gen') === 0) or (strpos($message, '/bin') === 0) or (strpos($message, '.bin') === 0) or (strpos($message, '!bin') === 0) or (strpos($message, '#bin') === 0) or (strpos($message, '?bin') === 0) or (strpos($message, '/ch') === 0) or (strpos($message, '.ch') === 0) or (strpos($message, '!ch') === 0) or (strpos($message, '#ch') === 0) or (strpos($message, '?ch') === 0) or (strpos($message, '/sk') === 0) or (strpos($message, '.sk') === 0) or (strpos($message, '!sk') === 0) or (strpos($message, '#sk') === 0) or (strpos($message, '?sk') === 0) or (strpos($message, '/iban') === 0) or (strpos($message, '.iban') === 0) or (strpos($message, '!iban') === 0) or (strpos($message, '#iban') === 0) or (strpos($message, '?iban') === 0) or (strpos($message, '/ichk') === 0) or (strpos($message, '.ichk') === 0) or (strpos($message, '!ichk') === 0) or (strpos($message, '#ichk') === 0) or (strpos($message, '?ichk') === 0) or (strpos($message, '/rand') === 0) or (strpos($message, '.rand') === 0) or (strpos($message, '!rand') === 0) or (strpos($message, '#rand') === 0) or (strpos($message, '?rand') === 0)){
sendMessage($chatId, "<b><i>[⚠️]Hello How are you bro🤙🏻 <a href='tg://user?id=$userId'>$firstname</a>
✳️You are well? you are not in my db convert premium user</i>
- Owner: <a href='tg://user?id=1889292794'>Antonio</a></b>",$message_id);
}}


?>