<?php

/***
Terimakasih Sudah mau menggunakan Script ini.

!Please jangan ada yang di rubah selain Email dan Password,
untuk menjaga biar tidak ada yang error.

support : 
yt : https://YouTube.com/irkop/
blog : irkop.eu.org
***/

while(1):
$str = strlen(file_get_contents("bot.php"));
$by = "irkop";
$x = json_decode(file_get_contents("cfg.json"),1);
$email = $x["email"];
$password = $x["password"];
$key = file_get_contents("key");

$banner =  curl("banner");
echo system("clear").$banner;

$x = json_decode(curl("home"),1);
if($x["st"] == 0):
  echo $x["msg"];exit;
elseif($x["st"] == 99):
  echo $x["msg"];
  file_put_contents("key",readline(" Enter new key : "));
  continue;
else:
 $x = json_decode(curl("dashbor"),1);
 echo $x["msg"];
 while(true):
    $x = json_decode(curl("claim"),1);
    if($x["st"] == 0):
       echo $x["msg"];exit;
      else:
       echo $x["msg"];
    endif;
  endwhile;
endif;
  endwhile;


function curl($path){
  global $email,$password,$key,$by,$str;
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://sc.irkop.eu.org/mystic/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER,array(
  "host: sc.irkop.eu.org",
  "User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36"
  ));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"email=$email&pass=$password&key=$key&sbm=$path&str=$str&me=$by");
$get =curl_exec($ch);
return $get;}

?>