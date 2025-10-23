<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Primary Meta Tags -->
	<title>MPP RSU RC - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">


	<!-- Favicon -->
	<link href="<?= base_url('') ?>assets/img/favicon/logo.png" rel="icon">
	<link href="<?= base_url('') ?>assets/img/favicon/logo.png" rel="apple-touch-icon">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<!-- Sweet Alert -->
	<link type="text/css" href="<?= base_url('') ?>vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

	<!-- Notyf -->
	<link type="text/css" href="<?= base_url('') ?>vendor/notyf/notyf.min.css" rel="stylesheet">

	<!-- Volt CSS -->
	<link type="text/css" href="<?= base_url('') ?>css/volt.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

	<main>

		<!-- Section -->
		<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
			<div class="container">
				<div class="row justify-content-center form-bg-image" data-background-lg="<?= base_url('') ?>assets/img/illustrations/login.jpg">
					<div class="col-12 d-flex align-items-center justify-content-center">
						<div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
							<div class="text-center text-md-center mb-4 mt-md-0">
								<h1 class="mb-0 h3">Login</h1>
							</div>
							<form action="<?= base_url('login/auth') ?>" method="POST" class="mt-4">
								<!-- Form -->
								<?php if ($this->session->flashdata('gagal')) { ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert"> <?= $this->session->flashdata('gagal'); ?> </div>
								<?php } ?>
								<div class="form-group mb-4">
									<label for="email">Username</label>
									<div class="input-group">
										<span class="input-group-text" id="basic-addon1"><i class="bi bi-people"></i></span>
										<input type="text" class="form-control" placeholder="Masukkan Username" id="username" name="username" autofocus required>
									</div>
								</div>
								<!-- End of Form -->
								<div class="form-group">
									<!-- Form -->
									<div class="form-group mb-4">
										<label for="password">Password</label>
										<div class="input-group">
											<span class="input-group-text" id="basic-addon2">
												<i class="bi bi-key"></i>
											</span>
											<input type="password" placeholder="Masukkan Password" class="form-control" id="password" name="password" required>
										</div>
									</div>
									<!-- End of Form -->
								</div>
								<div class="d-grid">
									<button type="submit" class="btn btn-dark">Submit</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			</div>
		</section>
	</main>

	<!-- Core -->
	<script src="<?= base_url('') ?>vendor/@popperjs/core/dist/umd/popper.min.js"></script>
	<script src="<?= base_url('') ?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Vendor JS -->
	<script src="<?= base_url('') ?>vendor/onscreen/dist/on-screen.umd.min.js"></script>

	<!-- Slider -->
	<script src="<?= base_url('') ?>vendor/nouislider/distribute/nouislider.min.js"></script>

	<!-- Smooth scroll -->
	<script src="<?= base_url('') ?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

	<!-- Charts -->
	<script src="<?= base_url('') ?>vendor/chartist/dist/chartist.min.js"></script>
	<script src="<?= base_url('') ?>vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

	<!-- Datepicker -->
	<script src="<?= base_url('') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

	<!-- Sweet Alerts 2 -->
	<script src="<?= base_url('') ?>vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

	<!-- Moment JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

	<!-- Vanilla JS Datepicker -->
	<script src="<?= base_url('') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

	<!-- Notyf -->
	<script src="<?= base_url('') ?>vendor/notyf/notyf.min.js"></script>

	<!-- Simplebar -->
	<script src="<?= base_url('') ?>vendor/simplebar/dist/simplebar.min.js"></script>

	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<!-- Volt JS -->
	<script src="<?= base_url('') ?>assets/js/volt.js"></script>


</body>

</html>