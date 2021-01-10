<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AHMET ERCAN">

    <title>TOLOVEDO</title>

    <!-- Bootstrap core CSS -->

    <link href="<?=base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?=base_url(); ?>vendor/custom.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="<?=base_url(); ?>">TO LOVE DO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url(); ?>">Anasayfa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayarlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Geçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hakkımızda</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<?php $this->load->view("home_v/content"); ?>
<?php $this->load->view("home_v/modal"); ?>

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php $this->load->view("home_v/customscript"); ?>
</body>

</html>
