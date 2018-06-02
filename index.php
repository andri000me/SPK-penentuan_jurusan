<!DOCTYPE html>
<html>
<head>
	<title>SPK_penentu_jurusan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/risol.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand navbar-link" href="index.php?page=home">SPK-SMA</a>
			</div>
			<div class="collapse navbar-collapse" id="navcol-1" name="navcol-1">
				<UL class="nav navbar-nav navbar-right" >
					<li role="presentation"><a href="index.php?halaman=home"> | Home</a></li>
					<!-- <li role="presentation"><a href="index.php?halaman=nilai"> | Masukkan Nilai</a></li> -->
					<!-- <li role="presentation"><a href="index.php?halaman=contact"><font color="white">Contact</font></a></li> -->
					<li role="presentation"><a href="index.php?halaman=about"> | About</a></li>
				</UL>
			</div>
		</div>
	</nav>
</div>
<!-- ============== BODY ============ -->
<?php 
switch (@$_GET['halaman']) {
	case 'home':
		include"home.php";
		break;
	case 'about':
		include"about.php";
		break;
	case 'nilai':
		include"data_diri.php";
		break;
	case 'input_nilai':
		include"form_nilai.php";
		break;
	case 'proses':
		include"proses.php";
		break;
	case 'dataku':
		include"dataku.php";
		break;
	default:
		include"home.php";
		break;
}


 ?>
<!-- ============== BODY ============ -->

</body>
</html>