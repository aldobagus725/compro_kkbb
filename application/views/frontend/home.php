<?php if($banners){
    $countBanners = count($banners[0]);
    $isActive = true;
?>
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php for($i=0;$i<$countBanners-1;$i++){
                    if ($i==0){
                ?>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?=$i?>" class="active" aria-current="true" aria-label="Slide <?=$i?>"></button>
                <?php } else{ ?>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?=$i?>" aria-label="Slide <?=$i?>"></button>
                <?php }} ?>
            </div>
            <div class="carousel-inner">
				<?php
					foreach ($banners as $list) {
						if ($isActive == true) {
							echo '<div class="carousel-item active">';
							$isActive = false;
						} else {
							echo '<div class="carousel-item">';
						}
						echo '<img class="d-block w-100 img-fluid" src="' . base_url() . "resource/banner/" . $list['image'] . '" alt="' . $list['title'] . '"></div>';
                    }
				?>
			</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<br>
<?php } ?>
<!-- Salam -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="accordion rounded-0 shadow" id="accordionFlushExample">
                <div class="accordion-item rounded-0">
                    <h2 class="accordion-header rounded-0 card-header bg-success" id="flush-headingOne">
                        <button class="accordion-button bg-success collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="text-white text-center">
                                <h4>SALAM / GREETINGS!</h4>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne">
                        <div class="accordion-body" style="padding:1rem 2rem;">
                            <div class="row">
                                <div class="col-sm-6 border-end">
                                    <p style="text-align: justify;font-size:0.9rem;">
                                        Majelis Jemaat GPIB "Kasih Karunia" Badung-Bali, mengucapkan <b>SELAMAT DATANG</b>.
                                        Bagi saudara-saudara yang merupakan jemaat baru, pertama kali ingin beribadah, ataupun 
                                        memerlukan pelayanan khusus, dapat menghubungi KANTOR MAJELIS JEMAAT setiap jam kerja, 
                                        atau Presbiter yang sedang bertugas.<br><br>
                                        
                                        Kantor Gereja : Hari Selasa – Minggu, Pukul 08.00 – 16.00 Wita <b>(Hari Senin Libur)</b>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p style="text-align: justify; font-style:italic; font-size:0.9rem;">
                                        The Congregational Council of GPIB "Kasih Karunia" Badung-Bali, wishes <b>WELCOME</b>.
                                        For those of you who are new members of the congregation, want to follow sunday service for the first time, or
                                        If you need special services, you can contact our Congregational Council office CHURCH on available work hour.
                                        or the Presbyterian on duty.<br><br>
                                        
                                        Work hour : Tuesday – Sunday, 08.00 – 16.00 WITA <b>(Monday is closed)</b>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="text-align: justify; font-style:italic;font-size:0.69rem;">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            Karena adanya Pandemi COVID-19, semua kegiatan peribadatan dilaksanakan secara online. 
                                            Ibadah Hari Minggu tetap dijalankan secara online dan offline (dengan jumlah yang dibatasi) sambil diterapkannya protokol 
                                            kesehatan COVID-19 sesuai dengan aturan pemerintah.
                                            
                                        </li>
                                        <li>
                                            Sayangnya, semua kegiatan peribadatan masih terbatas hanya untuk satu bahasa, yang bisa mempengaruhi interaksi bagi
                                            Anda jemaat yang berstatus WNA. Namun, Anda masih bisa mengikuti Ibadah Minggu kami lewat Streaming Online YouTube, dan menggunakan
                                            fitur auto-translate, meski beberapa terjemahan bisa jadi tidak akurat. Mohon permaklumannya.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            Due to COVID-19 Pandemic, all services are only available through online meetings. Sunday Service 
                                            are still available, offline (with limited seats) and online, while also appying COVID-19 protocols according to
                                            government's policy.
                                        </li>
                                        <li>
                                            Unfortunately, any service available has limitation of language that might affect interaction.
                                            However, you can still follow our sunday service with auto-translate from YouTube,
                                            though its translation might not be accurate. Apologize for the inconvenience.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Ibadah -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card rounded-0 shadow">
                <div class="card-header rounded-0 bg-success text-white">
                    <h5>Ibadah Minggu & Keluarga</h5>
                </div>
                <div class="card-body rounded-0">
                    <div class="row">
                        <div class="col">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/videoseries?list=PLvuzSH6_9oLrZcO8-n5PWK4tSxWtXdNIn" 
                                    title="Ibadah Minggu" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a target="_blank" class="btn btn-primary" href="https://forms.gle/8dZ497ieEm3uybpB8">Daftar Ibadah <br>Pukul 07.00 WITA</a>
                                            <a target="_blank" class="btn btn-info text-white" href="https://forms.gle/WRTZBduhnWFwiaho8">Daftar Ibadah <br>Pukul 10.00 WITA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a target="_blank" class="btn btn-success" href="https://bit.ly/TataIbadahKKDN​">Link Tata Ibadah</a>
                                            <a target="_blank" class="btn btn-secondary text-white" href="http://bit.ly/WartaJemaatKKDN">Link Warta Jemaat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <img src="<?=base_url('assets/img/banner_ika.png')?>" style="width: 100%;" alt="ika">
                            <h5 class="card-title">Ibadah Keluarga Daring</h5>
                            <p class="card-text">Setiap Rabu <br> Pukul 19.00</p>
                            <div class="d-grid gap-2">
                                <a class="btn btn-primary btn-lg text-white" target="_blank" style="text-decoration: none; color:white;" href="https://us02web.zoom.us/j/83227041010?pwd=UXNYTDJMRGt2WkY3ZWpVak5YUU9zUT09">Ikuti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 justify-content-center mx-auto ">
            <div class="card text-dark rounded-0 shadow" style="background:#F6F7F9 !important">
                <div class="card-body rounded-0" style="font-size:1rem;">
                    <h5 class="card-title text-center" style="padding:1rem;">Ibadah Pelkat Daring (Melalui Zoom Meetings)</h5>
                    <div class="row row-cols-2 row-cols-md-6">
                        <!-- PA -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" style="background:#F6F7F9 !important">
                                <img src="<?=base_url('assets/img/PA.png')?>" class="card-img-top" alt="pa">
                                <div class="card-body">
                                    <h6 class="card-title">Ibadah Pelkat PA</h6>
                                    <p class="card-text"> Setiap Minggu <br>Pukul 08.00</p>
                                </div>
                                <div class="card-footer border-0 text-center"  style="background:#F6F7F9 !important">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/84584885086?pwd=Z0Y3TEtzTlNGZG5DL3N4TXJRZW9Ydz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PT -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" style="background:#F6F7F9 !important">
                                <img src="<?=base_url('assets/img/PT.png')?>" class="card-img-top" alt="pa">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PT</h6>
                                    <p class="card-text"> Setiap Minggu <br>Pukul 08.00</p>
                                </div>
                                <div class="card-footer border-0 text-center"  style="background:#F6F7F9 !important">
                                    <a class="btn btn-primary btn-lg disabled" target="_blank" href="#">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- GP -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" style="background:#F6F7F9 !important">
                                <img src="<?=base_url('assets/img/GP.png')?>" class="card-img-top" alt="gp">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat GP</h6>
                                    <p class="card-text">Setiap Jumat <br>Pukul 19.00 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center"  style="background:#F6F7F9 !important">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/81715882041?pwd=VVlJLzJYV0F6VW9nMzhXZGloeFVYdz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PKP -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" style="background:#F6F7F9 !important">
                                <img src="<?=base_url('assets/img/PKP.png')?>" class="card-img-top" alt="pkp">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PKP</h6>
                                    <p class="card-text">Setiap Jumat <br> Pukul 17.30 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center"  style="background:#F6F7F9 !important">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/81761689861?pwd=dnpxWFdiNis5dGVyMXVpWWlGbzNDdz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PKB -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" style="background:#F6F7F9 !important">
                                <img src="<?=base_url('assets/img/PKB.png')?>" class="card-img-top" alt="pkb">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PKB</h6>
                                    <p class="card-text">Setiap Sabtu <br> Pukul 19.00 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center"  style="background:#F6F7F9 !important">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/81361650746?pwd=UWFyU2toeEN5ejhZRXpmYTNSMitNdz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PKLU -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" style="background:#F6F7F9 !important">
                                <img src="<?=base_url('assets/img/PKLU.png')?>" class="card-img-top" alt="pklu">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PKLU</h6>
                                    <p class="card-text">Setiap Sabtu <br> Akhir Bulan <br> Pukul 17.00 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center"  style="background:#F6F7F9 !important">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/84584885086?pwd=Z0Y3TEtzTlNGZG5DL3N4TXJRZW9Ydz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>