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
  new Glide(".glide").mount();
}

// -- Populate via JSON --

import data from "../starter-code/data.json" assert { type: "json" }; // import data from file

const tabs = document.querySelectorAll(".destination__link"); // get tab buttons

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
    tab.addEventListener("click", () => {
      setActive(tab);
      const selectedDestination = destinationMap[tab.innerHTML];
      populateContent(selectedDestination);
    });
  });
}

populateContent(data.destinations[0]); // populate moon page by default

function setActive(tab) {
  // remove active class from all tabs
  tabs.forEach((tab) => {
    tab.classList.remove("destination__link--active");
  });
  // add active class to clicked class
  tab.classList.add("destination__link--active");
}

// populate

function populateContent(data) {
  titleElement.innerHTML = data.name;
  descriptionElement.innerHTML = data.description;
  distanceElement.innerHTML = data.distance;
  timeElement.innerHTML = data.travel;
  imageElement.src = `../starter-code/assets/destination/image-${data.name}.png`;
}
