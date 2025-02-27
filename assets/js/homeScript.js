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

const testimonials = {
  "testimonials": [
    {
      "quote": "Sprachenatelier Language studio has helped me a lot in my journey to learn German. The CEO Frau Ujwal is a great mentor and teacher. The course is structured in a very scientific and systematic manner. During the Testdaf there is a continuous drill of language training done with the students to get the best results. There are a lot of sample papers done with us and corrected very meticulously by Frau Ujwal herself.",
      "author": "Tyrone Pereira shares his training experience with SLS: Student"
    },
    {
      "quote": "I've been studying German with Sprachenatelier Language Studio for over 10 months, and my experience has been phenomenal. SLS has helped with my TestDaF preparation, university application, and learning German culture. Frau Ujwal’s training has prepared me to integrate smoothly into German culture, aiding my future endeavors in Germany.",
      "author": "Krishna Vijaykar on his TestDAF preparation with SLS"
    },
    {
      "quote": "I commend SLS for their diligence and professionalism. Frau Ujwal, the founder, is an exceptional mentor. It is an intensive course designed creatively to keep the students engaged, simultaneously educating them about German culture and lifestyle. I will definitely recommend SLS to anyone who wishes to pursue higher education in Germany or who simply wishes to learn the German language in depth.",
      "author": "Vaibhavi Ranade and her learning curve with SLS"
    },
    {
      "quote": "I would recommend SLS to anyone who wishes to take the TestDaF examination. This institute’s main focus is TestDaf and prepares you according to it. However, this course may be rigorous and not everyone’s cup of tea for the ones who wish to learn the language for fun. SLS is the best option for aspiring students who want to study in Germany. Highly recommended.",
      "author": "Vedant Chimmalgi speaks about his training programme with SLS"
    },
    {
      "quote": "I lived in Germany and learned German (A1). In India, I advanced my German with Sprachenatelier Language Studio (SLS). Impressed by their structured, systematic program, I progressed to C1. SLS’s interactive sessions and TestDaF preparation opened doors for studies and careers in German institutions. I would definitely recommend it to anyone.",
      "author": "Asmita Gajbhiye talks about her TestDaF experience with SLS"
    },
    {
      "quote": "I am currently doing the course at SALS with Frau Ujwal to prepare for the TestDaF, and I must say it was a unique and refreshing experience. Frau Ujwal's teaching style is interactive, and her methodology is interesting and engaging. One standout feature of the course is its integrated approach. This sets it apart from doing individual language courses. The integrated curriculum seamlessly connects language levels, creating a more efficient learning experience. This approach accelerates your language proficiency and provides a comprehensive understanding of German. Even in an online setting, the class runs smoothly. I highly recommend SLS.",
      "author": "Sahaj Upadhyay on his TestDaF training"
    }
  ]
}

const testimonialsContainer = document.getElementById("testimonial-container")

testimonials.testimonials.forEach(testimonial => {
  const listItem = document.createElement('li');
  listItem.classList.add('glide__slide');
  
  const content = `
    <div class="bg-white px-6 sm:px-14 py-10 sm:py-16">
      <p class="generalsans italic text-center mb-6 sm:mb-10 text-xs sm:text-base text-[var(--gray-700)]">
        “${testimonial.quote}”
      </p>
      <p class="generalsans text-sm sm:text-lg font-medium text-center">
        - ${testimonial.author}
      </p>
    </div>
  `;
  
  listItem.innerHTML = content;
  testimonialsContainer.appendChild(listItem);
});

// @glidejs/glide module - added throught cdn
new Glide(".glide", {
  autoplay: 4000,
  hoverpause: true,
  type: "carousel",
}).mount();