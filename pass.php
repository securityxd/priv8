<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Iceland" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Averia+Sans+Libre" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Wallpoet" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Metamorphous" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Trebuchet+MS" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple" rel="stylesheet" type="text/css">
<title>Random Strong Password Generator by Xasthur</title>
<meta name="robots" content="noindex,nofollow">
</head>
<body bgcolor="#000000">
<br><br><br><br><br>
<div align="center">
<font face="Verdana" size="4px" color="#FFFFFF">
<p>
Coded by Xasthur#4423
<p>
<br><br>
<p>
Random Strong Password Generator ;)
</p>
<br><br>
<p>
After 37 seconds, the page is refreshed and a new password is generated.
 <meta http-equiv="refresh" content="37">
</p>
</font>
</div>
<font face="Verdana" size="4px" color="#ff0000">
<div align="center">
<br><br>
<p>
Password :
</font>
<font face="Verdana" size="4px" color="#FFFFF">
<?php
function xasthur($length = 36){
$chars = "_!^+%&/(=?-)$#@.,:;0123456789bcdfghjkmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ_!#@.,:;$^+%&/(=?-)";
    return substr(str_shuffle($chars),0,$length);
}
echo xasthur(36); 
?>
</p>
</font>
</div>
</body>
</html>