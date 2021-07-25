<?php
/**
* PHP在线网址二维码API源码
* 地址：https://api.nange.cn/code
**/

//载入qrcode类
include "phpqrcode.php";

//取得GET参数
$url        = isset($_GET["text"]) ? $_GET["text"] : 'help';
$errorLevel = isset($_GET["e"]) ? $_GET["e"] : 'H';
$PointSize  = isset($_GET["p"]) ? $_GET["p"] : '3';
$margin     = isset($_GET["m"]) ? $_GET["m"] : '6';
preg_match('/http:\/\/([\w\W]*?)\//si', $url, $matches);

//简单判断
//if ( $matches[1] != 'api.nange.cn' && $matches[1] != 'nange.cn' || $url == 'help') { //取消此行注释并注释下面一行，就能加入自定义的url过滤功能
if ( $url == 'help'){
    header("Content-type: text/html; charset=utf-8");
    echo '<title>在线二维码API接口</title>';
    echo '<h1>在线二维码生成API</h1>

    
    ';
	exit();
} else  {
    //调用二维码生成函数
    createqr($url, $errorLevel, $PointSize, $margin);
}

//简单二维码生成函数
function createqr($value,$errorCorrectionLevel,$matrixPointSize,$margin) {
    QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize, $margin);
}
?>
