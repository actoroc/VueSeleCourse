<?php
require 'login.php';
error_reporting(0);
$params=json_decode(file_get_contents("php://input"),true);
$cid = $params['cid'];
$stuno = $params['stuno'];
$query = $pdo->query("select cid from elecount where stuno='$stuno'");
$test = $true;
while($field = $query->fetch(PDO::FETCH_ASSOC)){
    if ($field['cid']==$cid) {
        echo (json_encode('课程已选过，请重新再选!',JSON_UNESCAPED_UNICODE));
        $test = $flase;
        }
}
    echo (json_encode($test,JSON_UNESCAPED_UNICODE));
?>