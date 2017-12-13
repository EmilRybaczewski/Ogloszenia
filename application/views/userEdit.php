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
            <input type="text" class="form-control" name="Imie" value="<?= $imie ?>"> </br>

            <label for="Nazwisko">Nazwisko</label></br>
            <span class="text-danger"><?php echo form_error('Nazwisko'); ?></span>
            <input type="text" class="form-control" name="Nazwisko" value="<?= $nazwisko ?>"> </br>

            <label for="telefon">Numer telefonu</label></br>
            <span class="text-danger"><?php echo form_error('telefon'); ?></span>
            <input type="text" class="form-control" name="telefon" value="<?= $telefon ?>"> </br>

            <label for="Email">Email</label></br>
            <span class="text-danger"><?php echo form_error('Email'); ?></span>
            <input type="email" class="form-control" name="Email" value="<?= $email ?>"> </br></br>

            <input class="btn btn-success" type="submit" value="submit">
            <?php echo form_close(); ?>
        </div>
    </div>
</center>
