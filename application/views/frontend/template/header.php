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
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/owl/assets/owl.carousel.min.css')?>"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/owl/assets/owl.theme.default.min.css')?>"/>
		<link rel="icon" type="image/x-icon" href="<?=base_url('assets/img/gpib_new.png')?>">
    	<title>Kasih Karunia</title>
	</head>
	<body>
		<div class="col text-center">
			<a href="<?=base_url('')?>"> 
				<img class="banner-top" alt="<?=$heroes[0]->title?>" src="<?=base_url('resource/heroes/'.$heroes[0]->image)?>"> 
			</a>
		</div>
		<!-- welcome_home.png
		banner_top.png -->
		<nav class="navbar navbar-dark shadow navbar-expand-lg bg-success sticky-top border-success">
			<a class="navbar-brand" href="<?=base_url('')?>"> 
				<img class="rounded-circle p-img-show" src="<?=base_url('assets/img/gpib_new.png')?>">
			</a>
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end bg-success text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">GPIB Kasih Karunia Badung-Bali</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link <?=base_url() == current_url()?"active":""?>" aria-current="page" href="<?=base_url();?>"><span class="link-text <?=base_url() == current_url()?"active":""?> ">Beranda</span></a>
						</li> 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
								<span class="link-text">TENTANG KAMI</span>
							</a>
							<ul class="dropdown-menu shadow" style="width:20rem;" aria-labelledby="dropOne">
								<li><a class="dropdown-item text-wrap" href="<?=base_url('pages/sejarah')?>"><span class="link-text2"><i class="fas fa-angle-right"></i> SEJARAH GEREJA</span></a></li>
								<li><a class="dropdown-item text-wrap" href="<?=base_url('kmj')?>"><span class="link-text2"><i class="fas fa-angle-right"></i> KEPEMIMPINAN KMJ</span></a></li>
								<li><a class="dropdown-item text-wrap" href="<?=base_url('pages/phmj')?>"><span class="link-text2"><i class="fas fa-angle-right"></i> PHMJ</span></a></li>
							</ul>
						</li>
						<?php if ($presbiter){ ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle " href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
									<span class="link-text">Presbiter Sektor</span>
								</a>
								<ul class="dropdown-menu shadow" aria-labelledby="dropOne">
							<?php 
								foreach ($presbiter as $p){
							?>
								<li><a class="dropdown-item" href="<?=base_url('presbiter/'.$p->slug)?>"><span class="link-text2"><i class="fas fa-angle-right"></i> <?=$p->presbiter?></span></a></li>
							<?php
								}
							?>
								</ul>
							</li>
						<?php } else {} ?>
						<?php if ($pelkat){ ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle " href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
									<span class="link-text">Pelayanan Kategorial</span>
								</a>
								<ul class="dropdown-menu shadow" aria-labelledby="dropOne">
							<?php 
								foreach ($pelkat as $p){
							?>
								<li><a class="dropdown-item" href="<?=base_url('pelkat/'.$p->slug)?>"><span class="link-text2"><i class="fas fa-angle-right"></i> <?=$p->pelkat?></span></a></li>
							<?php
								}
							?>
								</ul>
							</li>
						<?php } else {} ?>
						<?php if ($komisi){ ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle " href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
									<span class="link-text">Komisi</span>
								</a>
								<ul class="dropdown-menu shadow" aria-labelledby="dropOne">
							<?php 
								foreach ($komisi as $k){
							?>
								<li><a class="dropdown-item" href="<?=base_url('komisi/'.$k->slug)?>"><span class="link-text2"><i class="fas fa-angle-right"></i> <?=$k->komisi?></span></a></li>
							<?php
								}
							?>
								</ul>
							</li>
						<?php } else {} ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
								<span class="link-text">Link Ibadah & Kegiatan Gereja</span>
							</a>
							<ul class="dropdown-menu shadow" style="width:20rem;" aria-labelledby="dropOne">
								<li><a target="_blank" class="dropdown-item text-wrap" href="https://forms.gle/8dZ497ieEm3uybpB8"><span class="link-text2"><i class="fas fa-angle-right"></i> Daftar Ibadah Minggu Pagi (Pukul 07.00 WITA)</span></a></li>
								<li><a target="_blank" class="dropdown-item text-wrap" href="https://forms.gle/WRTZBduhnWFwiaho8"><span class="link-text2"><i class="fas fa-angle-right"></i> Daftar Ibadah Minggu Siang (Pukul 10.00 WITA)</span></a></li>
								<li><a target="_blank" class="dropdown-item text-wrap" href="https://www.youtube.com/channel/UCGnTRQDrjbatgwX9Xh1NNlQ/featured"><span class="link-text2"><i class="fas fa-angle-right"></i> Ibadah Minggu Live Stream Youtube (Pukul 10.00 WITA)</span></a></li>
								<li><a target="_blank" class="dropdown-item text-wrap" href="https://us02web.zoom.us/j/83227041010?pwd=UXNYTDJMRGt2WkY3ZWpVak5YUU9zUT09"><span class="link-text2"><i class="fas fa-angle-right"></i> Ibadah Keluarga Zoom (Rabu Pukul 19.00 WITA)</span></a></li>
								<li>
									<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalLinkPelkat">
										<span class="link-text2"><i class="fas fa-angle-right"></i> Link Ibadah Pelkat (Zoom)</span>
									</a>
								</li>
								<div class="dropdown-divider"></div>
								<li><a target="_blank" class="dropdown-item text-wrap" href="https://us02web.zoom.us/j/7749958315?pwd=UWRMMWRUWXFmL0tWdTQvRFlVOGZGQT09"><span class="link-text2"><i class="fas fa-angle-right"></i> PERSIAPAN PF</span></a></li>
								<li><a target="_blank" class="dropdown-item text-wrap" href="https://us02web.zoom.us/j/84070495254?pwd=Zzh5UkluODZLRzdtRWNOeHJuTFpPQT09"><span class="link-text2"><i class="fas fa-angle-right"></i> IBADAH PERSIAPAN & PENGHIBURAN</span></a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropOne" role="button" data-bs-toggle="dropdown" aria-expanded="true">
								<span class="link-text">FORM ADMINISTRASI</span>
							</a>
							<ul class="dropdown-menu shadow" style="width:20rem;" aria-labelledby="dropOne">
								<li><a class="dropdown-item text-wrap" href="#"> <span class="link-text2"><i class='fas fa-file-alt'></i>&nbsp;Daftar Jemaat Baru</span></a></li>
								<li><a class="dropdown-item text-wrap" href="#"> <span class="link-text2"><i class='fas fa-file-alt'></i>&nbsp;Daftar Baptisan</span></a></li>
								<li><a class="dropdown-item text-wrap" href="#"> <span class="link-text2"><i class='fas fa-file-alt'></i>&nbsp;Informasi Katekisasi</span></a></li>
								<li><a class="dropdown-item text-wrap" href="#"> <span class="link-text2"><i class='fas fa-file-alt'></i>&nbsp;Daftar Pelayanan Pemberkatan Perkawinan</span></a></li>
								<li><a class="dropdown-item text-wrap" href="#"> <span class="link-text2"><i class='fas fa-file-alt'></i>&nbsp;Permohonan Atestasi (Pindah Gereja)</span></a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" target="_blank" href="http://bit.ly/WartaJemaatKKDN"><span class="link-text">Warta Jemaat</span></a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" target="_blank" href="http://bit.ly/WartaJemaatKKDN">Kependudukan</a>
						</li> -->
					</ul>
					<!-- <form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form> -->
				</div>
			</div>
		</nav>
		<br>
		<div class="col">
			<div class="alert alert-danger" style="font-size:1rem;" role="alert">
				<div class="row">
					<div class="col-1 text-center" style="padding: 0rem;">
						<i class='fas fa-exclamation-triangle'></i>
					</div>
					<div class="col-10 text-center">
						<marquee direction = "left" scrollamount="10" style="padding: 0rem;">
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
					<div class="col-1 text-center" style="padding: 0rem;">
						<i class='fas fa-exclamation-triangle'></i>
					</div>
				</div>
			</div>
		</div>