@extends('layouts.app')
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Apr 28 2023 08:34:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="643d23869a03d4a73aafe39a" data-wf-site="643d23859a03d460b5afe396">
<head>
  <meta charset="utf-8">
  <title>CryptoLancer - Webflow HTML Website Template</title>
  <meta content="CryptoLancer is a responsive, high-converting, and beautifully designed job board for technology businesses. Bright, vibrant, and easily adapted, it offers the perfect starting point for numerous business types." name="description">
  <meta content="CryptoLancer - Webflow HTML Website Template" property="og:title">
  <meta content="CryptoLancer is a responsive, high-converting, and beautifully designed job board for technology businesses. Bright, vibrant, and easily adapted, it offers the perfect starting point for numerous business types." property="og:description">
  <meta content="https://uploads-ssl.webflow.com/63337525695d8ba70ab44222/63565e26a7b90c920bd3e9a4_OpenGraph.png" property="og:image">
  <meta content="CryptoLancer - Webflow HTML Website Template" property="twitter:title">
  <meta content="CryptoLancer is a responsive, high-converting, and beautifully designed job board for technology businesses. Bright, vibrant, and easily adapted, it offers the perfect starting point for numerous business types." property="twitter:description">
  <meta content="https://uploads-ssl.webflow.com/63337525695d8ba70ab44222/63565e26a7b90c920bd3e9a4_OpenGraph.png" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="new/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="new/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="new/css/job-portal-site.webflow.css" rel="stylesheet" type="text/css">
 
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Inconsolata:400,700","Archivo:100,200,300,regular,500,600,700,800,900","Inter:200,300,regular,500,600,700,800","Work Sans:regular,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.svg" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.svg" rel="apple-touch-icon">
  <style>
