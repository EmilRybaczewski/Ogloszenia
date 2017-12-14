<style>
    .carousel .item img {
        max-height: 420px;
        width: auto;
    }
    .oczy {
        color: black;
    }

</style>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php foreach ($wyr as $oglosz) {
        $main = $oglosz->Main_zdj;
         $id = $oglosz->Id;
         $id_u = $oglosz->Id_usera;
            ?>
            <li data-target="#myCarousel" data-slide-to="<?= $id?>"></li>

        <?php } ?>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://www.12dzik.pl/images/Galeria/Jele%C5%84_Szl/151748_jelen-aka-drzewa-mgla.jpg" class="center-block">
                <div class="carousel-caption">
                    <h3 class="oczy">Wyróżnione Pozycje</h3>
                    <p class="oczy">NAJLEPSZE Z NAJLEPSZYCH OGŁOSZENIA W SERWISIE</p>
                </div>
            </div>
            <?php foreach ($wyr as $oglosz) {
            $main = $oglosz->Main_zdj;
                $id = $oglosz->Id;
            ?>
            <div class="item">
                <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>">
                <img src="<?=base_url($main)?>"  class="center-block">
                <div class="carousel-caption">
                    <h3 class="oczy"><?= $oglosz->Tytul ?></h3>
                    <p class="oczy"><?= $oglosz->Cena ?> Zł</p>
                </div>
            </div>

        <?php } ?>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        </a>
