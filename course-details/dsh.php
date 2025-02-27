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
  <div id="course-detail-wrapper">
    <!-- Modal markup -->
    <?php include '../modal.php'; ?>

    <header class="relative z-20">
      <?php include '../navbar.php'; ?>
    </header>

    <div id="course-heading" class="mx-5 sm:mx-14 lg:mx-[7.5rem] pt-24 sm:pt-40">
      <div class="breadcrumb">
        <nav class="flex" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="/"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                Home
              </a>
            </li>
            <li class="flex gap-2 items-center">
              <span>/ </span>
              <a href="/courses.php"
                class="items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                Courses
              </a>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                /
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">DSH Examination</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-10 lg:gap-12 mx-5 sm:mx-14 lg:mx-[7.5rem] pt-2 sm:pt-10">
      <div class="flex flex-col gap-8 lg:w-[50vw] min-w-96">
        <h1 class="font-medium text-2xl sm:text-4xl clashdisplay">
          DSH Examination
        </h1>
        <div class="flex flex-col gap-8">
          <p class="text-[var(--gray-600)] text-base">
            Deutsche Sprachprüfung für den Hochschulzugang is a language proficiency test which is
            written only in Germany for entry to German universities, to study in the instruction of German
            language in any sphere of education. It is specifically designed for international applicants.
          </p>
          <div class="flex flex-col gap-4">
            <div class="flex gap-8 items-center">
              <div
                class="rounded-full w-10 h-10 flex items-center justify-center p-2 bg-[var(--brand-orange-secondary)]">
                <img src="../assets/images/duration.svg" alt="" />
              </div>
              <span class="generalsans font-medium">Duration: 10 months</span>
            </div>
            <div class="flex gap-8 items-center">
              <div
                class="rounded-full w-10 h-10 flex items-center justify-center p-2 bg-[var(--brand-orange-secondary)]">
                <img src="../assets/images/proficiency.svg" alt="" />
              </div>
              <span class="generalsans font-medium">Proficiency level: C1</span>
            </div>
          </div>
          <a href="/contact.php">
            <button class="w-max custom-yellow-btn custom-btn-animation" data-text="Enroll Now">
              Enroll Now
            </button>
          </a>
        </div>
      </div>

      <div class="courses-card-box after:!hidden border border-[var(--blue-100)] max-sm:!px-4"
        style="height: max-content">
        <div class="flex flex-col gap-2 items-start">
          <span class="clashdisplay font-medium text-[var(--gray-900)] text-[24px]">
            Exam Overview
          </span>
          <ul
            class="list-disc list-outside text-sm sm:text-base px-4 flex flex-col gap-2 generalsans text-[var(--gray-600)]">
            <li>
              <span class="font-semibold">Frequency:</span> Held twice a year.
            </li>
            <li>
              <span class="font-semibold">Format:</span> Consists of a written and oral exam.
            </li>
            <li>
              <span class="font-semibold">Components:</span> Learning comprehension, reading comprehension, academic
              language, and test production.
            </li>
            <li><span class="font-semibold">Duration:</span> Around 3 hours and 40 minutes.</li>
            <li>
              <span class="font-semibold">Results:</span> In a few weeks post the examination.
            </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Brochure section -->
    <?php include "../brochure-section.php"; ?>

    <?php include "../footer.php"; ?>
  </div>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>