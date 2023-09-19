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
  <link rel="stylesheet" href="ui/css/app.css">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

    
    <script src="node_modules/leaflet/dist/leaflet.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>

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
.btn-secondary.focus, .btn-secondary:focus {
    color: #fff;
    background-color: #134b86;
    border-color: #134b86;
    box-shadow: 0 0 0 0.2rem rgba(130,138,145,.5);
}
.btn-secondary:hover {
    color: #fff;
    background-color: #134b86;
    border-color: #134b86;
}
.btn-secondary.focus, .btn-secondary:focus {
   
   box-shadow: 0 0 0 0.2rem rgb(0 0 0 / 0%) !important;
}
.form-field {
    background-color: #F5F5F5 !important;
    height: 39px;
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
.select-margin{
  margin-bottom:10px;
  min-width:100%;
  border-radius:8px;
  border-color:#EFEFEF;
}
/** For Large Screen */
@media screen and (min-width: 1440px){
  .button-primary {
  margin-left: 248px !important;
  width : 27% !important;
  }
  .form-field{
    
    
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
    background-color:#134b86 !important;
    padding: 12px 20px 10px 32px !important;
    color: white !important;
    font-size: 15px !important;
    border-top-right-radius: 26px !important;
    border-top-left-radius: 26px !important;
    text-transform: uppercase !important;
    font-weight : 200px !important;

}
.card{
    border : none !important;
    /* margin-left : 20px; */
    margin-top : 30px !important;
}
.btn-secondary{
    color: #fff;
    background-color: #134b86;
    border-color: #134b86;
    /* padding-top : 0px !important; */
    margin-top : -6px;

}
.row-card{
    margin-top : 120px !important;
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
/* this page */
.s_label{
  margin-left : 15px !important;
  font-size : 16px !important;
  width : 45% !important;
}
.w-input{
  min-width : 100% !important;
  margin-left : 0px !important;
  border-radius:8px;
}
#map{
  width: 793px; 
  height: 385px; 
  border-radius : 20px;
  position : relative;
  top : 23px;
}
.filter{
    margin: 10px;
    border: solid;
    border-radius: 8px;
    border-width: 1px;
    border-color: #EFEFEF;
    margin-left: 20px;

}
.results{
    border: solid;
    border-radius: 10px;
    border-width: 1px;
    border-color: #EFEFEF;
    margin-bottom:10px;
    padding:5px;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 16px 0px;
}

@media (min-width: 1440px) {
    /* Styles for large desktops */
    .navbar {
    height: 90px !important;
    background-color:#134b86 !important;
    display: flex;
    gap: 2em;
  }
}
@media (min-width: 1280px) and (max-width: 1439px) {
    /* Styles for small desktops and laptops */
    .navbar {
    height: 90px !important;
    background-color:#134b86 !important;
    display: flex;
    gap: 2em;
  }
}
@media (min-width: 1024px) and (max-width: 1279px) {
    /* Styles for tablets */
    .navbar {
    height: 90px !important;
    background-color:#134b86 !important;
    display: flex;
    gap: 2em;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
    /* Styles for mobile phones (landscape) */
    .navbar {
    height: 90px !important;
    background-color:#134b86 !important;
    display: flex;
    gap: 2em;
  }
}
@media (max-width: 767px) {
    /* Styles for mobile phones (portrait) */
  .navbar {
    height: 90px !important;
    background-color:#134b86 !important;
    display: flex;
    gap: 2em;
  }
}
.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    background-color:none !important;
    /* Remove background color and opacity */
    /* opacity: 0.7; */
    /* Remove overflow property */
    /* overflow: auto; */
}


.popup-content {
    background-color: #fff;
    margin: 21% auto;
    padding: 20px;
    border: 1px solid #EFEFEF;
    /* width: 80%; */
    max-width: 97%;
    border-radius: 5px;
    position: relative;
    z-index: 1001;
}
.popup-close{
    float: right;
    font-size: 19px;
    margin-bottom: 20px;
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
  <a href="sign_up" class = "navLink">SIGN UP </a> <a href="#!" class = "navLink" style="position: relative;
    right: 90px;
    top: 16px;">
  </a>

</div>
<head>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></head>
<div class="container card-style">
<h5 class="page-heading" style = "right : 0px !important; left :20px ; top : 30px !important;">
                        <!-- <a href="{{ route('add_form') }}">
                            <img src="images/back-button.png" loading="lazy" alt="">
                        </a> -->
                        INVENTORY OF MARITIME ARCHAEOLOGY IN PAKISTAN
                    </h5>
        

    <div class="row row-card" style = "width : 1300px !important; margin-top:30px !important;">
        <div class="col-md-5" style = "margin-top:12px">
            <div class="row filter">
                <div class="col-md-12">
               
                    <div class="card">
                        <div class="card-header blue_bar" style = "border-radius:9px !important;">
                        FILTERS
                            <button id="toggleBtn" class="btn btn-sm btn-secondary float-right">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <form class=""  action="{{route('search_results')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                        <div id="contentDiv" class="card-body" style="display: none;">
                            <div class = "row">
                            <!-- <label class = "s_label" for="text1">ID:</label> -->
                            <input type="text" class = "form-field w-input" id="text1" name="imap_id" placeholder="Search ID"><br>
                            
                            </div>
                            <div class = "row">
                            <!-- <label class = "s_label" for="text2">Search:</label> -->
                            <input type="text" id="text2" class = "form-field w-input" name="keyword" placeholder="Search Keyword"><br>
                            </div>
                            
                            <div class = "row">
                            <!-- <label class = "s_label" for="dropdown1">Verified:</label> -->
                            <select class="select-margin" id="dropdown1" form-field w-input name="verified" class="select-margin">
                                <option value="">Select Verified</option>
                                <option value="1">True</option>
                                <option value="0">False</option>
                               
                            </select><br>
                            </div>
                            
                            <div class = "row">
                            <!-- <label class = "s_label" for="dropdown2">Site Classification:</label> -->
                            <select class="select-margin" id="dropdown2" name="site_classification">
                            <option value="">Select Site Classification</option>
                              @foreach($site_classification as $sc)
                                <option value="{{$sc['site_classification']}}">{{$sc->site_classification}}</option>
                              @endforeach
                            </select><br>
                            </div>
                            
                            <div class = "row">
                            <!-- <label class = "s_label" for="dropdown3">Cultural Period:</label> -->
                            <select class="select-margin" id="dropdown3" name="cultural">
                            <option value="">Select Cultural Period</option>
                              @foreach($cultural as $c)
                              @if ($c['cultural_period_major'] !== '')
                                  <option value="{{ $c['cultural_period_major'] }}">{{ $c['cultural_period_major'] }}</option>
                              @endif
                              @endforeach
                            </select><br>
                            </div>
                            
                            <div class = "row">
                            <!-- <label class = "s_label" for="dropdown4">Site Type:</label> -->
                            <select class="select-margin" id="dropdown4" name="site_interpretation">
                            <option value="">Select Site Type</option>
                              @foreach($site_interpretation as $si)
                                @if ($si['site_interpretation'] !== '')
                                <option value="{{$si['site_interpretation']}}">{{$si['site_interpretation']}}</option>
                                @endif
                              @endforeach
                            </select><br> 
                            </div>
                            <div class = "row">
                            <!-- <label class = "s_label" for="dropdown4">District:</label> -->
                            <select class="select-margin" id="dropdown4" name="district">
                            <option value="">Select District</option>
                              @foreach($district as $d)
                                @if ($d['district'] !== '')
                                <option value="{{$d['district']}}">{{$d['district']}}</option>
                                @endif
                              @endforeach
                            </select><br> 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header blue_bar" style = "border-radius:9px !important;">
                        Results
                            <button type="button" id="toggleBtn2" class="btn btn-sm btn-secondary float-right">
                              <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- POP UP -->
                        <div id="popup" class="popup">
                            <div class="popup-content">
                                <span class="popup-close" id="closeBtn">&times;</span>
                                
                                <table id = "mytable">
                                    <!-- Add your table content here -->
                                    <thead style="
                                          background-color: #134b86;
                                          color: #ffffff;
                                      ">
                                        <tr>
                                            <th>IMAP ID</th>
                                            <th>Type of UCH</th>
                                            <th>Site Category</th>
                                            <th>UCH Name</th>
                                            <th>Year site established</th>
                                            <th>Jurisdiction</th>
                                            <!-- Add more table headers as needed -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($site_classification_result))
                                      @foreach($site_classification_result as $sc_r)
                                        <tr>
                                            <td>{{$sc_r->imap_id}}</td>
                                            <td> {{$sc_r->site_description}}</td>
                                            <td>Data 2</td>
                                            <td>Data 2</td>
                                            <td>Data 2</td>
                                            <td>Data 2</td>
                                      @endforeach
                                    @endif
                                            <!-- Add more table rows and data as needed -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- End POP UP -->
                        <div id="contentDiv" class="card-body">
                        @if(!empty($site_classification_result))
                                  @foreach($site_classification_result as $sc_r)
                            <div class = "results">
                                
                              
                                  
                                  <h3 style = "font-size: 17px; font-weight: 600;">Site Classification</h3>
                                  
                                            {{$sc_r->site_description}}
                                
                                
                                <br><br>
                                <!-- <a href = "show_report" style = "color: #ffffff;padding: 13px; background-color: #134b86; border-radius: 9px; font-size: 13px;"> View Report</a> -->
                  

                            </div>
                                 @endforeach
                            @endif
                        </div>
                        <div style="margin-top:80px;">
                        <a href = "search_results" style = "float: left;color: #000000;padding: 15px 70px;background-color: #efefef;border-radius: 9px;font-size: 15px;"> RESET</a>
                        <button type="submit" style = "float:right;color: #ffffff;padding: 15px 70px;background-color: #134b86;border-radius: 9px;font-size: 15px;"> Search </button>
                        </div>
                    </div>
                  </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-4">

        <div id="map"></div>
        </div>
    </div>
</div>

<script>
    var mapData = @json($coordinates);
    console.log(mapData);
</script>
<script>
    var map = L.map('map').setView([33.513417, 73.146579], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: ''
    }).addTo(map);

    mapData.forEach(function(coordinate) {
        // console.log(coordinate['site_coordinates1'])
        var data = coordinate['site_coordinates1'];
        // Use regular expressions to extract latitude and longitude values
        var regex = /\{([\d.-]+), ([\d.-]+)\}/;
        var match = data.match(regex);

        if (match) {
            var latitude = parseFloat(match[1]);
            var longitude = parseFloat(match[2]);

            if (!isNaN(latitude) && !isNaN(longitude)) {
                var marker = L.marker([latitude, longitude]).addTo(map);
                marker.bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude).openPopup();

                // Add error handling
                marker.on('error', function (e) {
                    console.error('Error creating marker:', e.error);
                });

            }

        } else {
            console.error('Data does not match expected format.');
        }
    });
</script>

<script>
    document.getElementById('toggleBtn').addEventListener('click', function() {
        var contentDiv = document.getElementById('contentDiv');
        var toggleBtnIcon = document.querySelector('#toggleBtn i');
        
        if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
            toggleBtnIcon.classList.remove('fa-chevron-down');
            toggleBtnIcon.classList.add('fa-chevron-up');
        } else {
            contentDiv.style.display = 'none';
            toggleBtnIcon.classList.remove('fa-chevron-up');
            toggleBtnIcon.classList.add('fa-chevron-down');
        }
    });
</script>
<script>
    // Get the button element
    var toggleBtn = document.getElementById("toggleBtn2");

    // Get the popup element
    var popup = document.getElementById("popup");

    // Get the close button element
    var closeBtn = document.getElementById("closeBtn");

    // Add a click event listener to the button
    toggleBtn.addEventListener("click", function () {
        popup.style.display = "block";
    });

    // Add a click event listener to the close button
    closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
    });
</script>
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>