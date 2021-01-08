<?php

$name = $_POST["name"];
$url = $_POST["url"];
$review = $_POST["review"];

try{
    $pdo = new PDO('mysql:dbname=assignment;charset=utf8;host=localhost','root','root');
}   catch (PDOException $e){
    exit('DBConnectError:'.$e->getMessage());
}

$sql = "insert into gs_bm_table (id, name, url, review, indate)
values (NULL, :a1, :a2, :a3, sysdate())";

$stmt = $pdo->prepare($sql);    

$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $review, PDO::PARAM_STR);

$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error);
}else{
    header('Location: bm_index.php');
}
?>