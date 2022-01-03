<html>
<head><!DOCTYPE html>
<html>
<head>
  <title></title>
</head><head>
	
</head><div class="bg-secondary"><h1><b><marquee>SELAMAT DATANG DI MENDING PARKIR</b></marquee></h1></div><head>
  

</html>
<body>
  <p></p>
  <img src="parkiran.jpeg" style="width:1440px;height:745px;" align="middle"></p>
</body>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Masuk</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/dist/css/adminlte.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/iCheck/square/blue.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta charset="UTF-8">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo base_url('assets') ?>/index2.html"><b>Admin </b>Only</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body - bg-primary">
				<p class="login-box-msg">Mau masuk? Isi yang di bawah dulu ya</p>
				<form action="<?php echo base_url('login/cekuser') ?>" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" id="" placeholder="Username" name="username">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
							<input type="password" class="form-control" id="" placeholder="Password" name="password">
						</div>
					</div>
					<!-- /.col -->
					<div class="form-group">
						<button class="btn btn-success btn-block btn-flat">Masuk</button>
					</div>
					<!-- /.col -->
			</div>
			</form>
			<p <?php echo $ipaddres; ?></p>
			<center>
							</center>
		</div>
		<!-- /.login-card-body -->
	</div>
	</div>
	<!-- /.login-box -->
	<!-- jQuery -->
	<script src="<?php echo base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url('assets') ?>/plugins/iCheck/icheck.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php echo "<script>" . $this->session->flashdata('message') . "</script>" ?>
</body>
</html>
<style>
body {
  background-color: lighblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>
<head>
<link rel="stylesheet" type="text/php" href="login.php">
</head>