<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
include 'header.php';
include 'php/config.php';
$user_id = mysqli_real_escape_string($con,$_GET['user_id']);
$sql = mysqli_query($con, "SELECT * FROM users WHERE 	unique_id = {$user_id}");
if (mysqli_num_rows($sql) > 0) {
  $row = mysqli_fetch_assoc($sql);
}
?>
<body>
  <div class="wraper">
    <section class="chat-area">
      <header>
        <a href="user.php" class="back-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
        <img src="php/upload/<?php echo $row['image'] ; ?>" alt="profile Image" class="profile-img" />
          <div class="details">
            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
      </header>
      <div class="chat-box">
       
      </div>
      <form action="#" class="typing-area" autocomplete="off">
      <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
      <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" class="message" name="message" placeholder="Type the massege here..">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
  <script src="js/chat.js"></script>
</body>
</html>