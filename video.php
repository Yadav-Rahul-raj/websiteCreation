<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/my logo.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/videostyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Video Gallery</title>
</head>
<body>
    <section id="header">
        <div class="option">
            <p class="right-text">Get knowledge</p>
            <span><i class="fa fa-phone"></i><a href="tel:1860"> 1860</a>
                    <a href="logout.php">| LOGOUT</a></span>
        </div>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Menubar &#x25BC</button>
            
            <div id="myDropdown" class="dropdown-content">
                <a href="home.php">Home</a>
                <a href="video.php">Video Gallery</a>
                <a href="image.php">Image Gallery</a>
            </div>
          </div>
          <h1 style="color: rgb(177, 2, 2);padding: 15px;text-align: center;">Video Gallery</h1>
    <section>
        
        <video id="slider" autoplay muted loop> <!-- change utoplay : autoplay          -->
            <source src="videos/neonlight.mp4" type="video/mp4"><!--  remove muted to play sound-->
        </video>
        <ul class="navigation">
            <li onclick="videoUrl('videos/barber.mp4')"><img src="images/barber.PNG"></li>
            <li onclick="videoUrl('videos/bgchange.mp4')"><img src="images/bgcolorchange.PNG"></li>
            <li onclick="videoUrl('videos/calc.mp4')"><img src="images/calculator.PNG"></li>
            <li onclick="videoUrl('videos/calender.mp4')"><img src="images/calendar.PNG"></li>
            <li onclick="videoUrl('videos/cards.mp4')"><img src="images/glassmorphism.PNG"></li>
            <li onclick="videoUrl('videos/carmoving.mp4')"><img src="images/carmoving.PNG"></li>
            <li onclick="videoUrl('videos/darktheme.mp4')"><img src="images/darktheme.PNG"></li>
            <li onclick="videoUrl('videos/exercise.mp4')"><img src="images/exercise.PNG"></li>
            <!-- <li onclick="videoUrl('videos/neonlight.mp4')"><img src="images/neonlight.PNG"></li> -->
            <li onclick="videoUrl('videos/railway.mp4')"><img src="images/railway.PNG"></li>
        </ul>
    </section>
    <script>
        function videoUrl(Justforchangingvideo){
            document.getElementById("slider").src =Justforchangingvideo ;
        }
    </script>

    <script>//-----------------for the dropdown list-----------------//
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
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
</body>
</html>