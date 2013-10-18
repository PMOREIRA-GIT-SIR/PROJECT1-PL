<?php
header("Content-Type: text/xml");
include_once 'KeyGen.php';
$kg = new CKeyGen();
echo $kg->Key2XML();
?>