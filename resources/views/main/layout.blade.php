
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Karachi</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/mazar-e-quaid (1).png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../main/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../main/images/mazar-e-quaid (1).png">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
     <a href="index.html" class="logo" style="margin-top: 1%;"><span>xplore</span>Karachi</a> 
 
    <nav class="navbar">
        <a href="#home">Home</a>
              
<div style="padding:15px;" class="dropdown">
    <button onmouseover="myFunction()" class="dropbtn">places <i class="fa fa-angle-down text-white"></i></button></span>
    <div id="myDropdown"  class="dropdown-content">
        <a href="html/hotel.html">Hotels</a>
        <a href="html/Restaurant.html">Restaurants</a>
        <a href="html/Malls.html">Malls</a>
        <a href="html/historical.html">Historicals</a>

        <a href="html/Sea Sides.html">Sea Sides</a>
        <a href="html/parks.html"> Parks</a>
    </div>
  </div>
 
        <a href="html/contact.html">Contact us</a>
        <a href="./html/aboutus.html">About </a>
     
        <a href="https://www.facebook.com/ExploreKarachi007/" target="_blank"><i class="fab fa-facebook" style="font-size: 25px; "></i></a>
        <a href="https://www.instagram.com/xplore_karachi/"target="_blank"><i class="fab fa-instagram" style="font-size: 25px; "></i></a>
        <a href="https://twitter.com/explore_karachi?lang=en"target="_blank"><i class="fab fa-twitter" style="font-size: 25px;"></i></a>


    </nav>


</header>

<!-- header section ends -->



<!-- home section starts  -->

@yield("main")

<!-- home section end  -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about </h3>
            <p>Karachi Is The Largest City In Pakistan And The Twelfth-Largest City In The World. It Is The Capital Of The Pakistani Province Of Sindh. Ranked As A Beta-Global City, It Is Pakistan's Premier Industrial And Financial Centre, With An Estimated GDP Of $164 Billion (PPP) As Of 2019</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Karachi</a>
            <a href="#">Lahore</a>
            <a href="#">Islamabad</a>
            <a href="#">Sialkot</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.html">Home</a>
            <a href="html/hotel.html">Places</a>
            <a href="html/contact.html">Contact</a>
            <a href="html/aboutus.html">About</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/ExploreKarachi007/" target="_blank"><i class="fab fa-facebook" style="font-size: 20px; "></i>    facebook
            </a>
            <a href="https://www.instagram.com/xplore_karachi/" target="_blank"><i class="fab fa-instagram" style="font-size: 20px; "></i>      instagram </a>
            <a href="https://twitter.com/explore_karachi?lang=en" target="_blank"><i class="fab fa-twitter" style="font-size: 20px;"></i> twitter</a>
            <a href="https://pk.linkedin.com/in/explore-advertising-packaging-b6205245" target="_blank"><i class="fab fa-linkedin-in" style="font-size: 20px; "></i>    linkedin</a>
        </div>

    </div>

    <h1 class="credit" style="font-size: 15px;"> created by <span> Xplore
        karachi </span> | all rights reserved! </h1>

</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>


<script>

    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    function my() {
      document.getElementById("myDrop").classList.toggle("show");
    }
    
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>














<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../main/script.js"></script>

</body>
</html>