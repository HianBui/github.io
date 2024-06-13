<?php
include_once "part/header.php";
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatapp Realtime - Vinhweb</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="./assets/custom.css">
</head> -->
<body>
  <!-- <img class="character" src="./img/mario-background.png" alt="">
  <img class="character2" src="./img/toad.png" alt=""> -->
  <div class="wrapper">
    <section class="form signup">
      <header>Register</header>
      <form action="#">
        <div class="error-text"></div>

        <!-- name row -->
        <div class="name-details">
          <div class="field input">
            <label for="">Tên</label>
            <input type="text" name="fname" placeholder="Tên" autocomplete="off" required>
          </div>
          <div class="field input">
            <label for="">Họ</label>
            <input type="text" name="lname" placeholder="Họ" autocomplete="off" required>
          </div>
        </div>

        <div class="field input">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Nhập Email" autocomplete="off" required>
        </div>

        <div class="field input">
          <label for="">Mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="off" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field image">
          <label for="">Ảnh đại diện</label>
          <input type="file" name="image" accept="image/x-png,image/jpeg,image/jpg" required>
        </div>

        <div class="field button">
          <input type="submit" value="Bắt đầu Chat">
        </div>

      </form>
      <div class="link">Đã có tài khoản? <a class="linkLogin" href="login.php">Đăng nhập ngay</a></div>
    </section>
  </div>

  <script src="assets/password-event.js"></script>
  <script src="assets/signup.js"></script>
</body>
</html>