<style>
    textarea{
        resize:  none;
    }
</style>
<center>
<div class="col-md-4 col-md-offset-4 ">
    <?php echo form_open_multipart('ogloszenia/dodaj'); ?>

        <label for="Tytul">Tytuł</label></br>
      <span class="text-danger"><?php echo form_error('Tytul'); ?></span>
        <div class="input-group">
        <span class="input-group-addon"><img src="https://png.icons8.com/etykieta/ios7/17/000000"></span>
        <input type="text" class="form-control" name="Tytul"></br>
      </div>

        <label for="Opis">Opis</label></br>
      <span class="text-danger"><?php echo form_error('Opis'); ?></span>
      <div class="input-group">
      <span class="input-group-addon"><img src="https://png.icons8.com/odpowiedzi/win8/17/000000"></span>
        <textarea name="Opis" class="form-control" cols="40" rows="5"></textarea></br>
      </div>

        <label for="Kategoria">Kategoria</label></br>
        <span class="text-danger"><?php echo form_error('Kategoria'); ?></span>
        <div class="input-group">
        <span class="input-group-addon"><img src="https://png.icons8.com/kategoria/ios7/17/000000"></span>
        <select class="form-control" name="Kategoria">
            <option value="0"></option>
            <?php foreach ($kat as $Cat){
                $opcja = $Cat->Id_kategorii;
                $nazwa = $Cat->Nazwa;?>
            <option value="<?= $opcja?>"><?= $nazwa?></option>
            <?php } ?>
        </select></div></br>

       <!-- <input type="button" class="btn btn-success" name="butt" ></br> -->

        <label for="Cena">Cena</label></br>
        <span class="text-danger"><?php echo form_error('Cena'); ?></span>
        <div class="input-group">
        <span class="input-group-addon"><img src="https://png.icons8.com/przywieszka-z-ceną-usd/android/17/000000"></span>
        <input type="number" class="form-control" name="Cena" min="0" step="0.01"></br>
      </div>

        <label for="zdjecie">Wybierz zdjęcia</label></br>
        <span class="text-danger"><?php echo form_error('zdjecie'); ?></span>
        <div class="input-group">
        <span class="input-group-addon"><img src="https://png.icons8.com/ramka/win8/17/000000"></span>
        <input type="file" class="form-control" name="zdjecie" size="20" >
      </div>

        <input class="btn btn-success" type="submit" value="Zatwierdz">
    <?php echo form_close(); ?>
</div>
</center>
