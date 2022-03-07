<?php if ($komisis){
    // var_dump($komisi);
    foreach ($komisis as $d){
?>
    <div class="container">
        <div class="row" style="font-size: 0.8rem;">
            <div class="col">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="<?=current_url()?>">Komisi</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col text-end">
                <?= dateID($d->updated_at); ?>
            </div>
        </div>
        <hr>
        <div class="row" style="padding:2rem 1rem;">
            <div class="col text-center">
                <h4><?=$d->title?></h4>
            </div>
        </div>
        <div class="row" style="padding:2rem 1rem;">
            <div class="col text-center">
                <img src="<?=base_url('resource/komisi/'.$d->image)?>" style="width:60%">
            </div>
        </div>
        <div class="row" style="padding:2rem 1rem;">
            <div class="col">
                <?= htmlspecialchars_decode($d->body)  ?>
            </div>
        </div>
    </div>
<?php
    } } else { ?>
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