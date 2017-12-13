<style>
</style>
<center>
<div class="col-md-4 col-md-offset-4">

    <?php echo form_open('Form'); ?>

    <label for='Username'>Nazwa Uzytkownika</label></br>
    <span class="text-danger"><?php echo form_error('username');?></span>
    <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/menedżer/win8/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="username" value="<?php echo set_value('username'); ?>"></br>
    </div>

    <label for='Password'>Haslo</label></br>
    <span class="text-danger"><?php echo form_error('password');?></span>
    <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/win10/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="password" value="<?php echo set_value('password'); ?>"></br>
    </div>

    <label for='Passconf'>Potwierdzenie Hasla</label></br>
    <span class="text-danger"><?php echo form_error('passconf');?></span>
    <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/ios11/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="passconf" value="<?php echo set_value('passconf'); ?>"></br>
    </div>

    <label for='Imie'>Imie</label></br>
    <span class="text-danger"><?php echo form_error('imie');?></span>
    <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/imię/ios7/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="imie" value="<?php echo set_value('imie'); ?>"></br>
    </div>

    <label for='Nazwisko'>Nazwisko</label></br>
    <span class="text-danger"><?php echo form_error('nazwisko');?></span>
    <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/kontakty/win8/17/000000"></span>
    <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="nazwisko" value="<?php echo set_value('nazwisko'); ?>"></br>
    </div>

    <label for='Telefon'>Telefon</label></br>
    <span class="text-danger"><?php echo form_error('telefon');?></span>
   <div class="input-group">
   <span class="input-group-addon"><img src="https://png.icons8.com/harambe-goryl/androidL/20/000000"></span>
   <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text"  name="telefon" value="<?php echo set_value('telefon'); ?>"></br>
    </div>
    
    <label for='Email'>Adres Email</label></br>
    <span class="text-danger"><?php echo form_error('email'); ?></span>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text" name="email" value="<?php echo set_value('email'); ?>"></br>
    </div></br>
    <div><input class="btn btn-primary btn-block" type="submit" value="Submit"></div>
    </form>
</div>
</center>
