<?php
// 受信データをhtml無効化してべつの変数へ代入
$name = htmlspecialchars($_POST["name"],ENT_QUOTES,"utf-8");
$mail = htmlspecialchars($_POST["mail"],ENT_QUOTES,"utf-8");
$pass = htmlspecialchars($_POST["pass"],ENT_QUOTES,"utf-8");

$hitFLg = false; // 名前が一致したらtruse

// ファイルを開く
$fp = fopen("user.csv","r");
// ファイルの終わりまで繰り返し
while ( ($data = fgetcsv($fp)) != false ) {
  // 入力した名前とファイルから読み込んだ名前が一致したら
  if ( $name == $data[0] ) {
    $hitFlg = true;	//一致フラグを立てる
    break;
  }
}

fclose($fp);

// 認証内容によって行先指定
if ( $hitFlg == true )
  header("Location:reinput.php",true,307);
else
  header("Location:check.php",true,307);

exit();
?>

