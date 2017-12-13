<html>
<head>
        <title>Ogloszenia - Emil i Maciej</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url();?>/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-color: snow;
        background-image: url("https://i.imgur.com/8aUfaQj.png?1");
        margin-top: 90px;
        margin-bottom: 200px;
    }

    .januszek {
        background-color: floralwhite !important;
        height: 35px;

    }
    nav {
        margin-top: 35px;
        border-radius: 0px 0px 0px 0px !important;
        color:black !important;
    }
    .navbar-default {
        background-color: floralwhite;
        border-color: black;
    }

    .navbar-default .navbar-brand {
        color: black;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
        color: black;
    }
    .navbar-default .navbar-nav > li > a {
        color: black;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
        color: grey;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
        color: #555;
        background-color: #E7E7E7;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
        color: #555;
        background-color: #D5D5D5;
    }
    .navbar-default .navbar-toggle {
        border-color: #DDD;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background-color: #DDD;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #CCC;
    }
    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #777;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #333;
        }
    }
</style>
<body>
    <nav class="navbar navbar-fixed-top  navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= site_url();?>">Hunt.Them</a>
                <img alt="brand" src="https://png.icons8.com/jeleń/ios7/50/000000">
            </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php foreach ($katy as $cat) { ?>
                            <li><a href="#"><?= $cat->Nazwa ?></a></li>
                        <?php } ?>
                        <?= anchor('Ogloszenia', 'wszystkie ogloszenia') ?>
                    </ul>
                </div>
    </nav>
    <div class="container-fluid">
            <div class="navbar-fixed-top januszek">
 <?php   if($this->session->userdata('username') == ''){ ?>
     <div class="pull-right">
         <?= anchor('Logginc/', 'Sing in', 'class="text-bold"')?> or
         <?= anchor('Form/index', 'Sing up')?>
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