<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
        Hallo! <?php echo $this->session->userdata('username') ?>
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class=" ">
                <a href="<?php echo base_url().'index.php/admin/dashboard'?>">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'index.php/dosen'?>">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Dosen</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'index.php/prodi'?>">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Program Studi</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'index.php/mahasiswa'?>">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>mahasiswa</p>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'index.php/admin/logout'?>">
                    <button class="btn btn-outline-danger">Logout</button>
                </a>
            </li>
        </ul>
    </div>
</div>