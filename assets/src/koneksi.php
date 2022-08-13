<?php 
// online
$db = mysqli_connect("sql313.ezyro.com", "ezyro_32378690", "tn4z12t9swd", "ezyro_32378690_uas_dm");
// $db = mysqli_connect("localhost", "id19415581_rahman", "oBL=X72sruas_dm", "id19415581_uas_dm");
// offline
// $db = mysqli_connect("localhost","root","","uas_dm");
if (!$db) {
    echo "Gagal menyambungkan ke MySQL:" . mysqli_connect_error();
    exit();
}
?>