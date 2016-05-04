<form method='POST'>
    <input type='text' name='c'>
    <submit>
</form>
<?php

$conn = mysqli_connect("127.0.0.1", 'root', 'root');
mysqli_select_db("pscan", $conn);
$q = mysqli_query("select * from mysql.user where 1={$_POST['c']}", $conn);
if ($_COOKIE['a']) {
    $q = mysqli_query("select * from mysql.user where 1={$_POST['c']}", $conn);
    while ($row = mysqli_fetch_array($q)) {
        foreach ($row as $qq) {
            echo $qq . "<br>";
        }
    }
}

?>