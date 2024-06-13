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
  <div class="wrapper">
    <section class="form login">
      <header>Login</header>
      <form action="#">
        <div class="error-text"></div>


        <div class="field input">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="Nhập Email" required>
        </div>

        
        <div class="field input">
          <label for="">Mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field button">
          <input type="submit" value="Bắt đầu Chat">
        </div>

      </form>
      <div class="link">Chưa có tài khoản? <a class="linkLogin" href="index.php">Đăng ký ngay</a></div>
    </section>
  </div>

  <script src="assets/password-event.js"></script>
  <script src="assets/login.js"></script>
</body>
</html>