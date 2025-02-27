<!-- <header class="relative z-20"> -->
<div>
    
    <nav
      class="font-medium text-[#282828] inset-x-5 sm:inset-x-14 lg:inset-x-[7.5rem] fixed flex gap-6 lg:gap-12 justify-between items-center border-[1px] border-[#A4C9FF] backdrop-blur-xl bg-white/60 rounded-[6rem] p-2 pl-8 mt-6"
    >
        <a href="/">
            <img src="../assets/logos/SLS_logo.svg" alt="logo" class="md:w-56" />
        </a>
        <ul class="hidden lg:flex w-full gap-12 justify-end items-center">
            <li><a href="/" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>">Home</a></li>
            <li><a href="/about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>">About Us</a></li>
            <li><a href="/courses.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'courses.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>">Courses</a></li>
            <li><a href="/blogs.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>">Blogs</a></li>
            <li>
                <button class="custom-blue-btn custom-btn-animation" data-text="Contact Us">
                    <a href="/contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>">Contact Us</a>
                </button>
            </li>
        </ul>
        <button id="menu-btn" class="lg:hidden text-gray-700 focus:outline-none mr-4">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>
    
    <!-- Mobile Nav -->
   <!-- Mobile Nav -->
<ul
  class="fixed top-0 left-0 flex flex-col lg:hidden w-full h-full gap-12 justify-center items-center bg-white z-50 mobile-nav"
>
  <button>
    <img
      src="../assets/images/close-x-vector.svg"
      alt="Close menu"
      id="close-menu-btn"
      class="w-8 absolute right-5 top-5"
    />
  </button>
  <a href="/">
    <img src="../assets/logos/SLS_logo.svg" alt="logo" class="md:w-56" />
  </a>
  <li>
    <a
      href="/"
      class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>"
    >
      Home
    </a>
  </li>
  <li>
    <a
      href="/about.php"
      class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>"
    >
      About Us
    </a>
  </li>
  <li>
    <a
      href="/courses.php"
      class="<?php echo basename($_SERVER['PHP_SELF']) == 'courses.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>"
    >
      Courses
    </a>
  </li>
  <li>
    <a
      href="/blogs.php"
      class="<?php echo basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>"
    >
      Blogs
    </a>
  </li>
  <li>
    <button
      class="custom-blue-btn custom-btn-animation"
      data-text="Contact Us"
    >
      <a
        href="/contact.php"
        class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'font-semibold text-[#FE9F0F]' : ''; ?>"
      >
        Contact Us
      </a>
    </button>
  </li>
</ul>

</div>
<!-- </header> -->
