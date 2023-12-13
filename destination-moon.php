<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  $page = 'destination';
  $subpage = 'moon';
  ?>
  <!-- SEO -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frontend Mentor | Space Tourism Website</title>

  <!-- Favicon -->

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png" />

  <!-- Google Fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,700;1,400;1,700&family=Barlow:ital@0;1&family=Bellefair&display=swap" rel="stylesheet" />

  <!-- Page Styles -->

  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/destination.css" />
</head>

<body>
  <?php include 'php-partials/navbar.php' ?>
  <main id='swup' class='destination | transition-fade'>
    <div class='destination__image'>
      <h1 class="text-uppercase heading-5"><span>01</span> Pick your destination</h1>
      <img src="/starter-code/assets/destination/image-moon.png" width='170' height='170' alt="">
    </div>
    <div class="destination__info | text-center m-0auto">
      <nav class="destination__list">
        <h2><a href="destination-moon.php" class="destination__link <?php if ($subpage == 'moon') echo 'destination__link--active' ?> ">Moon</a></h2>
        <h2><a href="destination-mars.php" class="destination__link<?php if ($subpage == 'mars') echo 'destination__link--active' ?>">Mars</a></h2>
        <h2><a href="destination-europa.php" class="destination__link<?php if ($subpage == 'europa') echo 'destination__link--active' ?>">Europa</a></h2>
        <h2><a href="destination-titan.php" class="destination__link<?php if ($subpage == 'titan') echo 'destination__link--active' ?>">Titan</a></h2>
      </nav>

      <h3 class='heading-2 text-uppercase'>Moon</h3>
      <p class='text-blue'>See our planet as you’ve never seen it before. A perfect relaxing trip away to help regain perspective and come back refreshed. While you’re there, take in some history by visiting the Luna 2 and Apollo 11 landing sites.</p>

      <hr class='page-divider'>

      <div class="destination__trip-details | text-uppercase">
        <div class='destination__trip-detail'>
          <h4 class='text-blue subheading-2'>Avg. distance</h4>
          <p class='subheading-1'>384,400 km</p>
        </div>
        <div class='destination__trip-detail'>
          <h4 class='text-blue subheading-2'>EST. Travel time</h4>
          <p class='subheading-1'>
            3 days
          </p>
        </div>
      </div>
    </div>
  </main>
</body>
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/head-plugin@2"></script>
<script src="../js/app.js"></script>

</html>