<?php
$host ="localhost";
$uname = "root";
$pwd = '';
$db_name = "bt_web";
$conn = mysqli_connect($host, $uname, $pwd, $db_name);
//var_dump($conn); exit;
mysqli_set_charset($conn, 'UTF8');
if(!$conn){
    echo "Không thế kết nối đến database: ";
    exit();
}
?>
 
