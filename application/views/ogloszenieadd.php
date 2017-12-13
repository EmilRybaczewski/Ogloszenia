<center>
<div class="col-md-4 col-md-offset-4 ">
    <?php echo form_open_multipart('ogloszenia/dodaj'); ?>

        <label for="Tytul">Tytuł</label></br>
      <span class="text-danger"><?php echo form_error('Tytul'); ?></span>
        <input type="text" name="Tytul"></br>

        <label for="Opis">Opis</label></br>
      <span class="text-danger"><?php echo form_error('Opis'); ?></span>
        <textarea name="Opis" cols="40" rows="5"></textarea></br>

        <label for="Kategoria">Kategoria</label></br>
        <span class="text-danger"><?php echo form_error('Kategoria'); ?></span>
        <select name="Kategoria">
            <option value="0"></option>
            <?php foreach ($kat as $Cat){
                $opcja = $Cat->Id_kategorii;
                $nazwa = $Cat->Nazwa;?>
            <option value="<?= $opcja?>"><?= $nazwa?></option>
            <?php } ?>
        </select></br>

       <!-- <input type="button" class="btn btn-success" name="butt" ></br> -->

        <label for="Cena">Cena</label></br>
        <span class="text-danger"><?php echo form_error('Cena'); ?></span>
        <input type="number" name="Cena" min="0" step="0.01"></br>

        <label for="zdjecie">Wybierz zdjęcia</label></br>
        <span class="text-danger"><?php echo form_error('zdjecie'); ?></span>
        <input type="file" name="zdjecie" size="20" />

        <input class="btn btn-success" type="submit" value="submit">
    <?php echo form_close(); ?>
</div>
</center>
