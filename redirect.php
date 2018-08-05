<?php

$REQUEST_URI = $_SERVER[REQUEST_URI];

$xTxt = str_replace("/", "", $REQUEST_URI);


$fData = file_get_contents("url.php");

preg_match_all("/$xTxt\|(.*?)\|/", $fData, $fEdata);

$link = str_replace("|", "", $fEdata[0][0]);

$Clink = str_replace($xTxt, "", $link);

header('Location: ' . $Clink);