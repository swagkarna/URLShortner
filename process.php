<?php
$url = $_POST["url"];
$rand = substr(str_shuffle("AZERTYUIOPQSDFGHJKLMWXCVBN1234567890"), 0, 7);
$data = $rand . "|" . $url . "|" . "\n";
file_put_contents("url.php", $data, FILE_APPEND);
$sUrl = "http://" . $_SERVER['HTTP_HOST'] . "/" . $rand;
echo $sUrl;
?>