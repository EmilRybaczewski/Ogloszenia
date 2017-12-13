
<center>
<div id="cat" class="col-md-4 col-md-offset-4">

    <?php echo form_open('Logginc'); ?>

    <label for="login">Login</label>
    <div="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/menedżer/win8/17/000000"></span>
    <input type="text" class="form-control" name="login"></br>
    </div>
    <span class="text-danger"><?= form_error('login');?></span>

    <label for="password">Haslo</label>
    <div="input-group">
    <span class="input-group-addon"><img src="https://png.icons8.com/hasło/win10/17/000000"></span>
    <input type="password" class="form-control" name="password"></br>
    </div>
    <span class="text-danger"><?= form_error('password');?></span>


    <input class="btn btn-primary" type="submit" value="Login"></br>
    <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
    </form>

</div>
</center>
