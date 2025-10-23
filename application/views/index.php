<?php
ob_start();
foreach ($_COOKIE as $key => $value) {
	setcookie($key, '', time() - 3600, '/');
}
ob_end_flush();
?>

<!doctype html>
<html lang="en">

<head>
	<title>Login - SIMRS RSUD SA</title>

	<!-- Favicon -->
	<link href="<?= base_url('') ?>assets/img/favicon/logo.png" rel="icon">
	<link href="<?= base_url('') ?>assets/img/favicon/logo.png" rel="apple-touch-icon">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('') ?>loginCSS/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>SIMRS - v0.1</h2>
								<p>Sistem Informasi Manajemen Rumah Sakit</p>
								<a href="https://rssa.bantulkab.go.id/" class="btn btn-white btn-outline-white">RSUD SARAS ADYATAMA</a>
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5">
							<div class="d-flex">
								<div class="w-100">
									<img src="<?= base_url('') ?>assets/img/logo.png" width="70" height="auto">
								</div>
							</div>
							<br>
							<form action="<?= base_url('login/auth') ?>" method="POST">
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" class="form-control" placeholder="Masukkan Username" id="username" name="username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Masukkan Password" id="password" name="password" required>

									<?php if ($this->session->flashdata('gagal')) { ?>
										<br>
										<div class="alert alert-danger alert-dismissible fade show" role="alert"> <?= $this->session->flashdata('gagal'); ?> </div>
									<?php } ?>

								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary px-3">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('') ?>loginCSS/js/jquery.min.js"></script>
	<script src="<?= base_url('') ?>loginCSS/js/popper.js"></script>
	<script src="<?= base_url('') ?>loginCSS/js/bootstrap.min.js"></script>
	<script src="<?= base_url('') ?>loginCSS/js/main.js"></script>

</body>

</html>