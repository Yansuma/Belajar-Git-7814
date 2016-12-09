<html>
	<h1><b>Form Registrasi</b></h1>
	</br>
	<form action="form.php" method="post">
		<div>
			<label>Nama Lengkap</label><br />
			<input type="text" name="in_nama"/><br/>
		</div>
		<div>
			<label>Alamat</label><br />
			<textarea name="in_alamat"></textarea></br>
		</div>
		<div>
			<label>Nomor Telepon</label><br />
			<input type="text" name="in_telp"/><br/>
			</div>
		<div>
			<label>Email</label><br />
			<input type="text" name="in_email"/><br/>
		</div>
		<input type="submit" name="submit" value="Kirim"/>
	</form>
</html>

<?php
	echo "Nama : " . $_POST['in_nama'] . "<br/>";
	echo "Alamat : " . $_POST['in_alamat'] . "<br/>";
	echo "Nomor Telepon : " . $_POST['in_telp'] . "<br/>";
	echo "Email : " . $_POST['in_email'] . "<br/>";
?>
