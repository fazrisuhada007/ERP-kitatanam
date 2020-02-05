<?php
//Proteksi halaman admin dengan fungsi cek login yang ada di login library
$this->simple_login->cek_login();
//Menggabungkan semua bagian layout jadi satu
require_once('header.php');
require_once('content.php');
require_once('footer.php');
?>