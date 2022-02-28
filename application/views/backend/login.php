<!DOCTYPE html>
<html lang="en">
<head>
	<title>GPIB KKBB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?=base_url('assets/img/gpib_new.png')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/')?>css/main.css">
</head>
<body>
	<div class="container-login100" style="background-image: url('<?= base_url('assets/login/')?>/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<div class="row">
				<div class="col text-center">
					<img src="<?=base_url('assets/img/gpib_new.png')?>" width="75%">
				</div>
			</div>
			<br>
			<form method="POST" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" name="login" value="Sign In">
				</div>
				<!-- <div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div> -->
				<!-- <div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>
					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div> -->
				<!-- <div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div> -->
			</form>
			<br>
			<div class="row">
				<div class="col text-center" style="font-size:0.7rem;color:grey;">
					&copy; 2022 INFORKOM GPIB KASIH KARUNIA BADUNG BALI
				</div>
			</div>

		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="<?= base_url('assets/login/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/select2/select2.min.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url('assets/login/')?>vendor/countdowntime/countdowntime.js"></script>
	<script src="<?= base_url('assets/login/')?>js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript">
		$(function() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			<?php if ($this->session->flashdata('flash') == 'success') { ?>
				var title = '<?php echo $this->session->flashdata('message') ?>';
				Toast.fire({
					icon: 'success',
					title: title
				})
			<?php } else if ($this->session->flashdata('flash') == 'error') { ?>
				var title = '<?php echo $this->session->flashdata('message') ?>';
				Toast.fire({
					icon: 'error',
					title: title
				})
			<?php } ?>
		});
	</script>
</body>
</html>