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
          <li class='secondary-nav__item secondary-nav__item--active'>
            <a href="technology-spaceport.php">2</a>
          </li>
          <li class='secondary-nav__item'>
            <a href="technology-capsule.php">3</a>
          </li>
        </ul>
      </nav>
      <div>
        <p class='text-uppercase'>
          The terminology...
        </p>

        <h2 class='heading-3 text-uppercase'>
          Spaceport
        </h2>

        <p>
          A spaceport or cosmodrome is a site for launching (or receiving) spacecraft, by analogy to the seaport for ships or airport for aircraft. Based in the famous Cape Canaveral, our spaceport is ideally situated to take advantage of the Earth’s rotation for launch.
        </p>
      </div>
    </div>
  </div>


  <div class='tech__image'>
    <picture>
      <source srcset="/starter-code/assets/technology/image-spaceport-portrait.jpg" media='(min-width: 1024px)'>
      <img src="/starter-code/assets/technology/image-spaceport-landscape.jpg" width='768' height='310' alt="">
    </picture>
  </div>
</main>
<script src="js/app.js"></script>
</body>

</html>