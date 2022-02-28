<?php if ($pages){
    // var_dump($pages);
    foreach ($pages as $d){
?>
    <div class="container">
        <div class="row" style="padding:2rem 1rem;">
            <div class="col text-center">
                <h4><?=$d->title?></h4>
            </div>
        </div>
        <div class="row" style="padding:2rem 1rem;">
            <div class="col text-center">
                <img src="<?=base_url('resource/pages/'.$d->image)?>" style="width:60%">
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