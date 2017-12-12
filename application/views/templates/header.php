<html>
<head>
        <title>Ogloszenia - Emil i Maciej</title>
    <link rel="stylesheet" href="<?= base_url();?>/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-color: grey ;
        margin: 40px;
    }
</style>
<body>
<div class="row">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="col-lg-6 col-md-10 col-xs-12">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= site_url();?>">Hunt.Them</a>
                <img alt="brand" src="https://png.icons8.com/jeleń/ios7/50/ffffff">
            </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php foreach ($katy as $cat) { ?>
                            <li><a href="#"><?= $cat->Nazwa ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
            <div class="col-md-5 col-md-offset-7 col-xs-6 col-xs-offset-6 well">
 <?php   if($this->session->userdata('username') == ''){ ?>
     <div class="pull-right">
         <?= anchor('Logginc/', 'Sing in', 'class="btn btn-success"')?> or
         <?= anchor('Form/index', 'Sing up', 'class="btn btn-success"')?>
     </div>
 <?php  } else { ?>
 <div class="pull-right">
     <?php $name = $this->session->userdata('username');
     echo anchor('Logginc/menago', $name);
     ?>
     <?= anchor('Wiadomosci/moje', 'Moje wiadomości', 'class="btn btn-warning"')?>
     <?= anchor('Logginc/won', 'Sing out', 'class="btn btn-success"')?>
 </div>
<?php }?>

        </div>
    </div>
</div>