<!doctype html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="<?=base_url('assets/img/gpib_new.png')?>">
    	<title>Kasih Karunia</title>
	</head>
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-dark navbar-expand-lg bg-dark sticky-top shadow">
			<div class="container">
				<a class="navbar-brand" href="<?=base_url('')?>">
					<img class="p-img-show rounded-circle" src="<?=base_url('assets/img/gpib_new.png')?>"> 
					<p class="p-show">GPIB Kasih Karunia Badung-Bali</p>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">GPIB Kasih Karunia Badung-Bali</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="<?=base_url();?>">Beranda</a>
							</li> 
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="http://bit.ly/WartaJemaatKKDN">PHMJ</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
									Presbiter Sektor
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropOne">
									<li><a class="dropdown-item" href="#">Anthiokia</a></li>
									<li><a class="dropdown-item" href="#">Betlehem</a></li>
									<li><a class="dropdown-item" href="#">Corinthians</a></li>
									<li><a class="dropdown-item" href="#">Damsyik</a></li>
									<li><a class="dropdown-item" href="#">Efrata</a></li>
									<li><a class="dropdown-item" href="#">Filipi</a></li>
									<li><a class="dropdown-item" href="#">Galilea</a></li>
									<li><a class="dropdown-item" href="#">Hermon</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
									Pelayanan Kategorial
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropOne">
									<li><a class="dropdown-item" href="#">Pelayanan Anak</a></li>
									<li><a class="dropdown-item" href="#">Persekutuan Teruna</a></li>
									<li><a class="dropdown-item" href="#">Gerakan Pemuda</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">Persekutuan Kaum Perempuan</a></li>
									<li><a class="dropdown-item" href="#">Persekutuan Kaum Bapak</a></li>
									<li><a class="dropdown-item" href="#">Persekutuan Kaum Lanjut Usia</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
									Komisi
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropOne">
									<li><a class="dropdown-item" href="#">Musik Gereja</a></li>
									<li><a class="dropdown-item" href="#">Informasi dan Komunikasi</a></li>
									<li><a class="dropdown-item" href="#">Rumah Tangga</a></li>
									<li><a class="dropdown-item" href="#">Pelayanan & Kesaksian</a></li>
									<li><a class="dropdown-item" href="#">Gereja & Masyarakat</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="http://bit.ly/WartaJemaatKKDN">Warta Jemaat</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="http://bit.ly/WartaJemaatKKDN">Kependudukan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="http://bit.ly/WartaJemaatKKDN">Blog</a>
							</li>
						</ul>
						<!-- <form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form> -->
					</div>
				</div>
			</div>
		</nav>
		<br>
		<div class="container-fluid">
			<div class="alert bg-danger text-white" style="font-size:1.1rem;">
				<marquee direction = "left" scrollamount="10">
					Karena adanya Pandemi COVID-19, semua kegiatan peribadatan dilaksanakan secara online. 
					Ibadah Hari Minggu tetap dijalankan secara online dan offline (dengan jumlah yang dibatasi) 
					sambil diterapkannya protokol kesehatan COVID-19 sesuai dengan aturan pemerintah.
					<i>
					Due to COVID-19 Pandemic, all services are only available through online meetings. Sunday Service 
					are still available, offline (with limited seats) and online, while also appying COVID-19 protocols according to
					government's policy.
					</i>
				</marquee>
			</div>
		</div>
		<div class="container">
			<div class="row" style="background-color: white;">
				<div class="col-sm-9">