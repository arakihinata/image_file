<?php
session_start();
// セッション変数 $_SESSION["loggedin"]を確認。ログイン済だったらウェルカムページへリダイレクト
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font: 14px sans-serif;
            text-align: center; 
        }
    </style>
</head>
<body>
    <h1 class="my-5"><b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>がログインしました</h1>
    <h1>カードファイルを始めますか？<h1>
    <p>
        <a href="http://localhost:8888/課題/ImageTest/list.php" class="btn btn-danger ml-3">スタート</a>
    </p>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">ログアウト</a>
    </p>
</body>
</html>