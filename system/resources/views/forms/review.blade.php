
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
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Inconsolata:400,700","Archivo:100,200,300,regular,500,600,700,800,900","Inter:200,300,regular,500,600,700,800","Work Sans:regular,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.svg" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.svg" rel="apple-touch-icon">
  <style>
  <style>
* {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
label{
  font-family: 'Gotham', sans-serif !important;
font-weight : 700px !important;
text-transform : uppercase;
  font-size : 12px !important;
  margin-left:65px !important;
}
.button-primary{
  width : 70% !important;
}
.edit_data {
    /* background-color: #8080806e !important; */
    color: #0e0e0e !important;
    padding: 3px 14px !important;
    border-radius: 5px !important;
    /* margin-top: 10px !important; */
    cursor: pointer;
    width: 21px !important;
    font-size: 16px !important;
    left: 240px !important;
    bottom: 44px !important;
    position: relative !important;
}
@font-face {
    font-family: 'Gotham';
    src: url("./system/public/fonts/GothamLight.ttf") format('truetype');
    font-weight: 100;
    font-style: normal;
}

/* Define 'Gotham' with font-weight 600 */
@font-face {
    font-family: 'Gotham';
    src: url("./system/public/fonts/GothamBold.ttf") format('truetype');
    font-weight: 600;
    font-style: normal;
}
/* .edit_data {
    background-color : #8080806e !important;
    color : #ebebef !important;
    padding : 5px 25px !important;
    border-radius : 5px !important;
    margin-top : 10px !important;
    cursor : pointer;
    width : 121px !important;
} */
.submit_data {
  font-size : 12px !important;
    background-color : #134B86 !important;
    color : #ebebef !important;
    padding : 10px 42px !important;
    border-radius : 5px !important;
    margin-top : 15px !important;
}
.form-footer {
    margin-left: 105px;
}
.label2{
  
  font-family: 'Gotham', sans-serif !important;
  margin-left : 65px;
  border : none;
  font-size : 12px !important;
    font-weight:normal !important;
    margin-bottom : 15px !important;
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
.login-email, .login-password {
    color: #030407 !important;
    font-weight: 700 !important;
    font-size: 14px !important;
    font-family: 'Gotham', sans-serif !important;
    width: 46px !important;
    height: 13px !important;
}
.button-primary {
  margin-top : 15px !important;
    width: 20% !important;
    background-color: #134b86 !important;
    border-radius: 6px !important;
    align-self: right !important;
    margin-left: 417px !important;
    margin-bottom:15px !important;
}

.text-color-gray-500 {
  font-family: 'Gotham', sans-serif !important;
    color: #606476 !important;
    font-size: 14px !important;
    font-weight: 500 !important;
}
.font_fam{
  font-family: 'Gotham', sans-serif !important;
}
.form-field {
    background-color: #F5F5F5 !important;
}
.login-link2 {
    text-align: center !important;
    margin-top: 0 !important;
    margin-bottom: 0px !important;
}
.login-link{
    
    margin-bottom: 0px !important;
}
.account-form-title{
    margin-bottom : 0px !important;
}
.margin-bottom-16 {
  text-transform: uppercase;
  
    margin-bottom: 0px;
    padding-left: 47px;
}
h5{
  color : black !important;
  font-family: 'Gotham', sans-serif !important;
}
.loginForm{
    border-radius: 8px !important;
    margin-bottom : 30px !important;
}
  .loginCard{
  background-color: #ffffff !important;
}
.account-left-block{
  margin-top : 0px !important;
  width: 85% !important;
}
h5{
  font-weight : 700;
  font-size:13px;
  margin-left:16px !important;
    padding-top : 15px !important;
}
@media screen and (min-width: 1024px) and (max-width : 1440px){
  .edit_data {
  left: 185px !important;
 
  }
}
/** For Large Screen */
@media screen and (min-width: 1440px){
  .button-primary {
  margin-left: 248px !important;
  width : 27% !important;
  }
  .form-field{
    
    height: 48px;
    max-width: 74.9962%;
    border: 1px solid #ebebef;
    margin-bottom: 24px;
    margin-left: 106px;
    padding: 12px;
}
 .facebook{
  margin-right:135px;
 }
.margin-bottom-16 {
    
    padding-left: 50px !important;
    
}
.account-form-block {
  margin-top: 0px !important;
}
}

/** For Tablets */
@media screen and (max-width: 780px){
  .button-primary {
  margin-left: 399px !important;
  }
  .account-left-block{
  width: 85% !important;
}
}

/** For Mobile */
@media screen and (max-width: 450px){
.account-form-block {
  margin-left: 10px !important;
}
.account-left-block{
  width: 72% !important;
}
.form-field {
  margin-left: 50px !important;
}
label {
  
    margin-left: 50px !important;
}
.form-field {
  margin-left: 50px !important;
}
.button-primary {
    width: 23% !important;
    margin-left: 181px !important;
}
.form-field{
  max-width: 69.9962%;
  margin-left: 50px !important;
}
.facebook{
  margin-right:50px;
}

}
.review_id{
    color: gray;
    font-weight: 400;
    font-size: 12px;
}
.styled-submit-button i {
    font-size: 20px;
}
.navbar {
  height: 90px !important;
  background-color:#134b86 !important;
  display: flex;
  gap: 2em;
}
.navbar a:first-child {

  margin-right: auto;
}
.navLink{
  

  font-family: 'Gotham', sans-serif !important;
    color: #FFFFFF !important;
    font-size: 16px !important;
    font-weight: 400 !important;

}
.fa-sign-out{
  font-size: 22px !important;
    margin-right: -24px !important;
    color : #FFFFFF !important;
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
.page-heading{
  padding-top : 0px !important;
  right : 90px !important;
  font-family: 'Gotham', sans-serif !important;
    font-size: 16px;
  bottom: 0px;
    position: relative;
margin-left: 0px !important;
}
.submit-form{
  background-color: whitesmoke;
    position: relative;
    padding-top: 25px;
    padding-left: 44%;
}
</style>
</head>
<body>
<div class="navbar" id="myHeader">
  <a class="nav-logo"><img src="images/space-logo-imap.png" loading="lazy" alt="" ></a>
  <a href="#!" class = "navLink" style = " padding-right: 15px;">HOME</a>
  <a href="{{route('dashboard')}}" class = "navLink" style = " padding-right: 15px;">DATABASE</a>
  <a href="{{route('add_form')}}" class = "navLink" style = " padding-right: 15px;">CREATE A RECORD</a>
  <!-- <a href="#!" class = "navLink">ABOUT US</a> -->
 
  <i class="fa fa-sign-out" aria-hidden="true"></i><a href="log_in" class = "navLink">LOGOUT <br> <span class = "name"></span> </a>

</div>
<head>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></head>
  <div class="w-users-userformpagewrap account-page-wrapper">
  
    <div class="account-left-block">
      
      <div class="w-users-userloginformwrapper account-form-block">
      <h5 class = page-heading><a href="{{ route('add_form') }}"><img src="images/back-button.png" loading="lazy" alt="" ></a>REVIEW RECORDS </h5>
        <form data-wf-user-form-type="login" class= "loginForm" data-wf-user-form-redirect="/" action="{{route('edit_basic')}}" method="POST" enctype="multipart/form-data"  >
        <div class = "loginForm loginCard">
          <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Basic Site Information  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection" >
            <div class = "col-md-3">
              <label>IMAP ID</label>
              <input class = "label2" type = "text" id = "field1" name = "imap_id" value = "{{$basic_site_information['imap_id']}}" readonly>

              <label>Grid Square ID</label>
              <input class = "label2" type = "text" id = "field2" name = "grid_square_id" value = "{{$basic_site_information['grid_square_id']}}" readonly>

              <label>Site Description</label>
              <input class = "label2" type = "text" id = "field2" name = "site_description" value = "{{$basic_site_information['site_description']}}" readonly>
            </div>

            <div class = "col-md-3">
           
              <label>Site Classification</label>
              <input class = "label2" type = "text" id = "field2" name = "site_classification" value = "{{$basic_site_information['site_classification']}}" readonly>

              <label>Drone Truthed</label>
              <input class = "label2" type = "text" id = "field2" name = "drone_truthed" value = "{{$basic_site_information['drone_truthed']}}" readonly>

              <label>Ground Truthed</label>
              <input class = "label2" type = "text" id = "field2" name = "ground_truthed" value = "{{$basic_site_information['ground_truthed']}}" readonly>
            </div>
            <div class = "col-md-3">
          
         
           
                <label>Located</label>
                <input class = "label2" type = "text" id = "field2" name = "located" value = "{{$basic_site_information['located']}}" readonly>
              <label>Significance</label>
              <input class = "label2" type = "text" id = "field2" name = "significance" value = "{{$basic_site_information['significance']}}" readonly>
            </div>
       
              <input  name = "old_imap" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
        <div class = "loginForm loginCard">
                    <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Additional Information <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection1">
            <div class = "col-md-3">
                <label>Site Function</label>
                <input class = "label2" type = "text" id = "field1" name = "site_function" value = "{{$additional_information['site_function']}}" readonly>

              <label>Research Activities</label>
              <input class = "label2" type = "text" id = "field1" name = "research_activities" value = "{{$additional_information['research_activities']}}" readonly>
              <label>Survey Method</label>
              <input class = "label2" type = "text" id = "field1" name = "survey_method" value = "{{$additional_information['survey_method']}}" readonly>
            </div>

            <div class = "col-md-3">
           
              <label>Site Integirty</label>
              <input class = "label2" type = "text" id = "field1" name = "site_integrity" value = "{{$additional_information['site_integrity']}}" readonly>

              <label>Site Inspection Folder URL</label>
              <input class = "label2" type = "text" id = "field1" name = "site_inspection_folder_url" value = "{{$additional_information['site_inspection_folder_url']}}" readonly>
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
          
            </div>
            <div class = "col-md-3">
       
            </div>
       
            <div class = "col-md-3">
            <div id="edit-button1" class = "edit_data" ><i class="fa fa-edit"></i> </div>              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Aerial Imagery Assessment <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
           
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection2">
            <div class = "col-md-3">
                <label>AI Visible</label>
                <input class = "label2" type = "text" id = "field1" name = "ai_visible" value = "{{$aerial_imagery_assessment['ai_visible']}}" readonly>

              <label>Data Visible</label>
              <input class = "label2" type = "text" id = "field1" name = "data_visible" value = "{{$aerial_imagery_assessment['data_visible']}}" readonly>
              <label>Notes</label>
              <input class = "label2" type = "text" id = "field1" name = "notes" value = "{{$aerial_imagery_assessment['notes']}}" readonly>
            </div>

            <div class = "col-md-3">
           
             
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
          
            </div>
            <div class = "col-md-3">
       
            </div>
       
            <div class = "col-md-3">
            <div id="edit-button2" class = "edit_data" ><i class="fa fa-edit"></i> </div>              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Built Component <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
           
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection3">
            <div class = "col-md-3">
                <label>Material</label>
                <input class = "label2" type = "text" id = "field1" name = "material" value = "{{$built_component['material']}}" readonly>

              <label>Construction Technique</label>
              <input class = "label2" type = "text" id = "field1" name = "construction_technique" value = "{{$built_component['construction_technique']}}" readonly>
             
            </div>

            <div class = "col-md-3">
           
             
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
          
            </div>
            <div class = "col-md-3">
       
            </div>
       
            <div class = "col-md-3">
              <div id="edit-button3" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Cultural Period Assignment  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection4" >
            <div class = "col-md-3">
              <label>Cultural Period Major</label>
              <input class = "label2" type = "text" id = "field1" name = "cultural_period_major" value = "{{$cultural_period_assignment['cultural_period_major']}}" readonly>

              <label>Cultural Period Minor</label>
              <input class = "label2" type = "text" id = "field2" name = "cultural_period_minor" value = "{{$cultural_period_assignment['cultural_period_minor']}}" readonly>

              <label>Cultural Periods Certainity</label>
              <input class = "label2" type = "text" id = "field2" name = "cultural_periods_certainity" value = "{{$cultural_period_assignment['cultural_periods_certainity']}}" readonly>
            </div>

            <div class = "col-md-3">
           
              <label>Sources Of Documented Cultural Periods</label>
              <input class = "label2" type = "text" id = "field2" name = "sources_of_documented_cultural_periods" value = "{{$cultural_period_assignment['sources_of_documented_cultural_periods']}}" readonly>

             
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button4" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Condition Assessment  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection5" >
            <div class = "col-md-3">
              <label>Date</label>
              <input class = "label2" type = "text" id = "field1" name = "date" value = "{{$condition_assessment['date']}}" readonly>

              <label>Condition Level</label>
              <input class = "label2" type = "text" id = "field2" name = "condition_level" value = "{{$condition_assessment['condition_level']}}" readonly>

              <label>Condition Description</label>
              <input class = "label2" type = "text" id = "field2" name = "condition_description" value = "{{$condition_assessment['condition_description']}}" readonly>
            </div>

            <div class = "col-md-3">
           
              <label>Threat Level</label>
              <input class = "label2" type = "text" id = "field2" name = "threat_level" value = "{{$condition_assessment['threat_level']}}" readonly>

              <label>Threat Description</label>
              <input class = "label2" type = "text" id = "field2" name = "threat_description" value = "{{$condition_assessment['threat_description']}}" readonly>

              <label>Recommendations</label>
              <input class = "label2" type = "text" id = "field2" name = "recommendations" value = "{{$condition_assessment['recommendations']}}" readonly>
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button5" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Environmental Information  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection6" >
            <div class = "col-md-3">
              <label>Soil Type</label>
              <input class = "label2" type = "text" id = "field1" name = "soil_type" value = "{{$environmental_information['soil_type']}}" readonly>

              <label>Land Cover</label>
              <input class = "label2" type = "text" id = "field2" name = "land_cover" value = "{{$environmental_information['land_cover']}}" readonly>

              <label>Site Environmental Context</label>
              <input class = "label2" type = "text" id = "field2" name = "site_environmental_context" value = "{{$environmental_information['site_environmental_context']}}" readonly>
            </div>

            <div class = "col-md-3">
           
             

          
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button6" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Form And Interpretation  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection7" >
            <div class = "col-md-3">
              <label>Site Form</label>
              <input class = "label2" type = "text" id = "field1" name = "site_form" value = "{{$form_and_interpretation['site_form']}}" readonly>

              <label>Site Interpretation</label>
              <input class = "label2" type = "text" id = "field2" name = "site_interpretation" value = "{{$form_and_interpretation['site_interpretation']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           
             

          
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button7" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Heritage Protection Status  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection11" >
            <div class = "col-md-3">
              <label>Level of Protection</label>
              <input class = "label2" type = "text" id = "field1" name = "level_of_protection" value = "{{$heritage_protection_status['level_of_protection']}}" readonly>

              <label>Relevant Legislation</label>
              <input class = "label2" type = "text" id = "field2" name = "relevant_legislation" value = "{{$heritage_protection_status['relevant_legislation']}}" readonly>
              <label>Protected Designation Status</label>
              <input class = "label2" type = "text" id = "field2" name = "protected_designation_status" value = "{{$heritage_protection_status['protected_designation_status']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           <label>Land Ownership</label>
              <input class = "label2" type = "text" id = "field2" name = "land_ownership" value = "{{$heritage_protection_status['land_ownership']}}" readonly>
             

          
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button11" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>  
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Historic Maps Assessment  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection12" >
            <div class = "col-md-3">
              <label>HM Legend</label>
              <input class = "label2" type = "text" id = "field1" name = "hm_legend" value = "{{$historic_maps_assessment['hm_legend']}}" readonly>

              <label>HM Notes</label>
              <input class = "label2" type = "text" id = "field2" name = "hm_notes" value = "{{$historic_maps_assessment['hm_notes']}}" readonly>
              <label>Config</label>
              <input class = "label2" type = "text" id = "field2" name = "config" value = "{{$historic_maps_assessment['config']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           <label>Pin Date</label>
              <input class = "label2" type = "text" id = "field2" name = "pin_date" value = "{{$historic_maps_assessment['pin_date']}}" readonly>
             
              <label>HM Source</label>
              <input class = "label2" type = "text" id = "field2" name = "hm_source" value = "{{$historic_maps_assessment['hm_source']}}" readonly>
              <label>Pin Date</label>
              <input class = "label2" type = "text" id = "field2" name = "assess_by" value = "{{$historic_maps_assessment['assess_by']}}" readonly>
          
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button12" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div> 
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Location  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection13" >
            <div class = "col-md-3">
              <label>Maritime Zone</label>
              <input class = "label2" type = "text" id = "field1" name = "maritime_zone" value = "{{$location['maritime_zone']}}" readonly>

              <label>District</label>
              <input class = "label2" type = "text" id = "field2" name = "district" value = "{{$location['district']}}" readonly>
              <label>Tehsil</label>
              <input class = "label2" type = "text" id = "field2" name = "tehsil" value = "{{$location['tehsil']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           <label>Datum</label>
              <input class = "label2" type = "text" id = "field2" name = "pin_date" value = "{{$location['datum']}}" readonly>
             
              <label>Directions to site</label>
              <input class = "label2" type = "text" id = "field2" name = "directions_to_site" value = "{{$location['directions_to_site']}}" readonly>
              <label>Site Coordinates1</label>
              <input class = "label2" type = "text" id = "field2" name = "site_coordinates1" value = "{{$location['site_coordinates1']}}" readonly>
          
            </div>
            <div class = "col-md-3">

            <label>Primary Location</label>
            <input class = "label2" type = "text" id = "field2" name = "primary_location" value = "{{$location['primary_location']}}" readonly>
            <label>Source 2</label>
            <input class = "label2" type = "text" id = "field2" name = "location_information_source2" value = "{{$location['location_information_source2']}}" readonly>
            <label>Geometry</label>
            <input class = "label2" type = "text" id = "field2" name = "geometry_recording_method" value = "{{$location['geometry_recording_method']}}" readonly>


            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button13" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div> 
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Name  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection14" >
            <div class = "col-md-3">
              <label>Site Name</label>
              <input class = "label2" type = "text" id = "field1" name = "site_name" value = "{{$name['site_name']}}" readonly>

              <label>Name Type</label>
              <input class = "label2" type = "text" id = "field2" name = "name_type" value = "{{$name['name_type']}}" readonly>
              <label>Primary Name</label>
              <input class = "label2" type = "text" id = "field2" name = "primary_name" value = "{{$name['primary_name']}}" readonly>

              
            </div>

            <div class = "col-md-3">
          
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button14" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>   
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Vessel Information <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection15" >
            <div class = "col-md-3">
              <label>Vessel ID</label>
              <input class = "label2" type = "text" id = "field1" name = "vessel_id" value = "{{$vessel_information['vessel_id']}}" readonly>

              <label>Vessel Type</label>
              <input class = "label2" type = "text" id = "field2" name = "vessel_type" value = "{{$vessel_information['vessel_type']}}" readonly>
              <label>Vessel Construction</label>
              <input class = "label2" type = "text" id = "field2" name = "vessel_construction" value = "{{$vessel_information['vessel_construction']}}" readonly>

              
            </div>

            <div class = "col-md-3">
            <label>Where Built</label>
              <input class = "label2" type = "text" id = "field1" name = "where_built" value = "{{$vessel_information['where_built']}}" readonly>

              <label>When Built</label>
              <input class = "label2" type = "text" id = "field2" name = "when_built" value = "{{$vessel_information['when_built']}}" readonly>
              <label>When Loss</label>
              <input class = "label2" type = "text" id = "field2" name = "when_loss" value = "{{$vessel_information['when_loss']}}" readonly>
            </div>
            <div class = "col-md-3">
            <label>Reason Loss</label>
              <input class = "label2" type = "text" id = "field2" name = "reason_loss" value = "{{$vessel_information['reason_loss']}}" readonly>
              <label>Nationality</label>
              <input class = "label2" type = "text" id = "field2" name = "nationality" value = "{{$vessel_information['nationality']}}" readonly>
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button15" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>  
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Vessel Tonnage  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection8" >
            <div class = "col-md-3">
              <label>Tonnage Type</label>
              <input class = "label2" type = "text" id = "field1" name = "tonnage_type" value = "{{$vessel_tonnage['tonnage_type']}}" readonly>

              <label>Tonnage Value</label>
              <input class = "label2" type = "text" id = "field2" name = "tonnage_value" value = "{{$vessel_tonnage['tonnage_value']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           
             

          
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button8" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Keywords And Themes  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection9" >
            <div class = "col-md-3">
              <label>Keywords</label>
              <input class = "label2" type = "text" id = "field1" name = "keywords" value = "{{$keywords_and_themes['keywords']}}" readonly>

              <label>Themes</label>
              <input class = "label2" type = "text" id = "field2" name = "themes" value = "{{$keywords_and_themes['themes']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           
        
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button9" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
</div>
<div class = "loginForm loginCard">
            <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

            <h5> Site Depth Information  <span class = "review_id"> (IMAP ID {{$basic_site_information['imap_id']}} )</span> </h5> <br>
              <!-- <div class="login-link2"><img src="images/Frame(1).png" loading="lazy" alt="" class="facebook"></div> -->
            </div>
            @csrf
        
          </div>
          <div class = "row" id = "editableSection10" >
            <div class = "col-md-3">
              <label>Max Depth</label>
              <input class = "label2" type = "text" id = "field1" name = "max_depth" value = "{{$site_depth_information['max_depth']}}" readonly>

              <label>Min Depth</label>
              <input class = "label2" type = "text" id = "field2" name = "min_depth" value = "{{$site_depth_information['min_depth']}}" readonly>

              
            </div>

            <div class = "col-md-3">
           
        
            </div>
            <div class = "col-md-3">
          
            </div>
       
              <input  name = "imap_id" value = "{{$basic_site_information['imap_id']}}" hidden>
         
     
            <div class = "col-md-3">
              <div id="edit-button10" class = "edit_data" ><i class="fa fa-edit"></i> </div>
              
          
            </div>
          </div>
          <div class = "submit-form">
          <!-- <a href="{{ route('add_form') }}" id="submit-button" class = "submit_data" style = "margin-right : 10px !important;">BACK </a> -->
          <!-- <button type = "submit" id="submit-button" class = "submit_data" style = "margin-right : 10px !important;" target="_blank">BACK </a> -->

          <button type = "submit" id="submit-button" class = "submit_data" target="_blank">SUBMIT </button>
          </div>
        </form>
        <div style="display:none" data-wf-user-form-error="true" class="w-users-userformerrorstate error-state w-form-fail">
          <div class="user-form-error-msg" wf-login-form-general-error-error="We&#x27;re having trouble logging you in. Please try again, or contact us if you continue to have problems." wf-login-form-invalid-email_or_password-error="Invalid email or password. Please try again.">We&#x27;re having trouble logging you in. Please try again, or contact us if you continue to have problems.</div>
        </div>
      </div>
    </div>
  </div>
  <script>

document.addEventListener("DOMContentLoaded", function () {
    const editButton = document.getElementById("edit-button");
    const editableSection = document.getElementById("editableSection");
    const fields = editableSection.querySelectorAll("input[type='text']");

    editButton.addEventListener("click", function () {
        fields.forEach(function (field) {
            field.readOnly = !field.readOnly;
        });
        
        if (!fields[0].readOnly) {
            fields[0].focus(); // Focus on the first editable field
        }
        else{
          fields[0].readOnly;
        }
    });
});
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button1");
        const editableSection = document.getElementById("editableSection1");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
         
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button2");
        const editableSection = document.getElementById("editableSection2");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button3");
        const editableSection = document.getElementById("editableSection3");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button4");
        const editableSection = document.getElementById("editableSection4");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button5");
        const editableSection = document.getElementById("editableSection5");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button6");
        const editableSection = document.getElementById("editableSection6");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button7");
        const editableSection = document.getElementById("editableSection7");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button8");
        const editableSection = document.getElementById("editableSection8");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button9");
        const editableSection = document.getElementById("editableSection9");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button10");
        const editableSection = document.getElementById("editableSection10");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button11");
        const editableSection = document.getElementById("editableSection11");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button12");
        const editableSection = document.getElementById("editableSection12");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button13");
        const editableSection = document.getElementById("editableSection13");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button14");
        const editableSection = document.getElementById("editableSection14");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button15");
        const editableSection = document.getElementById("editableSection15");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.getElementById("edit-button16");
        const editableSection = document.getElementById("editableSection16");
        const fields = editableSection.querySelectorAll("input[type='text']");

        editButton.addEventListener("click", function () {
            fields.forEach(function (field) {
                field.readOnly = !field.readOnly;
            });
            
              if (!fields[0].readOnly) {
                fields[0].focus(); // Focus on the first editable field
            }
            else{
          fields[0].readOnly;
        }
        });
    });
</script>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>
    <script>
      var inputs = document.getElementsByClassName('label2');

for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value.length === 0) {
        inputs[i].value = "NULL";
        inputs[i].style.fontStyle = 'italic';
    }
}
      </script>
