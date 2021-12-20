<?php
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$res="\033[0m";
$tim="\033[0;35m";
$red="\033[0;31m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$white= "\033[0;37m";
$black="\033[0;30m";                                                                       @error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));                             $n = "\n";$n2 = "\n\n";$t = "\t";                                             $r= "\r                                                              \r";     /* START COLOR */                                                             $res="\033[7m";                                                               $hitam="\033[0;30m";                                                          $abu2="\033[1;30m";                                                           $putih="\033[0;37m";                                                          $putih2="\033[1;37m";                                                         $red="\033[0;31m";                                                            $red2="\033[1;31m";                                                           $green="\033[0;32m";                                                          $green2="\033[1;32m";                                                         $yellow="\033[0;33m";                                                         $yellow2="\033[1;33m";                                                        $blue="\033[0;34m";
$blue2="\033[1;34m";                                                          $purple="\033[0;35m";                                                         $purple2="\033[1;35m";                                                        $lblue="\033[0;36m";                                                          $lblue2="\033[1;36m";                                                         include("cfg.php");                                                                                                                                         function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {                                                               return "";
        }
        $length = strlen($find_start);                                                $end = strpos(substr($str,$start +$length));                                  return trim(substr($str,$start +$length));                            }


function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$res = url("https://controlc.com/010ae4df");
//echo $res."\n";
$link1 = explode('Link Password: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
echo $baner = "
\033[0;37m KÊNH YOUTUBE NTA TM  LIKE SUBSCRIBE
\033[1;32m
 ____  _____  _________     _        _________  ____    ____  
|_   \|_   _||  _   _  |   / \      |  _   _  ||_   \  /   _| 
  |   \ | |  |_/ | | \_|  / _ \     |_/ | | \_|  |   \/   |   
  | |\ \| |      | |     / ___ \        | |      | |\  /| |   
 _| |_\   |_    _| |_  _/ /   \ \_     _| |_    _| |_\/_| |_  
|_____|\____|  |_____||____| |____|   |_____|  |_____||_____| \033[1;31m \n";
if ($pass == 'no'){
      echo $M2."â—¼ SCript pay màu hãy liên hệ admin để lấy tool mới\n";
      exit;                                                       }else{
if($read == $pass){
      echo $HJ2."☐ Proses Upload Password \n";
      sleep(5);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo $red2."☐".$green2." Link Password : " .$yellow2.$link[0]."\n";
echo $red2."☐".$green2." NHAP MAT KHAU TAI DAY : ".$yellow2;
$p = trim(fgets(STDIN));

if($pass == $p){
        fwrite($save, $p);
        echo $green2."\n✔".$green2." LOGIN SUCCESS\n";
        fclose($save);
        sleep(2);
        echo $green2."@".$green2."  LIKE & SUBSCRIBE\n";
        sleep(3);
        }else{
        echo $M2."❌ ĐĂNG NHẬP KHÔNG ĐƯỢC, NHẬP MẬT KHẨU ĐÚNG.  VUI LÒNG THỬ LẠI\n";
        exit;
        }
        }
}
sleep(3);

system("clear");
echo "\n";
function an($str){$arr = str_split($str);
foreach ($arr as $az){echo $az; usleep(3000);}}
function bn($sc){
$res="\033[7m";$hitam="\033[0;30m";$abu2="\033[1;30m";$putih="\033[0;37m";$putih2="\033[1;37m";$red="\033[0;31m";$red2="\033[1;31m";$green="\033[0;32m";$green2="\033[1;32m";$yellow="\033[0;33m";$yellow2="\033[1;33m";$blue="\033[0;34m";$blue2="\033[1;34m";$purple="\033[0;35m";$purple2="\033[1;35m";
$lblue="\033[0;36m";$lblue2="\033[1;36m";
date_default_timezone_set("Asia/Jakarta");
echo an("\033[0;32m ____  _____  _________     _        _________  ____    ____  
|_   \|_   _||  _   _  |   / \      |  _   _  ||_   \  /   _| 
  |   \ | |  |_/ | | \_|  / _ \     |_/ | | \_|  |   \/   |   
  | |\ \| |      | |     / ___ \        | |      | |\  /| |   
 _| |_\   |_    _| |_  _/ /   \ \_     _| |_    _| |_\/_| |_  
|_____|\____|  |_____||____| |____|   |_____|  |_____||_____|\n\n");}
sleep(2);

function imgscan($asu){
$clomang=base64_encode(file_get_contents($asu));
$yasuo=["content-type: application/json"];
$yi='{
  "requests": [
    {
      "image": {
        "content": "'.$clomang.'"
      },
      "features": [
        {
          "type": "TEXT_DETECTION"
        }
      ]
    }
  ]
}';
$mboh="https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y";
$karepmu=curl($mboh,$yasuo,$yi);
$bapakmu=strpos($karepmu,'Enter the following:\n');
if($bapakmu){
$bapakmu=substr($karepmu,$bapakmu);
$bapakmu=str_replace('Enter the following:\n','',$bapakmu);
$bapakmu=substr($bapakmu,0,strpos($bapakmu,'"'));
$bapakmu=str_replace('\n','',$bapakmu);
$bapakmu= preg_replace("/[^a-zA-Z]/", "", $bapakmu);}
if(strlen($bapakmu) > 25){}else{return $bapakmu;} }

function vision($data){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$visit= array(
"User-Agent: Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/90.0.4430.210 Mobile Safari/537.36",
"content-type: application/json",);curl_setopt($ch, CURLOPT_HTTPHEADER, $visit);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_POSTFIELDS, $data);return curl_exec($ch);}

function curl($url, $ua, $data = null){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_HTTPHEADER => $ua
        ));
        if($data){
            curl_setopt_array($curl, array(
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_POST => 1
            ));
       }
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
}


function head($user, $cookie){
$ua = [
    'Host: litecoinmania.com',
    'User-Agent: '.$user,
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
    'Cookie: '.$cookie
];
return $ua;
}

function head1($user, $cookie){
$ua = [
    'Host: litecoinmania.com',
    'Origin: https://litecoinmania.com',
    'Content-Type: application/x-www-form-urlencoded',
    'User-Agent: '.$user,
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
    'Referer: https://litecoinmania.com/?r=MDwgQjknuBqc7jXVZ5TVYoYuTmWoX57D3Y',
    'Cookie: '.$cookie
];
return $ua;
}


function solvemedia($url,$uas){
$uas = array();
$uas[]="Host: api-secure.solvemedia.com";
$uas[]="user-agent: ".$user;
$uas[]="accept: */*";
$uas[]="Referer: https://litecoinmania.com/?r=MDwgQjknuBqc7jXVZ5TVYoYuTmWoX57D3Y";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $uas);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$r = curl_exec($ch);
return $r;
}
system('clear');
echo $baner."\n";
echo $lblue2."[".$green2."1".$lblue2."] ".$green2."AUTO BAYPASS FAUCET\n";
echo $lblue2."[".$red2."2".$lblue2."] ".$red2."INPUT MANUAL\n";
echo $green2."Enter The Number You Want ".$putih2."~> ".$yellow2;
$menu=trim(fgets(STDIN));
echo "\n";
if($menu==1){
$no = 1;
while(true){
$url = "https://litecoinmania.com/?r=MDwgQjknuBqc7jXVZ5TVYoYuTmWoX57D3Y";
$faucet = curl($url, head($user, $cookie));
        $id = explode('"',explode('<input type="text" name="',$faucet)[1])[0];
$url = $url_solvemedia;
$papi = solvemedia($url,$uas);
        $cap = explode('challenge":"', $papi)[1];
        $ca = explode('"', $cap)[0];
$url = "https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";
$mediac = solvemedia($url,$uas);
        file_put_contents("img.png",$mediac);
        $ci=imgscan("img.png");
$url = "https://litecoinmania.com/?r=MDwgQjknuBqc7jXVZ5TVYoYuTmWoX57D3Y";
$data = $id."=".$wallet."&adcopy_response=".$ci."&adcopy_challenge=".$ca;
$claim = curl($url, head1($user, $cookie), $data);
        $reward = explode('<a target="_blank"',explode('<div class="alert alert-success">',$claim)[1])[0];
        $faucetpay = explode('</a>.</div>',explode('https://faucetpay.io/page/user-admin">',$claim)[1])[0];
if($reward){
        echo $red2."[".$lblue2."{$no}".$red2."] ". $green2.$reward;
        echo $purple.$faucetpay."\n";
        $no++;
for ($x=60;$x>0;$x--){
echo "\r                                                              \r";
echo $red2."N".$green2."e".$yellow2."x".$green2."t".$lblue2." C".$purple."l".$green."a".$red."i".$yellow2."m".$lblue2." I".$purple."n ".$putih2.$x;
sleep(1);
}
echo "\r                                                              \r";
}else{
  echo "\r                                                              \r";
  echo $red2."Failed Bypass ".$green2."Bypass Again";
  sleep(3);
  echo "\r                                                              \r";
}
}
}elseif($menu==2){
$no = 1;
while(true){
$url = "https://maniabiz.space/";
$faucet = curl($url, head($user, $cookie));
        $id = explode('"',explode('<input type="text" name="',$faucet)[1])[0];
$url = $url_solvemedia;
$papi = solvemedia($url,$uas);
        $cap = explode('challenge":"', $papi)[1];
        $ca = explode('"', $cap)[0];
$url = "https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";
$mediac = solvemedia($url,$uas);
        file_put_contents("capcha.png",$mediac);
        system('termux-open capcha.png');
        $ci = readline($green2.'Input Captcha  '.$putih2.': '.$yellow2);
$url = "https://maniabiz.space/";
$data = $id."=".$wallet."&adcopy_response=".$ci."&adcopy_challenge=".$ca;
$claim = curl($url, head1($user, $cookie), $data);
        $reward = explode('<a target="_blank"',explode('<div class="alert alert-success">',$claim)[1])[0];
        $faucetpay = explode('</a>.</div>',explode('https://faucetpay.io/page/user-admin">',$claim)[1])[0];
if($reward){
        echo $lblue2."[".$putih2."{$no}".$lblue2."] ". $green2.$reward;
        echo $blue2.$faucetpay."\n";
        $no++;
for ($x=60;$x>0;$x--){
echo "\r                                                              \r";
echo $red2."N".$green2."e".$yellow2."x".$green2."t".$lblue2." C".$purple."l".$green."a".$red."i".$yellow2."m".$lblue2." I".$purple."n ".$putih2.$x;
sleep(1);
}
echo "\r                                                              \r";
}else{
  echo "\r                                                              \r";
  echo $red2."Failed Bypass ".$green2."Bypass Again";
  sleep(3);
  echo "\r                                                              \r";
}
}
}