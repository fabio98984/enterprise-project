<html>
  <head>
      <title>Apprenticeship Program</title>
      <link rel="stylesheet" href="style.css">
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
        <form id="login" class="input-group">
          <input type="text" name="username" class="input-field" placeholder="Username">
          <input type="password" name="password" class="input-field" placeholder="Enter Password"></br></br>
          <div class="user-selection">
              <label class="label" for="userType">I am a: </label></br>
                <input type="radio" name="userType" value="Student" class="custom-radio">👥 Student</br>
                <input type="radio" name="userType" value="Tutor" class="custom-radio">👥 Tutor</br>
                <input type="radio" name="userType" value="Employer" class="custom-radio">👥 Employer</br>
          </div>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" class="submit-btn"> Login in</button>
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
