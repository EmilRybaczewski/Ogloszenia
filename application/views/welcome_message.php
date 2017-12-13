<style>
    .carousel .item img {
        max-height: 360px;
        width: auto;
    }
</style>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php foreach ($wyr as $oglosz) {
        $main = $oglosz->Main_zdj;
         $id = $oglosz->Id;
            ?>
            <li data-target="#myCarousel" data-slide-to="<?= $id ?>"></li>

        <?php } ?>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://www.12dzik.pl/images/Galeria/Jele%C5%84_Szl/151748_jelen-aka-drzewa-mgla.jpg" height="800" width="800" class="center-block">
                <div class="carousel-caption">
                    <h3>Wyróżnione Pozycje</h3>
                    <p>NAJLEPSZE Z NAJLEPSZYCH OGŁOSZENIA W SERWISIE</p>
                </div>
            </div>
            <?php foreach ($wyr as $oglosz) {
            $main = $oglosz->Main_zdj;
                $id = $oglosz->Id;
            ?>
            <div class="item">
                <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
                <img src="<?=base_url($main)?>"  height="800" width="800" class="center-block">
                <div class="carousel-caption">
                    <h3><?= $oglosz->Tytul ?></h3>
                    <p><?= $oglosz->Cena ?></p>
                </div>
            </div>

        <?php } ?>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        </a>
