<?php include 'header.php';?>
  <body>
    <div class="wraper">
      <section class="form login">
        <h2>Realtime chat app</h2>
        <form action="#" autocomplete="off" method="POST">
          <div class="error-text">This is error message</div>
          <div class="form-control input">
            <label for="email">Email Address</label>
            <input
              type="email"
              id="email"
              placeholder="Enter your Email Address"
              name="email" 
              required
            />
          </div>
          <div class="form-control input">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              placeholder="Enter your Password"
              name="password" 
              required
            />
            <i class="fas fa-key"></i>
          </div>
          <div class="form-control button">
            <input type="submit" name="login" value="Login" />
          </div>
        </form>
        <div class="link">Not you signed up? <a href="index.php">Sign up</a></div>
      </section>
    </div>
    <script src="js/password-show-and-hide.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
