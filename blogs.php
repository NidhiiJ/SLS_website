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
  <div id="courses-wrapper">
    <!-- Modal markup -->
    <?php include '../modal.php'; ?>

    <header class="relative z-20">
      <?php include 'navbar.php'; ?>
    </header>

    <div id="courses-heading" class="mx-5 sm:mx-14 lg:mx-[7.5rem] pt-24 sm:pt-40">
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
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Blogs</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
      <h2 class="text-2xl sm:text-[46px] lg:text-[56px] shrink-0 clashdisplay font-medium mt-3">
        Blogs
      </h2>
    </div>

    <!-- <div class="grid grid-cols-3 gap-12 mx-[7.5rem] pt-10"> -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mx-5 sm:mx-14 lg:mx-[7.5rem] pt-10">
      <div class="blog-card">
        <img src="../assets/images/blog-cover-1.jpg" alt="" />
        <div class="blog-details-wrapper">
          <div class="Blog-details-container">
            <span class="blog-category">Informative - 18 January, 2025</span>
            <div class="blog-details">
              <span class="blog-title">Unlocking the German Language: A Gateway to Opportunities in Germany</span>
              <span class="blog-description">Germany is not only a powerhouse of innovation and culture but also a land
                of opportunities for students and professionals worldwide. One key that unlocks these opportunities is
                learning the German language. </span>
            </div>
          </div>
          <a href="/blogs/unlocking-german-language.php">
            <button class="custom-yellow-btn custom-btn-animation w-max" data-text="Learn More">
              Learn More
            </button>
          </a>
        </div>
      </div>
      <div class="blog-card">
        <img src="../assets/images/blog-cover-1.jpg" alt="" />
        <div class="blog-details-wrapper">
          <div class="Blog-details-container">
            <span class="blog-category">Informative - 10 January, 2025</span>
            <div class="blog-details">
              <span class="blog-title">Exams You Need to Ace to Study in Germany: A Comprehensive Guide</span>
              <span class="blog-description">Germany is one of the most sought-after destinations for international
                students, offering high-quality education and globally recognized degrees. However, securing admission
                to German universities involves...</span>
            </div>
          </div>
          <a href="/blogs/exams-you-need-to-ace.php">
            <button class="custom-yellow-btn custom-btn-animation w-max" data-text="Learn More">
              Learn More
            </button>
          </a>
        </div>
      </div>
      <div class="blog-card">
        <img src="../assets/images/blog-cover-1.jpg" alt="" />
        <div class="blog-details-wrapper">
          <div class="Blog-details-container">
            <span class="blog-category">Informative - 25 January, 2025</span>
            <div class="blog-details">
              <span class="blog-title">Why Germany is the Best Place to Study and Work: A Complete Overview</span>
              <span class="blog-description">Germany has solidified its reputation as one of the most sought-after
                destinations for international students and professionals. Known for its world-class education system,
                booming economy, and vibrant culture, the country offers...</span>
            </div>
          </div>
          <a href="/blogs/why-germany-is-the-best-place-to-study.php">
            <button class="custom-yellow-btn custom-btn-animation w-max" data-text="Learn More">
              Learn More
            </button>
          </a>
        </div>
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