<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Air Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('gudang/bootstrap/css/bootstrap.min.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url('gudang/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('gudang/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #008080;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #008080;
      font-size: 50px;
  }
  .logo {
      color: #008080;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #008080;
  }
  .carousel-indicators li {
      border-color: #008080;
  }
  .carousel-indicators li.active {
      background-color: #008080;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #008080; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #008080;
      background-color: #fff !important;
      color: #008080;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #008080 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #008080;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #008080;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #008080 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #008080;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-plane"></span> Air Ticket</a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Booking ticket</h1> 
  <p>We plan your trip, best available choice in the world</p> 
  <form class="form-inline" action="<?php echo base_url() ?>index.php/search" method="GET">
    <div class="form-group">
      <select class="form-control" name="rute_from">
        <option value="">Dari</option>
        <option value="purwokerto">Purwokerto</option>
      </select>
    </div>
    <div class="form-group">
    	<select class="form-control" name="rute_to" title="">
    		<option value="">Ke</option>
        <option value="jakarta">Jakarta</option>
    		<option value="semarang">Semarang</option>
    		<option value="bandung">Bandung</option>
    		<option value="surabaya">Surabaya</option>
        <option value="yogyakarta">Yogyakarta</option>
    		<option value="jepara">Jepara</option>
    	</select>
    </div>
    <div class="form-group">
      <input type="date" class="form-control" name="depart_time" value="" placeholder="">
    </div>
    <div class="form-group">
      <select class="form-control" name="totalpassengers">
        <option value="">Jumlah</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Sign in</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<!-- <div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div> -->

<!-- Container (Services Section) -->
<!-- <div id="services" class="container-fluid text-center bg-grey">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div> -->

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url('gudang/img/jogja.jpg') ?>" alt="Yogyakarta" width="400" height="300">
        <p><strong>Yogyakarta</strong></p>
        <p>Yogyakarta, setingkat provinsi di Indonesia</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url('gudang/img/jakarta.jpg') ?>" alt="Jakarta" width="400" height="300">
        <p><strong>Jakarta</strong></p>
        <p>Jakarta, ibu kota negara dan kota terbesar di Indonesia</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url('gudang/img/surabaya.jpg') ?>" alt="Surabaya" width="400" height="300">
        <p><strong>Surabaya</strong></p>
        <p>Surabaya, ibu kota Provinsi Jawa Timur</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Perusahaan ini adalah yang terbaik. Saya sangat senang dengan hasilnya!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"Satu kata... WOW!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Mungkinkah saya... lebih senang dengan perusahaan ini?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Air Asia</h1>
        </div>
        <div class="panel-body">
          <p><strong>B002</strong> Code</p>
          <p><strong>80</strong> Seat quantity</p>
          <p><strong>Purwokerto</strong> To</p>
          <p><strong>Jakarta - Semarang - Bandung - Yogyakarta</strong></p>
          <p>Maskapai penerbangan cepat, mudah, dan nyaman</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per ticket</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Garuda Indonesia</h1>
        </div>
        <div class="panel-body">
          <p><strong>A001</strong> Code</p>
          <p><strong>90</strong> Seat quantity</p>
          <p><strong>Purwokerto</strong> To</p>
          <p><strong>Jakarta - Semarang - Bandung - Surabaya</strong></p>
          <p>Maskapai penerbangan nomor .1 di Indonesia</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per ticket</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Lion Air</h1>
        </div>
        <div class="panel-body">
          <p><strong>B003</strong> Code</p>
          <p><strong>80</strong> Seat Quantity</p>
          <p><strong>Purwokerto</strong> To</p>
          <p><strong>Jakarta - Semarang - Bandung</strong></p>
          <p>Maskapai penerbangan berorientasi objek</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per ticket</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<!-- <div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Add Google Maps -->
<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>