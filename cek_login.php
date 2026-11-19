<?php
$input_user=$_POST['user'];
$input_pass=$_POST['pass'];

if($input_user=="admin"&&$input_pass=="rpl123") {
    echo"<h1 style='color:green;text-align:center;'>LOGIN BERHASIL!</h1>";
    echo"<p style='text-align:center;'>Selamat kamu berhasil.</p>";
} else {
    echo"<h1 style='color:red;text-align:center;'>LOGIN GAGAL!</h1>";
    echo"<p style='text-align:center;'>Yahh User atau Pass salah.</p>";
    echo"<center><a href='login.php'>Coba Lagi</a></center>";
}
?>