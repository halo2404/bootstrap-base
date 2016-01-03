<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); wp_title(); ?>
    </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fhkarate.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Header mit Navbar -->
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('template_url'); ?>/">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php bloginfo('template_url'); ?>/">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/news">News</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/karate">Karate</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/trainer">Trainer</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/zeiten">Zeiten</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/anfahrt">Anfahrt</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/bilder">Bilder</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/termine">Termine</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/literatur">Literatur</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/links">Links</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/kontakt">Kontakt</a></li>
                        <li><a href="<?php bloginfo('template_url'); ?>/impressum">Impressum</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>

    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-2"><img src="<?php bloginfo('template_url'); ?>/images/fh-karate-logo-final_006699_75_progressive.png" width="200" alt="Logo FH Karate"></div>
                <div class="col-sm-8 text-sm-center">
                    <h1>Frankfurt University of Applied Sciences <small>(Fachhochschule Frankfurt am Main)</small><br>- Hochschulsport -<br>KARATE</h1></div>
            </div>
        </div>
    </div>

    <hr>
    <!-- Dies ist der Kopfteil (header.php) -->