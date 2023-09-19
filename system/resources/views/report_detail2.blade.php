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
  <!-- <link href="new/report.css" rel="stylesheet" type="text/css"> -->
  <link href="new/css/job-portal-site.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <link rel="stylesheet" href="ui/css/app.css">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css">
    <script src="node_modules/leaflet/dist/leaflet.js"></script>
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
    display : unset !important;
  font-family: 'Gotham', sans-serif !important;
    font-weight : 700px !important;
    text-transform : uppercase;
  font-size : 13px !important;
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
            src: url("./system/public/fonts/GothamMedium.ttf") format('truetype'); 
           
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
  font-size:16px;
  /* margin-left:16px !important;
    padding-top : 15px !important; */
}

#map{
  width: 550px; 
  height: 350px; 
  border-radius : 20px;
}
/** For Large Screen */
@media screen and (min-width: 1440px){
  .button-primary {
  margin-left: 248px !important;
  width : 27% !important;
  }
 .navbar{
 
    width: 1800px !important;
 }
 #map{
    width: 540px;
    height: 370px;
 }
 .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 94%;
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

@media screen and (min-width: 1024px) and (max-width: 1439px) {
  /* Styles for medium laptops */
  .container{
    width: 1128px !important;
  }
    .navbar{
        width: 1167px !important;
    }
    #map{
        width: 385px !important;
    height: 295px !important;
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
  height: 77px !important;
  background-color:#134b86 !important;
  display: flex;
  gap: 2em;
}
.navbar a:first-child {

  margin-right: auto;
}
.navLink{
  

 font-family : 'Montserrat', sans-serif !important;
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
    font-size: 23px;
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
.card-style{
    padding-left : 0px !important;
    margin-left : 0px !important;
}
.blue_bar{
    height : 45px !important;
    font-family: 'Gotham', sans-serif !important;
    /* background-color:#134b86 !important; */
    /* padding: 15px 20px 10px 32px !important; */
    color: black !important;
    font-size: 15px !important;
    background-color : #ffffff !important;
    /* border-top-right-radius: 26px !important; */
    /* border-top-left-radius: 26px !important; */
    text-transform: uppercase !important;
    font-weight : 200px !important;

}
.btn-secondary{
    color : #CECECE !important;
    background-color : #ffffff !important;
    border-color: #ffffff !important;
}
.card{
    margin-left : 20px;
    margin-top : 30px !important;
}
.btn-secondary{
    color: #CECECE;
    background-color: #134b86;
    border-color: #ffffff ;
    /* padding-top : 0px !important; */
    margin-top : -6px;

}
.row-card{
    margin-top : 70px !important;
}
.right-label{
    float : right !important;
    margin-right : 20px !important;
    font-weight : 100;
}
.left-label{

    margin-left : 20px !important;
}
.container{
    max-width : 2000px !important;
}
.images-row{
    margin-left: 20px !important;
    /* margin-top: 100px !important; */
}
.img-fluid{
    border-radius : 10px;
}
@media screen and (min-width: 51%) and (max-width: 75%) {
  /* Styles for medium laptops */
  
}
@media screen and (max-width: 50%) {
  /* Styles for small laptops */
}
@media screen and (min-width: 2560px) {
  /* Styles for large laptops */
  .navbar{
    width: 2430px !important;
 }
 .container{
    max-width : 2200px !important;
 }
 #map{
    width: 831px !important;
    height: 475px !important;
 }
 
}
.img-rep{
    padding : 2px !important;
}
.mt-4, .my-4 {
    margin-top: 0rem!important;
}
.btn-secondary.focus, .btn-secondary:focus {
   
    box-shadow: 0 0 0 0.2rem rgb(0 0 0 / 0%) !important;
}
</style>
</head>

<body>
<div class="navbar" id="myHeader">
  <a class="nav-logo"><img src="images/space-logo-imap.png" loading="lazy" alt="" ></a>
  <a href="#!" class = "navLink" style = " padding-right: 30px;">HOME</a>
  <a href="#!" class = "navLink" style = " padding-right: 30px;">DATABASE</a>
  <a href="{{route('add_form')}}" class = "navLink" style = " padding-right: 30px;">CREATE A RECORD</a>
  <!-- <a href="#!" class = "navLink">ABOUT US</a> -->
 
  <i class="fa fa-sign-out" aria-hidden="true"></i><a href="log_in" class = "navLink">LOGOUT <br> <span class = "name"></span> </a>

