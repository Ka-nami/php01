<?php
// $_FILEに情報があれば(formからpost送信されていれば)以下の処理を実行する
if(!empty($_FILES)){

// $_FILESからファイル名を取得する
	$filename = $_FILES['upload_image']['name'];

// $_FILESから保存先を取得してimage_after(ローカルフォルダ)に移す
// move_uploaded_file(第1引数：ファイル名、第2引数：格納後のディレクトリ/ファイル名)
	$upload_path = 'images_after/'.$filename;

	$result = move_uploaded_file($_FILES['upload_image']['tmp_name'],$upload_path);

	if($result){
		$MSG = 'アップロード成功:'.$filename;
		$img_path = $upload_path;

	}else{

		$MSG = 'アップロード失敗：'.$_FILES['upload_image']['error'];
	}

}else{
		$MSG = '画像を選択してください';
}

// $upload_image = $_FILES["upload_image"];
$sheets = $_POST["sheets"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$upload_path.$c.$sheets;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); // \nは<br>
// PHPのドットは＋と同じ意味 ↑変数＋改行
fclose($file);

?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<p><?=$str?></p>

<ul>
<li><a href="read.php">確認</a></li>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>