
<center>
    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 panel panel-default karol">

    <?php echo form_open('Logginc'); ?>

    <label for="login">Login</label>
        <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/menedżer/win8/17/000000"></span>
    <input type="text" class="form-control" name="login"></br>
        </div>
    <span class="text-danger"><?= form_error('login');?></span>

    <label for="password">Haslo</label></br>
        <div class="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/win10/17/000000"></span>
    <input type="password" class="form-control" name="password"></br>
        </div></br>
    <span class="text-danger"><?= form_error('password');?></span>


    <input class="btn btn-primary btn-lg" type="submit" value="Zaloguj"></br>
    <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
    </form>

</div>
</center>
