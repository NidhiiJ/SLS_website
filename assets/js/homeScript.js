// @glidejs/glide module - added throught cdn
// new Glide(".glide", {
//   autoplay: 4000,
//   hoverpause: true,
//   type: "carousel",
// }).mount();

const homeTranslateBtn = document.querySelector(".home-hero-translate-btn");
let isHeadingGerman = true;

const headingGerman = `<span class="text-white leading-none">Deutsch</span>
              <span class="text-[#FE9F0F] leading-none">Lernen</span>
              <span class="text-white leading-none">Deutschland</span>
              <span class="text-[#FE9F0F] leading-none">Verstehen</span>`;

const headingEnglish = `<span class="text-white leading-none">Learn</span>
              <span class="text-[#FE9F0F] leading-none">German</span>
              <span class="text-white leading-none">Understand</span>
              <span class="text-[#FE9F0F] leading-none">Germany</span>`;

homeTranslateBtn.addEventListener("click", () => {
  const heading = document.querySelector(".home-hero-heading");

  if (isHeadingGerman) {
    heading.innerHTML = headingEnglish;
    isHeadingGerman = false;
  } else {
    heading.innerHTML = headingGerman;
    isHeadingGerman = true;
  }
});
