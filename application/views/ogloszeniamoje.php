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

    .gunwo2 {
        background-color: grey !important;
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
                <h3 class="panel-title "><strong><?= $tytul?></strong></h3>
            </div>
            <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
                <img src="<?=base_url($main)?>" height="200" width="200" class="center-block">
                <div class="panel-body gunwo gunwo1">
            <?=  anchor('ogloszenia/usun/'.$id, 'Usuń', 'class="btn btn-danger"') ?>
            <?=  anchor('ogloszenia/edytuj/'.$id, 'Edytuj', 'class="btn btn-success"') ?>
            <?=  anchor('ogloszenia/wyroznij/'.$id, 'Wyróżnij', 'class="btn btn-info"') ?>
            <?=  anchor('ogloszenia/odwyroznij/'.$id, 'OdWyróżnij', 'class="btn btn-info"') ?>
                </div>
            </a>
        </div>
    </div>
    <?php } ?>

<?php   foreach ($wyg as $ogloszenie) {
    $main = $ogloszenie->Main_zdj;
    $id = $ogloszenie->Id;
    $tytul = $ogloszenie->Tytul;
    $opis = $ogloszenie->Opis;
    $kategoria = $ogloszenie->Id_kategorii;
    $cena = $ogloszenie->Cena; ?>
    <div class="col-md-4">
        <div class="panel  panel-default">
            <div class="panel-heading gunwo2">
                <h3 class="panel-title "><strong><?= $tytul?></strong> <?=anchor('ogloszenia/przedloz/'.$id ,'(głoszenie wygasło przedłuż je)', 'class="janusz"')?></h3>
            </div>
            <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
                <img src="<?=base_url($main)?>" height="200" width="200" class="center-block">
                <div class="panel-body gunwo2 gunwo1">
                    <?=  anchor('ogloszenia/usun/'.$id, 'Usuń', 'class="btn btn-danger"') ?>
                    <?=  anchor('ogloszenia/edytuj/'.$id, 'Edytuj', 'class="btn btn-success"') ?>
                    <?=  anchor('ogloszenia/wyroznij/'.$id, 'Wyróżnij', 'class="btn btn-info"') ?>
                    <?=  anchor('ogloszenia/odwyroznij/'.$id, 'OdWyróżnij', 'class="btn btn-info"') ?>
                </div>
            </a>
        </div>
    </div>
<?php } ?>

