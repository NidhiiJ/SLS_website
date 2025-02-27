<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Storing input in session variables
  // change to your fields
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['number'] = $_POST['number'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['course-name'] = $_POST['course-name'];
  $_SESSION['enquiry-message'] = $_POST['enquiry-message'];

  // Retrieving data
  $name = htmlspecialchars($_SESSION['name']);
  $number = htmlspecialchars($_SESSION['number']);
  $email = htmlspecialchars($_SESSION['email']);
  $courseName = htmlspecialchars($_SESSION['course-name']);
  $message = htmlspecialchars($_SESSION['enquiry-message']);

  // Email details
  $subject = 'Inquiry via Website';
  $to = "datasls84@gmail.com";
  $headers = "From: SLS <datasls84@gmail.com>\r\n";
  $headers .= "Reply-To: $email\r\n";
  // $headers .= "CC: nidhi52.work@gmail.com\r\n";  
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Email body
  $txt = "Dear Team,\n\nYou have received a new booking inquiry via the Website form. The details are as follows:\n\n" .
    "Name: $name\n" .
    "Phone: $number\n" .
    "Email: $email\n" .
    "Course Name: $courseName\n" .
    "Message: $message\n\n";

  // Send email
  if (mail($to, $subject, $txt, $headers)) {
    echo "<script>
                alert('Thank You! Our team will reach out to you shortly.');
                window.location.href = 'contact.php';
              </script>";
  } else {
    echo "<script>
                alert('Oops! An unexpected error occurred. Failed to send Email.');
                window.location.href = 'contact.php';
              </script>";
  }
  exit;
}
?>
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
    <?php include './modal.php'; ?>

    <header class="relative z-20">
      <?php include 'navbar.php'; ?>
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
            <li aria-current="page">
              <div class="flex items-center">
                /
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Contact Us</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-12 mx-5 sm:mx-14 lg:mx-[7.5rem] pt-2 sm:pt-10">
      <div class="flex flex-col gap-8 lg:w-[40vw] text-[var(--gray-900)]">
        <h1 class="font-medium text-2xl sm:text-4xl clashdisplay">
          Contact Us
        </h1>
        <div class="flex flex-col gap-4">
          <p class="text-2xl generalsans font-medium">
            Come and say hello to us at
          </p>
          <div>
            <p>Sprachenatelier Language Studio</p>
            <p>
              CMA 501, Golden Blossom, Whitefields, Kadugodi, Bangalore East
              560067.
            </p>
          </div>
          <div>
            <p>Our Timings:</p>
            <p>Mon-Fri: 10:00 am - 06:00 pm</p>
            <p>Sat: 9:30 am - 6:30 pm</p>
            <p>Sun: Closed</p>
          </div>
          <div>
            <p>Write to us here:</p>
            <p class="text-[var(--brand-blue)] generalsans font-medium">
              languagelearning@sprachenatelier.in
            </p>
          </div>
        </div>
      </div>

      <div class="courses-card-box after:!hidden border border-[var(--blue-100)] max-sm:!px-4"
        style="height: max-content">
        <div class="flex flex-col gap-2 items-start">
          <span class="clashdisplay font-medium text-[var(--gray-900)] text-[24px]">
            Contact Details
          </span>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contact-form"
            class="generalsans font-medium leading-10">
            <span class="mr-2">Hello, I am</span>
            <input name="name" type="text" placeholder="Your name"
              class="outline-none bg-transparent w-[40vw] sm:w-[30vw] lg:w-[20vw] border-0 border-b-2 border-[var(--gray-300)] -translate-y-3 mt-2" />
            <br />
            <span>my contact</span>
            <input name="email" type="text" placeholder="your email"
              class="bg-transparent w-[40vw] sm:w-[30vw] lg:w-[20vw] border-0 border-b-2 border-[var(--gray-300)] -translate-y-3 mt-2" />
            <span>&</span>
            <input name="number" type="text" placeholder="your number"
              class="bg-transparent w-[40vw] sm:w-[30vw] lg:w-[20vw] border-0 border-b-2 border-[var(--gray-300)] -translate-y-3 mt-2" />
            <br />
            <span>I am keen to start learning German with</span>
            <select name="course-name" id="courses"
              class="bg-transparent w-[40vw] sm:w-[30vw] lg:w-[20vw] border-0 border-b-2 border-[var(--gray-300)] -translate-y-3 mt-2">
              <option value="TestDaF Examination">TestDaF Examination</option>
              <option value="DSH Examination">DSH Examination</option>
              <option value="Telc Examination">Telc Examination</option>
              <option value="Ab Initio, SL and HL German Examination of IB">
                Ab Initio, SL and HL German Examination of IB
              </option>
              <option value="Deutsch-Test für Zuwanderer (DTZ)">
                Deutsch-Test für Zuwanderer (DTZ)
              </option>
              <option value="Intercultural Communication Training">
                Intercultural Communication Training
              </option>
            </select>
            <br />
            <span>
              We love hearing from you, feel free to drop your questions and
              messages</span>
            <textarea name="enquiry-message" placeholder="Here" id="message"
              class="bg-transparent w-full border-0 border-b-2 border-[var(--gray-300)]"></textarea>
            <button type="submit" class="custom-yellow-btn custom-btn-animation" data-text="Submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- map -->
    <div class="mx-5 sm:mx-14 lg:mx-[7.5rem] mt-14 sm:mt-12 lg:mt-20 h-full rounded-2xl overflow-clip">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.562472559075!2d77.75461257484189!3d12.99981248731816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0x674c2fe66f296886!2sXQX4%2BWV%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1736965512608!5m2!1sen!2sin"
        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Brochure section -->
    <?php include "brochure-section.php"; ?>

    <?php include "footer.php"; ?>
  </div>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
      // Prevent the form from submitting
      event.preventDefault();

      // Clear previous error messages
      document.querySelectorAll('.error-message').forEach(el => el.remove());

      // Get form field values
      const name = document.querySelector('input[name="name"]').value.trim();
      const email = document.querySelector('input[name="email"]').value.trim();
      const number = document.querySelector('input[name="number"]').value.trim();
      const courseName = document.querySelector('select[name="course-name"]').value;

      let isValid = true;

      // Helper function to add error messages
      const showError = (element, message) => {
        const error = document.createElement('div');
        error.className = 'error-message text-red-500 mt-1';
        error.innerText = message;
        element.parentNode.insertBefore(error, element.nextSibling);
      };

      // Validate name
      if (!name) {
        console.log("name not valid")
        isValid = false;
        showError(document.querySelector('input[name="name"]'), 'Name is required.');
      }

      // Validate email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email) {
        console.log("email not present")
        isValid = false;
        showError(document.querySelector('input[name="email"]'), 'Email is required.');
      } else if (!emailRegex.test(email)) {
        console.log("email not valid")
        isValid = false;
        showError(document.querySelector('input[name="email"]'), 'Please enter a valid email.');
      }

      // Validate number
      const numberRegex = /^[0-9]{10}$/;
      if (!number) {
        console.log("number not present")
        isValid = false;
        showError(document.querySelector('input[name="number"]'), 'Number is required.');
      } else if (!numberRegex.test(number)) {
        console.log("number not valid")
        isValid = false;
        showError(document.querySelector('input[name="number"]'), 'Please enter a valid 10-digit number.');
      }

      // Validate course selection
      if (!courseName) {
        console.log("coursename not valid")
        isValid = false;
        showError(document.querySelector('select[name="course-name"]'), 'Please select a course.');
      }

      // If the form is valid, submit it
      if (isValid) {
        console.log("is valid")
        this.submit();
      }
    });
  </script>

  <style>
    .error-message {
      font-size: 0.875rem;
      color: #f56565;
    }
  </style>

</body>

</html>