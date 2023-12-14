function openNav() {
  document.getElementById("js-mobile-nav").style.right = 0;
}

function closeNav() {
  document.getElementById("js-mobile-nav").style.right = "-100vw";
}

// const swup = new Swup({
//   plugins: [new SwupHeadPlugin()],
// });

new Glide(".glide").mount();
