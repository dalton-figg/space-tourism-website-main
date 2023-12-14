<?php
$page = 'destination';
$subpage = 'mars';
$stylesheet = '<link rel="stylesheet" href="css/destination.css" />'
?>
<?php include 'php-partials/head.php' ?>
<?php include 'php-partials/navbar.php' ?>
<main class='destination'>
  <div class='destination__image'>
  <h1 class="text-uppercase heading-5"><span class='text-white-25'>01</span> Pick your destination</h1>
    <img src="/starter-code/assets/destination/image-mars.png" alt="">
  </div>
  <div class="destination__info | text-center m-0auto">
    <nav class="destination__list">
      <h2><a href="destination-moon.php" class="destination__link <?php if ($subpage == 'moon') echo ' destination__link--active' ?> ">Moon</a></h2>
      <h2><a href="destination-mars.php" class="destination__link<?php if ($subpage == 'mars') echo ' destination__link--active' ?>">Mars</a></h2>
      <h2><a href="destination-europa.php" class="destination__link<?php if ($subpage == 'europa') echo ' destination__link--active' ?>">Europa</a></h2>
      <h2><a href="destination-titan.php" class="destination__link<?php if ($subpage == 'titan') echo ' destination__link--active' ?>">Titan</a></h2>
    </nav>

    <h3 class='heading-2 text-uppercase'>Mars</h3>
    <p class='text-blue'>Don’t forget to pack your hiking boots. You’ll need them to tackle Olympus Mons, the tallest planetary mountain in our solar system. It’s two and a half times the size of Everest!</p>

    <hr class='page-divider'>

    <div class="destination__trip-details |  text-uppercase">
      <div class='destination__trip-detail'>
        <h4 class='text-blue subheading-2'>Avg. distance</h4>
        <p class='subheading-1'>225 MIL. km</p>
      </div>
      <div class='destination__trip-detail'>
        <h4 class='text-blue subheading-2'>EST. Travel time</h4>
        <p class='subheading-1'>
          9 months
        </p>
      </div>
    </div>
  </div>
</main>
</body>
<!-- <script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/head-plugin@2"></script> -->

<script src="../js/app.js"></script>

</html>