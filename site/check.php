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
            ユーザー登録確認画面
          </h2>

          <p>
            登録内容に間違いがない場合は完了へ、<br>
            間違いがある場合は再入力へ進んでください。<br>
          </p>

          <hr>



          <?php
            // 受信データをhtml無効化してべつの変数へ代入
            $name = htmlspecialchars($_POST["name"],ENT_QUOTES,"utf-8");
            $pass = htmlspecialchars($_POST["pass"],ENT_QUOTES,"utf-8");
            $mail = htmlspecialchars($_POST["mail"],ENT_QUOTES,"utf-8");

            echo "<p>";
              echo "お名前:".$name."<br>";
              echo "メールアドレス:".$mail."<br>";
              echo "パスワード:表示しません";
            echo "</p>";
          ?>



          <!-- 登録完了へ -->
          <form action="regist_fin.php" method="post">
            <p>
              <input type="hidden" name="name" value="<?= $name ?>">
              <input type="hidden" name="mail" value="<?= $mail ?>">
              <input type="hidden" name="pass" value="<?= $pass ?>">
              <input type="submit" value="完了する">
            </p>
          </form>

          <!-- 再入力 -->
          <form action="reinput.php" method="post">
            <p>
              <input type="hidden" name="name" value="<?= $name ?>">
              <input type="hidden" name="mail" value="<?= $mail ?>">
              <input type="hidden" name="pass" value="<?= $pass ?>">
              <input type="submit" value="再入力する">
            </p>
          </form>

          <hr>

        </section>

      <!-- ここまで編集 -->

      </main>



      <footer>
        Copyright &copy; 2022 NinomiyaHiroyuki. All rights reserved.
      </footer>

    </div>

  </body>

</html>





