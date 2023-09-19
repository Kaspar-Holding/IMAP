@extends('layouts.app')
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Apr 28 2023 08:34:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="643d23869a03d4062aafe3b6" data-wf-site="643d23859a03d460b5afe396">
<head>
  <meta charset="utf-8">
  <title>IMAP Site</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
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
* {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
label{
  margin-left:107px !important;
}
@font-face {
            font-family: 'Gotham';
            src: url("./system/public/fonts/GothamMedium.ttf") format('truetype'); 
           
            font-style: normal;
        }
        @font-face {
            font-family: 'Montserrat Light';
            src: url("./system/public/fonts/FontsFree-Net-Montserrat-Light-1.ttf") format('truetype'); 
           
            font-style: normal;
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
    margin-left: 135px;
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
  background-color: #FFFFFF !important;
    border-radius: 26px !important;
}
.login-email, .login-password {
    color: #030407 !important;
    font-weight: 700 !important;
    font-size: 14px !important;
    font-family: 'Gotham', sans-serif !important;
    text-transform: uppercase;
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
    font-size: 12px !important;
    font-weight: 500 !important;
    text-transform: uppercase;
}

.form-field {
    background-color: #F5F5F5 !important;
}
.login-link2 {
    text-align: center !important;
    margin-top: 0 !important;
    margin-bottom: 0px !important
}
.login-link{
    
    margin-bottom: 0px !important
}
.margin-bottom-16 {
  position: relative !important;
    bottom: 72px !important;
}
/** For Large Screen */
@media screen and (min-width: 1440px){
  .button-primary {
  margin-left: 283px !important;
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
    max-width: 74.9962%;
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
}
.navbar {
  padding-top : 35px !important;
  height : 90px !important;
  background-color:#134b86 !important;
  display: flex;
  gap: 2em;
}
.navbar a:first-child {

  margin-right: auto;
}
.navLink{
  
  font-family: 'Montserrat Light', sans-serif !important;
    color: #FFFFFF !important;
    font-size: 16px !important;
    font-weight: 400 !important;

}
.fa-sign-out{
  color : #ffffff;
  font-size: 25px !important;
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
</style>
</head>
<body>
<div class="navbar" id="myHeader">
  <a class="nav-logo"><img src="images/space-logo-imap.png" loading="lazy" alt="" ></a>
 
  <a href="#!" class = "navLink" style = " padding-right: 30px;">HOME</a>
  <a href="#!" class = "navLink" style = " padding-right: 30px;">DATABASE</a>
  
  <a href="sign_up" class = "navLink">LOG IN </a> <a href="#!" class = "navLink" style="position: relative;
    right: 90px;
    top: 16px;">
  </a>

</div>
 
  
  <div class="w-users-userformpagewrap account-page-wrapper">

    <div class="account-left-block">
      <div class="w-users-usersignupformwrapper account-form-block">
        
        <form class="sign-up-form signupForm"  action="{{route('create_user')}}" method="POST" enctype="multipart/form-data" data-wf-user-form-type="signup">
        <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
            

              <div class="login-link"><img style = "width: 137px; height: 140px;" src="images/res-logo.png" loading="lazy" alt="" class="facebook"></div> <br>
              <div class="login-link2"><img src="images/new-logo.png" loading="lazy" alt="" class="facebook"></div>
            </div>
            @csrf
          
         
          </div>
          <label for="field-2" class="login-email">Status <span style = "color:red;"> *</span></label><select id="field-2" name="role" data-name="Field 2" required="" class="form-field w-input">
            <option value="">Select status</option>
            <option value="Admin">Admin</option>
            <option value="Super Admin">Super Admin</option>
      
          </select>
                  <label for="Name" class="field-label login-email">First Name <span style = "color:red;"> *</span></label>
                  <input type="text" class="form-field w-input" maxlength="256" name="first_name" data-name="field" data-wf-user-field="wf-user-field-name" placeholder="" id="wf-sign-up-name" required="" >
              
                  <label for="Name" class="field-label login-email">Last Name <span style = "color:red;"> *</span></label>
                  <input type="text" class="form-field w-input" maxlength="256" name="last_name" data-name="field" data-wf-user-field="wf-user-field-name" placeholder="" id="wf-sign-up-name" required="" >
              
          <label for="Email" class="login-email">Email <span style = "color:red;"> *</span></label>
          <input type="email" maxlength="256" placeholder="" name="email" id="wf-log-in-email" class="form-field w-input" autocomplete="username" required="" data-wf-user-form-input-type="email">
          <label for="Password" class="login-password">Password <span style = "color:red;"> *</span></label>
          <input type="password" maxlength="256" placeholder="" name="password" id="wf-log-in-password" class="form-field w-input" required="" data-wf-user-form-input-type="password">
          @error('password')
        <div class="error">{{ $message }}</div>
    @enderror
          <label for="Password" class="login-password">Confirm Password <span style = "color:red;"> *</span></label>
                <input type="password" id="wf-sign-up-password" placeholder="" maxlength="256" name="confirm_password" class="form-field w-input" required="" data-wf-user-form-input-type="password">
          
          
          <div class="w-users-userformfooter form-footer"><span class="text-color-gray-500">Have an account? <a href="{{route('log_in')}}" class="link">Login now</a></span>
            
          </div>
          <div class = "login-button">
          <input type="submit" value="SIGN UP" data-wait="Please wait..." class="w-users-userformbutton button-primary login-page w-button">
          </div>
          
          
        </form>
    
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=643d23859a03d460b5afe396" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>