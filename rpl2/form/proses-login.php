<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'ajil@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'mamat') {
  die("Password salah!");
}
echo "Selamat {$email}, Anda Berhasil Login"
?>