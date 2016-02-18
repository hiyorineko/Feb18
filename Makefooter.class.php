<?php
	class Makefooter{
		function mf(){
			$fp = fopen("count.txt","r+");
			$count = fgets($fp,10);
			$count++;
			rewind($fp);
			fputs($fp,$count);
			fclose($fp);
			printf("%06d",$count);
			echo "<br>";
			date_default_timezone_set('Asia/Tokyo');
			echo date("Y/m/d");
		}
	}
