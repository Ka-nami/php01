

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<main>

<section class="form-container">

<!-- メッセージ表示箇所 -->
<p><?php if(!empty($MSG)) echo $MSG; ?></p>

<!-- 画像表示箇所 -->
<?php if(!empty($img_path)){;?>

<img src="<?php echo $img_path;?>" alt="">

<?php };?>


<!-- form タグからpost送信する -->
<form action="write.php" method="post" enctype="multipart/form-data">

<!-- input属性は type="file" と指定 -->
<input type="file" name="upload_image">
<select name="sheets" id="">
	<?php
	for($i=1; $i<=30; $i++){
		echo "<option value='$i'>$i</option>";
	}?>
</select>

<!-- 送信ボタン -->
<input type="submit" class="btn_submit" value="送信">

</form>
</section>

<section class="img-area">

<?php
if(!empty($img_path)){?>
<!-- ローカルフォルダに移動した画像を表示する -->
<img src="echo<?php $img_path;?>" alt="">

<?php
}
?>
</section>
</main>
	
</body>
</html>


<!-- <html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	年齢: <input type="text" name="age">
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html> -->