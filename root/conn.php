<?php
$conn = mysqli_connect("127.0.0.1:3307", 'root', 'usbw');
mysqli_select_db("pscan", $conn);
session_start();
if (@$_GET['hash']) {
    $_SESSION['hash'] = mysqli_real_escape_string($_GET['hash']);
}
$hash = @$_SESSION['hash'];
?>