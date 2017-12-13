<style>
 .jon {
   margin-top: 10;
 }
.jon2 {
  padding-right: 50;
  padding-left: 10;
}
</style>
<center>
<div id="cat" class="col-md-4 col-md-offset-4">

    <?php echo form_open('Logginc'); ?>
<div class="jon">
  <div class="jon2">
    <label for="login">Login</label>
    <input type="text" name="login"></br>
    <span class="text-danger"><?= form_error('login');?></span>
    <label for="password">Haslo</label>
    <input type="password" name="password"></br>
    <span class="text-danger"><?= form_error('password');?></span>
  </div>
    <input class="btn btn-primary" type="submit" value="Login"></br>
    <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>
    </form>
</div>
</div>
</center>
