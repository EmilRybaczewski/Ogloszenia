<center>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php echo form_open('Logginc/edit'); ?>
            <?php $imie = $this->session->userdata('Imie');
                  $nazwisko = $this->session->userdata('Nazwisko');
                  $telefon = $this->session->userdata('telefon');
                  $email = $this->session->userdata('Email');
                  ?>
            <label for="Imie">Imie</label></br>
            <span class="text-danger"><?php echo form_error('Imie'); ?></span>
            <div class="input-group">
            <span class="input-group-addon"><img src="https://png.icons8.com/imię/ios7/17/000000"></span>
            <input type="text" class="form-control" name="Imie" value="<?= $imie ?>"> </br>
          </div>

            <label for="Nazwisko">Nazwisko</label></br>
            <span class="text-danger"><?php echo form_error('Nazwisko'); ?></span>
            <div class="input-group">
            <span class="input-group-addon"><img src="https://png.icons8.com/kontakty/win8/17/000000"></span>
            <input type="text" class="form-control" name="Nazwisko" value="<?= $nazwisko ?>"> </br>
          </div>

            <label for="telefon">Numer telefonu</label></br>
            <span class="text-danger"><?php echo form_error('telefon'); ?></span>
            <div class="input-group">
            <span class="input-group-addon"><img src="https://png.icons8.com/harambe-goryl/androidL/17/000000"></span>
            <input type="text" class="form-control" name="telefon" value="<?= $telefon ?>"> </br>
          </div>

            <label for="Email">Email</label></br>
            <span class="text-danger"><?php echo form_error('Email'); ?></span>
            <div class="input-group">
                <span class="input-group-addon">@</span>
            <input type="email" class="form-control" name="Email" value="<?= $email ?>"> </br></div></br>

            <input class="btn btn-success" type="submit" value="Zatwierdz">
            <?php echo form_close(); ?>
        </div>
    </div>
</center>
