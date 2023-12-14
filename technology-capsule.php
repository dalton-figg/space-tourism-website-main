<?php
$page = 'tech';
$stylesheet = '<link rel="stylesheet" href="css/technology.css">';
?>

<?php include 'php-partials/head.php' ?>
<?php include 'php-partials/navbar.php' ?>

<main class='tech'>
  <div class='tech__text'>
    <h1 class='text-uppercase heading-5'><span class='text-white-50'>03</span> Space launch 101</h1>

    <div class='tech__flex'>
      <nav class='secondary-nav'>
        <ul class='secondary-nav__list'>
          <li class='secondary-nav__item'>
            <a href="technology-vehicle.php">1</a>
          </li>
          <li class='secondary-nav__item'>
            <a href="technology-spaceport.php">2</a>
          </li>
          <li class='secondary-nav__item secondary-nav__item--active'>
            <a href="technology-capsule.php">3</a>
          </li>
        </ul>
      </nav>
      <div>
        <p class='text-uppercase'>
          The terminology...
        </p>

        <h2 class='heading-3 text-uppercase'>
          SPACE CAPSULE
        </h2>

        <p>
          A space capsule is an often-crewed spacecraft that uses a blunt-body reentry capsule to reenter the Earth's atmosphere without wings. Our capsule is where you'll spend your time during the flight. It includes a space gym, cinema, and plenty of other activities to keep you entertained.
        </p>
      </div>
    </div>
  </div>

  <div class='tech__image'>
    <picture>
      <source srcset="/starter-code/assets/technology/image-space-capsule-portrait.jpg" media='(min-width: 1024px)'>
      <img src="/starter-code/assets/technology/image-space-capsule-landscape.jpg" alt="">
    </picture>
  </div>
</main>
<script type='module' src="js/app.js"></script>
</body>

</html>