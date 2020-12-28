<?php
require 'login.php';
error_reporting(0); 
$params=json_decode(file_get_contents("php://input"),true);
$stuno=$params['stuno'];
$name=$params['name'];
$cid=$params['cid'];
$cname=$params['cname'];
$tid=$params['tid'];
$tname=$params['tname'];
$credit=$params['credit'];
$sql ="INSERT INTO `elecount` (`STUNO`, `NAME`,`CID`,`CNAME`, `TID`, `TNAME`,`CREDIT`) VALUES ('$stuno','$name','$cid','$cname',$tid,'$tname',$credit)";
$num=$pdo->exec($sql);
?>