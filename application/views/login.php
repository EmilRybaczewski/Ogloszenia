<div id="cat" class="col-md-4 col-md-offset-4">

    <?php echo form_open('Logginc'); ?>

    <label for="login">Login</label>
    <input type="text" name="login">
    <span class="text-danger"><?= form_error('login');?></span>
    <label for="password">Haslo</label>
    <input type="password" name="password">
    <span class="text-danger"><?= form_error('password');?></span>
    <input class="btn btn-primary" type="submit" value="Login">
    <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>

    </form>

</div>