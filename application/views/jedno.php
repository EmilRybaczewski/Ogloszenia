
<style>
    .carousel .item img {
        max-height: 360px;
        width: auto;
    }
</style>
<div class="col-md-8 col-md-offset-2 col-xs-12 panel panel-default karol">
<?php $main = $ogloszenie->Main_zdj;
    $id_u = $kontakt->Id_usera;
    ?>
    <div class="col-xs-12">
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
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    </a>
    </div>
    </div>
    </div>
        <div class="col-xs-12">
        <div class="panel panel-default text-center">
        <div class="panel-heading gunwo"><h2 class="panel-title"><b>Opis</b></h2></div>
    <div class="panel-body"><p><?= $ogloszenie->Opis ?></p></div>
    </div>
</div>
    <div class="col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading gunwo text-center"><h2 class="panel-title"><b>Szczegóły</b></h2></div>
        <div class="panel-body"><p>
<?php foreach ($parametry_ogloszenia as $parametr) { ?>
                    <b>  <?= $parametr->Atrybut ?>:</b> <?=$parametr->Wartosc?></br>
<?php } ?></p>
            <h2 class="panel-title"><b>Cena: <?= $kontakt->Cena ?>Zł</b></h2> <?php anchor('ogloszenia/kupuj', 'Kup Teraz', 'class="btm btn-success disabled"')  ?>
        </div>
    </div>
    </div>
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading gunwo text-center"><h2 class="panel-title"><b>Kontakt</b></h2></div>
            <div class="panel-body"><p><b>Dane Osobowe:  <?= $kontakt->Imie ?> <?= $kontakt->Nazwisko ?></br>Email: <?= $kontakt->Email?></br>Telefon: <?= $kontakt->telefon?></br></b><?= anchor('wiadomosci/nowa_wiadomosc/'.$id_u, 'Wyślij wiadomość')?></p></div>
        </div>
    </div>
</div>
