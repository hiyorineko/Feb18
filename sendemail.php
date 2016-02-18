<?php
	spl_autoload_register(function($class){
		require $class.".class.php";
	});
?>

<!DOCTYPE html>
<html>
<head>
	<title>class test</title>
</head>
<body>
	<?php
		include 'menu.html';
	?>
	<?php
		mb_send_mail('hiyoriaya@gmail.com','テストじゃ','テストだというに','hogehogehogehoge@hoge.hoge.hoge');
	?>
	<p>メールを送信しました。</p>
</body>
</html