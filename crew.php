<?php
$page = 'crew';
$subpage = 'moon';
$stylesheet = '<link rel="stylesheet" href="css/crew.css" /> <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.3.0/dist/css/glide.core.min.css">';

$members = [
  [
    'position' => 'Commander',
    'img' => '/starter-code/assets/crew/image-douglas-hurley.png',
    'name' => 'Douglas Hurley',
    'description' => 'Douglas Gerald Hurley is an American engineer, former Marine Corps pilot
    and former NASA astronaut. He launched into space for the third time as
    commander of Crew Dragon Demo-2.'
  ],
  [
    'position' => 'Mission Specialist',
    'img' => '/starter-code/assets/crew/image-mark-shuttleworth.png',
    'name' => 'MARK SHUTTLEWORTH',
    'description' => 'Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Linux-based Ubuntu operating system. Shuttleworth became the first South African to travel to space as a space tourist.'
  ],
  [
    'position' => 'Pilot',
    'name' => 'Victor Glover',
    'img' => '/starter-code/assets/crew/image-victor-glover.png',
    'description' => 'Pilot on the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the U.S. Navy where he pilots an F/A-18.He was a crew member of Expedition 64, and served as a station systems flight engineer.'
  ],
  [
    'position' => 'Flight Engineer',
    'name' => 'Anousheh Ansari',
    'img' => '/starter-code/assets/crew/image-anousheh-ansari.png',
    'description' => '
    Anousheh Ansari is an Iranian American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to fly to the ISS, and the first Iranian in space.'
  ]

]
?>

<?php include 'php-partials/head.php' ?>
<?php include 'php-partials/navbar.php' ?>

<main>
  <h1 class='page__title | text-uppercase heading-5'> <span class='text-white-25'>02</span> Meet your crew</h1>
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <?php foreach ($members as $member) : ?>
          <li class="glide__slide">
            <div class="crew">
              <div class="crew__copy | text-center">

                <h2 class='crew__copy-title | heading-4 text-uppercase text-white-50'><?= $member['position'] ?></h2>
                <p class='heading-3 text-uppercase'><?= $member['name'] ?></p>
                <p class='text-blue'>
                  <?= $member['description'] ?>
                </p>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                  <button class="glide__bullet" data-glide-dir="=0"></button>
                  <button class="glide__bullet" data-glide-dir="=1"></button>
                  <button class="glide__bullet" data-glide-dir="=2"></button>
                  <button class="glide__bullet" data-glide-dir="=4"></button>
                </div>
              </div>
              <div class='crew__image'>
                <img src="<?= $member['img'] ?>" width='514' height='700' alt="">
              </div>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src='/js/app.js'></script>

</html>