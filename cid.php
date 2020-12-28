<?php
require 'login.php';
error_reporting(0);
$params=json_decode(file_get_contents("php://input"),true);
$cid = $params['cid'];
$res = array();
$query = $pdo->query("select * from teacher_course where cid='$cid'");
while ($field = $query->fetch(PDO::FETCH_ASSOC)) {
    array_push($res,$field);
} 
$query2 = $pdo->query("select * from courses where cid='$cid'");
$field2 = $query2->fetch(PDO::FETCH_ASSOC);
array_push($res,$field2);
echo(json_encode($res,JSON_UNESCAPED_UNICODE));
?>