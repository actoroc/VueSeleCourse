
<?php
require 'login.php';
$res = array();
error_reporting(0); 
$params=json_decode(file_get_contents("php://input"),true);
$stuno = $params['stuno'];
$query = $pdo->query("select * from elecount where stuno='$stuno'");
while ($field = $query->fetch(PDO::FETCH_ASSOC)) {
    array_push($res,$field);
} 
echo(json_encode($res,JSON_UNESCAPED_UNICODE));


?>