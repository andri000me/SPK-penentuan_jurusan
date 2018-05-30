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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand navbar-link" href="index.php?page=home">Cek-Tujuan</a>
			</div>
			<div class="collapse navbar-collapse" id="navcol-1" name="navcol-1">
				<UL class="nav navbar-nav navbar-right" >
					<li role="presentation"><a href="index.php?halaman=home"> | Home</a></li>
					<li role="presentation"><a href="index.php?halaman=menu"> | Mulai Tes</a></li>
					<!-- <li role="presentation"><a href="index.php?halaman=contact"><font color="white">Contact</font></a></li> -->
					<li role="presentation"><a href="index.php?halaman=about"> | About</a></li>
				</UL>
			</div>
		</div>
	</nav>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3>Cek Jurusan/Minat</h3>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row"> 
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="form-grup">
				<label>Nama</label>
				<input type="text" class="form-control" placeholder="Masukkan nama">
			</div>
			<div class="form-grup">
				<label>Alamat</label>
				<input type="text" class="form-control" placeholder="Masukkan Alamat">
			</div>
			<div class="form-grup">
				<label>Tanggal Lahir</label>
				<input type="date" class="form-control" >
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-grup">
						<label>Ilmu Pengetahuan Alam</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>Matematika</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>Bahasa Inggris</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>Seni Budaya</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>PKN</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-grup">
						<label>Ilmu Pengetahuan Sosial</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>Bahasa Indonesia</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>Agama Islam</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<div class="form-grup">
						<label>Penjas</label>
						<input type="text" class="form-control" placeholder="10-100">
					</div>
					<input type="submit" value="Kirim" class="btn btn-info" style="margin-top:20px">
				</div>
			</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="col-sm-5"></div>
	</div>
</div>
</body>
</html>
