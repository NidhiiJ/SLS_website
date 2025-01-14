<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
        <div class="modal__container__wrapper">
          <div
            class="modal__container"
            role="dialog"
            aria-modal="true"
            aria-labelledby="modal-1-title"
          >
            <header class="modal__header">
              <h2
                class="clashdisplay text-2xl sm:text-[32px] leading-[39px] text-[var(--gray-900)] font-medium"
                id="modal-1-title"
              >
                Brochure Download
              </h2>
              <button aria-label="Close modal" data-micromodal-close>
                <img
                  src="../assets/images/close-x-vector.svg"
                  alt="Close modal"
                />
              </button>
            </header>
            <main class="modal__content" id="modal-1-content">
              <form action="">
                <div class="space-y-4 w-full mb-10">
                  <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full">
                    <div class="flex-grow">
                      <label
                        for="firstname"
                        class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2"
                        >First name</label
                      >
                      <input
                        type="text"
                        name="firstname"
                        id="firstname"
                        placeholder="Enter first name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium"
                      />
                    </div>
                    <div class="flex-grow">
                      <label
                        for="lastname"
                        class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2"
                        >Last name</label
                      >
                      <input
                        name="lastname"
                        id="lastname"
                        type="text"
                        placeholder="Enter last name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium"
                      />
                    </div>
                  </div>
                  <div class="w-full">
                    <label
                      for="modal-email"
                      class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2"
                      >Email</label
                    >
                    <input
                      name="modal-email"
                      id="modal-email"
                      type="email"
                      placeholder="Enter email"
                      class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium"
                    />
                  </div>
                  <div class="w-full">
                    <label
                      for="contact"
                      class="block text-base text-[rgb(75, 85, 99)] font-medium mb-2"
                      >Contact number</label
                    >
                    <input
                      name="contact"
                      id="contact"
                      type="text"
                      value="+91"
                      class="w-full px-4 py-3 border border-gray-300 rounded-md shadow text-[rgb(75, 85, 99)] font-medium"
                    />
                  </div>
                </div>
                <button
                  class="custom-yellow-btn custom-btn-animation"
                  data-text="Download"
                >
                  Download
                </button>
              </form>
            </main>
            <!-- <footer class="modal__footer">
            <button class="modal__btn modal__btn-primary">Continue</button>
            <button
              class="modal__btn"
              data-micromodal-close
              aria-label="Close this dialog window"
            >
              Close
            </button>
          </footer> -->
          </div>
        </div>
      </div>