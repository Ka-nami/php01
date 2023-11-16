<?php

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

//＊配列の準備
$txt = [];
while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp)); 
}
fclose($fp);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-color: whitesmoke;
    }
    td{
        background-color: white;
    }
    </style>
</head>
<body background="./images_after/chizu.png">


<?php 
//＊ここで表示処理
for($i=0; $i<count($txt)-1;$i++){
        echo "<table border align='left'>";
        echo "<tr><td>".$txt[$i][0]."</td></tr>";
        echo "<tr><td align='center'>".'<img src="'.$txt[$i][1].'" alt="" widh="100px" height="200px;">'."</td></tr>";
        echo "<tr><td align='center'>".$txt[$i][2]."</td></tr>";
        echo "</table>";
}
?>

<footer>
<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</footer>
</body>
</html>















