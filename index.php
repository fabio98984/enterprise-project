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
          <input type="text" class="input-field" placeholder="User ID">
          <input type="text" class="input-field" placeholder="Enter Password">
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" class="submit-btn"> Login in</button>
        </form>
        <form id="register" class="input-group">
          <input type="text" class="input-field" placeholder="User ID">
          <input type="email" class="input-field" placeholder="Email ID">
          <input type="text" class="input-field" placeholder="Enter Password">
          <input type="checkbox" class="check-box"><span>Agree with the terms and conditions</span>
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
