<?php if ($pelkats){
    // var_dump($pelkat);
    foreach ($pelkats as $d){
?>
    <div class="container">
        <div class="row" style="font-size: 0.8rem;">
            <div class="col">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="<?=current_url()?>">Presbiter</a></li>
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
        <div class="row align-items-center" style="padding:2rem 1rem;">
            <div class="col-sm-3 text-center">
                <img src="<?=base_url('resource/pelkat/'.$d->logo)?>" style="width:100%">
            </div>
            <div class="col-sm-9 text-center">
                <img src="<?=base_url('resource/pelkat/'.$d->image)?>" style="width:100%">
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