
<center>
<div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">

    <?php echo form_open('Logginc'); ?>

    <label for="login">Login</label>
    <span class="input-group-addon"><img src="https://png.icons8.com/menedżer/win8/17/000000"></span>
    <input type="text" class="form-control" name="login"></br>
    <span class="text-danger"><?= form_error('login');?></span>

    <label for="password">Haslo</label></br>
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/win10/17/000000"></span>
    <input type="password" class="form-control" name="password"></br>
    <span class="text-danger"><?= form_error('password');?></span>


    <input class="btn btn-primary" type="submit" value="Login"></br>
    <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
    </form>

</div>
</center>
