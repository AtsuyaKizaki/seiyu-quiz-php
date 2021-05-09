# README
# [声優クイズ]取り扱い説明書
![quiz_index](https://user-images.githubusercontent.com/63807830/117570773-be909a80-b106-11eb-91c8-daf8d32dcf97.png)

## 本番環境URL
localhost:8888/quiz_php/index.html  
MAMP環境で作成しました。
# 制作した経緯
私自身、クイズが好きでよく友人同士で出し合ったりアプリから出題しあったりしていますが勉強系や常識系のものが多く、アニメの声優にスポットを当てたものがなかったので作ってみようと思ったのがきっかけです。
# 使用言語
・HTML/CSS  
・PHP  
・jQuery
# このアプリでできること、実装していること
・メインページ表示  
・3択クイズ表示  
・正答判定表示  
・正答率表示画面

# メインページ表示
![quiz_index](https://user-images.githubusercontent.com/63807830/117570773-be909a80-b106-11eb-91c8-daf8d32dcf97.png)
クイズ開始ボタンをクリックすることによって、quiz.phpに遷移します。

# 3択クイズ表示
![スクリーンショット 2021-05-09 21 03 00](https://user-images.githubusercontent.com/63807830/117571541-f77e3e80-b109-11eb-9ada-b131837b598f.png)
3択クイズ表示画面では選択肢横に配置してあるラジオボタンをクリックし決定ボタンをクリックすることで次の正答判定画面[quiz_result.php]へ遷移します。

# 正答判定表示
![スクリーンショット 2021-05-09 21 06 13](https://user-images.githubusercontent.com/63807830/117571648-6b204b80-b10a-11eb-8a44-a13bc46b8c3e.png)
３択クイズ表示画面から解答が送られた時に、quiz_result.phpは正しい解答に⭕️を、不正解には画像が薄くなるようにしました。
また右上に正解か不正解かわかるように表示させる機能ももたせました。

# 正答率表示画面
![スクリーンショット 2021-05-09 21 09 09](https://user-images.githubusercontent.com/63807830/117571759-d36f2d00-b10a-11eb-959e-53a6e4df2ef5.png)
全問題が終了した際にこちらの画面では、正答率を表示させる機能をつけました