</div>
<head>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></head>
<div class="container card-style">
<h5 class="page-heading" style = "right : 0px !important; left :20px ; top : 30px !important;">
                        <!-- <a href="{{ route('add_form') }}">
                            <img src="images/back-button.png" loading="lazy" alt="">
                        </a> -->
                        OBSERVER'S POST
                    </h5>
                    
    <div class="row row-card">
        <div class="col-md-8">
        <div class="row images-row">
                        <div class="col-md-8" stye = "padding-left : 0px !important;"> 
                            <div class="row">
                                <div class="col-md-6 img-rep">
                                    <img src="images/vicinity-map.jpg" alt="Image 1" class="img-fluid">
                                </div>
                                <div class="col-md-6 img-rep">
                                    <img src="images/vicinity-map.jpg" alt="Image 2" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6 img-rep" >
                                    <img src="images/vicinity-map.jpg" alt="Image 3" class="img-fluid">
                                </div>
                                <div class="col-md-6 img-rep">
                                    <img src="images/vicinity-map.jpg" alt="Image 4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 img-rep">
                                    <img src="images/vicinity-map.jpg" alt="Image 5" class="img-fluid">
                                </div>
                                <div class="col-md-6 img-rep">
                                    <img src="images/vicinity-map.jpg" alt="Image 6" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header blue_bar" id="basic_bar">
                        BASIC SITE INFORMATION
                            <button id="toggleBtn" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv" class="card-body" style="display: none;">
                        <label class = "left-label">IMAP ID: <span class = "right-label">145</span></label><br>
                        <label class = "left-label">GRID SQUARE ID: <span class = "right-label">very good site</span></label><br>
                        <label class = "left-label">SITE CLASSIFICATION: <span class = "right-label">very good site</span></label>  
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" id="vessel_bar">
                        VESSEL TONNAGE
                            <button id="toggleBtn2" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv2" class="card-body" style="display: none;">
                        <label class = "left-label">TONNAGE TYPE: <span class = "right-label">NOT LOW</span></label>
                         
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" id="aerial_bar">
                        AERIAL IMAGERY ASSESSMENT
                            <button id="toggleBtn4" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv4" class="card-body" style="display: none;">
                        <label class = "left-label">AI VSISIBLE: <span class = "right-label">TRUE</span></label><br>
                        <label class = "left-label">DATA VISIBLE: <span class = "right-label">FALSE</span></label><br>
                        <label class = "left-label">NOTES: <span class = "right-label">NO NOTES</span></label>  <br>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" id="site_bar">
                        SITE DEPTH INFORMATION
                            <button id="toggleBtn6" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv6" class="card-body" style="display: none;">
                        <label class = "left-label">MAX DEPTH: <span class = "right-label">4500FT</span></label><br>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header blue_bar" id="additional_bar">
                        ADDITIONAL INFORMATION
                            <button id="toggleBtn1" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv1" class="card-body" style="display: none;">
                        <label class = "left-label">SITE FUNCTION: <span class = "right-label">AVAILABLE</span></label><br>
                        <label class = "left-label">SITE INTEGRITY: <span class = "right-label">SITE INTEGRITY</span></label><br>
                        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" id="built_bar">
                        BUILT COMPONENT
                            <button id="toggleBtn3" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv3" class="card-body" style="display: none;">
                        <label class = "left-label">MATERIAL: <span class = "right-label">GOOD MATERIAL</span></label><br>
                        <label class = "left-label">CONSTRUCTION TECHNIQUE: <span class = "right-label">GOOD TECHNQUE</span></label><br>
                        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" id="cultural_bar">
                        CULTURAL PERIOD ASSIGNMENT
                            <button id="toggleBtn5" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv5" class="card-body" style="display: none;">
                        <label class = "left-label">CULTURAL PERIOD MAJOR: <span class = "right-label">MAJOR</span></label><br>
                        <label class = "left-label">CULTURAL PERIOD MINOR: <span class = "right-label">MINOR</span></label><br>
                        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" id="condition_bar">
                        CONDITION ASSESSMENT
                            <button id="toggleBtn7" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div id="contentDiv7" class="card-body" style="display: none;">
                        <label class = "left-label">DATE: <span class = "right-label">27-09-2023</span></label><br>
                        <label class = "left-label">THREAT LEVEL: <span class = "right-label">NO THREAT</span></label><br>
                        <label class = "left-label">THREAT DESCRIPTION: <span class = "right-label">VERY LESS</span></label><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>@foreach($coordinates as $cd)
            <p>{{$cd['site_coordinates1']}}</p>

            @endforeach
            </div>
        <div id="map"></div>
        </div>
    </div>
