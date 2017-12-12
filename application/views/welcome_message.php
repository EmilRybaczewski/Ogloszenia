

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php foreach ($wyr as $oglosz) {
        $main = $oglosz->Main_zdj  ?>
            <li data-target="#myCarousel" data-slide-to="<?= $oglosz->Id ?>"></li>

        <?php } ?>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://i.imgur.com/O1U1GvL.jpg" class="center-block">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>
            <?php foreach ($wyr as $oglosz) {
            $main = $oglosz->Main_zdj  ?>
            <div class="item">
                <img src="<?=base_url($main)?>"  class="center-block">
                <div class="carousel-caption">
                    <h3><?= $oglosz->Tytul ?></h3>
                    <p><?= $oglosz->Cena ?></p>
                </div>
            </div>
        <?php } ?>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

