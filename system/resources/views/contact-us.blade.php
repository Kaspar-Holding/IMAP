@include('layouts.header')
  <div class="contact-container w-container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" method="POST" action="{{ route('create_contact') }}" class="account-form-block contact">
        @csrf
        <h3 class="heading-2">Leave us a message</h3>
        <div class="contact-name">
          <div class="w-row">
            <div class="w-col w-col-6"><label for="name" class="field-label-4">Name*</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name"></div>
            <div class="w-col w-col-6"><label for="email" class="field-label-5">Email*</label><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="email" required=""></div>
          </div>
        </div>
        <div class="contact-subject"><label for="name-2" class="field-label-4">Subject</label><input type="text" class="text-field-3 w-input" maxlength="256" name="subject" data-name="Name 2" placeholder="" id="name-2"></div>
        <div class="contatc-message"><label for="name-3" class="field-label-4">Your Message</label><input type="text" class="text-field-4 w-input" maxlength="256" name="message" data-name="Name 2" placeholder="" id="name-2"></div><input type="submit" value="SUBMIT" data-wait="Please wait..." class="submit-button w-button">
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  <div class="location-container w-container">
    <div class="wf-section">
      <div class="columns-3 w-row">
        <div class="w-col w-col-6"><img src="images/divmkdf-map-181047-1.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 97vw, (max-width: 991px) 46vw, 460px" srcset="images/divmkdf-map-181047-1-p-500.png 500w, images/divmkdf-map-181047-1.png 630w" alt="" class="image"></div>
        <div class="w-col w-col-6">
          <h6 class="heading-3">Contact Details</h6>
          <div class="location-coloum w-row">
            <div class="column-5 w-col w-col-6"><img src="images/Vector.png" loading="lazy" alt="">
              <div class="text-block-2">1-234-56789</div>
            </div>
            <div class="column-6 w-col w-col-6"><img src="images/Vector-1.png" loading="lazy" alt="">
              <a href="#" class="link-3">cryptolancers@help.com</a>
            </div>
          </div>
          <div class="div-block"><img src="images/Vector-2.png" loading="lazy" alt="">
            <div class="text-block-3">184 Main Collins Street West Victoria 8007</div>
          </div>
          <div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <h6 class="heading-4">Opening Hours</h6>
                <div class="text-block-4">Mon to Fri: 9am-9pm</div>
                <div class="text-block-5">Sat to Sun: 9am-10pm</div>
              </div>
              <div class="w-col w-col-6">
                <h6 class="heading-4 career">Careers</h6>
                <div class="text-block-4 career">Please email us at:</div>
                <a href="#" class="link-4">staffscout@qodeinteractive.com</a>
    .
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')