</body>
<!-- FOOTER --> 
<br>
<footer class="footer-uhuy bg-success" style="color:white;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="footer-title">Informasi</h1>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <p>
                                    Ketua Majelis Jemaat <br>GPIB Kasih Karunia Badung-Bali <br>
                                    <b>[Pdt. Johanes Wadu]</b>
                                </p>
                            </div>
                        </div>
                        <br>
                        <h5>Hubungi Kami:</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <a class="about-us" href="#" target="_blank"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="about-us" href="#" target="_blank"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="about-us" target="_blank" href="https://wa.me/6282247231915?text=Halo%20saya%20ingin%20mencari%20informasi" target="_blank"><i class='fab fa-whatsapp'></i>&nbsp;Whatsapp</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="about-us" target="_blank" href="#">Blog Gereja</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h5>Jam Ibadah</h5>
                        <hr>
                        <ul>
                            <li>Ibadah Minggu : Setiap Minggu pukul 07.00 dan 10.00 WITA</li>
                            <li>Ibadah Rabu : Setiap Rabu pukul 19.00 WITA</li>
                            <li>Ibadah Pelkat : 
                                <ul>
                                    <li>PA : Setiap Minggu Pukul 08.00 WITA</li>
                                    <li>PT : Setiap Minggu Pukul 08.00 WITA</li>
                                    <li>GP : Setiap Jumat Pukul 19.00 WITA</li>
                                    <li>PKP : Setiap Jumat Pukul 17.30 WITA</li>
                                    <li>PKB : Setiap Sabtu Pukul 19.00 WITA</li>
                                    <li>PKLU : Setiap Sabtu Akhir Bulan Pukul 17.00 WITA</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="footer-title">QRIS PERSEMBAHAN</h4>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <img style="width:100%" class="rounded" src="<?=base_url('assets/img/qris_pelayanan.png')?>">
                            </div>
                            <div class="col">
                                <img style="width:100%" class="rounded" src="<?=base_url('assets/img/qris_pembangunan.png')?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">Berita Duka</h5>
                        <hr>
                        <div class="card text-dark">
                            <div class="card-body">
                                <div class="owl-carousel owl-theme">
                                    <?php
                                        if (!empty($berita_duka)) {
                                            foreach ($berita_duka as $list) {
                                        ?>
                                            <a href="<?= base_url() . "pages/" . $list->slug ?>" style="text-decoration:none;color:black">
                                                <div class="row">
                                                    <div class="col text-end" style="font-style: italic;font-size:0.8rem;">
                                                        <?=dateID($list->created_at)?>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <img style="width: 20%;display:inline;" src="<?= base_url() . "assets/img/test.png"?>" alt="berita_duka_<?=$list->slug?>">
                                                    </div>
                                                </div>
                                                <h5 class="text-center"><?= $list->title ?></h5>
                                                <div style="font-size:0.7rem!important">
                                                    <?= $list->body ?>
                                                </div>
                                            </a>
                                            <?php }
                                        } else { ?>
                                            <div class="alert alert-warning" role="alert">
                                                Belum ada notifikasi!
                                            </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-sm-4">
                <h1 class="footer-title">Alamat Gereja (Google Map)</h1>
                <hr>
                <h6>GPIB Kasih Karunia Badung - Bali:</h6>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2023111.7191623682!2d112.14400480104212!3d-7.958579056294461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23928653971b3%3A0xe360d4ac79d2700c!2sSTTII%20Bali!5e0!3m2!1sen!2sid!4v1635781983373!5m2!1sen!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <br>
                <h6>Kantor GPIB Kasih Karunia Badung - Bali:</h6>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.796273347089!2d115.1769811146043!3d-8.615548393808345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd239ff2867de5f%3A0x7ec4fd43725e7651!2sKantor%20Gereja%20GPIB%20Kasih%20Karunia%20Denpasar!5e0!3m2!1sen!2sid!4v1635781824368!5m2!1sen!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <br>
                <br>
                <h4 class="footer-title">Channel YouTube</h4>
                <hr>
                <div class="ratio ratio-16x9">
                    <iframe 
                        src="https://www.youtube.com/embed/videoseries?list=PLvuzSH6_9oLqS6RGI1UaokAQNtWQIUadv" 
                        title="Musik" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        <hr>
        <div class="row text-white">
            <div class="col-sm-12 mx-auto text-end">
                &copy; 2021 Copyright KOMISI INFORKOM KKBB
            </div>
        </div>
    </div>
</footer>
    <!-- Modal -->
    <div class="modal fade" id="modalLinkPelkat" tabindex="-1" aria-labelledby="modalLinkPelkatLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLinkPelkatLabel">Link Ibadah Pelkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row row-cols-2 row-cols-md-3">
                        <!-- PA -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100">
                                <img src="<?=base_url('assets/img/PA.png')?>" class="card-img-top text-center" alt="pa">
                                <div class="card-body">
                                    <h6 class="card-title">Ibadah Pelkat PA</h6>
                                    <p class="card-text"> Setiap Minggu <br>Pukul 08.00</p>
                                </div>
                                <div class="card-footer border-0 text-center" style="background:white;">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/84584885086?pwd=Z0Y3TEtzTlNGZG5DL3N4TXJRZW9Ydz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PT -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100">
                                <img src="<?=base_url('assets/img/PT.png')?>" class="card-img-top" alt="pa">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PT</h6>
                                    <p class="card-text"> Setiap Minggu <br>Pukul 08.00</p>
                                </div>
                                <div class="card-footer border-0 text-center" style="background:white;">
                                    <a class="btn btn-primary btn-lg disabled" target="_blank" href="#">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- GP -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" >
                                <img src="<?=base_url('assets/img/GP.png')?>" class="card-img-top" alt="gp">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat GP</h6>
                                    <p class="card-text">Setiap Jumat <br>Pukul 19.00 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center" style="background:white;">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/81715882041?pwd=VVlJLzJYV0F6VW9nMzhXZGloeFVYdz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PKP -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" >
                                <img src="<?=base_url('assets/img/PKP.png')?>" class="card-img-top" alt="pkp">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PKP</h6>
                                    <p class="card-text">Setiap Jumat <br> Pukul 17.30 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center" style="background:white;">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/81761689861?pwd=dnpxWFdiNis5dGVyMXVpWWlGbzNDdz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PKB -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100">
                                <img src="<?=base_url('assets/img/PKB.png')?>" class="card-img-top" alt="pkb">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PKB</h6>
                                    <p class="card-text">Setiap Sabtu <br> Pukul 19.00 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center" style="background:white;">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/81361650746?pwd=UWFyU2toeEN5ejhZRXpmYTNSMitNdz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                        <!-- PKLU -->
                        <div class="col" style="padding: 1rem;">
                            <div class="card border-0 text-center h-100" >
                                <img src="<?=base_url('assets/img/PKLU.png')?>" class="card-img-top" alt="pklu">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Ibadah Pelkat PKLU</h6>
                                    <p class="card-text">Setiap Sabtu <br> Akhir Bulan <br> Pukul 17.00 WITA</p>
                                </div>
                                <div class="card-footer border-0 text-center" style="background:white;">
                                    <a class="btn btn-primary btn-lg" target="_blank" href="https://us02web.zoom.us/j/84584885086?pwd=Z0Y3TEtzTlNGZG5DL3N4TXJRZW9Ydz09">Ikuti</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">TUTUP</button>
                </div>
            </div>
        </div>
    </div>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/js/bootstrap.bundle.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/owl/owl.carousel.min.js')?>"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            margin: 0,
            autoWidth:true,
            // loop:true,
            items:1,
            margin:10,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false
        });
    });
</script>