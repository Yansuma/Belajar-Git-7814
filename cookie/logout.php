<?php
	setcookie('usr', '');
	setcookie('pwd', '');
	
	echo '<h1>Cookie</h1><br/>';
	echo 'Hapus data cookie berhasil';
	
	header('Refresh: 2; URL=login.php');
?>