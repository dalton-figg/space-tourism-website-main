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
          <li class='secondary-nav__item secondary-nav__item--active'>
            <a href="technology-vehicle.php">1</a>
          </li>
          <li class='secondary-nav__item'>
            <a href="technology-spaceport.php">2</a>
          </li>
          <li class='secondary-nav__item'>
            <a href="technology-capsule.php">3</a>
          </li>
        </ul>
      </nav>
      <div>
        <p class='text-uppercase text-blue'>
          The terminology...
        </p>

        <h2 class='heading-3 text-uppercase'>
          Launch vehicle
        </h2>

        <p class='text-blue'>
          A launch vehicle or carrier rocket is a rocket-propelled vehicle used to carry a
          payload from Earth's surface to space, usually to Earth orbit or beyond. Our
          WEB-X carrier rocket is the most powerful in operation. Standing 150 metres tall,
          it's quite an awe-inspiring sight on the launch pad!
        </p>
      </div>
    </div>
  </div>

  <div class='tech__image'>
    <picture>
      <source srcset="/starter-code/assets/technology/image-launch-vehicle-portrait.jpg" media='(min-width: 1024px)'>
      <img src="/starter-code/assets/technology/image-launch-vehicle-landscape.jpg" alt="">
    </picture>
  </div>
</main>
<script type='module' src="js/app.js"></script>
</body>

</html>