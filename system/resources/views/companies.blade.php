@include('layouts.header')
  <div class="organizations wf-section">
    <div class="container-2 w-container">
      <h3 class="heading-11 companies" style="margin-left:10px;">Search Top Hiring Companies</h3>
      <div>
        <div class="w-form">
        <form id="email-form" action="search_company" method="POST" role="search" name="email-form" data-name="Email Form" method="get">
            {{ csrf_field() }}
            <div class="columns-5 w-row" style = "margin-left:1px;">
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
      <h3 class="heading-8 talent" style="margin-left:10px;" >{{count($job_list)}} Hiring Companies Listed</h3>
      @else
      <h3 class="heading-8 talent" style="margin-left:10px;" >{{count($data)}} Hiring Companies Listed</h3>
      @endif
      <div class="div-block-2">
        <div class="w-row" style="margin-left:0px !important; margin-right : 0px !important;">
          <div class="column-7 w-col w-col-1"><img src="images/job-user-img-6-100x100.png.png" loading="lazy" alt="" class="image-2" style="margin-left:10px;"></div>
          <div class="column-12 w-col w-col-11">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="heading-org">Personal Statement UK</h3>
                </div>
                <div class="column-13 w-col w-col-7">
                  <a href="#" class="button org w-button">CAREERS</a>
                  <a href="#" class="button org edu w-button">EDUCATION</a>
                </div>
                <div class="column-8 w-col w-col-1"><img src="images/Vector-3.png" loading="lazy" alt="" class="edit"></div>
              </div>
              <div class="detail">
                <div class="text-block-6">Lorem ipsum dolor sit amet consectetur. Morbi phasellus tortor scelerisque eu molestie nulla ultricies lacus.... </div>
                <a href="#" class="link-5">Read More</a>
              </div>
            </div>
            <div class="columns-4 w-row">
              <div class="column-9 w-col w-col-2"><img src="images/Vector-4.png" loading="lazy" alt="" class="image-4">
                <div class="text-block-7">Since Oct 2014</div>
              </div>
              <div class="column-10 w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8">Warehouse Karachi, Pakistan</div>
              </div>
              <div class="column-11 w-col w-col-7"><img src="images/Vector-7.png" loading="lazy" alt="" class="image-6"><img src="images/Vector-6.png" loading="lazy" alt="" class="image-5">
                <div class="text-block-9">100-500 Employees</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if(!empty($job_list))
      @foreach($job_list as $job)
      
      <div class="div-block-2">
        <div class="w-row" style="margin-left:0px !important; margin-right : 0px !important;">
          <div class="column-7 w-col w-col-1"><img src="{{asset('image/'.$job['profile_picture'])}}" loading="lazy" alt="" class="image-2" style="margin-left:10px;"></div>
          <div class="column-12 w-col w-col-11">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="heading-org">{{$job['name']}}</h3>
                </div>
                <div class="column-13 w-col w-col-7">
                  <a href="#" class="button org w-button">CAREERS</a>
                  <a href="#" class="button org edu w-button">EDUCATION</a>
                </div>
                <div class="column-8 w-col w-col-1"><img src="images/Vector-3.png" loading="lazy" alt="" class="edit"></div>
              </div>
              <div class="detail">
                <div class="text-block-6">{{$job['introduction']}} </div>
                <!-- <a href="#" class="link-5">Read More</a> -->
              </div>
            </div>
            <div class="columns-4 w-row">
              <div class="column-9 w-col w-col-2"><img src="images/Vector-4.png" loading="lazy" alt="" class="image-4">
                <div class="text-block-7">Since Oct 2014</div>
              </div>
              <div class="column-10 w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8">{{$job['location']}}, Pakistan</div>
              </div>
              <div class="column-11 w-col w-col-7"><img src="images/Vector-7.png" loading="lazy" alt="" class="image-6"><img src="images/Vector-6.png" loading="lazy" alt="" class="image-5">
                <div class="text-block-9">100-500 Employees</div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      @endforeach
      @else
        @foreach($data as $job_data)
        <div class="div-block-2">
          <div class="w-row" style="margin-left:0px !important; margin-right : 0px !important;">
            <div class="column-7 w-col w-col-1"><img src="{{asset('image/'.$job_data['profile_picture'])}}" loading="lazy" alt="" class="image-2" style="margin-left:10px;"></div>
            <div class="column-12 w-col w-col-11">
              <div>
                <div class="w-row">
                  <div class="w-col w-col-4">
                    <h3 class="heading-org">{{$job_data['name']}}</h3>
                  </div>
                  <div class="column-13 w-col w-col-7">
                    <a href="#" class="button org w-button">CAREERS</a>
                    <a href="#" class="button org edu w-button">EDUCATION</a>
                  </div>
                  <div class="column-8 w-col w-col-1"><img src="images/Vector-3.png" loading="lazy" alt="" class="edit"></div>
                </div>
                <div class="detail">
                  <div class="text-block-6">{{$job_data['introduction']}} </div>
                  <!-- <a href="#" class="link-5">Read More</a> -->
                </div>
              </div>
              <div class="columns-4 w-row">
                <div class="column-9 w-col w-col-2"><img src="images/Vector-4.png" loading="lazy" alt="" class="image-4">
                  <div class="text-block-7">Since Oct 2014</div>
                </div>
                <div class="column-10 w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                  <div class="text-block-8">{{$job_data['location']}}, Pakistan</div>
                </div>
                <div class="column-11 w-col w-col-7"><img src="images/Vector-7.png" loading="lazy" alt="" class="image-6"><img src="images/Vector-6.png" loading="lazy" alt="" class="image-5">
                  <div class="text-block-9">100-500 Employees</div>
                </div>
              </div>
            </div>
          </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
  @include('layouts.footer')