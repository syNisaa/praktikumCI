<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Prakikum Anisa
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <?php $this->load->view("template/css.php") ?>
</head>

<body class="">
    <div class="wrapper ">
        <!-- Sidebar --><?php $this->load->view("template/sidebar.php") ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php $this->load->view("template/navbar.php") ?>
            <!-- End Navbar -->
            <div class="content">
                <h5>Data Dosen</h5>
                <a href="<?php echo base_url() . "index.php/dosen/tambah" ?>"><button type="button" class="btn btn-outline-success">Tambah Data</button></a><br>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Pendidikan Akhir</th>
                            <th scope="col">Prodi Kode</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dosen as $d) { ?>
                            <tr><?php $a = 1 ?>
                                <th scope="row"></th>
                                <td><?php echo $d->nidn ?></td>
                                <td><?php echo $d->nama ?></td>
                                <td><?php echo $d->gender ?></td>
                                <td><?php echo $d->tmp_lahir ?></td>
                                <td><?php echo $d->tgl_lahir ?></td>
                                <td><?php echo $d->pendidikan_akhir ?></td>
                                <td><?php echo $d->prodi_kode ?></td>
                                <td><?php echo anchor('index.php/dosen/hapus/' . $d->nidn, '<button type="button" class="btn btn-danger">Delete</button>'); ?>
                                    <a href="<?php echo base_url() . "index.php/dosen/edit/" . $d->nidn ?>"> <button type="button" class="btn btn-info">update</button></a>

                                </td>
                            </tr>
                        <?php $a++;
                        } ?>
                    </tbody>
                </table>
            </div>

            <!-- footer -->
            <?php $this->load->view("template/footer.php") ?>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/core/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('assets/js/paper-dashboard.min.js?v=2.0.1') ?>" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('assets/demo/demo.js') ?>"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

</html>