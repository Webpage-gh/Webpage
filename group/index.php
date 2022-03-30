<?php
$conf['qqjump']=1;
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')!==false && $conf['qqjump']==1){$a='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; 
echo '<!DOCTYPE html>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  <title>请使用浏览器打开</title> 
<script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script> 
<script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "'.$a.'"}); </script>
</head>
<body>请使用浏览器打开</body>
</html>';exit;} 
?>
