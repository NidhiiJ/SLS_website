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

// modal form submission
document.getElementById("download-brochure-form").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent form submission from refreshing the page

  // Retrieve form values
  const firstname = document.getElementById("modal-firstname").value;
  const lastname = document.getElementById("modal-lastname").value;
  const email = document.getElementById("modal-email").value;
  const contact = document.getElementById("modal-contact").value;
  // const message = document.getElementById("message").value;

  // Prepare the data to send
  const data = {
    firstname: firstname,
    lastname: lastname,
    email: email,
    contact: contact,
  };

  console.log(data)
  setTimeout(() => {   
    MicroModal.close('modal-1');
  }, 1000);

  // Reset the form
  document.getElementById("download-brochure-form").reset()
})
