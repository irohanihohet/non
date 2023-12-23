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
            ユーザー登録再入力画面
          </h2>

          <p>
            正しい情報を入力してください。
          </p>

          <hr>

          <form action="regist_check.php" method="post">
            <p>
              <label>名前:<br> <input type="text" name="name" maxlength="20" placeholder="佐藤春太郎"></label>
            </p>
            <p>
              <label>メールアドレス:<br> <input type="email" name="mail" maxlength="30" size="30" placeholder="abc@abc.co.jp"></label>
            </p>
            <p>
              <label>パスワード:<br> <input type="password" name="pass" maxlength="20" size="15" placeholder="20文字以内"></label>
            </p>
            <p>
              <label><input type="submit" value="ユーザー登録の確認"></label>
            </p>
          </form>

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
        ?>

      <!-- ここまで編集 -->

      </main>



      <footer>
        Copyright &copy; 2022 NinomiyaHiroyuki. All rights reserved.
      </footer>

    </div>

  </body>

</html>





