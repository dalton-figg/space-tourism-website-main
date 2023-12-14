<header class="primary-header">
  <div class="primary-logo">
    <img src="starter-code/assets/shared/logo.svg" width="48" height="48" alt="Space Tourism Logo">
  </div>
  <div class="primary-decorative">
    <svg viewBox="0 0 473 1">
      <path fill="#fff" d="M0 0h473v1H0z" opacity=".251" />
    </svg>
  </div>
  <nav class="primary-nav">
    <ul class="primary-nav__list">
      <li class="primary-nav__item <?php if ($page == 'home') echo 'primary-nav__item--active' ?> ">
        <a href="/index.php" class="primary-nav__link">
          <span class="number">00</span>
          Home
        </a>
      </li>
      <li class="primary-nav__item <?php if ($page == 'destination') echo 'primary-nav__item--active' ?>">
        <a href="/destination.php" class="primary-nav__link">
          <span class="number">01</span>
          Destination
        </a>
      </li>
      <li class="primary-nav__item <?php if ($page == 'crew') echo 'primary-nav__item--active' ?>">
        <a href="/crew.php" class="primary-nav__link">
          <span class="number">02</span>
          Crew
        </a>
      </li>
      <li class="primary-nav__item <?php if ($page == 'tech') echo 'primary-nav__item--active' ?>">
        <a href="/technology-vehicle.php" class="primary-nav__link">
          <span class="number">03</span>
          Technology
        </a>
      </li>
    </ul>
  </nav>
  <nav class="mobile-nav" id="js-mobile-nav">
    <div class="mobile-nav__close" onclick="closeNav()">
      <img src="/starter-code/assets/shared/icon-close.svg" alt="">
    </div>
    <ul class="mobile-nav__list">
      <li>
        <a href="index.php" class="primary-nav__link"><span class="number">00</span> Home</a>
      </li>
      <li>
        <a href="destination.php" class="primary-nav__link"><span class="number">01</span> Destination</a>
      </li>
      <li>
        <a href="crew.php" class="primary-nav__link"><span class="number">02</span> Crew</a>
      </li>
      <li>
        <a href="technology-vehicle.php" class="primary-nav__link"><span class="number">03</span> Technology</a>
      </li>
    </ul>
  </nav>
  <div class="primary-burger" onclick="openNav()">
    <img src="/starter-code/assets/shared/icon-hamburger.svg" alt="">
  </div>
</header>