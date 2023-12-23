<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>動画クリエイター</title>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500" rel="stylesheet">

  </head>

  <body>

    <div id="wrap">

      <header>
        <h1 class="fadeIn">
          動画クリエイター
        </h1>
        <p>
          このサイトでは、動画クリエイターについて紹介します。
        </p>
      </header>



      <main>

        <!-- ここから下を編集 -->


        <section>
          <h2>
            ユーザー登録完了画面
          </h2>

          <p>
            ユーザー登録が完了しました。<br>
            ログイン画面からログインしてください。
          </p>

          <hr>
            <p>
              <a href="login.html" title="ログイン画面へ">ログイン画面へ</a>
            </p>
          <hr>

        </section>



        <?php
          // 受信データをhtml無効化してべつの変数へ代入
          $name = htmlspecialchars($_POST["name"],ENT_QUOTES,"utf-8");
          $mail = htmlspecialchars($_POST["mail"],ENT_QUOTES,"utf-8");
          $pass = htmlspecialchars($_POST["pass"],ENT_QUOTES,"utf-8");

          // パスワード暗号化
          $pass2 = password_hash($pass,PASSWORD_DEFAULT);

          // 受信データを配列に格納
          $list = [$name,$pass2,$mail];

          // ファイルを開く
          $fp = fopen("user.csv","w");
          // ファイルに書き込む
          fputcsv($fp,$list);
          // ファイルを閉じる
          fclose($fp);

          // ファイルを開く(読み込み)
          $fp = fopen("user.csv","r");

          if ( $fp == false ) {
            print("ファイルが開けません。処理を中断します。<br>");
            exit();
          }

          // 1件読み込み
          $list2 = fgetcsv($fp);

          fclose($fp);
        ?>

      <!-- ここまで編集 -->

      </main>



      <footer>
        Copyright &copy; 2022 NinomiyaHiroyuki. All rights reserved.
      </footer>

    </div>

  </body>

</html>





