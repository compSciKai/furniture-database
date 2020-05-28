<?php
$data = file_get_contents('id.json');
$json_arr = json_decode($data, true);
//var_dump($json_arr);
//$type = "CH";
//$id = "0004";
//foreach ($json_arr as $key => $value) {
//    if ($key == $type) {
//
//    }
//}

// from post

$type = $_POST["type"];
$id = $_POST["id"];
$json_arr[$type][] = $id;
//$json = json_decode($msg);
//
//$json_arr[] = $json;
file_put_contents('id.json', json_encode($json_arr, JSON_PRETTY_PRINT));
?>
