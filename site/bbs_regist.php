<?php
// 受信データをhtml無効化してべつの変数へ代入
$name = htmlspecialchars($_POST["name"],ENT_QUOTES,"utf-8");
$comment = htmlspecialchars($_POST["comment"],ENT_QUOTES,"utf-8");

// タイムゾーン
date_default_timezone_set("Asia/Tokyo");

// 現在時刻の取得
$datetime = date("Y/m/d H:i:s");

// ファイルへの書き込みデータを配列に格納
$list = [$name,$comment,$datetime];

// ファイルを開く
$fp = fopen("bbs.csv","a");

// ファイルに1件の投稿を書き込み
fputcsv($fp,$list);

// ファイルを閉じる
fclose($fp);

header("Location:menu.php",true,307);

exit();

?>
