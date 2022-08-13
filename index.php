<?php require('assets/src/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Naive Bayes</title>
    <?php require('komponen/config/style.php'); ?>
</head>

<body>
    <!-- header -->
    <div id="header" class="wrapper sticky-top bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="logo d-flex justify-content-start align-items-center py-2">
                    <img src="assets/src/img/logo.png" alt="">
                    <span class="fs-3 ms-2">Naive Bayes</span>
                    <!-- button -->
                    <button class="bars btn ms-auto mx-sm-4 mt-1" onclick="toggleSide()"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- content -->
    <div id="content">
        <!-- sidebar -->
        <div id="sidebar" class="handphone">
            <nav class="side-nav mt-3">
                <ul class="nav flex-column">
                    <li><a href="#" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3"> <i class="fa fa-database me-2"></i> Data Training</a></li>
                    <li><a href="#" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3"> <i class="fa fa-database me-2"></i> Data Testing</a></li>
                    <li><a href="#" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3"> <i class="fas fa-calculator me-2"></i> Hitung</a></li>
                </ul>
            </nav>
        </div>
        <!-- end sidebar -->

        <!-- body content -->
        <div id="body-content" class="body-content">
            <div class="container-body-content mx-2 mx-md-3 mx-lg-4 pt-4">

                <!-- DATA TRAINING -->
                <div class="head d-inline">
                    <h4 class="d-inline">Data Training</h4>
                    <?php require('komponen/modal-import-training.php'); ?>

                    <a href="controllers/data-controllers.php?opsi=delete_all&tabel=training" class="btn btn-outline-danger btn-sm mb-2 mx-3"><i class="fa fa-trash" onclick="return confirm_delete_training()"></i>&nbsp Reset Data</a>
                </div>
                <div class="table-responsive mb-5 pb-5">
                    <table class="table table-light table-bordered table-sm">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Outlook</th>
                                <th scope="col">Temperature</th>
                                <th scope="col">Humidity</th>
                                <th scope="col">Windy</th>
                                <th scope="col">Play</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = mysqli_query($db, "SELECT * FROM tb_training");
                            $count_row = mysqli_num_rows($select);
                            if ($count_row == 0) { ?>
                                <tr>
                                    <td colspan="6" class="text-center"> Data Masih Kosong !!! </td>
                                </tr>
                            <?php }

                            $i = 1;
                            foreach ($select as $training) { ?>
                                <tr class="hover-tr">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $training['outlook']; ?></td>
                                    <td><?php echo $training['temperature']; ?></td>
                                    <td><?php echo $training['humidity']; ?></td>
                                    <td><?php echo $training['windy']; ?></td>
                                    <?php
                                    if ($training['play'] == "yes") {
                                        $color_play = "#bcf8c0";
                                    } else {
                                        $color_play = "#fec0c1";
                                    }
                                    ?>
                                    <td style="background-color: <?php echo $color_play ?> !important;"><?php echo $training['play']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TRAINING -->

                <!-- DATA TESTING -->
                <div class="head d-inline">
                    <h4 class="d-inline">Data Testing</h4>
                    <?php
                    require('komponen/modal-import-testing.php');
                    require('komponen/modal-hapus-testing.php');
                    ?>
                </div>
                <div class="table-responsive mb-5">
                    <table class="table table-light table-bordered table-sm">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Outlook</th>
                                <th scope="col">Temperature</th>
                                <th scope="col">Humidity</th>
                                <th scope="col">Windy</th>
                                <th scope="col">Play</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = mysqli_query($db, "SELECT * FROM tb_testing");
                            $count_row = mysqli_num_rows($select);
                            if ($count_row == 0) { ?>
                                <tr>
                                    <td colspan="6" class="text-center"> Data Masih Kosong !!! </td>
                                </tr>
                            <?php }

                            $i = 1;
                            foreach ($select as $training) { ?>
                                <tr class="hover-tr">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $training['outlook']; ?></td>
                                    <td><?php echo $training['temperature']; ?></td>
                                    <td><?php echo $training['humidity']; ?></td>
                                    <td><?php echo $training['windy']; ?></td>
                                    <?php
                                    if ($training['play'] == "yes") {
                                        $color_play = "#bcf8c0";
                                    } else {
                                        $color_play = "#fec0c1";
                                    }
                                    ?>
                                    <td style="background-color: <?php echo $color_play ?> !important;"><?php echo $training['play']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TESTING -->
            </div>
        </div>
        <!-- end body content -->

    </div>
    <!-- end content -->

    <!-- footer -->
    <div id="footer">
        <div class="container"></div>

    </div>
    <!-- end footer -->

    <?php require('komponen/config/script.php'); ?>
</body>