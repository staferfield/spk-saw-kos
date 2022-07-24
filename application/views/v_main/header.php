<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPK - <?php echo ucwords($this->router->fetch_class()); ?></title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            font-size: 14px;
        }

    </style>

</head>
<body>

<header>
    <div class="px-3 py-2 bg-dark text-white shadow">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="<?php echo site_url(); ?>" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <i class="bi bi-postage me-3" style="font-size: 2rem;"></i> <h3 class="m-0">ESPEKA KOS</h3>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="<?php echo site_url('alternatif') ?>" class="nav-link text-white">
              <span class="bi d-block mx-auto text-center"> <i class="bi bi-clipboard-data-fill" style="font-size: 1.5rem;"></i> </span>
                Alternatif
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('kriteria') ?>" class="nav-link text-white">
              <span class="bi d-block mx-auto text-center"> <i class="bi bi-sliders fs-4"></i> </span>
                Kriteria
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('saw') ?>" class="nav-link text-white">
              <span class="bi d-block mx-auto text-center"> <i class="bi bi-calculator-fill fs-4"></i> </span>
                SAW
              </a>
            </li>
            <li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
