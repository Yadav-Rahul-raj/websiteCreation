<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
?>
<html>
    <head>
        <title>Home page</title>
        <link rel="icon" href="images/my logo.jpg">
        <link rel="stylesheet" href="css/homestyle.css">
        <link rel="stylesheet" href="css/likestyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
    <!--div class="container">
    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
    </div-->
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
    <div class="file-sharing">
        
        <div id="feedback">
            <a href="mailto:rahulzx999@gmail.com">Feedback</a>
        </div>
        <h1>Welcome <?php echo $_SESSION['username']; ?>! </h1>
        <p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>Hello <?php echo $_SESSION['username']; ?> here you will find the complete tutorial code for the "LOGIN" page. On my youtube channel(get knowledge) you may have seen that I have used html, css, php and Javascript for making the login page also it was an 'Glassmorphism login page' so it is looking awesome. Don't worry guys if you also want to make "Glassmorphism Login Page" like me, you can now make as you are on the perfect webpage.</p><br>
        <p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>To make "Glassmorphism LOGIN Page" first of all you have to make one file in that only keep all HTML,PHP,CSS,JS code in that file, it would be better for you. Here below I have provided HTML code.</p>
        <h3 class="heading">login.php</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="login.php" download="login.php">
                <i class="fa fa-file"></i><span> login.php</span>
            </a>
            <br><br><br><p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>Here below the css file for "Glassmorphism LOGIN page" is given, here css file is added to HTML by External method. In future it is always good to make css file Externally linked with HTML because if in future if you want to change any style than it would be helped lots, you will not feel complicated.</p>

        <h3 class="heading">loginstyle.css</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="css/loginstyle.css" download="loginstyle.css">
                <i class="fa fa-file"></i><span> loginstyle.css</span>
            </a>
            <br><br><br><p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>To make LOGOUT Page here below the code of the LOGOUT page is given below. If you do not understand it then kindly visit the by Youtube Channel, Your  all doubt will be clear. <span style="color: red;">Note:</span>Here you will not need to style <i>"logout.php" </i> because it will directly bring you to <b>"login page".</b></p>

        <h3 class="heading">logout.php</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="logout.php" download="logout.php">
                <i class="fa fa-file"></i><span> logout.php</span>
            </a>
            <br><br><br><p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>Now to make user registration with MYSQL here below the code is given. If you do not understand it then kindly visit the by Youtube Channel, Your  all doubt will be clear.</p>

        <h3 class="heading">registration.php</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="registration.php" download="registration.php">
                <i class="fa fa-file"></i><span> registration.php</span>
            </a>

            <br><br><br><p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>Now to make registration page beautiful the code of css file is kept so kindly use of it and make your website beautiful and attractive.</p>

        <h3 class="heading">registyle.css</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="css/registyle.css" download="registyle.css">
                <i class="fa fa-file"></i><span> registyle.css</span>
            </a>

            <br><br><br><p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>What happen if your user got forget his/her password? Basically your user will hope that his password should new backuped or he/she should able to set new password. Am I Right? Therefore knowing to this problem here the code for <i>"forget.php"</i> is kept, due to help of this you will able to get back-up of your password as well as you will able to set new password with knowingly your's username or email or phone no. </p>

        <h3 class="heading">forget.php</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="forget.php" download="forget.php">
                <i class="fa fa-file"></i><span> forget.php</span>
            </a>

            <br><br><br><p style="font-weight:500; color: rgb(97, 56, 2);"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>Here below for making the forget page more attractive and beautiful, code of <i>"forgetstyle.css"</i> file is kept below.</p>

        <h3 class="heading">forgetstyle.css</h3>

        <p><i>Click on the file to download:</i><p>
            <a class="download-link" href="css/forgetstyle.css" download="forgetstyle.css">
                <i class="fa fa-file"></i><span> forgetstyle.css</span>
            </a>

            <br><br><br><p style="font-weight:600; font-size: 20px; font-family: 'Times New Roman',cursive;"><span style="font-size: 35px; font-weight: 900;color: red;">&#9758;</span>Hey <?php echo $_SESSION['username']; ?> I hope now you are able to make the complete login, logout, forget, registration page. If now also you are not able to built this page than you watch explaination video of this on my youtube channel, I am sure then your all doubt will be cleared.</p>
    </div>
    </section>
<!-- adding like and dislike button -->
<section class="dislik">
<h1 id="question">DO YOU LIKE "GET KNOWLEDGE" CHANNEL?</h1>
<button class="like-dislike" onclick="loadLikes()">Like</button><span></span>
<button class="like-dislike" onclick="loadDislikes()">Dislike</button>
<?php
$servername = "localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password,"live_likes");

$sql = "SELECT likes, dislike FROM likes";
$result = mysqli_query($conn, $sql);
echo "<br><p id='like'>Number of likes:".mysqli_fetch_assoc($result)["likes"]."</p>";
echo "<p id='dislike'>Number of dislikes:".mysqli_fetch_assoc($result)["dislike"]."</p>";
?>

<script>
function loadLikes(){
	var xhr = new XMLHttpRequest();
	
	xhr.open("get", "like.php", true);
	
	xhr.send();
	
	xhr.onload=function()
	{
		document.getElementById("like").innerHTML="Number of likes:"+this.responseText;
	}
}
</script>
<script>
	function loadDislikes(){
		var xhr = new XMLHttpRequest();
		
		xhr.open("get", "dislike.php", true);
		
		xhr.send();
		
		xhr.onload=function()
		{
			document.getElementById("dislike").innerHTML="Number of dislikes:"+this.responseText;
		}
	}
	</script>
    </section>

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