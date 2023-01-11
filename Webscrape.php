<?php
	$data = file_get_contents('http://www.astrologycom.com/virgodaily.php');
	$regex = '/(Thu Apr 5:.*)Fri apr 6/';
	preg_match($regex,$data,$match);
	// var_dump($match);
	echo $match[1];
	?>
