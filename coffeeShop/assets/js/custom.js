// NAVBAR
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navigation-menu");
const navBrand = document.querySelector(".branding-link");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navBrand.classList.toggle("active");
  navMenu.classList.toggle("active");
});

document.querySelectorAll(".navigation-link").forEach((n) =>
  n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navBrand.classList.remove("active");
    navMenu.classList.remove("active");
  })
);
