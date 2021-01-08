<?php

$id = $_GET["id"];

try{
    $pdo = new PDO('mysql:dbname=assignment;charset=utf8;host=localhost','root','root');
}   catch (PDOException $e){
    exit('DBConnectError:'.$e->getMessage());
}

$sql = "DELETE FROM gs_bm_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error);
}else{
    header('Location: bm_select.php');
    exit;
}
?>