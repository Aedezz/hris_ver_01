<?php
	session_start();
	
	$random = rand(1, 12).rand(1,12).rand(1, 12).rand(1, 12);
	
	$_SESSION['captcha'] = $random;
	
	$captcha = imagecreatefromjpeg("images/b_160.jpg");
	$color = imagecolorallocate($captcha, 0, 0, 0);
	$font = realpath('ColorBlind.ttf');
	imagettftext($captcha, 14, 0, rand(10, 50), rand(20, 30), $color, $font, $random );
	imagepng($captcha);
	imagedestroy($captcha);
?>