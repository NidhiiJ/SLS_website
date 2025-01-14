<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./assets/css/stylesoutput.css" rel="stylesheet" />
    <link href="./assets/css/modalstyles.css" rel="stylesheet" />
    <!-- <link
      href="node_modules/@glidejs/glide/dist/css/glide.core.min.css"
      rel="stylesheet"
    /> -->
    <link
      href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.7.1/dist/css/glide.core.min.css"
      rel="stylesheet"
    />
    <title>SLS-Sprachenatelier Language Studio</title>
  </head>
  <body>
    <div id="main-wrapper">
        <!-- Modal markup -->
        <?php include './modal.php'; ?>
    
      <header class="relative z-20">
        <?php include 'navbar.php'; ?>
      </header>

      <!-- Mobile nav menu -->
    

      <div
        id="hero-section"
        class="relative z-0 w-full overflow-hidden bg-no-repeat bg-cover bg-[70%_50%] lg:bg-right-bottom"
        style="background-image: url('../assets/images/hero-image.png')"
      >
        <div
          class="absolute w-screen h-full bg-gradient-to-l from-transparent from-[42%] to-[#114f9fa2] -z-10"
        ></div>
        <img
          src="../assets/images/wave-illustration.svg"
          alt=""
          class="invisible md:visible absolute right-0 top-[20%]"
        />

        <div
          class="mx-9 sm:mx-14 lg:mx-[7.5rem] w-full min-h-screen flex items-center py-28 sm:pt-32 sm:pb-8"
        >
          <div class="relative">
            <div
              class="absolute -top-28 left-1 sm:-right-10 sm:left-auto sm:top-auto flex flex-col gap-4"
            >
              <button class="home-hero-translate-btn">
                <img src="../assets/images/translate.svg" alt="" />
              </button>
              <img
                src="../assets/images/arrow-vector.svg"
                alt=""
                class="w-12 -scale-x-100 rotate-[55deg] translate-y-3 sm:scale-x-100 sm:rotate-0 sm:translate-y-0"
              />
            </div>
            <h1
              class="text-[40px] sm:text-5xl md:text-[56px] clashdisplay flex flex-col gap-2 home-hero-heading"
              style="font-weight: 600"
            >
              <span class="text-white leading-none">Deutsch</span>
              <span class="text-[#FE9F0F] leading-none">Lernen</span>
              <span class="text-white leading-none">Deutschland</span>
              <span class="text-[#FE9F0F] leading-none">Verstehen</span>
            </h1>
            <button
              class="custom-yellow-btn mt-8 custom-btn-animation"
              data-text="Read More"
            >
              Read More
            </button>
          </div>
        </div>
      </div>

      <div id="aboutus-wrapper" class="relative w-full h-fit">
        <div
          class="hidden lg:block gradient-circle-yellow absolute top-[80%] left-[-40%] z-[-10]"
        ></div>
        <div
          id="aboutus-section"
          class="flex flex-col sm:flex-row justify-between gap-4 sm:gap-10 px-5 sm:px-14 md:px-[7.5rem] pt-12 sm:pt-40"
        >
          <h2
            class="text-[32px] sm:text-[40px] md:text-[46px] lg:text-[56px] shrink-0 clashdisplay font-medium"
          >
            About Us
          </h2>
          <span class="text-justify sm:max-w-[60%] text-sm lg:text-lg"
            >Sprachenatelier Language Studio has been training students who
            aspire to pursue higher education in German-speaking Countries since
            2013. We strive to provide you with the best learning experience and
            set up for success by prioritizing German language learning and
            understanding of German culture.</span
          >
        </div>
      </div>

      <div id="withusyoucan-wrapper" class="relative w-full h-fit">
        <div
          class="hidden lg:block gradient-circle-yellow w-full absolute top-[46%] right-[-40%] z-[-10]"
        ></div>
        <div
          id="withusyoucan-section"
          class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-20 sm:mt-40"
        >
          <div class="mb-20">
            <h2
              class="text-[32px] md:text-[46px] text-center lg:text-[56px] shrink-0 clashdisplay font-medium"
            >
              With Us, You Can
            </h2>
          </div>
          <div class="flex flex-col gap-16 sm:gap-20">
            <div
              id="wuyc-1"
              class="flex flex-col-reverse sm:flex-row gap-8 sm:gap-20 justify-between items-center"
            >
              <div>
                <h3
                  class="clashdisplay font-medium text-2xl sm:text-3xl lg:text-[42px] text-[#053F92] mb-3"
                >
                  Dive into German
                </h3>
                <p class="text-sm md:text-base text-gray-600 mb-6">
                  Foremost German learning institute in India to enhance your
                  language skills.
                </p>
                <div class="yellow-link w-max mt-4">
                  <a href="/courses.php" class="flex items-center">
                    Know more
                    <img
                      src="../assets/images/arrow-right.svg"
                      alt=""
                      class="ml-2"
                    />
                  </a>
                </div>
              </div>
              <div class="shrink-0 w-4/5 sm:w-[28vw]">
                <img
                  src="../assets/images/discover.svg"
                  alt="illustration"
                  class="w-full"
                />
              </div>
            </div>
            <div
              id="wuyc-2"
              class="flex flex-col sm:flex-row gap-8 sm:gap-20 justify-between items-center"
            >
              <div class="shrink-0 w-4/5 sm:w-[28vw]">
                <img
                  src="../assets/images/knowgermany.svg"
                  alt="illustration"
                  class="w-full"
                />
              </div>
              <div>
                <h3
                  class="clashdisplay font-medium text-2xl sm:text-3xl lg:text-[42px] text-[#053F92] mb-3"
                >
                  Know Germany
                </h3>
                <p class="text-sm md:text-base text-gray-600 mb-6">
                  Successful communication transcends language ethics. We ensure
                  to introduce our students to the culture of all German
                  speaking countries which makes it easy and fun to learn the
                  German language.
                </p>
                <div class="yellow-link w-max mt-4">
                  <a href="/blogs.php" class="flex items-center">
                    Know more
                    <img
                      src="../assets/images/arrow-right.svg"
                      alt=""
                      class="ml-2"
                    />
                  </a>
                </div>
              </div>
            </div>
            <div
              id="wuyc-3"
              class="flex flex-col-reverse sm:flex-row gap-8 sm:gap-20 justify-between items-center"
            >
              <div>
                <h3
                  class="clashdisplay font-medium text-2xl sm:text-3xl lg:text-[42px] text-[#053F92] mb-3"
                >
                  Learning made interesting with
                </h3>
                <p class="text-sm md:text-base text-gray-600 mb-6">
                  Interactive and practical lessons in German and personal
                  attention in focused groups. We ensure a superior quality of
                  learning experience, all thanks to our highly qualified
                  teachers with extensive teaching backgrounds with their
                  research bent of mind.
                </p>
                <div class="yellow-link w-max mt-4">
                  <a href="/about.php" class="flex items-center">
                    Know more
                    <img
                      src="../assets/images/arrow-right.svg"
                      alt=""
                      class="ml-2"
                    />
                  </a>
                </div>
              </div>
              <div class="shrink-0 w-4/5 sm:w-[28vw]">
                <img
                  src="../assets/images/learningmadeinteresting.svg"
                  alt="illustration"
                  class="w-full"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="metrics-wrapper" class="relative overflow-x-clip">
        <div
          class="hidden lg:block gradient-circle-yellow absolute top-[-20%] left-[-40%] z-[-10]"
        ></div>
        <div
          class="hidden lg:block gradient-circle-yellow absolute top-[60%] right-[-40%] z-[-10]"
        ></div>
        <div
          id="metrics-section"
          class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-12 sm:mt-40 grid grid-cols-1 sm:grid-cols-2 gap-6"
        >
          <div class="flex flex-col gap-6 h-full">
            <div class="flex flex-col metric-box h-full">
              <span class="metric-heading">Success Stories</span>
              <span class="metric-number">172</span>
              <span class="metric-description">
                Empowering Aspirations, Transforming Lives – The Sprachenatelier's success story
              </span>
            </div>

            <div class="flex sm:hidden flex-col metric-box h-full">
              <span class="metric-number">9+</span>
              <span class="metric-heading">Years Of Experience</span>
            </div>
            <div class="flex sm:hidden flex-col metric-box h-full">
              <span class="metric-heading">Students Enrolled</span>
              <span class="metric-number">29.3k</span>
              <span class="metric-description"
                >Lorem ipsum dolor sit amet consectetur.</span
              >
            </div>
            <div class="flex sm:hidden flex-col metric-box h-full">
              <span class="metric-number">20+</span>
              <span class="metric-heading"
                >Public Universities Admitted To</span
              >
            </div>

            <div class="flex flex-col metric-box h-full">
              <span class="metric-heading">Help When You Need It</span>
              <span class="metric-description"
                >Need help? We’re here 24/7. Out team is super friendly and
                ready to help you with anything.</span
              >
              <img
                src="../assets/images/help-icons.svg"
                class="w-[90%] md:w-[72%] mx-auto"
                alt=""
              />
            </div>
          </div>

          <div class="hidden sm:flex flex-col gap-6 h-full">
            <div class="flex flex-col metric-box h-full">
              <span class="metric-number">9+</span>
              <span class="metric-heading">Years Of Experience</span>
            </div>
            <div class="flex flex-col metric-box h-full">
              <span class="metric-heading">Students Enrolled</span>
              <span class="metric-number">29.3k</span>
              <span class="metric-description"
                >Lorem ipsum dolor sit amet consectetur.</span
              >
            </div>
            <div class="flex flex-col metric-box h-full">
              <span class="metric-number">20+</span>
              <span class="metric-heading"
                >Public Universities Admitted To</span
              >
            </div>
          </div>
        </div>
      </div>

      <div
        id="courses-section"
        class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-28 sm:mt-40"
      >
        <div class="flex flex-col items-center mb-24">
          <span
            class="generalsans text-sm md:text-base font-semibold text-[var(--brand-blue)]"
            >COURSES</span
          >
          <h2
            class="w-[80%] text-2xl sm:text-[32px] md:text-[46px] text-center lg:text-[56px] shrink-0 clashdisplay font-medium leading-tight"
          >
            Take Your First Step Towards Fluency With Our Dedicated Courses
          </h2>
        </div>
        <div
          class="courses-cards-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-rows-2 gap-x-6 lg:gap-x-8 gap-y-16"
        >
          <div class="courses-card">
            <img
              src="../assets/images/course-svg/test-daf.svg"
              alt=""
              class="mx-auto w-[80%]"
            />
            <div class="courses-card-box">
              <div class="flex flex-col gap-2 items-start py-6">
                <span
                  class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-[24px]"
                  >TestDaF Examination</span
                >
                <span class="text-sm sm:text-base"
                  >(Test auf Deutsch als Fremdsprache) : A mandatory examination
                  for students, who are aspiring to study at Universities in all
                  German-speaking countries. It teaches scientific terms across
                  various fields.</span
                >
              </div>
              <div class="yellow-link mt-4">
                <a href="course-details/testDaf.php" class="flex items-center">
                  Know more
                  <img
                    src="../assets/images/arrow-right.svg"
                    alt=""
                    class="ml-2"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="courses-card">
            <img
              src="../assets/images/course-svg/dsh-exam.svg"
              alt=""
              class="mx-auto w-[80%]"
            />
            <div class="courses-card-box">
              <div class="flex flex-col gap-2 items-start py-6">
                <span
                  class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-[24px]"
                  >DSH Examination</span
                >
                <span class="text-sm sm:text-base"
                  >A language proficiency test, available only in Germany for
                  entry to German universities for higher education.</span
                >
              </div>
              <div class="yellow-link mt-4">
                <a href="course-details/dsh.php" class="flex items-center">
                  Know more
                  <img
                    src="../assets/images/arrow-right.svg"
                    alt=""
                    class="ml-2"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="courses-card">
            <img
              src="../assets/images/course-svg/telc-exam.svg"
              alt=""
              class="mx-auto w-[80%]"
            />
            <div class="courses-card-box">
              <div class="flex flex-col gap-2 items-start py-6">
                <span
                  class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-[24px]"
                  >Telc Examination</span
                >
                <span class="text-sm sm:text-base"
                  >Telc is a language exam required to study in Austria. It is
                  also accepted by German universities. It is ideal for students
                  who aspire to pursue a career in medicine.</span
                >
              </div>
              <div class="yellow-link mt-4">
                <a href="course-details/telc.php" class="flex items-center">
                  Know more
                  <img
                    src="../assets/images/arrow-right.svg"
                    alt=""
                    class="ml-2"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="courses-card">
            <img
              src="../assets/images/course-svg/ab-initio.svg"
              alt=""
              class="mx-auto w-[80%]"
            />
            <div class="courses-card-box">
              <div class="flex flex-col gap-2 items-start py-6">
                <span
                  class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-[24px]"
                  >Ab Initio, SL and HL German Examination of IB</span
                >
                <span class="text-sm sm:text-base"
                  >These exams are designed for the International Boards like IB
                  Geneva to introduce foreign languages and cultures through
                  Language Studies. These exam certificates are value added for
                  students who look forward to studying in German
                  Universities.</span
                >
              </div>
              <div class="yellow-link mt-4">
                <a href="course-details/abInitio.php" class="flex items-center">
                  Know more
                  <img
                    src="../assets/images/arrow-right.svg"
                    alt=""
                    class="ml-2"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="courses-card">
            <img
              src="../assets/images/course-svg/zuwanderer.svg"
              alt=""
              class="mx-auto w-[80%]"
            />
            <div class="courses-card-box">
              <div class="flex flex-col gap-2 items-start py-6">
                <span
                  class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-[24px]"
                  >Deutsch-Test für Zuwanderer (DTZ)</span
                >
                <span class="text-sm sm:text-base"
                  >Professionals who wish to reside in Germany are supposed to
                  give this exam. It focuses on the aspects of daily life and
                  community engagement.</span
                >
              </div>
              <div class="yellow-link mt-4">
                <a href="course-details/deutschTest.php" class="flex items-center">
                  Know more
                  <img
                    src="../assets/images/arrow-right.svg"
                    alt=""
                    class="ml-2"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="courses-card">
            <img
              src="../assets/images/course-svg/ict.svg"
              alt=""
              class="mx-auto w-[80%]"
            />
            <div class="courses-card-box">
              <div class="flex flex-col gap-2 items-start py-6">
                <span
                  class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-[24px]"
                  >Intercultural Communication Training</span
                >
                <span class="text-sm sm:text-base"
                  >SLS puts emphasis on the cultural sensitization of the
                  clients by conducting high-end workshops which enable our
                  clients to understand German culture, its traditions, rituals,
                  customs and laws</span
                >
              </div>
              <div class="yellow-link mt-4">
                <a href="course-details/interculturalCommunicationTraining.php" class="flex items-center">
                  Know more
                  <img
                    src="../assets/images/arrow-right.svg"
                    alt=""
                    class="ml-2"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        id="testimonials-section"
        class="relative h-max w-screen mt-16 sm:mt-40"
      >
        <img
          src="../assets/images/wave-illustration-orange.svg"
          alt=""
          class="hidden sm:block absolute right-0 top-[20%]"
        />
        <div
          class="absolute h-[292px] w-[292px] right-0 top-[30%] translate-x-2/3 blur-[500px] rounded-full testimonial-glow"
        ></div>
        <img
          src="../assets/images/wave-illustration-orange.svg"
          alt=""
          class="hidden lg:block absolute rotate-180 left-0 top-[60%]"
        />
        <div
          class="absolute h-[292px] w-[292px] left-0 top-[50%] -translate-x-2/3 blur-[500px] rounded-full testimonial-glow"
        ></div>
        <div class="flex flex-col items-center mb-16 lg:mb-24">
          <span class="generalsans font-semibold text-[var(--brand-blue)] mb-2"
            >TESTIMONIALS</span
          >
          <h2
            class="w-[60%] text-2xl sm:text-[32px] md:text-[46px] text-center lg:text-[56px] shrink-0 clashdisplay font-medium leading-tight"
          >
            They Achieved Success With Us, And You Can Too!
          </h2>
        </div>

        <div class="max-w-2xl mx-auto px-5 sm:px-9">
          <div class="glide">
            <div class="relative">
              <div
                class="glide__track testimonial-slide rounded-[20px]"
                data-glide-el="track"
              >
                <ul id="testimonial-container" class="glide__slides">
                </ul>
              </div>
              <img
                src="../assets/images/double-quotes-open.svg"
                alt=""
                class="absolute -top-3 left-6 sm:-left-4"
              />
              <img
                src="../assets/images/double-quotes-close.svg"
                alt=""
                class="absolute bottom-0 right-0 -translate-x-6 sm:translate-x-4 translate-y-3"
              />
            </div>
            <div class="glide__bullets mt-12" data-glide-el="controls[nav]">
              <button class="glide__bullet" data-glide-dir="=0"></button>
              <button class="glide__bullet" data-glide-dir="=1"></button>
              <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
          </div>
        </div>
      </div>

      <div
        id="videos-section"
        class="mt-16 lg:mt-40 mx-5 sm:mx-14 lg:mx-[7.5rem] flex flex-col sm:flex-row gap-4 sm:gap-6 lg:gap-12"
      >
        <div
          class="w-full relative flex-1 border-8 border-white rounded-xl overflow-hidden"
        >
          <img
            src="../assets/images/play_btn.svg"
            alt=""
            class="absolute inset-[40%] w-[15%]"
          />
          <img src="../assets/images/video_img_1.jpg" alt="" class="w-full" />
        </div>
        <div
          class="w-full relative flex-1 border-8 border-white rounded-xl overflow-hidden"
        >
          <img
            src="../assets/images/play_btn.svg"
            alt=""
            class="absolute inset-[40%] w-[15%]"
          />
          <img src="../assets/images/video_img_2.jpg" alt="" class="w-full" />
        </div>
      </div>

      <div id="blogs-section" class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-40">
        <div class="flex flex-col items-center mb-8 sm:mb-14 lg:mb-24">
          <span class="generalsans font-semibold text-[var(--brand-blue)]"
            >LATEST BLOGS</span
          >
          <h2
            class="w-4/5 lg:w-[60%] text-2xl sm:text-[32px] md:text-[46px] text-center lg:text-[56px] shrink-0 clashdisplay font-medium leading-tight"
          >
            German language insights curated just for you
          </h2>
        </div>
        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8"
        >
          <div class="blog-card">
            <img src="../assets/images/blog-cover-1.jpg" alt="" />
            <div class="blog-details-wrapper">
              <div class="Blog-details-container">
                <span class="blog-category">Category - 01 April, 2024</span>
                <div class="blog-details">
                  <span class="blog-title">Lorem Ipsum</span>
                  <span class="blog-description"
                    >Lorem ipsum dolor sit amet consectetur. Platea senectus
                    turpis vel praesent malesuada aliquam blandit semper.</span
                  >
                </div>
              </div>
              <button
                class="custom-yellow-btn custom-btn-animation w-max"
                data-text="Learn More"
              >
                Learn More
              </button>
            </div>
          </div>
          <div class="blog-card">
            <img src="../assets/images/blog-cover-1.jpg" alt="" />
            <div class="blog-details-wrapper">
              <div class="Blog-details-container">
                <span class="blog-category">Category - 01 April, 2024</span>
                <div class="blog-details">
                  <span class="blog-title">Lorem Ipsum</span>
                  <span class="blog-description"
                    >Lorem ipsum dolor sit amet consectetur. Platea senectus
                    turpis vel praesent malesuada aliquam blandit semper.</span
                  >
                </div>
              </div>
              <button
                class="custom-yellow-btn custom-btn-animation w-max"
                data-text="Learn More"
              >
                Learn More
              </button>
            </div>
          </div>
          <div class="blog-card max-lg:!hidden">
            <img src="../assets/images/blog-cover-1.jpg" alt="" />
            <div class="blog-details-wrapper">
              <div class="Blog-details-container">
                <span class="blog-category">Category - 01 April, 2024</span>
                <div class="blog-details">
                  <span class="blog-title">Lorem Ipsum</span>
                  <span class="blog-description"
                    >Lorem ipsum dolor sit amet consectetur. Platea senectus
                    turpis vel praesent malesuada aliquam blandit semper.</span
                  >
                </div>
              </div>
              <button
                class="custom-yellow-btn custom-btn-animation w-max"
                data-text="Learn More"
              >
                Learn More
              </button>
            </div>
          </div>
        </div>
        <div class="mt-14 flex flex-row justify-center">
          <button class="custom-yellow-outline-btn" data-text="View More">
            <span> View More </span>
          </button>
        </div>
      </div>

      <?php include "brochure-section.php";?>

      <?php include "footer.php";?>
    </div>
    <script src="./path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.7.1"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/homeScript.js"></script>
  </body>
</html>
