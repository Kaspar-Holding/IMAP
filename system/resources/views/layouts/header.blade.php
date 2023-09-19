@extends('layouts.app')
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Apr 28 2023 08:34:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="643d23869a03d4a73aafe39a" data-wf-site="643d23859a03d460b5afe396">
<head>
  <meta charset="utf-8">
  <title>IMAP Site</title>
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

        <!-- <a href="{{ route('sign_up')}}" class="nav-link w-nav-link">Sign Up</a> -->
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