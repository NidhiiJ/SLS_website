<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__container__wrapper">
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
      <header class="modal__header">
        <h2 class="clashdisplay text-2xl sm:text-[32px] leading-[39px] text-[var(--gray-900)] font-medium"
          id="modal-1-title">
          Brochure Download
        </h2>
        <button aria-label="Close modal" data-micromodal-close>
          <img src="../assets/images/close-x-vector.svg" alt="Close modal" />
        </button>
      </header>
      <main class="modal__content" id="modal-1-content">
        <form id="download-brochure-form" onsubmit="downloadPDF(event)" action="">
          <div class="space-y-4 w-full mb-10">
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full">
              <div class="flex-grow">
                <label for="modal-firstname" class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2">First
                  name</label>
                <input required type="text" name="modal-firstname" id="modal-firstname" placeholder="Enter first name"
                  class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium" />
              </div>
              <div class="flex-grow">
                <label for="modal-lastname" class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2">Last
                  name</label>
                <input name="modal-lastname" id="modal-lastname" type="text" placeholder="Enter last name"
                  class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium" />
              </div>
            </div>
            <div class="w-full">
              <label for="modal-email" class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2">Email</label>
              <input required name="modal-email" id="modal-email" type="email" placeholder="Enter email"
                class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium" />
            </div>
            <div class="w-full">
              <label for="modal-contact" class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2">Contact
                number</label>
              <input required name="modal-contact" id="modal-contact" type="number" placeholder="Enter phone number"
                class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium" />
            </div>
          </div>
          <button class="custom-yellow-btn custom-btn-animation" data-text="Download" type="submit">
            Download
          </button>
        </form>
      </main>
      <!-- <footer class="modal__footer">
        <button class="modal__btn modal__btn-primary">Continue</button>
        <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">
          Close
        </button>
      </footer> -->
    </div>
  </div>
</div>

<script>
  function downloadPDF(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    // Trigger the download
    const link = document.createElement('a');
    link.href = '../assets/Sprachenatelie_Language_Studio.pdf'; // Path to the PDF file in the assets folder
    link.download = 'Sprachenatelie_Language_Studio.pdf'; // File name for the downloaded file
    link.click();
  }
</script>