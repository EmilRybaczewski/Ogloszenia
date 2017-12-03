<html>
<head>
        <title>Ogloszenia - Emil i Maciej</title>
    <link rel="stylesheet" href="<?= base_url();?>/css/bootstrap.css">
</head>
<body style="background-color: grey">
<div class="row">
<div id="cat" class="col-md-10">
    <h1><?= anchor('/Welcome/', 'WELCOME') ?> <small> strainger</small> here will be navbar</h1>
</div>
<div id="cat" class="col-md-2 float-right">
 <?php   if($this->session->userdata('username') == ''){ ?>
     <div class="pull-right">
    <?= anchor('Logginc/', 'Sing in', 'class="btn btn-success"')?> or
    <?= anchor('Form/index', 'Sing up', 'class="btn btn-success"')?>
    </div>
<?php  } else { ?>
     <div class="pull-right">
     <?php $name = $this->session->userdata('username');
       echo anchor('Dupa/sraczka', $name);
     ?>
     <?= anchor('Wiadomosci/moje', 'Moje wiadomości', 'class="btn btn-warning"')?>
     <?= anchor('Logginc/won', 'Sing out', 'class="btn btn-success"')?>
     </div>
<?php }?>
</div>
</div>