







<div id="cat" class="col-md-4 col-md-offset-4">

    <?php echo form_open('Logginc'); ?>

        <label for="username">Login</label>
        <input type="text" name="username">
        <span class="text-danger"><?= form_error('username');?></span>
        <label for="password">Haslo</label>
        <input type="password" name="password">
        <span class="text-danger"><?= form_error('password');?></span>
        <input class="btn btn-primary" type="submit" value="Login">
        <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>

    </form>

</div>