<?php include 'header.php'; ?>

<body>
  <div class="wraper">
    <section class="form signup">
      <h2>Realtime chat app</h2>
      <form action="#" enctype="multipart/form-data" method="POST" autocomplete="off">
        <div class="error-text">This is error message</div>
        <div class="name-details">
          <div class="form-control input">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your First Name" required />
          </div>
          <div class="form-control input">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required />
          </div>
        </div>
        <div class="form-control input">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your Email Address" required />
        </div>
        <div class="form-control input">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your New Password" required />
          <i class="fas fa-eye"></i>
        </div>
        <div class="form-control">
          <label for="image">Select Image</label>
          <input type="file" name="image" required />
        </div>
        <div class="form-control button">
          <input type="submit" name="signup" value="Signup" />
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
    </section>
  </div>
  <script src="js/password-show-and-hide.js"></script>
  <script src="js/signup.js"></script>
</body>

</html>