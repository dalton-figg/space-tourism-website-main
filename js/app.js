function openNav() {
  document.getElementById("js-mobile-nav").style.right = 0;
}

function closeNav() {
  document.getElementById("js-mobile-nav").style.right = "-100vw";
}

// const swup = new Swup({
//   plugins: [new SwupHeadPlugin()],
// });

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

// -- Populate via JSON --

import data from "../starter-code/data.json" assert { type: "json" }; // import data from file

const tabs = document.querySelectorAll(".tab"); // get tab buttons

const pageUrl = window.location.href; // get page URL

// set variables for each component to populate

const titleElement = document.getElementById("name");
const descriptionElement = document.getElementById("desc");
const distanceElement = document.getElementById("dist");
const timeElement = document.getElementById("time");
const imageElement = document.getElementById("image");

// set map for which destination corresponds to which data

const destinationMap = {
  Moon: data.destinations[0],
  Mars: data.destinations[1],
  Europa: data.destinations[2],
  Titan: data.destinations[3],
};

// add a click event listener to each button

if (tabs) {
  tabs.forEach((tab) => {
    tab.addEventListener("click", (e) => {
      e.preventDefault();
      setActive(tab);
      const selectedDestination = destinationMap[tab.innerHTML];
      populateContent(selectedDestination);
    });
  });
}

if (pageUrl.endsWith("destination.php")) {
  populateContent(data.destinations[0]); // populate moon page by default
}

function setActive(tab) {
  // remove active class from all tabs
  tabs.forEach((tab) => {
    tab.classList.remove("tab--active");
  });
  // add active class to clicked class
  tab.classList.add("tab--active");
}

// populate

function populateContent(data) {
  titleElement.innerHTML = data.name;
  descriptionElement.innerHTML = data.description;
  distanceElement.innerHTML = data.distance;
  timeElement.innerHTML = data.travel;
  imageElement.src = `../starter-code/assets/destination/image-${data.name}.png`;
}
