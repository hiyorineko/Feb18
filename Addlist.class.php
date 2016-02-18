<?php
	class Addlist{
		public function makeli(){
			echo "<ul>\r\n";
			echo "<li>\r\n";
				if($_SERVER["SCRIPT_NAME"]=="/php/Feb18/top.php"){
					echo "メイン\r\n";
				}else{
					echo '<a href="top.php">メイン</a>'."\r\n";
				}
			echo "</li>\r\n";
			echo "<li>\r\n";
				if($_SERVER["SCRIPT_NAME"]=="/php/Feb18/next.php"){
					echo "2番目\r\n";
				}else{
					echo '<a href="next.php">2番目</a>'."\r\n";
				}
			echo "</li>\r\n";
			echo "<li>\r\n";
				if($_SERVER["SCRIPT_NAME"]=="/php/Feb18/third.php"){
					echo "3番目\r\n";
				}else{
					echo '<a href="third.php">3番目</a>'."\r\n";
				}
			echo "</li>\r\n";
						echo "<li>\r\n";
				if($_SERVER["SCRIPT_NAME"]=="/php/Feb18/sendemail.php"){
					echo "メール送信\r\n";
				}else{
					echo '<a href="sendemail.php">メール送信</a>'."\r\n";
				}
			echo "</li>\r\n";
			echo "</ul>\r\n";
		}
	}