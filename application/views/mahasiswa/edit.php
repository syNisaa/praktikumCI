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
                <h5>Data Program Studi</h5>
                <?php foreach ($mahasiswa as $d){?>
                <form action="<?php echo base_url('index.php/mahasiswa/update') ?>" method='POST' enctype="multipart/form-data">
            
                    <div class="form-grup">

                        <label class='font-weight-bold'>NIM</label>
                        <input type="text" class='form-control' name='nim' value="<?php echo $d->nim?>"><br>

                    </div>

                    <div class="form-grup">

                        <label class='font-weight-bold'>Nama </label>
                        <input type="text" class='form-control' name='nama' value="<?php echo $d->nama?>"><br>

                    </div>

                    <div class="form-grup">

                        <label class='font-weight-bold'>Jenis Kelamin</label>
                        <input type="text" class='form-control' name='gender' value="<?php echo $d->gender?>"><br>

                    </div>

                    <div class="form-grup">

                        <label class='font-weight-bold'>Tempat Lahir</label>
                        <input type="text" class='form-control' name='tmp_lahir' value="<?php echo $d->tmp_lahir?>"><br>

                    </div>

                    <div class="form-grup">

                        <label class='font-weight-bold'>Tanggal Lahir</label>
                        <input type="text" class='form-control' name='tgl_lahir' value="<?php echo $d->tgl_lahir?>"><br>

                    </div>

                    <div class="form-grup">

                        <label class='font-weight-bold'>Pendidikan Akhir</label>
                        <input type="text" class='form-control' name='ipk' value="<?php echo $d->ipk?>"><br>

                    </div>

                    <div class="form-grup">

                        <label class='font-weight-bold'>Kode Prodi</label>
                        <input type="text" class='form-control' name='kode_prodi' value="<?php echo $d->prodi_kode?>"><br>

                    </div>

                    <input type='submit' class='btn btn-primary mt-4' name='submit' value="Simpan">

                </form>
                <?php }?>
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