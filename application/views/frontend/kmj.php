<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Sejarah KMJ GPIB Kasih Karunia Badung Bali</h3>
        </div>
    </div>
</div>
<?php if ($kmj){ ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4" style="padding:2rem 1rem;">
            <?php foreach ($kmj as $d){ ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=base_url('resource/kmj/'.$d->image)?>" class="card-img-top" alt="kmj<?=$d->image?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?=$d->nama_lengkap?></h5>
                        </div>
                        <div class="card-footer text-center">
                            <p class="card-text">Periode <?=$d->periode?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="container">
        <div class="row" style="padding:2rem 1rem;">
            <div class="col">
                <div class="alert alert-warning" role="alert">
                    <h4>ERROR! INVALID PARAMETER</h4>
                    <br>
                    <a href="<?=base_url('/')?>">GO BACK</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


</div>