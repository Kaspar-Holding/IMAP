@include('layouts.header')
  <div class="job-submit-section">
    <div class="container-small">
      
        <div class="margin-bottom-12">
          <h2 class="heading-19">Submit a Job</h2>
        </div>
     
      
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" action="{{route('update_jobs')}}" method="POST" enctype="multipart/form-data" class="job-submission-form">
            <div class="job-submission-form-section-wrapper">
             


              <div id="w-node-c78ea06a-8927-fb5d-89c4-8c08edf5a4b3-7d6de129" class="job-submission-form-section">
                <div class="margin-bottom-24">
                  <h5 class="heading-20">Job Information</h5>
                </div>
                @csrf
                  @if(session()->has('error'))
                      <div class="alert alert-danger" style = "color: #f7073f;">
                          {{ session()->get('error') }}
                      </div>
                  @endif
                 
                <div class="div-block-4"><label for="Job-Title" class="field-label-6">Job Title</label><input type="text" class="form-field title w-input" maxlength="256" name="title" data-name="Job Title" placeholder="Type your response here" id="Job-Title"></div>
              
                <div class="div-block-4"><label for="Job-Title-12" class="field-label-6">Job Category</label><input type="text" class="form-field title w-input" maxlength="256" name="category" data-name="Job Title 12" placeholder="Type your response here" id="Job-Title-12"></div>
                <!-- <div class="div-block-4"><label for="Job-Title-11" class="field-label-6">Employment Type</label><input type="text" class="form-field title w-input" maxlength="256" name="type" data-name="Job Title 11" placeholder="Type your response here" id="Job-Title-11"></div> -->
                <div class="div-block-4"><label for="Job-Title-10" class="field-label-6">Location (optional)</label><input type="text" class="form-field title w-input" maxlength="256" name="location" data-name="Job Title 10" placeholder="Type your response here" id="Job-Title-10"></div>
                <div class="div-block-4"><label for="Job-Title-9" class="field-label-6">Employment Type</label>
                <select id="field-3" name="type" data-name="Field 3" class="select-field-2 w-select" style = "width: 51% !important ; height: 46px !important; margin-left: 76px !important; margin-bottom: 25px; !important  ">
                  <option value="">Please select</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
                </div>
                <div class="div-block-4"><label for="Job-Title-8" class="field-label-6">Job Description</label><textarea placeholder="Type your response here" maxlength="5000" id="Job-Description-2" name="description" data-name="Job Description 2" class="form-field-large description w-input"></textarea></div>
                <div class="div-block-4"><label for="Job-Title-7" class="field-label-6">Skills</label><input type="text" class="form-field title w-input" maxlength="256" name="skills[]" data-name="Job Title 7" placeholder="Type your response here" id="Job-Title-7"></div>
                <div class="div-block-4"><label for="Job-Title-6" class="field-label-6">Salary</label><input type="text" class="form-field title w-input" maxlength="256" name="salary" data-name="Job Title 6" placeholder="Type your response here" id="Job-Title-6"></div>
                <div class="div-block-4"><label for="Job-Title-5" class="field-label-6">Equity</label><input type="text" class="form-field title w-input" maxlength="256" name="equity" data-name="Job Title 5" placeholder="Type your response here" id="Job-Title-5"></div>
              </div>
            </div><input type="submit" value="Submit" data-wait="Please wait..." class="button-primary w-button"></div>
          </form>
          <div class="success-message w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="error-message w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      
    </div>
  </div>
  @include('layouts.footer')