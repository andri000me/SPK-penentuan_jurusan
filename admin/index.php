<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="#" method="POST">
	<input type="text" name="user" placeholder="USERNAME">
	<input type="password" name="pass" placeholder="PASSWORD">
	<input type="submit" value="masuk">
</form>
<?php  
if (@$_POST['user']=='admin' && $_POST['pass']=='admin') {
	echo "<script type='text/javascript'>alert('Login sukses');</script>";
	echo "<meta http-equiv='refresh' content='0; URL=http://localhost/SPK-penentu_jurusan/admin/menu.php'/>";
}
?>
</body>
</html>