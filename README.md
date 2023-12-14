# Frontend Mentor - Space tourism website solution

This is a solution to the [Space tourism website challenge on Frontend Mentor](https://www.frontendmentor.io/challenges/space-tourism-multipage-website-gRWj1URZ3). Frontend Mentor challenges help you improve your coding skills by building realistic projects.

## Table of contents

- [Overview](#overview)
  - [The challenge](#the-challenge)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [What I learned](#what-i-learned)
- [Author](#author)

## Overview

### The challenge

Users should be able to:

- View the optimal layout for each of the website's pages depending on their device's screen size
- See hover states for all interactive elements on the page
- View each page and be able to toggle between the tabs to see new information

### Links

- Solution URL: [Add solution URL here](https://your-solution-url.com)

## My process

### Built with

- Semantic HTML5 markup
- SCSS
- Flexbox
- CSS Grid
- Mobile-first workflow

### What I learned

I learned a lot about planning a project and making code resuable, especially with the use of mixins and placeholders in SCSS. This allowed my workflow to be more efficent as many of the pages followed a similar layout.

I also learnt how to extract data from a json file and use it to populate pages as an alternative to using a proper tabs system.

To see how you can add code snippets, see below:

```php
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
```

```scss
@include layout(flex, $justify: center, $align: center);
@extend %heading-4;

@include media(tablet) {
  width: 60px;
}

@include media(laptop) {
  width: 80px;
}
```

```js
if (document.querySelector(".glide")) {
  new Glide(".glide", {
    type: "carousel",
    direction: "ltr",
    perView: 1,
    startAt: 0,
    animationTimingFunc: "linear",
    autoplay: 2500,
  }).mount();
}
```

## Author

- Frontend Mentor - [@dalton-f](https://www.frontendmentor.io/profile/dalton-f)