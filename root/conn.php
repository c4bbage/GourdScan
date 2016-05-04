<?php
$conn = mysqli_connect("127.0.0.1", 'root', 'usbw');
mysqli_select_db( $conn，"pscan");
session_start();
if (@$_GET['hash']) {
    $_SESSION['hash'] = mysqli_real_escape_string($_GET['hash']);
}
$hash = @$_SESSION['hash'];
?>