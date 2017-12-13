<style>
</style>
<center>
<div id="cat" class="col-md-4 col-md-offset-4">

    <?php echo form_open('Form'); ?>

    <label for='Username'>Nazwa Uzytkownika</label></br>
    <div class="input-group">
    <span class="text-danger"><?php echo form_error('username');?></span>
    <span class="input-group-addon"><img src="https://png.icons8.com/menedżer/win8/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="username" value="<?php echo set_value('username'); ?>"></br>
    </div>

    <label for='Password'>Haslo</label></br>
    <div class="input-group">
    <span class="text-danger"><?php echo form_error('password');?></span>
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/win10/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="password" value="<?php echo set_value('password'); ?>"></br>
    </div>

    <label for='Passconf'>Potwierdzenie Hasla</label></br>
    <div class="input-group">
    <span class="text-danger"><?php echo form_error('passconf');?></span>
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/ios11/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="passconf" value="<?php echo set_value('passconf'); ?>"></br>
    </div>

    <label for='Imie'>Imie</label></br>
    <div class="input-group">
    <span class="text-danger"><?php echo form_error('imie');?></span>
    <span class="input-group-addon"><img src="https://png.icons8.com/imię/ios7/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="imie" value="<?php echo set_value('imie'); ?>"></br>
    </div>

    <label for='Nazwisko'>Nazwisko</label></br>
    <div class="input-group">
    <span class="text-danger"><?php echo form_error('nazwisko');?></span>
    <span class="input-group-addon"><img src="https://png.icons8.com/kontakty/win8/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="nazwisko" value="<?php echo set_value('nazwisko'); ?>"></br>
    </div>

    <label for='Telefon'>Telefon</label></br>
   <div class="input-group">
    <span class="text-danger"><?php echo form_error('telefon');?></span>
   <span class="input-group-addon"><img src="https://png.icons8.com/harambe-goryl/androidL/20/000000"></span>
   <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="telefon" value="<?php echo set_value('telefon'); ?>"></br>
    </div>
    <label for='Email'>Adres Email</label></br>
    <span class="text-danger"><?php echo form_error('email'); ?></span>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text" name="email" value="<?php echo set_value('email'); ?>"></br>
    </div>
    <div><input class="btn btn-primary" type="submit" value="Submit" /></div>
    </form>
</div>
</center>
