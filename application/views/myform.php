
<div id="cat" class="col-md-4 col-md-offset-4">

    <?php echo form_open('Form'); ?>

    <h5>Username</h5>
    <?php echo form_error('username'); ?>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

    <h5>Password</h5>
    <?php echo form_error('password'); ?>
    <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

    <h5>Password Confirm</h5>
    <?php echo form_error('passconf'); ?>
    <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>"/>

    <h5>Email Address</h5>
    <?php echo form_error('email'); ?>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
    </div>
    <div><input class="btn btn-primary" type="submit" value="Submit" /></div>

    </form>
</div>
