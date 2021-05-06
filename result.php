<?php
  $num_correct = $_POST['num_correct'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>声優クイズ 結果</title>
    <link rel="stylesheet" type="text/css" href="result.css">
  </head>
  <body>
        <div class="main">
      <div class="site-logo">
        <img src="img/quiz_2.png" alt="logo">
      </div>
      <div class="question-title">
        声優が演じたキャラ当てクイズ
      </div>

      <div class="border-hedder"></div>


      <div class="question-result">
      正答率: <?php echo round((float)($num_correct / 4), 2) * 100;?>%<br>
    </div>

    <div class="end-comment">
      お疲れ様でした！
    </div>

      <div class="end-button">
        <a href= "index.html" >
          <img src="img/end-button.png" alt="logo">
        </a>
      </div>
    </div>
  </body>
</html>