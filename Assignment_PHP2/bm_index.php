<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易ブックマークアプリ</title>
</head>
<body>

<form method="post" action="bm_insert.php"> 
    <fieldset>
      <legend>ブックマークアプリ</legend>
        <label>書籍名：<input type="text" name="name"></label><br>
        <label>書籍URL：<input type="text" name="url"></label><br>
        <label>書籍コメント：<input type="text" name="review"></label>
        <input type="submit" value="送信">
    </fieldset>
</form>
</body>
</html>