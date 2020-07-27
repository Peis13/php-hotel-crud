<?php
include __DIR__ . "/server.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Hotel</title>
    <!-- Foglio css -->
    <link rel="stylesheet" href="<?php echo $url_base; ?>/dist/css/entry.css">
    <!-- Font Lato -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $url_base . $ref_font_awesome; ?>">
  </head>
  <body>

    <!-- HEADER -->
    <header>
      <div class="container">
        <nav class="navbar">

          <!-- Logo -->
          <div class="logo">
            <a class="home" href="<?php echo $url_base; ?>/dist">
              <img src="<?php echo $url_base; ?>/dist/img/logo.png" alt="logo-boolean">
              <span>boolean_hotel</span>
            </a>
          </div>
          <!-- Fine Logo -->
        </nav>
      </div>
    </header>
    <!-- FINE HEADER -->
