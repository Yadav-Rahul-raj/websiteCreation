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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="css/imagestyle.css">
    <!--link rel="stylesheet" href="lightbox.min.css">// These are not working properly
    <script src="lightbox-plus-jquery.min.js"></script--> <!--Here the downloaded jquery not working properly so use online cdn.js-->
    <title>Image Gallery</title>
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
    <h1>Image Gallery</h1>
    <div class="gallery">
        <a href="images/img1.jpg" data-lightbox="photos" data-title="THIS IS AN APPLE"><img src="images/img1.jpg"></a>
        <a href="images/img2.jpg" data-lightbox="photos" data-title="THIS IS CUP"><img src="images/img2.jpg"></a>
        <a href="images/img3.jpg" data-lightbox="photos" data-title="THIS IS HOME"><img src="images/img3.jpg"></a>
        <a href="images/img4.jpg" data-lightbox="photos" data-title="THIS IS CREATIVE DESIGN"><img src="images/img4.jpg"></a>
        <a href="images/img5.jpg" data-lightbox="photos" data-title="THIS IS SHADE DRAWING"><img src="images/img5.jpg"></a>
        <a href="images/img6.jpg" data-lightbox="photos" data-title="THIS IS PEN DESIGN"><img src="images/img6.jpg"></a>
        <a href="images/img7.jpg" data-lightbox="photos" data-title="THIS IS ART OF WOMEN WITH POT"><img src="images/img7.jpg"></a>
        <a href="images/img8.jpg" data-lightbox="photos" data-title="THIS IS ART OF COMBING HAIR"><img src="images/img8.jpg"></a>
        <a href="images/img9.jpg" data-lightbox="photos" data-title="THIS IS SHEEPHARD"><img src="images/img9.jpg"></a>
        <a href="images/img10.jpg" data-lightbox="photos" data-title="THIS IS CREATIVE ART"><img src="images/img10.jpg"></a>
        <a href="images/my logo.jpg" data-lightbox="photos" data-title="THIS IS LOGO OF GET KNOWLEDGE"><img src="images/my logo.jpg"></a>
        <a href="images/krishna.jpg" data-lightbox="photos" data-title="MAKHAN CHOR KRISHNA"><img src="images/krishna.jpg"></a>
        <a href="images/ganesh.jpg" data-lightbox="photos" data-title="SAB K BAAPA"><img src="images/ganesh.jpg"></a>
        <a href="images/nehru.jpg" data-lightbox="photos" data-title="CHILDREN LOVEING NEHRU"><img src="images/nehru.jpg"></a>
        <a href="images/button.png" data-lightbox="photos" data-title="GOLDEN LOGO"><img src="images/button.png"></a>
    </div>

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
              if (openDropdown.classList.contains('show')) {z
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
</body>
</html>