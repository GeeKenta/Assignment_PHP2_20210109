<?php

$id = $_POST["id"];
$name = $_POST["name"];
$url = $_POST["url"];
$review = $_POST["review"];

try{
    $pdo = new PDO('mysql:dbname=assignment;charset=utf8;host=localhost','root','root');
}   catch (PDOException $e){
    exit('DBConnectError:'.$e->getMessage());
}

$sql = 'UPDATE gs_bm_table SET name=:name, url=:url, review=:review WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',   $name,  PDO::PARAM_STR);
$stmt->bindValue(':url',    $url,   PDO::PARAM_STR);
$stmt->bindValue(':review', $review,PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,    PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error);

}else{
    header("Location: bm_select.php");
}
?>