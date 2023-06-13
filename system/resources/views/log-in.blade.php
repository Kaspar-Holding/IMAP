<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Apr 28 2023 08:34:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="643d23869a03d402ccafe3b1" data-wf-site="643d23859a03d460b5afe396">
<head>
  <meta charset="utf-8">
  <title>Job Portal Site</title>
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
</style>
</head>
<body>
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
  <div class="w-users-userformpagewrap account-page-wrapper">
    <div class="account-left-block">
      <div class="w-users-userloginformwrapper account-form-block">
        <form data-wf-user-form-type="login" data-wf-user-form-redirect="/" action="{{route('sign_in')}}" method="POST">
          <div class="w-users-userformheader account-form-title">
            <div class="margin-bottom-16">
              <h3 class="heading">Log in</h3>

              <div class="login-link"><img src="images/Frame-6.png" loading="lazy" alt="" class="facebook"><img src="images/Frame-6_1.png" loading="lazy" alt="" class="google"></div>
            </div>
            @csrf
          @if(session()->has('error'))
              <div class="alert alert-danger" style = "color: #f7073f;">
                  {{ session()->get('error') }}
              </div>
          @endif
          </div><label for="Email" class="login-email">Email</label><input type="email" maxlength="256" placeholder="" name="email" id="wf-log-in-email" class="form-field w-input" autocomplete="username" required="" data-wf-user-form-input-type="email"><label for="Password" class="login-password">Password</label><input type="password" maxlength="256" placeholder="" name="password" id="wf-log-in-password" class="form-field w-input" required="" data-wf-user-form-input-type="password"><input type="submit" value="LOGIN" data-wait="Please wait..." class="w-users-userformbutton button-primary login-page w-button">
          <div class="form-divider"></div>
          <div class="w-users-userformfooter form-footer"><span class="text-color-gray-500">New to Cryptolancers?</span>
            <a href="{{route('sign_up')}}" class="link">Create an account</a>
          </div>
        </form>
        <div style="display:none" data-wf-user-form-error="true" class="w-users-userformerrorstate error-state w-form-fail">
          <div class="user-form-error-msg" wf-login-form-general-error-error="We&#x27;re having trouble logging you in. Please try again, or contact us if you continue to have problems." wf-login-form-invalid-email_or_password-error="Invalid email or password. Please try again.">We&#x27;re having trouble logging you in. Please try again, or contact us if you continue to have problems.</div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')