<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../assets/css/stylesoutput.css" rel="stylesheet" />
  <link href="../assets/css/modalstyles.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="/assets/logos/SLS_icon.svg" />
  <title>SLS-Sprachenatelier Language Studio</title>
</head>

<body>
  <div id="about-wrapper">
    <!-- Modal markup -->
    <?php include './modal.php'; ?>

    <header class="relative z-20">
      <?php include 'navbar.php'; ?>
    </header>

    <div id="about-heading" class="mx-5 sm:mx-14 lg:mx-[7.5rem] pt-24 sm:pt-40">
      <div class="breadcrumb">
        <nav class="flex" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="/"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                Home
              </a>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                /
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">About Us</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
      <h2 class="text-2xl sm:text-[46px] lg:text-[56px] shrink-0 clashdisplay font-medium mt-3">
        About Us
      </h2>
    </div>

    <div id="about-the-institute"
      class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-6 sm:mt-14 grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-14 items-center">
      <div class="rounded-2xl w-full h-full overflow-hidden">
        <!-- <div class="rounded-2xl overflow-hidden"> -->
        <img src="../assets/images/about-1.jpg" alt="" class="object-cover h-full w-full" />
      </div>
      <div class="flex flex-col gap-2 sm:gap-6">
        <h2 class="text-xl md:text-3xl lg:text-5xl clashdisplay font-medium text-[var(--brand-blue)]">
          About The Institute
        </h2>
        <p class="text-xs lg:text-base leading-[26px] text-[var(--gray-600)]">
          Sprachenatelier offers a superior learning experience led by highly
          qualified personnel. Our staff excels in teaching German to various
          age groups and specializes in DaF and Education Science. For us
          "Communication goes beyond linguistic ethics!" and we inculcate
          German culture in our students. We prepare students and
          professionals for certification exams, higher studies, and careers
          in German-speaking countries. Emphasizing communication and cultural
          understanding, our interactive programs build confidence and provide
          practical, hands-on experience.
        </p>
      </div>
    </div>

    <div id="metrics-section"
      class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mx-5 sm:mx-14 lg:mx-[7.5rem] mt-10 sm:mt-12">
      <div
        class="metric-box max-sm:!px-8 max-sm:!py-5 flex flex-row sm:flex-col items-center max-sm:justify-center max-sm:gap-8">
        <div>
          <img src="../assets/images/aboutus-metric-1.svg" alt="" />
        </div>
        <div class="flex flex-col items-start sm:items-center">
          <div class="metric-number" style="font-size: 1.8rem">29.3K</div>
          <div class="metric-heading tracking-wider" style="font-size: 0.9rem">
            STUDENTS ENROLLED
          </div>
        </div>
      </div>
      <div
        class="metric-box max-sm:!px-8 max-sm:!py-5 flex flex-row sm:flex-col items-center max-sm:justify-center max-sm:gap-8">
        <div>
          <img src="../assets/images/aboutus-metric-2.svg" alt="" />
        </div>
        <div class="flex flex-col items-start sm:items-center">
          <div class="metric-number" style="font-size: 1.8rem">9+</div>
          <div class="metric-heading tracking-wider" style="font-size: 0.9rem">
            YEARS OF EXPERIENCE
          </div>
        </div>
      </div>
      <div
        class="metric-box max-sm:!px-8 max-sm:!py-5 flex flex-row sm:flex-col items-center max-sm:justify-center max-sm:gap-8">
        <div>
          <img src="../assets/images/aboutus-metric-3.svg" alt="" />
        </div>
        <div class="flex flex-col items-start sm:items-center">
          <div class="metric-number" style="font-size: 1.8rem">100%</div>
          <div class="metric-heading tracking-wider" style="font-size: 0.9rem">
            SATISFACTION RATE
          </div>
        </div>
      </div>
      <div
        class="metric-box max-sm:!px-8 max-sm:!py-5 flex flex-row sm:flex-col items-center max-sm:justify-center max-sm:gap-8">
        <div>
          <img src="../assets/images/aboutus-metric-4.svg" alt="" />
        </div>
        <div class="flex flex-col items-start sm:items-center">
          <div class="metric-number" style="font-size: 1.8rem">172</div>
          <div class="metric-heading tracking-wider" style="font-size: 0.9rem">
            SUCCESS STORIES
          </div>
        </div>
      </div>
    </div>

    <div id="about-the-founder"
      class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-6 sm:mt-14 grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-14 items-center">
      <div class="flex flex-col gap-6 max-lg:row-start-2">
        <h2 class="text-xl md:text-3xl lg:text-5xl clashdisplay font-medium text-[var(--brand-blue)]">
          About The Founder
        </h2>

        <div class="flex flex-col gap-4">
          <div class="text-base leading-[26px] flex flex-col gap-3">
            <div class="text-[var(--gray-800)] text-lg">
              <span class="font-semibold">Frau Ujwal Anil</span>
              <span class="font-[500]">
                has an extensive academic background in</span>
            </div>
            <ul class="list-disc text-[var(--gray-600)] pl-6">
              <li>
                Postgraduate research studies in Psycholinguistic Studies
              </li>
              <li>
                GDS - das große Deutsche Sprachdiplom Lehrer Ausbildung -
                Ludwig
              </li>
              <li>Maximilian Universität Education consultant</li>
            </ul>
          </div>
          <p class="text-base leading-[26px] text-[var(--gray-600)]">
            Trained by the TestDaF Institut Germany, she has helped students
            achieve meritorious results for the past 13 years. Most of the SLS
            students are global toppers, who have achieved the highest 20/20
            in the TestDaf examination. As an expert TestDaF Trainer, German
            Language Teacher for AB Initio programme (IBDP) and Telc language
            studies trainer she believes in “Language is the gateway to global
            opportunities for students” and thus she promotes German language
            through SLS.
          </p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden flex flex-col max-lg:row-start-1">
        <img src="../assets/images/founder.jpg" alt="" class="object-cover h-full w-full" />
      </div>
    </div>

    <!-- Brochure section -->
    <?php include "brochure-section.php"; ?>

    <?php include "footer.php"; ?>
  </div>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>