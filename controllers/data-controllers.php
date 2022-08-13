<?php
// koneksi database 
require_once('../assets/src/koneksi.php');

//pangil file - file di php excel reader
require_once('../library/excel-reader/php-excel-reader/excel_reader2.php');
require_once('../library/excel-reader/SpreadsheetReader.php');

$opsi = (isset($_GET['opsi'])) ? $_GET['opsi'] : "";
$tabel = (isset($_GET['tabel'])) ? $_GET['tabel'] : "";
if ($tabel == "training") {
    $tabel = "tb_training";
} else {
    $tabel = "tb_testing";
}

if ($opsi == "import") {

    $allowedFileType = ['application/vnd.ms-excel', 'text/xls', 'text/xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
    // fungsi in_array adalah untuk cek apakah nilainya false or true dengan sesuai kondisi yang telah ditentukan
    if (in_array($_FILES["file"]["type"], $allowedFileType)) {

        // piindahkan file ke folder uploads pada projek
        $targetPath = '../' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $reader = new SpreadsheetReader($targetPath);

        // hitung sheet
        $sheetCount = count($reader->sheets());

        for ($i = 0; $i < $sheetCount; $i++) {

            $reader->ChangeSheet($i);
            $j = 1;
            foreach ($reader as $kolom) {
                //definisikan satu persatu kolom yang akan di impor,
                $outlook = (isset($kolom[0])) ? $kolom[0] : "";
                $temperature = (isset($kolom[1])) ? $kolom[1] : "";
                $humidity = (isset($kolom[2])) ? $kolom[2] : "";
                $windy = (isset($kolom[3])) ? $kolom[3] : "";
                $windy = ($windy == "0") ? "FALSE" : "TRUE";
                $play = (isset($kolom[4])) ? $kolom[4] : "";

                if (!empty($outlook)) {
                    if ($j > 1) {
                        $query = "INSERT INTO $tabel(outlook,temperature,humidity,windy,play) VALUES('$outlook','$temperature','$humidity','$windy','$play')";
                        $result = mysqli_query($db, $query);
                    }
                    $j++;
                }
            }

            // peng-kondisian munculan nilai $result
            if ($result == false) { ?>
                <script type='text/javascript'>
                    alert('Gagal Impor Data');
                    window.location.href = "../index.php";
                </script>
            <?php
            } else {
                // agar file tidak memakan rauang, terutama nanti ketika di hosting. maka, setelah selesai di gunakan hapus file yang sudah digunakan pada direktory upload.
                if (file_exists($targetPath)) :
                    unlink($targetPath);
                endif ?>

                <script type='text/javascript'>
                    alert('Sukses Impor Data');
                    window.location.href = "../index.php";
                </script>
        <?php }
        }
    } else { ?>
        <script type='text/javascript'>
            alert('Tipe File Salah, Tolong Impor file .xls atau .xlsx');
            window.location.href = "../index.php";
        </script>
    <?php }
} elseif ($opsi == "delete_all") {
    $tabel = (isset($_GET['tabel'])) ? $_GET['tabel'] : "";
    if ($tabel == "training") {
        $tabel = "tb_training";
    } else {
        $tabel = "tb_testing";
    }

    $query = "DELETE FROM $tabel";
    $delete = mysqli_query($db, $query);

    // $query = "DELETE FROM koefisien_regresi";
    // mysqli_query($db, $query);

    if ($delete == false) { ?>

        <script type='text/javascript'>
            alert('Gagal Hapus Data');
            window.location.href = "../index.php";
        </script>

    <?php } else {

        mysqli_query($db, "ALTER TABLE $tabel auto_increment=1"); ?>

        <script type='text/javascript'>
            alert('Sukses Hapus Data');
            window.location.href = "../index.php";
        </script>
    <?php

    }
} elseif ($opsi == "delete") {
    $id = (isset($_GET['id'])) ? $_GET['id'] : "";
    $query = "DELETE FROM tb_training";
    $delete = mysqli_query($db, $query);

    if ($delete == false) { ?>
        <script type='text/javascript'>
            alert('Gagal Hapus Data');
            window.location.href = "../index.php";
        </script>
    <?php } else {
        mysqli_query($db, "ALTER TABLE tb_training auto_increment=1"); ?>

        <script type='text/javascript'>
            alert('Sukses Hapus Data');
            window.location.href = "../index.php";
        </script>
<?php
    }
}
?>