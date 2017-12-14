
    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 panel panel-default karol">
        <h1>Wysyłanie wiadomości</h1>
        <?= form_open("Wiadomosci/wyslij/{$id_usera_do_ktorego_wyslac}"); ?>

        <?php if ($pokaz_odbiorce == false) { ?>
            <h3>Do <b><?= $imie ?> </b></h3>
        <?php } ?>

        <?php if ($pokaz_odbiorce == true) { ?>
            <h3>Wybierz odbiorcę:</h3>
            <select name="do_kogo" class="form-control">
                <?php foreach ($usery as $id_usera => $imie) { ?>
                    <option value="<?= $id_usera ?>"><?= $imie ?></option>
                <?php } ?>
            </select>
            <br>
        <?php } ?>

        <textarea name="wiadomosc" class="form-control" rows="3"
                  placeholder="Twoja wiadomosc. Prosimy używać wulgaryzmów "></textarea>
        <button type="submit" class="btn btn-default">Wyślij</button>
        <?= form_close() ?>

    </div>