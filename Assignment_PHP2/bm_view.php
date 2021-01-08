<?php
    $id = $_GET["id"];

    try{
        $pdo = new PDO('mysql:dbname=assignment;charset=utf8;host=localhost','root','root');
    }   catch (PDOException $e){
        exit('DBConnectError:'.$e->getMessage());
    }

    $sql = "SELECT * FROM gs_bm_table WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $status = $stmt->execute();

    $view="";
    if ($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error);

    } else {
        $row = $stmt->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ更新</title>
</head>
<body>
<form method="post" action="bm_update.php"> 
    <div class="junbotron">
    <fieldset>
      <legend>ブックマーク更新ページ</legend>
        <label>書籍名：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
        <label>書籍URL：<input type="text" name="url"  value="<?=$row["url"]?>"></label><br>
        <label>書籍コメント：<input type="text" name="review"  value="<?=$row["review"]?>"></label>
        <input type = "hidden" name="id" value="<?=$row["id"]?>">
        <input type="submit" value="送信">
    </fieldset>
    </div>
</form>
</body>
</html>