<style>
    .janusz {
        color: #000000;
        text-decoration: none;
        text-align: center;
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

    <?php   foreach ($moje as $ogloszenie) {
        $main = $ogloszenie->Main_zdj;
        $id = $ogloszenie->Id;
        $tytul = $ogloszenie->Tytul;
        $opis = $ogloszenie->Opis;
        $kategoria = $ogloszenie->Id_kategorii;
        $cena = $ogloszenie->Cena; ?>

        <div id="cat" class="col-md-3 jan">
            <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
                <img src="<?=base_url($main)?>" height="200" width="200" class="center-block">

                <?php    echo "<h1>";
                echo $tytul;
                echo "</h1>";
                echo "<p>Cena ".$cena." Zł</p>" ;
                echo "</h1>";?>
            </a>
            <?=  form_open('ogloszenia/usun') ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-danger" type="submit" value="usun">
            <?=   form_close() ?>
            <?=  form_open('ogloszenia/edytuj') ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="hidden" name="tytul" value="<?= $tytul ?>">
            <input type="hidden" name="opis" value="<?= $opis ?>">
            <input type="hidden" name="kategoria" value="<?= $kategoria ?>">
            <input type="hidden" name="cena" value="<?= $cena ?>">
            <input type="hidden" name="main" value="<?= $main ?>">
            <input class="btn btn-success" type="submit" value="edytuj">
            <?=   form_close() ?>
        </div>
        <?php
    }
    ?>
    </a>
</div>
