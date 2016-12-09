<html>
	<form action="index.php" method="post">
		<div>
			<label>Panjang</label><br />
			<input type="text" name="panjang"/><br/>
		</div>
		<div>
			<label>Lebar</label><br />
			<input type="text" name="lebar"/></br>
		</div>
		<input type="submit" value="Hitung"/>
	</form>
</html>

<?php
	error_reporting(E_ERROR);
	require 'rumus.php';
	$input = $_POST;
	$luas = luas_persegi($input['panjang'], $input['lebar']);
	$kel = keliling_persegi($input['panjang'], $input['lebar']);
	echo 'Luasnya adalah '. $luas .'<br/>';
	echo 'Kelilingnya adalah '. $kel .'<br/>';
	
?>