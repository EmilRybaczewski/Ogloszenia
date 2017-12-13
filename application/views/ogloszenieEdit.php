<center>
<div class="row">
    <?php
        $id = $ogloszenia->Id;
        $Tytul = $ogloszenia->Tytul;
        $Opis = $ogloszenia->Opis;
        $Cena = $ogloszenia->Cena;
    ?>
    <div class="col-md-4 col-md-offset-4">
    <?php echo form_open('ogloszenia/edytuj'); ?>
      <input type="hidden" name="id" value="<?= $id ?>"> </br>
    <label for="Tytul">Tytuł</label></br>
    <span class="text-danger"><?php echo form_error('Tytul'); ?></span>
    <input type="text" class="form-control" name="Tytul" value="<?= $Tytul ?>"> </br>

    <label for="Opis">Opis</label></br>
    <span class="text-danger"><?php echo form_error('Opis'); ?></span>
    <textarea class="form-control" name="Opis" style="resize:none" cols="40" rows="5" ><?= $Opis ?></textarea></br>

    <label for="Cena">Cena</label></br>
    <span class="text-danger"><?php echo form_error('Cena'); ?></span>
    <input type="number" class="form-control" name="Cena" min="0" step="0.01"  value="<?= $Cena ?>"></br>

    <input class="btn btn-success" type="submit" value="submit">
<?php echo form_close(); ?>
    </div>
</div>
</center>
