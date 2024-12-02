// Mobile/Tab menu
const menuBtn = document.querySelector("#menu-btn");
const closeMenuBtn = document.querySelector("#close-menu-btn");
const mobileNav = document.querySelector(".mobile-nav");

menuBtn.addEventListener("click", () => {
  mobileNav.classList.add("mobile-nav--open");
});
closeMenuBtn.addEventListener("click", () => {
  mobileNav.classList.remove("mobile-nav--open");
});

// micromodal.js module - added throught cdn
MicroModal.init();

window.addEventListener("load", () => {
  // IF YOU ONLY WANT TO MAKE MODAL VISIBLE ON HOME PAGE
  // // CHANGE THIS URL TO THE ACTURAL HOME PAGE URL
  // const HOME_URL = "http://127.0.0.1:5500/";
  // if (window.location.href === HOME_URL)

  // -----------------------------------------------------------------------------
  setTimeout(() => {
    MicroModal.show("modal-1");
  }, 10000);
});
