<?php
$proxy = "";
$agent=$_SERVER['HTTP_USER_AGENT'];

function getcap($url,$ch,$ckfile,$proxy='',$ref='')
{
global $agent;
if($ref=='')
$ref=$url;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt ($ch, CURLOPT_USERAGENT,$agent);
curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: image/jpeg","Accept: */*"));
curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_NOPROGRESS,false);
curl_setopt($ch, CURLOPT_VERBOSE,true);
curl_setopt($ch,CURLOPT_BINARYTRANSFER,1);
curl_setopt($ch, CURLOPT_REFERER, $ref);
return curl_exec($ch);
}
function ngetcap($url,$ch,$ckfile,$proxy='',$ref='')
{
global $agent;
if($ref=='')
$ref=$url;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt ($ch, CURLOPT_USERAGENT,$agent);
curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: image/jpeg","Accept: */*"));
curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_NOPROGRESS,false);
curl_setopt($ch, CURLOPT_VERBOSE,true);
curl_setopt($ch,CURLOPT_BINARYTRANSFER,1);
curl_setopt($ch, CURLOPT_REFERER, $ref);
return curl_exec($ch);
}
function npost($url,$post,$ch,$ckfile,$proxy='',$ref='')
{
global $agent;
if($ref=='')
$ref=$url;
curl_setopt ($ch, CURLOPT_URL, $url );
curl_setopt ($ch, CURLOPT_USERAGENT,$agent);
curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: */*"));
curl_setopt($ch, CURLOPT_COOKIEFILE, "$ckfile");
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_REFERER, $ref);
return curl_exec($ch);
}
function post($url,$post,$ch,$ckfile,$proxy='',$ref='')
{
global $agent;
if($ref=='')
$ref=$url;
curl_setopt ($ch, CURLOPT_URL, $url );
curl_setopt ($ch, CURLOPT_USERAGENT,$agent);
curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: */*"));
curl_setopt($ch, CURLOPT_COOKIEJAR, "$ckfile");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_REFERER, $ref);
return curl_exec($ch);
}
function get($url,$ch,$ckfile,$proxy='',$ref='')
{
global $agent;
if($ref=='')
$ref=$url;
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_USERAGENT,$agent );
curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: */*"));
curl_setopt($ch, CURLOPT_COOKIEJAR, "$ckfile");
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_REFERER, $ref);
return curl_exec($ch);
}
function nget($url,$ch,$ckfile,$proxy='',$ref='')
{
global $agent;
if($ref=='')
$ref=$url;
curl_setopt ($ch, CURLOPT_URL, $url );
curl_setopt ($ch, CURLOPT_USERAGENT,$agent );
curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded","Accept: */*"));
curl_setopt($ch, CURLOPT_COOKIEFILE, "$ckfile");
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_REFERER, $ref);
return curl_exec($ch);
}

@ini_set('zlib.output_compression',0);
@ini_set('implicit_flush',1);
@ob_end_clean();

set_time_limit(0);
ob_implicit_flush(1);
$time = time();


function go($url){
header('Location: '.$url);
exit;
}
function input($text){
return trim(htmlspecialchars($text));
}

function output($text,$html=true){
if($html){
return trim(stripslashes($text));
} else {
return trim(htmlspecialchars(stripslashes($text)));
}
}

function rword($length = 10,$allow="all") {
if($allow=="all")
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
elseif($allow=="num")
        $characters = '0123456789';
elseif($allow=="en")
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
elseif($allow=="low")
        $characters = 'abcdefghijklmnopqrstuvwxyz';
elseif($allow=="up")
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
else
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
function sor($html)
{
$html=htmlspecialchars($html);
return $html;
}

function clean($html)
{
$html = str_replace(array("\r\n", "\r", "\n"), "", $html);
return $html;
}
function show($text,$color="darkred")
{
flush();
}
function fc($text,$color="darkred")
{

ob_flush();
flush();
}


function err($head="Error",$text="Error")
{

ob_flush();
flush();
ob_flush();
flush();
die();
}

set_time_limit(0);
$ser="http://site24.way2sms.com/";
$ckfile = tempnam ("/tmp", "CURLCOOKIE");
$login=$ser."Login1.action";
if(!$to)
{ $to=$uid; }
if(!$msg)
{ $msg=rword(5).rword(5).rword(5).rword(5).rword(5);}


flush();
if($uid && $pwd)
{
$ibal="0";
$sbal="0";
$lhtml="0";
$shtml="0";
$khtml="0";
$qhtml="0";
$fhtml="0";
$te="0";

flush();

$loginpost="gval=&username=".$uid."&password=".$pwd."&Login=Login";

$ch = curl_init();
$lhtml=post($login,$loginpost,$ch,$ckfile);
////curl_close($ch);

if(stristr($lhtml,'Location: '.$ser.'vem.action') || stristr($lhtml,'Location: '.$ser.'MainView.action') || stristr($lhtml,'Location: '.$ser.'ebrdg.action'))
{
preg_match("/~(.*?);/i",$lhtml,$id);
$id=$id['1'];
if(!$id)
{
show('Login Failed. We Didnot Get Session Value.','darkred');
goto end;
}
show('Login Successfull.','darkgreen');
goto bal;
}
elseif(stristr($lhtml,'Location: http://site2.way2sms.com/entry'))
{

show('Login Failed. Invalid Login Details.','darkred');
goto end;
}
else
{
show('Login Failed. Unknown Error Occured.','darkred');
goto end;
}
bal:
///$ch = curl_init();
$msg=urlencode($msg);
$main=$ser."smstoss.action";
$ref=$ser."sendSMS?Token=".$id;
$conf=$ser."smscofirm.action?SentMessage=".$msg."&Token=".$id."&status=0";

$post="ssaction=ss&Token=".$id."&mobile=".$to."&message=".$msg."&Send=Send Sms&msgLen=".strlen($msg);
$mhtml=post($main,$post,$ch,$ckfile,$proxy,$ref);
if(stristr($mhtml,'smscofirm.action?SentMessage='))
{ show('SmS Sent Successfully To '.$to.'.','darkgreen');}
else
{ show('Error in Sending SmS.','darkred');}
curl_close($ch);

end:


flush();
}

?>