</div>
<footer style="background-color: white; padding: 20px; text-align: center; height : 75px;">
    <p>&copy; IMAP</p>
</footer>

<!-- javascript -->
<!-- new -->
<script>
    var myData = @json($coordinates);
</script>
<script>
    var map = L.map('map').setView([33.513417, 73.146579], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    console.log(myData)
    // For example, if myData is an array of coordinates, you can loop through it and create markers on the map.
    myData.forEach(function(coordinate) {
        var latitude = parseFloat(coordinate[0]);
        var longitude = parseFloat(coordinate[1]);

        if (!isNaN(latitude) && !isNaN(longitude)) {
            var marker = L.marker([latitude, longitude]).addTo(map);
            marker.bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude).openPopup();

            // Add error handling
            marker.on('error', function (e) {
                console.error('Error creating marker:', e.error);
            });

        }
    });
</script>


<!-- old -->
<!-- <script>
       var latitude = 33.513417;
        var longitude = 73.146579;

        var map = L.map('map').setView([latitude, longitude], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude)
            .openPopup();
    </script> -->

<script>
    document.getElementById('toggleBtn').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv');
        var toggleBtnIcon = document.querySelector('#toggleBtn i');
        var toggleBtn = document.querySelector('#toggleBtn');
        const div = document.querySelector('#basic_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
           
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
            div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentdiv.style.setProperty('border','1px solid #dfdfdf', 'important');

        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn1').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv1');
        var toggleBtnIcon = document.querySelector('#toggleBtn1 i');
        var toggleBtn = document.querySelector('#toggleBtn1'); 
        const div = document.querySelector('#additional_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
            div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn2').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv2');
        var toggleBtnIcon = document.querySelector('#toggleBtn2 i');
        var toggleBtn = document.querySelector('#toggleBtn2');
        const div = document.querySelector('#vessel_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
             div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn3').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv3');
        var toggleBtnIcon = document.querySelector('#toggleBtn3 i');
        var toggleBtn = document.querySelector('#toggleBtn3');
        const div = document.querySelector('#built_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
            div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn4').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv4');
        var toggleBtnIcon = document.querySelector('#toggleBtn4 i');
        var toggleBtn = document.querySelector('#toggleBtn4');
        const div = document.querySelector('#aerial_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
            div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn5').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv5');
        var toggleBtnIcon = document.querySelector('#toggleBtn5 i');
        var toggleBtn = document.querySelector('#toggleBtn5');
        const div = document.querySelector('#cultural_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
            div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn6').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv6');
        var toggleBtnIcon = document.querySelector('#toggleBtn6 i');
        var toggleBtn = document.querySelector('#toggleBtn6');
        const div = document.querySelector('#site_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
            div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>

<script>
    document.getElementById('toggleBtn7').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv7');
        var toggleBtnIcon = document.querySelector('#toggleBtn7 i');
        var toggleBtn = document.querySelector('#toggleBtn7');
        const div = document.querySelector('#condition_bar');
        var labels = document.getElementsByClassName("left-label");
        var card = document.getElementsByClassName("card");
        const contentdiv = document.querySelector('#contentDiv');
       
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
            toggleBtn.style.setProperty('background-color','#134b86', 'important');
            toggleBtn.style.setProperty('border-color','#134b86', 'important');
            toggleBtn.style.setProperty('color','#FFFFFF', 'important');
             div.style.setProperty('border-top-right-radius', '16px', 'important');
            div.style.setProperty('border-top-left-radius', '16px', 'important');
            div.style.setProperty('background-color', '#134b86', 'important');
            div.style.setProperty('color', '#fff', 'important');
            for (var i = 0; i < labels.length; i++) {
                labels[i].style.setProperty('font-weight', '900', 'important');
            }
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','none', 'important');
            }
            contentDiv.style.setProperty('border','1px solid #dfdfdf', 'important');
           
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
            toggleBtn.style.setProperty('background-color','#ffffff', 'important');
            toggleBtn.style.setProperty('border-color','#ffffff', 'important');
            toggleBtn.style.setProperty('color','#CECECE', 'important');
            div.style.setProperty('background-color', 'white', 'important');
            div.style.setProperty('color', '#000', 'important');
            for (var i = 0; i < card.length; i++) {
                card[i].style.setProperty('border','1px solid #dfdfdf', 'important');
            }
        }
    });
</script>
