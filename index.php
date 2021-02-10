<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "enterprisedb");
$msg = "";

if (isset($_POST['login'])) {
    // Escape user inputs for security
    $username = $_POST['username1'];
    $password = $_POST['password'];
    $password = sha1($password);
    $usertype = $_POST['userType'];

    // Attempt insert query execution
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND user_type ='$usertype'";

    if(mysqli_query($link, $sql)==){
      header("location:student.php");
    }
    else if(){
      header("location:tutor-area.php");
    }
    else if(){
      header("location:employer-area.php");
    }
    else{
      $msg = "Username or Password are incorrect!";
    }
}
// Close connection
mysqli_close($mysqli);
?>
<html>
  <head>
      <title>Apprenticeship Program</title>
      <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class='social-icons'>
          <img src="img/fb.png">
          <img src="img/tw.png">
          <img src="img/gp.png">
        </div>
        <form id="login" method="post"  action="" class="input-group">
          <input type="text" name="username1" class="input-field" placeholder="Username">
          <input type="password" name="password" class="input-field" placeholder="Enter Password"></br></br>
          <div class="user-selection">
              <label class="label" for="userType">I am a: </label></br>
                <input type="radio" name="userType" value="Student" class="custom-radio">👥 Student</br>
                <input type="radio" name="userType" value="Tutor" class="custom-radio">👥 Tutor</br>
                <input type="radio" name="userType" value="Employer" class="custom-radio">👥 Employer</br>
          </div>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" class="submit-btn" name="login"> Login in</button>
        </form>
        <form id="register" action="adduser.php" method="post" class="input-group">
          <input type="text" name="username" class="input-field" placeholder="Username">
          <input type="email" name="email" class="input-field" placeholder="Email">
          <input type="password" name="password" class="input-field" placeholder="Enter Password"></br>
          <div class="user-selection">
              <label class="label" for="userType">I am a: </label></br>
                <input type="radio" name="userType" value="Student" class="custom-radio">👥 Student</br>
                <input type="radio" name="userType" value="Tutor" class="custom-radio">👥 Tutor</br>
                <input type="radio" name="userType" value="Employer" class="custom-radio">👥 Employer</br></br>
          </div>
          <button type="submit" class="submit-btn"> Register</button>
        </form>
      </div>
    </div>
    <script>
      var x = document.getElementById('login');
      var y = document.getElementById('register');
      var z = document.getElementById('btn');

      function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
      }
      function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
      }

    </script>
  </body>
</html>
