<center>
<div id="cat" class="col-md-4 col-md-offset-4 ">
    <?php form_open('Ogloszenia/dodaj'); ?>

        <label for="Tytul">Tytuł</label></br>
        <input type="text" name="Tytul"></br>

        <label for="Opis">Opis</label></br>
        <textarea name="Opis" cols="40" rows="5"></textarea></br>

        <label for="Kategoria">Kategoria</label></br>
        <select name="Kategoria">
            <?php foreach ($kat as $Cat){
                $opcja = $Cat->Id_kategorii;
                $nazwa = $Cat->Nazwa;?>
            <option value="<?= $opcja?>"><?= $nazwa?></option>
            <?php } ?>
        </select></br>

        <label for="Cena">Cena</label></br>
        <input type="number" name="Cena" min="0" step="0.01"/></br>

        <label for="zdjecie">Zdjecie</label></br>
        <input type="file" name="zdjecie" >


    </form>
</div>
</center>