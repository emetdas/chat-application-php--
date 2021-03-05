<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
include 'header.php';
include 'php/config.php';
$sql = mysqli_query($con, "SELECT * FROM users WHERE 	unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
  $row = mysqli_fetch_assoc($sql);
}
?>

<body>
  <div class="wraper">
    <section class="users">
      <header>
        <div class="content">
          <img src="php/upload/<?php echo $row['image'] ; ?>" alt="profile Image" class="profile-img" />
          <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="logout.php" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search..." class="searchInput" />
        <button class="searchbtn"><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>
  </div>
  <script src="js/users.js"></script>
</body>

</html>