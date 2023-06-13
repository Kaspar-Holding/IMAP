@include('layouts.header')
  <div class="edit-container w-container">
    <div class="form-block w-form">
      <form id="email-form" name="email-form" data-name="Email Form" action="{{route('create_organization')}}" method="POST" class="account-form-block edit-form">
        <h3 class="heading-2 edit-form">Basic Information</h3>
        @csrf
          @if(session()->has('error'))
              <div class="alert alert-danger" style = "color: #f7073f;">
                  {{ session()->get('error') }}
              </div>
          @endif
        <div class="edit-name">
          <div class="w-row">
            <div class="w-col w-col-6"><label for="name" class="field-label-4">Name*</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name"></div>
            <div class="w-col w-col-6"><label for="email" class="field-label-5">Last Name*</label><input type="email" class="text-field-2 w-input" maxlength="256" name="last_name" data-name="Email" placeholder="" id="email" required=""></div>
          </div>
        </div>
        <div class="edit-code"><label for="field-3" class="country-code">Phone Country Code</label><select id="field-3" name="country_code" data-name="Field 3" class="select-field-2 w-select">
            <option value="">Please select</option>
            <option value="First">First choice</option>
            <option value="Second">Second choice</option>
            <option value="Third">Third choice</option>
          </select></div>
        <div class="edit-phone"><label for="name-3" class="phone">Phone number</label><input type="text" class="text-field-4 w-input" maxlength="256" name="phone_number" data-name="Name 2" placeholder="" id="name-2"></div>
        <div class="website"><label for="name-3" class="website">Website</label><input type="text" class="website-field w-input" maxlength="256" name="website" data-name="Name 2" placeholder="" id="name-2"></div>
        <div class="website twitter"><label for="name-3" class="website twitter">Twitter</label><input type="text" class="twitter-field w-input" maxlength="256" name="twitter" data-name="Name 2" placeholder="" id="name-2"></div>
        <div class="website telegram"><label for="name-3" class="website telegram">Telegram</label><input type="text" class="telegram-field w-input" maxlength="256" name="telegram" data-name="Name 2" placeholder="" id="name-2"></div>
        <div class="website github"><label for="name-3" class="website">Github</label><input type="text" class="github-field w-input" maxlength="256" name="github" data-name="Name 2" placeholder="" id="name-2"></div>
        <h1 class="heading-2">Summary</h1>
        <div class="edit-role"><label for="name-2" class="summary">*Role</label><input type="text" class="summary-role w-input" maxlength="256" name="role" data-name="Name 2" placeholder="" id="name-2" required=""></div>
        <div class="edit-status"><label for="field-2" class="summary status">*Status</label><select id="field-2" name="status" data-name="Field 2" required="" class="select-field w-select">
            <option value="">Select status</option>
            <option value="First">First choice</option>
            <option value="Second">Second choice</option>
            <option value="Third">Third choice</option>
          </select></div>
        <div class="edit-intro"><label for="field" class="summary introduction">*Introduction</label><textarea placeholder="Write about your experience,industry and skills." maxlength="5000" id="field" name="introduction" data-name="Field" class="intro-area w-input"></textarea></div>
        <div class="edit-role"><label for="name-2" class="summary location">*Current Location</label><input type="text" class="summary-loc w-input" maxlength="256" name="location" data-name="Name 2" placeholder="" id="name-2" required=""></div>
        <div class="edit-role"><label for="name-3" class="summary skills">Skills</label><input type="text" class="summary-skills w-input" maxlength="256" name="skills" data-name="Name 2" placeholder="" id="name-2"></div>
        <div class="edit-role"><label for="name-2" class="summary languages">Languages</label><input type="text" class="summary-lang w-input" maxlength="256" name="languages" data-name="Name 2" placeholder="" id="name-2"></div><input type="submit" value="SAVE CHANGES" data-wait="Please wait..." class="submit-button edit-profile w-button">
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  @include('layouts.footer')