<center>
<div class="row">
    <?php
        $id = $ogloszenia->Id;
        $Tytul = $ogloszenia->Tytul;
        $Opis = $ogloszenia->Opis;
        $Cena = $ogloszenia->Cena;
    ?>
    <div id="cat" class="col-md-4 col-md-offset-4">
<?php echo form_open('ogloszenia/edytuj'); ?>
      <input type="hidden" name="id" value="<?= $id ?>"> </br>
    <label for="Tytul">Tytuł</label></br>
<?php echo form_error('Tytul'); ?>
    <input type="text" name="Tytul" value="<?= $Tytul ?>"> </br>

    <label for="Opis">Opis</label></br>
<?php echo form_error('Opis'); ?>
    <textarea name="Opis" cols="40" rows="5" ><?= $Opis ?></textarea></br>

    <label for="Cena">Cena</label></br>
<?php echo form_error('Cena'); ?>
    <input type="number" name="Cena" min="0" step="0.01"  value="<?= $Cena ?>"></br>

    <input class="btn btn-success" type="submit" value="submit">
<?php echo form_close(); ?>
    </div>
</div>
</center>