<?php
$page = 'destination';
$subpage = 'moon';
$stylesheet = '<link rel="stylesheet" href="css/destination.css">'
?>
<?php include 'php-partials/head.php' ?>
<?php include 'php-partials/navbar.php' ?>
<main class='destination'>
  <div class='destination__image'>
    <h1 class="text-uppercase heading-5"><span class='text-white-25'>01</span> Pick your destination</h1>
    <img id='image' src="/starter-code/assets/destination/image-moon.png" alt="">
  </div>
  <div class="destination__info | text-center m-0auto">
    <nav class="destination__list">
      <h2 class="destination__link destination__link--active">Moon</h2>
      <h2 class="destination__link">Mars</h2>
      <h2 class="destination__link">Europa</h2>
      <h2 class="destination__link">Titan</h2>
    </nav>
    <h3 class='heading-2 text-uppercase' id='name'></h3>
    <p class='text-blue' id='desc'></p>

    <hr class='page-divider'>

    <div class="destination__trip-details | text-uppercase">
      <div class='destination__trip-detail'>
        <h4 class='text-blue subheading-2'>Avg. distance</h4>
        <p class='subheading-1' id='dist'></p>
      </div>
      <div class='destination__trip-detail'>
        <h4 class='text-blue subheading-2'>EST. Travel time</h4>
        <p class='subheading-1' id='time'>
        </p>
      </div>
    </div>
  </div>
</main>
<script type='module' src="../js/app.js"></script>
</body>


</html>