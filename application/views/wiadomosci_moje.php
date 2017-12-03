<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Moje wiadomości</h1>
        <?= anchor("Wiadomosci/nowa_wiadomosc", 'Nowa wiadomość', 'class="btn btn-primary btn-lg pull-right"') ?>
        Najnowsze wiadomości pojawiają na dole
        <hr>
        <h2>Odebrane</h2>
        <?php
        foreach ($odebrane as $wiadomosc) {
            ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title"> Wiadomość wysłał <b> <?= $usery[$wiadomosc->Id_usera_wys] ?> </b></h4>
                    <?= anchor("Wiadomosci/nowa_wiadomosc/{$wiadomosc->Id_usera_wys}", 'Odpowiedz', 'class="btn btn-info pull-right"') ?>

                </div>
                <div class="panel-body">
                    <?= $wiadomosc->Wiadomosc ?>
                </div>
            </div>
            <?php
        }
        ?>
        <hr>
        <h2>Wysłane przeze mnie</h2>

        <?php
        foreach ($wyslane as $wiadomosc) {
            ?>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Wiadomość została wysłana do
                        <b> <?= $usery[$wiadomosc->Id_usera_odb] ?> </b></h4>
                </div>
                <div class="panel-body">
                    <?= $wiadomosc->Wiadomosc ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>