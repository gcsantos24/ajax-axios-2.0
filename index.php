<?php
define("APP_ROOT", $_SERVER['HTTP_HOST']);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <base href="<?= APP_ROOT; ?>">
  <link rel="canonical" href="<?= APP_ROOT; ?>">
  <link rel="alternate" href="<?= APP_ROOT; ?>" hreflang="x-default">
  
  <title>Ajax + Axios * Repositório (gmoehra)</title>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Language" content="pt-br" />
  <meta http-equiv="Content-Type" content="text/html; charset-utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <meta name="google" value="notranslate" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="language" content="PT-BR" />
  <meta name="author" content="Geraldo Moehra" />
  <meta name="robots" content="index,follow,noodp,noydir" />
  <meta name="revisit-after" content="1 week" />
  <meta name="keywords" content="github, axios, js, Javascript" />
  <meta name="theme-color" content="#495aff" />

  <meta property="og:url" content="/" />
  <meta property="og:title" content="Ajax + Axios * Repositório (gmoehra)" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:description" content="Ajax + Axios * Repositório (gmoehra)" />
  <meta name="description" content="Ajax + Axios * Repositório (gmoehra)" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="Ajax + Axios * Repositório (gmoehra)" />
  <meta name="twitter:title" content="Ajax + Axios * Repositório (gmoehra)" />
  <meta name="twitter:description" content="Ajax + Axios * Repositório (gmoehra)" />



  <!-- # IMPORTS # -->

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="<?= APP_ROOT; ?>/assets.com/favicons/favicon.svg" sizes="16x16">

  <!-- css -->
  <link rel="stylesheet" href="<?= APP_ROOT; ?>/assets/content/public/css/style.css">
  <link rel="stylesheet" href="<?= APP_ROOT; ?>/assets/content/public/javascript/utils/toastr.css">

  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>

<body>

  <div class="form">
    <input type="text" name="username" placeholder="Enter the github user" autocomplete="off">
    <button type="submit">Verify</button>
  </div>

  <div class="profile">
    <div class="avatar"></div>
    <div class="content"></div>
    <div class="footer"></div>
  </div>



  <!-- # IMPORTS - ( JS - UTILS ) # -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



  <!-- # IMPORTS - ( JS - FUNÇÕES ) # -->
  <script src="<?= APP_ROOT; ?>/assets/content/public/javascript/utils/toastr.min.js"></script>
  <script src="<?= APP_ROOT; ?>/assets/content/public/javascript/function.js"></script>
</body>

</html>
