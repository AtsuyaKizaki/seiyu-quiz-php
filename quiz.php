<?php

 //入力された値の設定

 if(isset($_POST['times'])){
   $times = $_POST['times'];
 }
 else{
   //エラー
   $times= 0;
 }
 if(isset($_POST['num_correct'])){
   $num_correct = $_POST['num_correct'];
 }
 else{
   //エラー
   $num_correct= 0;
 }
 ?>
<?php
$question0 = ["神谷浩史が演じていないキャラは？","折原臨也","リヴァイ","緑間真太郎",
            "img/izaya.jpeg","img/rivai.jpeg","img/midorima.jpeg"];
$question1 = ["内田真礼が演じていないキャラは？","凸守早苗","ノーマン","シャロ",
            "img/dekomori.jpg","img/norman.jpeg","img/syaro.jpg"];
$question2 = ["島﨑信長が演じていないキャラは？","ユージオ","イオク","西谷夕",
            "img/yu-jio.jpg","img/iok.jpg","img/nisinoya.jpeg"];
$question3 = ["花澤香菜が演じたキャラで一番人気は？","赤血球","千石撫子","小野寺小咲",
            "img/hataraku.jpg","img/nadeko.jpeg","img/onodera.jpeg"];

?>
<?php
$arr =[$question0,$question1,$question2,$question3];

$response_left =$arr[$times][1];
$response_center =$arr[$times][2];
$response_right =$arr[$times][3];

$response_pic_left = $arr[$times][4];
$response_pic_center = $arr[$times][5];
$response_pic_right = $arr[$times][6];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="quiz.css">
  </head>
  <body>
        <div class="main">
      <div class="site-logo">
        <img src="img/quiz_2.png" alt="logo">
      </div>
      <div class="question-title">
      <?php
         $a = $times + 1;
         echo "第","$a","問";
       ?>
      </div>
      <div class="border-hedder"></div>

      <div class="question-instruction">
        <?php echo $arr[$times][0]; ?>
      </div>

      <div class="q-logo">
        <img src="img/q.png" alt="logo">
      </div>

      <div class="question-box">
        <form method="POST" class="form" action="quiz_result.php">
            <div class="question-box-left">
              <div class="question-number1">①</div>
              <div class="question-text"><?php echo $response_left;?>
              <input id="check-a" type="radio" name="response" value="left" checked><label for="check-a"></label>
              </div>
              <div class="question-image"><img src="<?php echo $response_pic_left;?>" alt="logo"></div>
            </div>

            <div class="question-box-center">
              <div class="question-number2">②</div>
              <div class="question-text"><?php echo $response_center;?>
              <input id="check-b" type="radio" name="response" value="center"><label for="check-b"></label>
              </div>
              <div class="question-image"><img src="<?php echo $response_pic_center;?>" alt="logo"></div>
            </div>

            <div class="question-box-right">
              <div class="question-number3">③</div>
              <div class="question-text"><?php echo $response_right;?>
              <input id="check-c" type="radio" name="response" value="right"><label for="check-c"></label>
              </div>
              <div class="question-image"><img src="<?php echo $response_pic_right;?>" alt="logo"></div>
            </div>
            <input type="hidden" name="times" value=<?php echo $times;?>>
            <input type="hidden" name="num_correct" value=<?php echo $num_correct;?>>
            <input id="send_button" type="submit" value="決定する" style="background-color:#FFFF99;">

        </form>
　　　</div>
    </div>
  </body>
</html>