* {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.job-img{
  width : 75px !important;
  margin-left: 13px !important; 
}
.intro{
  line-height : 7.1px !important;
}
.top{
  padding-top:7px;
  font-size: 12px !important;
}
.div-block-2{
  margin-top : 13px !important;
  margin-bottom : 13px !important;
}
.button.job-timing {
 padding-top:7px !important;
}
.button.org {
   
    padding-top: 2px !important;
}
.read-span {
    position: relative;
}
.cursor{
  cursor : pointer;
  position: absolute;
  bottom: 29px;
  right: 272px;
}
.carousel{
  max-width : 600px;
}
.apply-btn{
  margin-bottom:18px;
  margin-left: 9px;
  margin-top:12px;
}
.apply-span{
  border-radius: 24px;
  padding-left: 14px;
  padding-right: 14px;
}
</style>
</head>
<body class="body-3">
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container-navigation">
      <div class="navigation-left">
        <a href="{{ route('home')}}" aria-current="page" class="brand w-nav-brand w--current"><img loading="lazy" src="images/Cryptolancers.png" alt="" class="logo"></a>
      </div>
      <div class="navigation-middle">
        <nav role="navigation" class="nav-menu w-nav-menu">
          <!-- <a href="{{ route('home')}}" class="nav-link w-nav-link">Home</a> -->
          <a href="{{ route('companies')}}" class="nav-link w-nav-link">Companies</a>
          <a href="{{ route('about')}}" class="nav-link w-nav-link">About us</a>
          <!-- <a href="{{ route('faq')}}" class="nav-link w-nav-link">FAQ</a> -->
          <a href="{{ route('post_jobs')}}" class="nav-link w-nav-link">Post a Job</a>
          <a href="{{ route('contact_us')}}" class="nav-link w-nav-link">Contact us</a>
          <div class="navbar-mobile-button-wrapper">
            <a href="#" class="button-primary w-button">Login</a>
          </div>
        </nav>
      </div>
      <div class="navigation-right">
        <div class="navigation-button-wrap">
        <!-- <a href="{{ route('add_organization')}}" class="nav-link w-nav-link">Add</a> -->

        @if(Session::get('user') == "")
          <a href="{{ route('log_in')}}" class="nav-link w-nav-link">Sign In</a>
        @else
          <a href="{{ route('logout') }}">Logout                              
        </a>
        @endif

          <a href="{{route('hire_talent')}}" class="button-3 w-button">Hire Talent</a>
        </div>
        <div class="menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="wf-section">
    <div class="container-6 w-container">
      <!-- <div>
        <div class="w-form">
          <form id="email-form-2" action="subscribe" method="POST" name="email-form-2" data-name="Email Form 2" method="get">
            {{csrf_field()}}
            <div class="w-row">
              <div class="w-col w-col-1"></div>
              <div class="column-14 w-col w-col-4">
                <h3 class="heading-18">Subscribe to news letter</h3>
              </div>
              <div class="column-15 w-col w-col-3"><input type="email" class="text-field-5 w-input" maxlength="256" name="subscribe" data-name="Field 5" placeholder="Your email" id="field-5" required=""></div>
              <div class="w-col w-col-4"><input type="submit" value="Subscribe" data-wait="Please wait..." class="submit-button-2 w-button"></div>
            </div>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="container-4 w-container">
      <h3 class="heading-16" style="margin-left:15px;">Search latest jobs</h3>
      <div>
        <div class="w-form">
          <form id="email-form" action="search" method="POST" role="search" name="email-form" data-name="Email Form" method="get">
            {{ csrf_field() }}
            
            <div class="columns-5 w-row" style="margin-left:7px;">
              <div class="w-col w-col-3"><input type="text" class="text-field-8 w-input" maxlength="256" name="keyword" data-name="Field 4" placeholder="Keywords" id="field-4" ></div>
              <div class="w-col w-col-3"><input type="text" class="text-field-7 w-input" maxlength="256" name="location" data-name="Field 2" placeholder="Location" id="field-2" ></div>
              <div class="w-col w-col-3"><input type="text" class="text-field-6 w-input" maxlength="256" name="all" data-name="Field 3" placeholder="All Categories" id="field-3"></div>
              <div class="w-col w-col-3">
                <button type = "submit" class="button-2 w-button">Search</button>
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
    </div>
    <div class="container-5 w-container">
      @if(isset($job_list))
      <h3 class="heading-8 talent" style="margin-left:20px;" >{{count($job_list)}} Total Jobs</h3>
      @else
      <h3 class="heading-8 talent" style="margin-left:20px;" >{{count($data)}} Total Jobs</h3>
      @endif
      
      @if(!empty($job_list))
      @foreach($job_list as $job)
      @php
      $skill = App\Models\talent_skills::where('job_id',$job['id'])->get();
      @endphp
        <div class="div-block-2">
          <div class="w-row" style="margin-left:7px;">
          <div class="column-7 w-col w-col-1">
            <img src="images/job-user-img-6-100x100.png-2.png" loading="lazy" alt="" class="job-img">
          </div>
          <div class="column-12 w-col w-col-11 intro">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="job-heading">{{$job['title']}}</h3>
                </div>
                <div class="column-13 w-col w-col-7">
                  <a href="#" class="button job-timing w-button">@if($job['type'] == 0) on-site
                  @else remote
                  @endif  
                  <br>‍</a>
                </div>
                <div class="column-8 w-col w-col-1"><img src="images/Vector-3.png" loading="lazy" alt="" class="edit"></div>
              </div>
              <div class="detail">
           
                <div class="job-details link-5 read-span"  id="job-{{ $job['id'] }}" style="display: none;">
                  <div class="text-block-6">{{$job['description']}} </div><br>
                  <!-- Button trigger modal -->
                  <div class="apply-btn">
                    <button type="button" class="form-control apply-span" data-toggle="modal" data-target="#exampleModal" >Apply Now</button>
                  </div>
                 
                 

                  @if(!empty($skill))
                  @foreach($skill as $skills)
                  <a href="#" class="button org hire w-button">{{$skills['skill']}}</a>
                  @endforeach
                  @endif
                  <div class="apply-btn">
                  <button type="button" data-toggle="modal" data-target="#exampleModal" class="del btn-apply apply-span">Apply Now</button>
                </div>
                
                  <div class="modal modal-danger fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style = "margin-top:15px !important;" style="color:black !important;" id="exampleModalLabel">Apply Now</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">  
                              <div class="">
                              <form id="email-form" name="email-form" data-name="Email Form" action="{{route('update_user_details')}}" method="POST" class="job-submission-form" enctype = "multipart/form-data">
                              @csrf
                                <div class="div-block-4"><label for="cv" class="field-label-6">Upload CV *</label><input type="file" class="form-field title w-input" maxlength="256" name="cv" data-name="cv" placeholder="Type your response here" id="cv"></div>

                                <div class="div-block-4"><label for="cover" class="field-label-6">Upload Cover Letter *</label><input type="file" class="form-field title w-input" maxlength="256" name="cover" data-name="cover" placeholder="Type your response here" id="cover"></div>
                                   
                                   
                                </div><input type="submit" value="Submit" data-wait="Please wait..." class="button-primary w-button">
                              </form>
                              
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div><br>
                <div class="text-block-6 dummy" id = "dummy" style="padding-right: 10px;">{{ \Illuminate\Support\Str::limit($job['description'] ?? '',70,' ...') }} </div>
                
               
                  <h8 class="job-title link-5 cursor" data-job-id="{{ $job['id'] }}" >Read More</h8>
              
                
                
              
               <!-- </div> -->
               
            </div>
            </div>
            <div class="columns-4 home-page w-row">
              <div class="column-9 w-col w-col-3"><img src="images/Ellipse-12.png" loading="lazy" alt="" class="image-4 job">
                <div class="text-block-7 home-page top">Daraz Limited, Pakistan</div>
              </div>
              <div class="column-10 w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8 top">{{$job['location']}}</div>
              </div>
              <div class="column-11 w-col w-col-6"><img src="images/Vector-7.png" loading="lazy" alt="" class="image-6"><img src="images/Vector-6.png" loading="lazy" alt="" class="image-5">
                <div class="text-block-9 top">100-500 Employees</div>
              </div>
            </div>
           </div>
          </div>
        </div>
        @endforeach
        @else
        @foreach($data as $job_data)
        @php
        $skill = App\Models\talent_skills::where('job_id',$job_data['id'])->get();
        @endphp
       
        <div class="div-block-2">
          <div class="w-row" style="margin-left:7px;">
          <div class="column-7 w-col w-col-1"><img src="images/job-user-img-6-100x100.png-2.png" style="margin-left:13px;" loading="lazy" alt="" class="job-img"></div>
          <div class="column-12 w-col w-col-11 intro">
            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <h3 class="job-heading">{{$job_data['title']}}</h3>
                </div>
                <div class="column-13 w-col w-col-7">
                <a href="#" class="button job-timing w-button">@if($job_data['type'] == 0) on-site
                  @else remote
                  @endif <br> </a>
                </div>
                <div class="column-8 w-col w-col-1"><img src="images/Vector-3.png" loading="lazy" alt="" class="edit"></div>
              </div>
              <div class="detail">
           
               <div class="job-details link-5 carousel read-span"  id="job-{{ $job_data['id'] }}" style="display: none;">
                <div class="text-block-6">{{$job_data['description']}} </div><br>
                 
                @if(!empty($skill))
                @foreach($skill as $skills)
                <a href="#" class="button org hire w-button">{{$skills['skill']}}</a>
                @endforeach
                @endif
                <div class="apply-btn">
                  <button type="button" data-toggle="modal" data-target="#exampleModal" class="del btn-apply apply-span">Apply Now</button>
                </div>
                
                  <div class="modal modal-danger fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style = "margin-top:15px !important;" style="color:black !important;" id="exampleModalLabel">Apply Now</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">  
                              <div class="">
                              <form id="email-form" name="email-form" data-name="Email Form" action="{{route('update_user_details')}}" method="POST" class="job-submission-form" enctype = "multipart/form-data">
                              @csrf
                                <div class="div-block-4"><label for="cv" class="field-label-6">Upload CV *</label><input type="file" class="form-field title w-input" maxlength="256" name="cv" data-name="cv" placeholder="Type your response here" id="cv"></div>

                                <div class="div-block-4"><label for="cover" class="field-label-6">Upload Cover Letter *</label><input type="file" class="form-field title w-input" maxlength="256" name="cover" data-name="cover" placeholder="Type your response here" id="cover"></div>
                                   
                                   
                                </div><input type="submit" value="Submit" data-wait="Please wait..." class="button-primary w-button">
                              </form>
                              
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                
                </div><br>
                <div class="text-block-6 dummy" id = "dummy" style="padding-right: 10px;">{{ \Illuminate\Support\Str::limit($job_data['description'] ?? '',70,' ...') }} </div>
                
                
                <h8 class="job-title link-5 cursor" id = "cursor" data-job-id="{{ $job_data['id'] }}" >Read More</h8>               
               
                
              
               <!-- </div> -->
               
            </div>
            <div class="columns-4 home-page w-row">
              <div class="column-9 w-col w-col-3"><img src="images/Ellipse-12.png" loading="lazy" alt="" class="image-4 job">
                <div class="text-block-7 home-page top">Daraz Limited, Pakistan</div>
              </div>
              <div class="column-10 w-col w-col-3"><img src="images/Vector-2.png" loading="lazy" alt="">
                <div class="text-block-8 top">{{$job_data['location']}}</div>
              </div>
              <div class="column-11 w-col w-col-6"><img src="images/Vector-7.png" loading="lazy" alt="" class="image-6"><img src="images/Vector-6.png" loading="lazy" alt="" class="image-5">
                <div class="text-block-9 top">100-500 Employees</div>
              </div>
            </div>
          </div>
        </div>
        </div>
        @endforeach
      @endif
    </div>
  </div>
  @extends('layouts.footer')