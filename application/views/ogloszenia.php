<style>
    .janusz {
        color: #000000;
        text-decoration: none;
    }
    .janusz:hover {
        color: #000;
        text-decoration: none;
    }
    .jan:hover {
        box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.1);
    }
</style>
<div class="row">

<?php   foreach ($ogloszenia as $ogloszenie) {
    $main = $ogloszenie->Main_zdj;
    $id = $ogloszenie->Id; ?>
    <div id="cat" class="col-md-3 jan">
            <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
        <img src="<?=base_url($main)?>" height="200" width="200" class="center-block">

    <?php    echo "<h1>";
    echo $ogloszenie->Tytul;
    echo "</h1>";
    echo $ogloszenie->Opis;
    echo "<p>Cena ".$ogloszenie->Cena." Zł</p>" ;
    echo "</h1>";
    ?>
            </a>
    </div>
    <?php
}
?>
</a>
</div>