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
	<p>ここはメインページです。</p>
</body>
</html>