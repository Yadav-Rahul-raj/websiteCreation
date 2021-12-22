<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="icon" href="images/my logo.jpg">
    <link rel="stylesheet" href="css/registyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration.php" method="post" onsubmit ="return FormValidate()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="name" name="username" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" id='phone' placeholder="Enter your number" required>
            <span id= "messageforphone" style="color:red"> </span> <br><br>
          </div>
          <div class="input-box">
            <span class="details">Birth Date</span>
            <input type="date" name="birthday" placeholder="Enter your D.O.B" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id='pswd' placeholder="password" required> 
            <span id= "message" style="color:red"> </span> <br><br>  
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password" id='pswd1' placeholder="Confirm password" required>  
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-3" value="other">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <p>Already have an account:<a href="login.php"  style="color:red;text-decoration: none;"><b> Login</b></a></p>
        <p style="color:red;">*Your Name will be only username</p>
        
        <script>
function FormValidate() {  
  var phone = document.getElementById("phone").value;
  var pw = document.getElementById("pswd").value;  
  var pw1 =document.getElementById("pswd1").value; 
  //check password and confirm password are same or not  
  if(phone.length != 10){
      document.getElementById("messageforphone").innerHTML ="Please enter the valid Phone number.";
              return false;
            }
  if(pw1!=pw){
    alert("Password and Confirm Password are not same"); 
     return false;  
  }
  else{
    //check empty password field
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } 
}
}
</script>  
      </form>
    </div>
  </div>
</body>
</html>
