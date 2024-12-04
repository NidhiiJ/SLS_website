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
MicroModal.init({
  disableFocus: true,
});

window.addEventListener("load", () => {
  setTimeout(() => {
    MicroModal.show("modal-1", {
      disableFocus: true,
    });
  }, 10000);
});
