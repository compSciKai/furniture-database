<?php

// open json file
$data = file_get_contents('test.json');
$json_arr = json_decode($data, true);
var_dump($json_arr);

// from post

$msg = $_POST["msg"];
$json = json_decode($msg);

$json_arr[] = $json;
file_put_contents('test.json', json_encode($json_arr, JSON_PRETTY_PRINT));
//$file = fopen('test.json', 'w+') or die("File not found");
//fwrite($file, $json);
//fclose($file);
//die;

// encode array to json
//$json = json_encode(array('data' => $array));

//write json to file
//if (file_put_contents("test.json", $json))
//    echo "JSON file created successfully...";
//else
//    echo "Oops! Error creating json file...";

// data.json

// {"data":[{"id":"MMZ301","name":"Michael Bruce","designation":"System Architect"},{"id":"MMZ385","name":"Jennifer Winters","designation":"Senior Programmer"},{"id":"MMZ593","name":"Donna Fox","designation":"Office Manager"}]}
?>
