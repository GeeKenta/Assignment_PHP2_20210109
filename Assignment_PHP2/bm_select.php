<?php

//require_once('funcs.php');

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

try {
  $pdo = new PDO('mysql:dbname=assignment;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e){
  exit('DBConnectError'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

$view="";
if ($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error);

}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        //$view .= '<p>' . h($result['indate']) . h($result['name']). h($result['url']). h($result['review']) . '</p>';
        $view .= '<p>';
        $view .= '<a href="bm_view.php?id=' .$result["id"].'">';
        $view .= $result["indate"]. ":" .$result["name"];
        $view .= '</a>';
        $view .= '　';
        $view .= '<a href="bm_delete.php?id=' .$result["id"].'">';
        $view .= '[削除]';
        $view .= '</a>';
        $view .= '/<p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易ブックマークアプリ表示</title>
</head>

<header>
    <a class="navbar-brand" href="bm_index.php">データ登録</a>
</header>

<body>
    <div class="container jumbotron"><?= $view ?></div>
</body>
</html>