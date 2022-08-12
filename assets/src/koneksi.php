<?php 
$db = mysqli_connect("localhost","root","","uas_dm");
if (!$db) {
    echo "Gagal menyambungkan ke MySQL:" . mysqli_connect_error();
    exit();
}
?>