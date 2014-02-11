<?php session_start(); ?>

<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}

	

?>