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

if (!sessionStorage.getItem("modalShown")) {
  window.addEventListener("load", () => {
    setTimeout(() => {
      // Show the modal after 4 seconds
      MicroModal.show("modal-1", {
        disableFocus: true,
      });

      // Set a flag in sessionStorage to indicate the modal has been shown
      sessionStorage.setItem("modalShown", "true");
    }, 4000); // 4000 milliseconds = 4 seconds
  });
}