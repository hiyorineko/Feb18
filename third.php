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
	
	<p>ここは3番目のページです。</p>
</body>
</html>
