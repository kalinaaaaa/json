<?php
/*
file_put_contents("nesto.txt","bilo sta/n",FILE_APPEND);

$fileContent=file_get_contents("nesto.txt");

echo $fileContent
*/
$user=array("name"=>"petar","email"=>"petar@gmail.com");
$fileName = "users.json";
/*
echo $user["name"];
$userJson=json_encode($user);
echo $userJson;
*/
//file_put_contents("users.json",$userJson);

if(!file_exists($fileName) or filesize($fileName)==0){
    $userArray=array($user);
    $userJson=json_encode($userArray);
    file_put_contents($fileName,$userJson);
}else{
    $jsonContent=file_get_contents($fileName);
    $jsonContent=json_decode($jsonContent);
    array_push($jsonContent,$user);
    $jsonContent=json_encode($jsonContent);
    file_put_contents($fileName,$jsonContent);
}













