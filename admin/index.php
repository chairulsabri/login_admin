<!DOCTYPE html>
<html>
<head>
 <title>Hello admin</title>
</head>
<body>
 <h2> Ini Halaman Index Admin</h2>
 
 <br/>
 
 <!-- cek apakah sudah login -->
  <?php
 session_start();
 if($_SESSION['status']!="login"){
 header("location:../index.php?pesan=belum_login");
 }
 ?>
 
 <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
 <br/>
 <br/>
 
 <a href="logout.php">LOGOUT</a>
 
 
</body>
</html>