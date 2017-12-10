<center>
<div class="row">
    <div id="cat" class="col-md-4 col-md-offset-4">
<?php echo form_open('ogloszenia/edytuj'); ?>
      <input type="hidden" name="id" value="<?= $id ?>"> </br>
    <label for="Tytul">Tytuł</label></br>
<?php echo form_error('Tytul'); ?>
    <input type="text" name="Tytul" value="<?= $tytul ?>"> </br>

    <label for="Opis">Opis</label></br>
<?php echo form_error('Opis'); ?>
    <textarea name="Opis" cols="40" rows="5" ><?= $opis ?></textarea></br>

    <!-- <input type="button" class="btn btn-success" name="butt" ></br> -->

    <label for="Cena">Cena</label></br>
<?php echo form_error('Cena'); ?>
    <input type="number" name="Cena" min="0" step="0.01"  value="<?= $cena ?>"></br>

    <label for="zdjecie">Wybierz zdjęcia</label></br>
    <?php echo form_error('zdjecie'); ?>
    <input type="file" name="zdjecie">

    <input class="btn btn-success" type="submit" value="submit">
<?php echo form_close(); ?>
    </div>
</div>
</center>