<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../assets/css/stylesoutput.css" rel="stylesheet" />
    <link href="../assets/css/modalstyles.css" rel="stylesheet" />
    <title>SLS-Sprachenatelier Language Studio</title>
  </head>
  <body>
    <div id="courses-wrapper">
      <!-- Modal markup -->
      <?php include './modal.php'; ?>

      <header class="relative z-20">
        <?php include 'navbar.php'; ?>
      </header>

      <div
        id="courses-heading"
        class="mx-5 sm:mx-14 lg:mx-[7.5rem] pt-24 sm:pt-40"
      >
        <div class="breadcrumb">
          <nav class="flex" aria-label="Breadcrumb">
            <ol
              class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse"
            >
              <li class="inline-flex items-center">
                <a
                  href="/"
                  class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                >
                  Home
                </a>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  /
                  <span
                    class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                    >Courses</span
                  >
                </div>
              </li>
            </ol>
          </nav>
        </div>
        <h2
          class="text-2xl sm:text-[46px] lg:text-[56px] shrink-0 clashdisplay font-medium my-3"
        >
          Courses
        </h2>
        <p class="text-xs sm:text-base max-w-[85%] md:max-w-[60%]">
          Sprachenatelier language studio is open to offer a wide variety of
          courses according to your preference, you can begin your language
          journey with one of these.
        </p>
      </div>

      <div
        id="courses-list"
        class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-16 lg:gap-16 mx-5 sm:mx-14 lg:mx-[7.5rem] mt-12 sm:mt-28"
      >
        <div class="courses-card">
          <img
            src="../assets/images/TestDaf.svg"
            alt=""
            class="mx-auto w-[60%]"
          />
          <div class="courses-card-box">
            <div class="flex flex-col gap-2 items-start py-6">
              <span
                class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-2xl"
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
            src="../assets/images/TestDaf.svg"
            alt=""
            class="mx-auto w-[60%]"
          />
          <div class="courses-card-box">
            <div class="flex flex-col gap-2 items-start py-6">
              <span
                class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-2xl"
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
            src="../assets/images/TestDaf.svg"
            alt=""
            class="mx-auto w-[60%]"
          />
          <div class="courses-card-box">
            <div class="flex flex-col gap-2 items-start py-6">
              <span
                class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-2xl"
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
            src="../assets/images/TestDaf.svg"
            alt=""
            class="mx-auto w-[60%]"
          />
          <div class="courses-card-box">
            <div class="flex flex-col gap-2 items-start py-6">
              <span
                class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-2xl"
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
            src="../assets/images/TestDaf.svg"
            alt=""
            class="mx-auto w-[60%]"
          />
          <div class="courses-card-box">
            <div class="flex flex-col gap-2 items-start py-6">
              <span
                class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-2xl"
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
            src="../assets/images/TestDaf.svg"
            alt=""
            class="mx-auto w-[60%]"
          />
          <div class="courses-card-box">
            <div class="flex flex-col gap-2 items-start py-6">
              <span
                class="clashdisplay font-medium text-[var(--brand-blue)] text-xl sm:text-2xl"
                >Intercultural Communication Training</span
              >
              <span class="text-sm sm:text-base"
                >SLS puts emphasis on the cultural sensitization of the clients
                by conducting high-end workshops which enable our clients to
                understand German culture, its traditions, rituals, customs and
                laws</span
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

      <div class="admission-consultancy-wrapper h-full p-[1px] mt-40">
        <div class="admission-consultancy px-5 sm:px-14 lg:px-[7.5rem] py-20">
          <div class="flex flex-col items-center pb-24">
            <span class="generalsans font-semibold text-[var(--brand-blue)]"
              >CONSULTATION</span
            >
            <h2
              class="text-[32px] md:text-[46px] text-center lg:text-[56px] shrink-0 clashdisplay font-medium leading-tight"
            >
              Admission Consultancy
            </h2>
          </div>
          <div class="flex flex-col items-center gap-6 sm:gap-8 lg:gap-40">
            <div
              class="relative phase w-full lg:w-[70%] flex flex-col sm:flex-row gap-4 sm:gap-8 md:gap-14 lg:gap-20 justify-between"
            >
              <img
                src="../assets/images/consultancy-step-arrow.svg"
                class="hidden lg:block absolute scale-x-125 scale-y-110 top-[80%]"
                alt=""
              />
              <div class="counsultancy-details max-sm:!gap-2">
                <div class="blue-gradient-tag">PHASE 1</div>
                <h3 class="consultancy-title">Counselling</h3>
              </div>
              <div
                class="shrink-0 w-full max-w-none sm:w-[40%] lg:w-1/2 sm:max-w-[24rem] h-56 lg:h-60 rounded-3xl bg-[linear-gradient(to_top_right,_#FFC360_4%,_#FFD184_30%,_#FFD999_66%)]"
              ></div>
            </div>

            <div
              class="relative phase w-full lg:w-[70%] flex flex-col sm:flex-row-reverse gap-4 sm:gap-8 md:gap-14 lg:gap-20 justify-between"
            >
              <img
                src="../assets/images/consultancy-step-arrow.svg"
                class="hidden lg:block absolute scale-x-125 scale-y-110 top-[80%]"
                alt=""
              />
              <div class="counsultancy-details max-sm:!gap-2">
                <div class="blue-gradient-tag">PHASE 2</div>
                <h3 class="consultancy-title">
                  Selection of Universities pertaining to the respective subject
                </h3>
              </div>
              <div
                class="shrink-0 w-full max-w-none sm:w-[40%] lg:w-1/2 sm:max-w-[24rem] h-56 lg:h-60 rounded-3xl bg-[linear-gradient(to_top_right,_#FFC360_4%,_#FFD184_30%,_#FFD999_66%)]"
              ></div>
            </div>

            <div
              class="relative phase w-full lg:w-[70%] flex flex-col sm:flex-row gap-4 sm:gap-8 md:gap-14 lg:gap-20 justify-between"
            >
              <img
                src="../assets/images/consultancy-step-arrow.svg"
                class="hidden lg:block absolute scale-x-125 scale-y-110 top-[80%]"
                alt=""
              />
              <div class="counsultancy-details max-sm:!gap-2">
                <div class="blue-gradient-tag">PHASE 3</div>
                <h3 class="consultancy-title">
                  Preparation of documents that are required for application
                  process
                </h3>
              </div>
              <div
                class="shrink-0 w-full max-w-none sm:w-[40%] lg:w-1/2 sm:max-w-[24rem] h-56 lg:h-60 rounded-3xl bg-[linear-gradient(to_top_right,_#FFC360_4%,_#FFD184_30%,_#FFD999_66%)]"
              ></div>
            </div>

            <div
              class="relative phase w-full lg:w-[70%] flex flex-col sm:flex-row-reverse gap-4 sm:gap-8 md:gap-14 lg:gap-20 justify-between"
            >
              <img
                src="../assets/images/consultancy-step-arrow.svg"
                class="hidden lg:block absolute scale-x-125 scale-y-110 top-[80%]"
                alt=""
              />
              <div class="counsultancy-details max-sm:!gap-2">
                <div class="blue-gradient-tag">PHASE 4</div>
                <h3 class="consultancy-title">
                  Preparation of documents for visa
                </h3>
              </div>
              <div
                class="shrink-0 w-full max-w-none sm:w-[40%] lg:w-1/2 sm:max-w-[24rem] h-56 lg:h-60 rounded-3xl bg-[linear-gradient(to_top_right,_#FFC360_4%,_#FFD184_30%,_#FFD999_66%)]"
              ></div>
            </div>

            <div
              class="relative phase w-full lg:w-[70%] flex flex-col sm:flex-row gap-4 sm:gap-8 md:gap-14 lg:gap-20 justify-between"
            >
              <!-- <img src="../assets/images/consultancy-step-arrow.svg" class="hidden lg:block absolute scale-x-125 scale-y-110 top-[80%]" alt=""> -->
              <div class="counsultancy-details max-sm:!gap-2">
                <div class="blue-gradient-tag">PHASE 5</div>
                <h3 class="consultancy-title">
                  Cultural sensitization for easy integration in German society.
                </h3>
              </div>
              <div
                class="shrink-0 w-full max-w-none sm:w-[40%] lg:w-1/2 sm:max-w-[24rem] h-56 lg:h-60 rounded-3xl bg-[linear-gradient(to_top_right,_#FFC360_4%,_#FFD184_30%,_#FFD999_66%)]"
              ></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Brochure section -->
      <?php include "brochure-section.php";?>

      <?php include "footer.php";?>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script src="../assets/js/script.js"></script>
  </body>
</html>
