<?php
	session_start();
	unset($_SESSION['idEoffice']);
	unset($_SESSION['username']);
	session_destroy();
	header("Location: ../hris_ver_0");
?>