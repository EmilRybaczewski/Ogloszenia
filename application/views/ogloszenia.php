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

</style>
<div class="container-fluid">
<?php   foreach ($ogloszenia as $ogloszenie) {
    $main = $ogloszenie->Main_zdj;
    $id = $ogloszenie->Id; ?>
    <div class="col-md-4">
        <div class="panel  panel-default">
        <div class="panel-heading gunwo">
            <h3 class="panel-title "><?= $ogloszenie->Tytul ;?></h3>
        </div>
            <a href="<?=base_url("index.php/Ogloszenia/jedno/".$id)?>" class="janusz">
                <img src="<?=base_url($main)?>" height="200" width="200" class="center-block">
            <div class="panel-body gunwo gunwo1">

    <?php
    echo "<p>".$ogloszenie->Opis."</p>";
    ?>
            </div>
  </a>
        </div>
    </div>
    <?php
}
?>

</div>