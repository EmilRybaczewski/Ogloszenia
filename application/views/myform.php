<style>
.hah {
  margin-top:10;
  margin-left: 43%;
  margin-right: 43%;
}
</style>
<div id="cat" class="col-md-4 col-md-offset-4">

  <?php echo validation_errors(); ?>

    <?php echo form_open('Form'); ?>

    <label for='Username'>Nazwa Uzytkownika</label></br>
    <?php echo form_error('username'); ?>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>"></br>

    <label for='Password'>Haslo</label></br>
    <?php echo form_error('password'); ?>
    <input type="text" name="password" value="<?php echo set_value('password'); ?>"></br>

    <label for='Passconf'>Potwierdzenie Hasla</label></br>
    <?php echo form_error('passconf'); ?>
    <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>"></br>

    <label for='Imie'>Imie</label></br>
    <?php echo form_error('imie'); ?>
    <input type="text" name="imie" value="<?php echo set_value('imie'); ?>"></br>

    <label for='Nazwisko'>Nazwisko</label></br>
    <?php echo form_error('nazwisko'); ?>
    <input type="text" name="nazwisko" value="<?php echo set_value('nazwisko'); ?>"></br>

    <label for='Telefon'>Telefon</label></br>
    <?php echo form_error('telefon'); ?>
    <input type="text" name="telefon" value="<?php echo set_value('telefon'); ?>"></br>

    <label for='Email'>Adres Email</label></br>
    <?php echo form_error('email'); ?>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text" name="email" value="<?php echo set_value('email'); ?>"></br>
    </div>
    <div class="hah">
    <div><input class="btn btn-primary" type="submit" value="Submit" /></div>
</div>
    </form>
</div>
