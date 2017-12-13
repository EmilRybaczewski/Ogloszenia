<?php $main = $ogloszenie->Main_zdj; ?>
    <div class="col-md-10 col-md-offset-1">
    <div class="panel  panel-default">
    <div class="panel-heading gunwo">
<div class="text-center"><h1 class="panel-title"><b><?= $ogloszenie->Tytul ?></b></h1></div>
    </div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php foreach ($zdjecia_byid as $zdjecia){ ?>
        <li data-target="#myCarousel" data-slide-to="<?= $zdjecia->Id_zdjecia ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?=base_url($main)?>" class="center-block">
        </div>
    <?php foreach ($zdjecia_byid as $zdjecia) {
        $zdj = $zdjecia->zdjecie; ?>
        <div class="item">
                <img src="<?=base_url($zdj)?>" class="center-block">
        </div>

    <?php } ?>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    </a>
    </div>
    <div class="panel-body gunwo gunwo1">
    <h2><?= $ogloszenie->Opis ?></h2>
<?php foreach ($parametry_ogloszenia as $parametr) {
    echo "<b>{$parametr->Atrybut}</b> - {$parametr->Wartosc} <br>";
} ?> </div>

