<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
   <title>Login</title>
</head>

<body style="background: url('<?php echo base_url(); ?>assets/img/bg.png') no-repeat;">

   <!-- Ustj -->
   <div class="ustj">
      <img class="top" src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
      <h1>Selamat Datang Di Sistem Informasi Absensi</h1>
   </div>
   <!-- ustj -->

   <!-- wrapper -->
   <div class="wrapper">
      <form action="<?php echo base_url(); ?>login/auth" method="post">
         <h1>Login</h1>
         <div class="input-box">
            <input type="text" placeholder="Username" required name="username">
            <i class='bx bxs-user'></i>
         </div>
         <div class="input-box">
            <input type="password" placeholder="Password" required name="password">
            <i class='bx bxs-lock-alt'></i>
         </div>
         <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label>
            <a href="#">Forgot Password ?</a>
         </div>
         <button type="submit" class="btn">Login</button>
      </form>
   </div>
   <!-- wrapper -->

</body>

</html>