@include('layouts.header')
  <div class="talent wf-section">
    <div class="container-2 w-container">
      <h3 class="heading-11" style="margin-left:15px;">What skills are you looking for?</h3>
      <div>
        <div class="w-form">
        <form id="email-form" action="search_talent" method="POST" role="search" name="email-form" data-name="Email Form" method="get">
            {{ csrf_field() }}
          
            <div class="columns-5 w-row" style = "margin-left:7px;">
              <div class="w-col w-col-3"><input type="text" class="w-input" maxlength="256" name="field" data-name="Field" placeholder="Keywords" id="field" required=""></div>
              <div class="w-col w-col-3"><input type="text" class="w-input" maxlength="256" name="field-2" data-name="Field 2" placeholder="Location" id="field-2" required=""></div>
              <div class="w-col w-col-3"><input type="text" class="w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="All Categories" id="field-3" required=""></div>
              <div class="w-col w-col-3">
                <a href="#" class="button-2 w-button">Search</a>
              </div>
            </div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      @if(isset($job_list))
      <h3 class="heading-8 talent" style="margin-left:16px;" >{{count($job_list)}} Total Talent Available</h3>
      @else
      <h3 class="heading-8 talent" style="margin-left:16px;" >{{count($data)}} Total Talent Available</h3>
      @endif
      <div class="div-block-2">
        <div class="columns-6 w-row" style="margin-left:5px;">
          <div class="column-7 w-col w-col-1"><img src="images/job-user-img-6-100x100.png-1.png" style = "margin-left:13px;" loading="lazy" alt="" class="image-2 talent"></div>
          <div class="column-12 w-col w-col-11">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="heading-org talent">Copywriter/Business Consultant</h3>
                </div>
                <div class="column-13 w-col w-col-8">
                  <a href="#" class="button talent w-button">AVAILABLE NOW</a>
                </div>
              </div>
              <div class="detail">
                <div class="text-block-6">Lorem ipsum dolor sit amet consectetur. Morbi phasellus tortor scelerisque eu molestie nulla ultricies lacus.... </div>
                <a href="#" class="link-5">Read More</a>
              </div>
            </div>
            <div class="columns-4 talent w-row">
              <div class="column-9 talent w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8">Warehouse Karachi, Pakistan</div>
              </div>
              <div class="column-10 talent w-col w-col-9">
                <a href="#" class="button org hire w-button">DIGITAL MARKETING</a>
                <a href="#" class="button org hire w-button">CONTENT CREATION</a>
                <a href="#" class="button org hire w-button">STRATEGY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if(!empty($job_list))
      @foreach($job_list as $job)
      @if(!empty($job['role']))
      <div class="div-block-2">
        <div class="columns-6 w-row" style="margin-left:5px;">
          <div class="column-7 w-col w-col-1"><img src="images/job-user-img-6-100x100.png-1.png" style = "margin-left:13px;" loading="lazy" alt="" class="image-2 talent"></div>
          <div class="column-12 w-col w-col-11">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="heading-org talent">{{$job['skills']}}</h3>
                </div>
                <div class="column-13 w-col w-col-8">
                  <a href="#" class="button talent w-button">{{$job['role']}}</a>
                </div>
              </div>
              <div class="detail">
                <div class="text-block-6">{{$job['introduction']}} </div>
                <!-- <a href="#" class="link-5">Read More</a> -->
              </div>
            </div>
            <div class="columns-4 talent w-row">
              <div class="column-9 talent w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8">{{$job['location']}}</div>
              </div>
              <div class="column-10 talent w-col w-col-9">
                @php
                $skills = $job['skills'];
                @endphp
                @if(!empty($skills))
                @foreach($skills as $skill)
                <a href="#" class="button org hire w-button">{{$skill}}</a>
                @endforeach
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      @else
        @foreach($data as $job_data)
        @if(!empty($job_data['role']))
        <div class="div-block-2">
          <div class="columns-6 w-row" style="margin-left:5px;">
          <div class="column-7 w-col w-col-1"><img src="images/job-user-img-6-100x100.png-1.png" style = "margin-left:13px;" loading="lazy" alt="" class="image-2 talent"></div>
          <div class="column-12 w-col w-col-11">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="heading-org talent">{{$job_data['skills']}}</h3>
                </div>
                <div class="column-13 w-col w-col-8">
                  <a href="#" class="button talent w-button">{{$job_data['role']}}</a>
                </div>
              </div>
              <div class="detail">
                <div class="text-block-6">{{$job_data['introduction']}} </div>
                <!-- <a href="#" class="link-5">Read More</a> -->
              </div>
            </div>
            <div class="columns-4 talent w-row">
              <div class="column-9 talent w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8">{{$job_data['location']}}</div>
              </div>
              <div class="column-10 talent w-col w-col-9">
                @php
                $skills = $job_data['skills'];
                @endphp
                @if(!empty($skills))
                @foreach($skills as $skill)
                <a href="#" class="button org hire w-button">{{$skill}}</a>
                @endforeach
                @endif
              </div>
            </div>
          </div>
         </div>
      </div>
      @endif
        @endforeach
      @endif
      </div>
    </div>
  </div>
  @include('layouts.footer')