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
    .gunwo {
        background-color: floralwhite !important;
    }
    .gunwo1 {
        height: 110px;
    }
    p {
        display: inline;
    }
</style>
    <?php   foreach ($moje as $ogloszenie) {
        $main = $ogloszenie->Main_zdj;
        $id = $ogloszenie->Id;
        $tytul = $ogloszenie->Tytul;
        $opis = $ogloszenie->Opis;
        $kategoria = $ogloszenie->Id_kategorii;
        $cena = $ogloszenie->Cena; ?>
    <div class="col-md-4">
        <div class="panel  panel-default">
            <div class="panel-heading gunwo">
                <h3 class="panel-title "><?= $tytul?></h3>
            </div>
            <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
                <img src="<?=base_url($main)?>" height="200" width="200" class="center-block">
                <div class="panel-body gunwo gunwo1">
            <p>
            <?=  form_open('ogloszenia/usun') ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-danger" type="submit" value="Usuń">
            <?=   form_close() ?>
            </p>
            <p>
            <?=  form_open('ogloszenia/edytuj') ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="hidden" name="tytul" value="<?= $tytul ?>">
            <input type="hidden" name="opis" value="<?= $opis ?>">
            <input type="hidden" name="kategoria" value="<?= $kategoria ?>">
            <input type="hidden" name="cena" value="<?= $cena ?>">
            <input type="hidden" name="main" value="<?= $main ?>">
            <input class="btn btn-success" type="submit" value="Edytuj">
            <?=   form_close() ?>
            </p>
            <p>
            <?=  form_open('ogloszenia/wyroznij') ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-info" type="submit" value="Wyróżnij">
            <?=   form_close() ?>
            </p>
            <p>
            <?=  form_open('ogloszenia/odwyroznij') ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-info" type="submit" value="Odwyróżnij">
            <?=   form_close() ?>
            </p>
                </div>
            </a>
        </div>
    </div>
    <?php } ?>

