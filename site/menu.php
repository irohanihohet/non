<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>動画クリエイター</title>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">

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



      <nav class="flip-nav">
        <ul>
          <li class="nav01">
            <a href="index.html" class="flip-btn" title="ホームページ">
              <span>INDEX</span>
            </a>
          </li>
          <li class="nav02">
            <a href="history.html" class="flip-btn" title="歴史">
              <span>HISTORY</span>
            </a>
          </li>
          <li class="nav03">
            <a href="introduction.html" class="flip-btn" title="紹介">
              <span>INTRODUCTION</span>
            </a>
          </li>
          <li class="nav04">
            <a href="menu.php" class="flip-btn" title="掲示板">
              <span>MENU</span>
            </a>
          </li>
        </ul>
      </nav>



      <main>

        <!-- ここから下を編集 -->

        <section>
          <h2>
            MENU
          </h2>
        </section>

        <section>
          <h3>
            掲示板
          </h3>

          <p>
            項目を入力して投稿してください。
          </p>

          <hr>

          <form action="bbs_regist.php" method="post">
            <p>
              <label>名前:<br> <input type="text" name="name" maxlength="20" placeholder="佐藤春太郎"></label>
            </p>
            <p>
              <label>コメント:<br> <input type="text" name="comment" maxlength="30" size="60" placeholder="30文字以内"></label>
            </p>
            <p>
              <label><input type="submit" value="投稿する"></label>
            </p>
          </form>

          <hr>



          <?php
            // 受信データをhtml無効化してべつの変数へ代入
            if ( isset($_POST["name"]) == true ) {
              $name = htmlspecialchars($_POST["name"],ENT_QUOTES,"utf-8");
            }

            if ( isset($_GET["name"]) == true ) {
              $name = $_GET["name"];
            }

            if ( isset($_GET["cnt"]) == true ) {
              $stCnt = $_GET["cnt"];
              $edCnt = $stCnt + 49;
            } else {
              $stCnt = 1;
              $edCnt = 50;
            }

            // ファイル読み込
            $fp = fopen("bbs.csv","r");

            while ( ($data = fgetcsv($fp)) != false ){
              $bbsData[] = $data;
            }

            fclose($fp);

            // 反転処理
            $bbsData = array_reverse($bbsData);

            // 件数取得
            $bbsCnt = count($bbsData);

            // 表示処理
            $i = 1;
            foreach ( $bbsData as $line ) {
              if ( ($i >= $stCnt) && ($i <= $edCnt) ) {
                echo "<p>";
                  echo $line[0]."：";
                  echo $line[1]." ";
                  echo $line[2]."<br>";
                echo "</p>";
              }

              $i++;
            }
          ?>

        </section>



          <div class="gototop">
            <a href="#wrap" title="ページトップに戻る">
              <img src="images/gototop.gif" alt="▲">ページトップに戻る
            </a>
          </div>

      <!-- ここまで編集 -->

      </main>



      <footer>
        Copyright &copy; 2022 NinomiyaHiroyuki. All rights reserved.
      </footer>

    </div>

  </body>

</html>


