
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Apr 28 2023 08:34:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="643d23869a03d4062aafe3b6" data-wf-site="643d23859a03d460b5afe396">
<head>
  <meta charset="utf-8">
  <title>IMAP</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">


  <link href="new/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="new/css/job-portal-site.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Inconsolata:400,700","Inter:100,200,300,regular,500,600,700,800,900","Inter:200,300,regular,500,600,700,800","Work Sans:regular,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.svg" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.svg" rel="apple-touch-icon">
  <style>
* {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
label{
  margin-left:70px !important;
}
.sign-up-form {
    width: 632px !important;
}
.w3-sidebar {
   margin-top:20px !important;
    background-color: #ffffff!important;
    border-bottom-right-radius: 16px !important;
    border-top-right-radius: 16px !important;
    color : black !important;
    font-weight : 600 !important;
    font-family: 'Gotham', sans-serif !important;

    width : 390px !important
}
.row{
  background-color: #f5f5f5!important;

}
.navbar{
  height: 90px !important;
  background-color: #f5f5f5!important;

}
.form-control {
    background: #fff !important;
    border-radius: 0 !important;
    border: 0 !important;
    color: #999 !important;
}
.button-primary{
  width : 70% !important;
}
.form-footer {
    margin-left: 105px;
}
.form-control {
    background: #fff !important;
    border-radius: 0 !important;
    border: none !important;
    color: #999 !important;
}
.account-page-wrapper {
  
    background-color: #f5f5f5 !important;

}
.signupForm{
 
  margin-left : 150px;
  background-color: #FFFFFF !important;
    border-radius: 26px !important;
}
.login-email, .login-password {
    color: #030407 !important;
    font-weight: 700 !important;
    font-size: 14px !important;
    font-family: 'Gotham', sans-serif !important;

    
    height: 13px !important;
}
.button-primary {
  margin-top : 15px !important;
    width: 20% !important;
    background-color: #134b86 !important;
    border-radius: 6px !important;
    align-self: right !important;
    margin-left: 250px !important;
    margin-bottom:15px !important;
}
.text-color-gray-500 {
  font-family: 'Gotham', sans-serif !important;

    color: #606476 !important;
    font-size: 14px !important;
    font-weight: 500 !important;
}

.form-field {
  margin-left: 70px !important;
    background-color: #F5F5F5 !important;
    border-radius : 6px !important;
}
.account-left-block {
    width: 103% !important;
    margin-top: 0px !important;
}
.imap{
  padding-top : 27px !important;
}
.imap-field{
  margin-top : 19px !important;
}
.login-link2 {
    text-align: center !important;
    margin-top: 0 !important;
    margin-bottom: 0px !important
}
.login-link{
    
    margin-bottom: 0px !important
}
@font-face {
            font-family: 'Gotham';
            src: url("./system/public/fonts/GothamMedium.ttf") format('truetype'); 
           
            font-style: normal;
        }
       
.field-label{
  color : #383838 !important;
  text-transform: uppercase;
}


/** For Large Screen */
@media screen and (min-width: 1024px){
  .field-label{
    margin-left : 73px !important;
  }
  .sign-up-form {
    width: 593px !important;
  }
  .form-field{
    margin-left : 73px !important;
  }
}
/** For Large Screen */
@media screen and (min-width: 1440px){
  .button-primary {
  margin-left: 248px !important;
  width : 27% !important;
  }
 
.margin-bottom-16 {
    
    padding-left: 100px !important;
    
}
.facebook{
  margin-right:96px;
}
.form-field{
    
    height: 48px;
    max-width: 76.9962%;
    border: 1px solid #ebebef;
    margin-bottom: 24px;
    margin-left: 106px;
    padding: 12px;
}
}

/** For Tablets */
@media screen and (max-width: 780px){
  .button-primary {
  margin-left: 426px !important;
  }
  .account-left-block{
  width: 88% !important;
}
}

/** For Mobile */
@media screen and (max-width: 450px){
.account-form-block {
  margin-left: 10px !important;
  
}
.account-left-block{
  width: 76% !important;
}
label {
    margin-left: 50px !important;
}
.button-primary {
    width: 29% !important;
    margin-left: 141px !important;
}
.form-field{
  max-width: 69.9962%;
  margin-left: 50px !important;
}
.facebook{
  margin-right:50px;
}
.sidebar{
  border: 1px solid white;
  border-top-right-radius:25px;
  border-bottom-right-radius:25px;
  -webkit-box-shadow: -9px 2px  31px rgba(0,0,0,0.6);
  -o-box-shadow: -9px 2px  31px rgba(0,0,0,0.6);
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
}
.add_data{
  padding-top : 15px !important;
  color : black !important;
  font-family: 'Gotham', sans-serif !important;
  /* margin-top : 12px; */
  padding-bottom: 15px !important;
  padding-left : 0px !important;
}
.para{
  position: relative;
  right : 15px;
  background-color : #fff !important;
}
.add_para{
  
  color : #969696 !important;
  font-family: 'Gotham', sans-serif !important;
  padding-bottom:10px !important;
  font-size : 11px !important;
  line-height : 0px !important;
  
}
.blue_bar{
  font-family: 'Gotham', sans-serif !important;
    background-color:#134b86;
    padding: 15px 20px 10px 32px;
    color: white;
    font-size: 15px;
    border-top-right-radius: 26px;
    border-top-left-radius: 26px;
    text-transform: uppercase;
    font-weight : 200px !important;

}
.background-col{
  background-color: #ffffff !important;
}
.site_button {
  margin-top: 10px !important;
    margin-left: 10px !important;
    border-radius: 8px !important;
    width: 91% !important;
    color: black !important;
    background-color: #f5f5f5 !important;
    height: 7% !important;
    text-transform: uppercase;
}
.radio-button{
  margin-left : 10px !important;
    font-size: 14px !important;
    /* margin-top: 19px; */
    padding-top: 15px !important;
    color: #030407 !important;
    cursor : pointer;
    
    
}
.radio{
  /* margin-left : 80px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}
.radio1{
  /* margin-left : 39px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}
.radio2{
  /* margin-left : 11px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}
.radio3{
  /* margin-left : 87px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}
.radio4{
  /* margin-left : 5px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}.radio5{
  /* margin-left : 6px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}.radio6{
  /* margin-left : 26px !important;
   */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}.radio7{
  /* margin-left : 174px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}.radio8{
  /* margin-left : 150px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}.radio9{
  /* margin-left : 149px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
  
}.radio10{
  /* margin-left : 39px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}

.radio11{
  /* margin-left : 103px !important; */
  float: right;
    margin-right: 23px;
    margin-top: 3px;
}

.styled-submit-button {
    background-color: #134B86;
    border: none;
    border-radius: 50%; /* Makes it a circle */
    padding: 10px;
    color: white;
    cursor: pointer;
    margin-left: 280px;
    transition: background-color 0.3s;
    top: 20px !important;
    position: relative !important;
}


.styled-submit-button:hover {
    background-color: green;
}
.para-button{
  background-color : #ffffff !important;
  position: relative !important;
    top: 0% !important;
    height : 88px;
}

/* Adjust icon size and color */
.styled-submit-button i {
    font-size: 27px;
}
.navbar {
  background-color:#134b86 !important;
  display: flex;
  gap: 2em;
}
.navbar a:first-child {

  margin-right: auto;
}
.navLink{
  

    color: #FFFFFF !important;
    font-size: 16px !important;
    font-weight: 400 !important;

}
.fa-sign-out{
  color : #FFFFFF !important;
  font-size: 22px !important;
    margin-right: -24px !important;
}
.name{
  font-size : 8px !important;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
  padding-right : 0px !important;
}
.account-form-title{
  margin-bottom:11px;
}
</style>
</head>
<body>
<div class="navbar" id="myHeader">
  <a class="nav-logo"><img src="images/space-logo-imap.png" loading="lazy" alt="" ></a>
  <!-- <a href="{{route('add_form')}}" class = "navLink">PHASES</a> -->
  <!-- <a href="#!" class = "navLink">OUR TEAM</a>
  <a href="#!" class = "navLink">ABOUT US</a> -->
  <a href="#!" class = "navLink" style = " padding-right: 30px;">HOME</a>
  <a href="#!" class = "navLink" style = " padding-right: 30px;">DATABASE</a>
  <a href="{{route('add_form')}}" class = "navLink" style = " padding-right: 30px;">CREATE A RECORD</a>
  <i class="fa fa-sign-out" aria-hidden="true"></i><a href="log_in" class = "navLink">LOGOUT </a> <a href="#!" class = "navLink" style="position: relative;
    right: 90px;
    top: 16px;">
  </a>

</div>
<head>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></head>
<div class="row content">
      <!-- Sidebar with col-4 width -->
      <div class="col-md-3">
            
            <div class="w3-sidebar w3-light-white w3-bar-block sidebar" >
            <div class = "row para-button">
                  <div class = "col-md-3">
                    <a href="{{ route('add_form') }}"><img src="images/back-button.png" loading="lazy" alt="" ></a>
                  </div>
                  <div class = "col-md-9">
                      <div class = "container para">
          
                        <h5 style = "font-size : 20px !important;" class = "add_data">ADD DATA</h5>
                        <p class = "add_para">Select the site data you want to add</p>
                      </div>
                  </div>
            </div>
              <div class = "site_button">
                    <label for="radio_label" class = "radio-button">
                    Basic Information  <input id="radio_label" type="radio" class = "radio" name="basic_information" value="basic_information" onchange="showSection('section1')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_1" class = "radio-button">
                    Additional Information  <input id="radio_label_1" type="radio" class = "radio1" name="basic_information" value="additional_information" onchange="showSection('section2')">
                    </label>
              </div>  
              <div class = "site_button">
                    <label for="radio_label_2" class = "radio-button">
                    Aerial Imagery Assessment  <input id="radio_label_2" type="radio" class = "radio2" name="basic_information" value="aerial_imagery_assessment" onchange="showSection('section3')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_3" class = "radio-button">
                    Built Component  <input id="radio_label_3" type="radio" class = "radio3" name="basic_information" value="built_component" onchange="showSection('section4')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_4" class = "radio-button">
                    Cultural Period Assignment  <input id="radio_label_4" type="radio" class = "radio4" name="basic_information" value="cultural_period_assignment" onchange="showSection('section5')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_5" class = "radio-button">
                    Environmental Information <input id="radio_label_5" type="radio" class = "radio5" name="basic_information" value="environmental_information" onchange="showSection('section6')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_6" class = "radio-button">
                    Form And Interpretation  <input id="radio_label_6" type="radio" class = "radio6" name="basic_information" value="form_and_interpretation" onchange="showSection('section7')">
                    </label>
              </div>
              
              <div class = "site_button">
                    <label for="radio_label_7" class = "radio-button">
                    Heritage Protection Status  <input id="radio_label_7" type="radio" class = "radio7" name="basic_information" value="name" onchange="showSection('section7')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_8" class = "radio-button">
                    Historic Maps Assessment  <input id="radio_label_8" type="radio" class = "radio7" name="basic_information" value="name" onchange="showSection('section8')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_9" class = "radio-button">
                    Keywords And Themes  <input id="radio_label_9" type="radio" class = "radio10" name="basic_information" value="keywords_and_themes" onchange="showSection('section9')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_10" class = "radio-button">
                    Location <input id="radio_label_10" type="radio" class = "radio9" name="basic_information" value="location" onchange="showSection('section10')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_11" class = "radio-button">
                    Name  <input id="radio_label_11" type="radio" class = "radio7" name="basic_information" value="name" onchange="showSection('section11')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_12" class = "radio-button">
                    Vessel Information <input id="radio_label_12" type="radio" class = "radio7" name="basic_information" value="name" onchange="showSection('section12')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_13" class = "radio-button">
                    Vessel Tonnage  <input id="radio_label_13" type="radio" class = "radio11" name="basic_information" value="vessel_tonage" onchange="showSection('section13')">
                    </label>
              </div>
              <div class = "site_button">
                    <label for="radio_label_14" class = "radio-button">
                    Site Depth Information  <input  id="radio_label_14" type="radio" class = "radio11" name="basic_information" value="vessel_tonage" onchange="showSection('section13')">
                    </label>
              </div>
            </div>
      </div>
      <div class="col-md-8">
  
  
        <div class="w-users-userformpagewrap account-page-wrapper">

          <div class="account-left-block">
            <div class="w-users-usersignupformwrapper account-form-block" style="    position: relative; bottom : 40px !important;">
              
              <form class="sign-up-form signupForm"  action="{{route('add_record')}}" method="POST" enctype="multipart/form-data" data-wf-user-form-type="signup">
                    {!! csrf_field() !!}  
                    <div class="w-users-userformheader account-form-title">
                    <h3 class="blue_bar" id="form_head"> BASIC INFORMATION </h3>
                    </div>
                        <label for="Name" class="field-label login-email imap">IMAP ID <span style = "color:red;"> *</span></label>
                    
                    
                        <input type="text" class="form-field w-input imap-field"  name="imap_id" data-name="field" data-wf-user-field="wf-user-field-name" placeholder="" id="wf-sign-up-name" required   >
                
                      <div class = "basic_information sec" id = "section1" style="display: none;">
                      
                      
                        <label for="Name" class="field-label login-email">Grid Square ID <span style = "color:red;"> *</span></label>
                        <input type="text" class="form-field w-input"  name="grid_square_id" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""  >
                      
                        <label for="Name" class="field-label login-email">Site Description</label>
                        <input type="text" class="form-field w-input"  name="site_description" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""  >
                        
                        <label for="Name" class="field-label login-email">Ground Trouthed</label>
                        <input type="text" class="form-field w-input"  name="ground_trouthed" data-name="field" data-wf-user-field="wf-user-field-name" placeholder="" >
                        
                        <label for="Name" class="field-label login-email">Drone Truthed</label>
                        <input type="text" class="form-field w-input"  name="drone_truthed" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""  >
                        
                        <label for="Name" class="field-label login-email">Located</label>
                        <input type="text" class="form-field w-input"  name="located" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Significance</label>
                        <input type="text" class="form-field w-input"  name="significance" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      <div class = "additional_information sec" id = "section2" style="display: none;">
                        <label for="Name" class="field-label login-email">Site Function</label>
                        <input type="text" class="form-field w-input"  name="site_function" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Survey Method</label>
                        <input type="text" class="form-field w-input"  name="survey_method" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Research Activities</label>
                        <input type="text" class="form-field w-input"  name="research_activities" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Site Inspection Folder Url</label>
                        <input type="text" class="form-field w-input"  name="site_inspection_folder_url" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Site Integrity</label>
                        <input type="text" class="form-field w-input"  name="site_integrity" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                      </div>
                      <div class = "aerial_imagery_assessment sec" id ="section3" style="display: none;">
                        <label for="Name" class="field-label login-email">AI Visible</label>
                        <input type="text" class="form-field w-input"  name="ai_visible" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Data Visible</label>
                        <input type="text" class="form-field w-input"  name="data_visible" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Notes</label>
                        <input type="text" class="form-field w-input"  name="notes" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                      </div>
                      <div class = "built_component sec" id = "section4" style="display: none;">
                        <label for="Name" class="field-label login-email">Material</label>
                        <input type="text" class="form-field w-input"  name="material" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Technique</label>
                        <input type="text" class="form-field w-input"  name="technique" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                      </div>
                      <div class = "cultural_period_assignment sec" id = "section5" style="display: none;">
                        <label for="Name" class="field-label login-email">Cultural Period Major</label>
                        <input type="text" class="form-field w-input"  name="cultural_period_major" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Cultural Period Minor</label>
                        <input type="text" class="form-field w-input"  name="cultural_period_minor" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Cultural Periods Certainity</label>
                        <input type="text" class="form-field w-input"  name="cultural_periods_certainity" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Sources Of Documented Cultural Periods</label>
                        <input type="text" class="form-field w-input"  name="sources_of_documented_cultural_periods" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                      </div>
                      <div class = "environmental_information sec" id = "section6" style="display: none;">
                        <label for="Name" class="field-label login-email">Soil Type</label>
                        <input type="text" class="form-field w-input"  name="soil_type" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Land Cover</label>
                        <input type="text" class="form-field w-input"  name="land_cover" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Site Environmental Context</label>
                        <input type="text" class="form-field w-input"  name="site_environmental_context" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                      </div>
                      <div class = "form_and_interpretation sec" id = "section7" style="display: none;">
                        <label for="Name" class="field-label login-email">Form</label>
                        <input type="text" class="form-field w-input"  name="form" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Interpretation</label>
                        <input type="text" class="form-field w-input"  name="interpretation" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      <div class = "heritage_protection_status sec" id = "section8" style="display: none;">
                        <label for="Name" class="field-label login-email">Level Of Protection</label>
                        <input type="text" class="form-field w-input"  name="level_of_protection" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Relative Legislation</label>
                        <input type="text" class="form-field w-input"  name="relative_legislation" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Land Ownership</label>
                        <input type="text" class="form-field w-input"  name="land_ownership" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Protected Designation Status</label>
                        <input type="text" class="form-field w-input"  name="protected_designation_status" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      <div class = "historic_maps_assessment sec" id = "section9" style="display: none;">
                        <label for="Name" class="field-label login-email">HM Legend</label>
                        <input type="text" class="form-field w-input"  name="hm_legend" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">HM Notes</label>
                        <input type="text" class="form-field w-input"  name="hm_notes" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Config</label>
                        <input type="text" class="form-field w-input"  name="config" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Pin Date</label>
                        <input type="text" class="form-field w-input"  name="pin_date" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">HM Source</label>
                        <input type="text" class="form-field w-input"  name="hm_source" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                        <label for="Name" class="field-label login-email">Assess By</label>
                        <input type="text" class="form-field w-input"  name="assess_by" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      </div>
                      <div class = "keywords_and_themes sec" id = "section10" style="display: none;">
                        <label for="Name" class="field-label login-email">Keywords</label>
                        <input type="text" class="form-field w-input"  name="keywords" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Themes</label>
                        <input type="text" class="form-field w-input"  name="themes" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      <div class = "location sec" id = "section11" style="display: none;">
                        <label for="Name" class="field-label login-email">Maritime Zone</label>
                        <input type="text" class="form-field w-input"  name="maritime_zone" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">District</label>
                        <input type="text" class="form-field w-input"  name="district" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Tehsil</label>
                        <input type="text" class="form-field w-input"  name="tehsil" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Directions To Site</label>
                        <input type="text" class="form-field w-input"  name="directions_to_site" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Location Information Source 2</label>
                        <input type="text" class="form-field w-input"  name="location_information_source2" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                        <label for="Name" class="field-label login-email">Datum</label>
                        <input type="text" class="form-field w-input"  name="datum" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Geometry Recording Method</label>
                        <input type="text" class="form-field w-input"  name="geometry_recording_method" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Primary Location</label>
                        <input type="text" class="form-field w-input"  name="primary_location" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Status 3</label>
                        <input type="text" class="form-field w-input"  name="status3" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Site Coordinates 1</label>
                        <input type="text" class="form-field w-input"  name="site_coordinates1" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      </div>
                      <div class = "name sec" id = "section12" style="display: none;">
                        <label for="Name" class="field-label login-email">Site Name</label>
                        <input type="text" class="form-field w-input"  name="site_name" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Name Type</label>
                        <input type="text" class="form-field w-input"  name="name_type" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Primary Name</label>
                        <input type="text" class="form-field w-input"  name="primary_name" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      
                      </div>
                      <div class = "vessel_tonage sec" id = "section13" style="display: none;">
                        <label for="Name" class="field-label login-email">Tonnage Type</label>
                        <input type="text" class="form-field w-input"  name="tonnage_type" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Tonnage Value</label>
                        <input type="text" class="form-field w-input"  name="tonnage_value" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      <div class = "site_depth_information sec" id = "section14" style="display: none;">
                        <label for="Name" class="field-label login-email">Max Depth</label>
                        <input type="text" class="form-field w-input"  name="max_depth" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Min Depth</label>
                        <input type="text" class="form-field w-input"  name="min_depth" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                      </div>
                      <div class = "vessel_information sec" id = "section15" style="display: none;">
                        <label for="Name" class="field-label login-email">Vessel ID</label>
                        <input type="text" class="form-field w-input"  name="vessel_id" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Vessel Type</label>
                        <input type="text" class="form-field w-input"  name="vessel_type" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Vessel Construction</label>
                        <input type="text" class="form-field w-input"  name="vessel_construction" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Where Built</label>
                        <input type="text" class="form-field w-input"  name="where_built" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">When Built</label>
                        <input type="text" class="form-field w-input"  name="when_built" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                        <label for="Name" class="field-label login-email">When Loss</label>
                        <input type="text" class="form-field w-input"  name="when_loss" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Reason Loss</label>
                        <input type="text" class="form-field w-input"  name="reason_loss" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Nationality</label>
                        <input type="text" class="form-field w-input"  name="nationality" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      <div class = "vessel_information sec" id = "section16" style="display: none;">
                        <label for="Name" class="field-label login-email">Vessel ID</label>
                        <input type="text" class="form-field w-input"  name="vessel_id" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Vessel Type</label>
                        <input type="text" class="form-field w-input"  name="vessel_type" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Vessel Construction</label>
                        <input type="text" class="form-field w-input"  name="vessel_construction" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">Where Built</label>
                        <input type="text" class="form-field w-input"  name="where_built" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                        <label for="Name" class="field-label login-email">When Built</label>
                        <input type="text" class="form-field w-input"  name="when_built" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                      
                        <label for="Name" class="field-label login-email">When Loss</label>
                        <input type="text" class="form-field w-input"  name="when_loss" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Reason Loss</label>
                        <input type="text" class="form-field w-input"  name="reason_loss" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >

                        <label for="Name" class="field-label login-email">Nationality</label>
                        <input type="text" class="form-field w-input"  name="nationality" data-name="field" data-wf-user-field="wf-user-field-name" placeholder=""   >
                        
                      </div>
                      
                        
                <button type="submit" class="styled-submit-button">
                    <i class="fas fa-check"></i>
                </button>
                
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
  

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=643d23859a03d460b5afe396" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <!-- <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="radio"]').click(function() {
                    var inputValue = $(this).attr("value");
                    var targetBox = $("." + inputValue);
                    $(".sec").not(targetBox).hide();
                    $(targetBox).show();
                });
            });
        </script> -->

        <script>
    function showSection(sectionId) {
    $("input[type='radio']:checked").each(function() {
        var idVal = $(this).attr("id");
       
        console.log($("label[for='"+idVal+"']").text())
        $("#form_head").text($("label[for='"+idVal+"']").text());
    });
      
      // Get all the sections
      const sections = document.querySelectorAll('div[id^="section"]');

      // Hide all the sections
      for (const section of sections) {
        section.style.display = 'none';
       
        
      }

      // Show the selected section
      const selectedSection = document.getElementById(sectionId);
      if (selectedSection) {
        selectedSection.style.display = 'block';
        var giftRadioVal=$('.gift-card :checked').val();
       

       
        
      }
    }
  </script>
  

