<?php
$msg = $_POST['msg'];
echo $msg;
$json = json_decode($msg);

//$url = 'furniture.json';

//$data = file_get_contents($url);

//$furniture = json_decode($data);

file_put_contents('furniture.json', $json);

print_r($json);
?>
