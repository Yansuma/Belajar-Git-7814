<html>
	<h1>Silahkan Login terlebih dahulu</h1>
	<form action="login.php" method="post">
		<div>
			<label>Username</label><br />
			<input type="text" name="usr"/><br/>
		</div>
		<div>
			<label>Password</label><br />
			<input type="password" name="pwd"/><br/>
		</div>
		<input type="submit" name="submit" value="Login"/>
	</form>
</html>
<?php
	error_reporting(E_ERROR);
	$usr= 123;
	$pwd= 123;
	$cookie = $_COOKIE;
	if($_POST['usr']==$usr && $_POST['pwd']==$pwd){
		setcookie('usr', $usr, time()+3600);
		setcookie('pwd', $pwd, time()+3600);
		header('location: admin.php');
	}if(!empty($_POST['usr']) && !empty($_POST['pwd'])){
		echo 'Username atau password salah!!';
	}else{
		
	}
?>