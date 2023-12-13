<?php
$page = 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
  <link rel="stylesheet" href="css/utilities.css" />
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <?php include 'php-partials/navbar.php' ?>
  <main id='swup' class="page | text-center transition-fade">
    <div class="page__left | m-0auto">
      <h1 class="page__title | text-blue heading-5 text-uppercase">So you want to travel to <span class='text-white heading-1'>Space</span></h1>
      <p class="text-blue">
        Let&rsquo;s face it; if you want to go to space, you might as well
        genuinely go to outer space and not hover kind of on the edge of it.
        Well sit back, and relax because we&rsquo;ll give you a truly out of
        this world experience!
      </p>
    </div>

    <div class="page__right">
      <a href="destination-moon.php" class="page__cta | text-uppercase text-center heading-4">Explore</a>
    </div>
  </main>
</body>
<script src="https://unpkg.com/swup@4"></script>
<script src="../js/app.js"></script>

</html>