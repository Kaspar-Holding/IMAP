<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
</style>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-white w3-bar-block sidebar" style="width:50%">
  <div class="row">
    <div class="col-md-12">
      <a href="#" class="previous round">&#8249;</a> 
      <span class="">SECTION </span>
      
    </div>
  </div>

  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<!-- <div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>

<img src="img_car.jpg" alt="Car" style="width:100%">

<div class="w3-container">
<h2>Sidebar Navigation Example</h2>
<p>The sidebar with is set with "style="width:25%".</p>
<p>The left margin of the page content is set to the same value.</p>
</div>

</div> -->
      
</body>
</html>
