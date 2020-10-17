<?php
// ファイルに書き込み
$time = date('Y-m-d H:i:s');
$age = $_POST['age'];
$mail = $_POST['mail'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$exp = $_POST['exp'];

$str = $time. ',' .$name. ',' .$mail. ',' .$age. ',' .$tel. ',' .$exp;
//文字作成

$file = fopen('./data/data.csv','a');
fwrite( $file, $str ."\n"); 
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.csv を確認しましょう！</h2>
  <p><?= $str ?></p>
    <ul>
        <li><a href="read.php">データ集計をみる</a></li>
        <li><a href="post.php">入力フォームに戻る</a></li>
    </ul>
</body>

</html>
