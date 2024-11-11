<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web Karir - RS Anna Pekayon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('');?>assets/logo-anna.jpg">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts-c3/plugin.css" />
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/slicknav.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('');?>style/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/flaticon.css">

    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54e246b5a.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">

    <!-- DATATABLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/multi-select/css/multi-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/nouislider/nouislider.min.css" />

    <!-- SWEETALERT -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.css" />

    <!-- SELECT2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- DROPIFY -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/dropify/css/dropify.min.css">

    <!-- MAIN Project CSS file -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="<?= base_url(); ?>assets/logo-anna.jpg" width="48" height="48" alt="Iconic"></div>
                <p>Harap Tunggu...</p>
            </div>
        </div>

        <!-- Top navbar div start -->
        <div class="header_right d-flex align-items-center">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a  href="<?php echo base_url('');?>">Home</a></li>
                                     <li><a href="<?php echo site_url('lowongan');?>">Lowongan</a></li>
                                    <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                                    <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">
                            <!-- <a href="<?php echo site_url('auth/register');?>" class="head-btn1" style="padding: 10px 50px;letter-spacing: 0px;text-transform: none; border: none; border-radius: 30px; background-color: #FCEDF4;"><span style="color: #DC1076; font-weight: 500; font-size: 16px;">Daftar</span></a> -->
                            <a href="<?php echo site_url('auth');?>" style="padding: 10px 50px; background-image: linear-gradient(146.22deg, #FE7835 20%, #FE35AE 100%); border-radius: 30px; border:none;" class="head-btn1"><span style="color: #fff;font-weight: 500; font-size: 16px;">Karir</span></a>
                        </div>                                  
        </div>

        <!-- main left menu -->
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="<?= base_url(); ?>assets/profile/<?= $_SESSION['foto'] ?>" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= $_SESSION['nama_user'] ?></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <?php if ($_SESSION['role'] == 'Admin') { ?>
                                <li><a href="<?= base_url() ?>Admin/My_Profile"><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="<?= base_url() ?>Admin/Settings"><i class="icon-settings"></i>Settings</a></li>
                            <?php } elseif ($_SESSION['role'] == 'User') { ?>
                                <li><a href="<?= base_url() ?>User/My_Profile"><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="<?= base_url() ?>User/Settings"><i class="icon-settings"></i>Settings</a></li>
                            <?php } elseif ($_SESSION['role'] == 'Direktur') { ?>
                                <li><a href="<?= base_url() ?>Direktur/My_Profile"><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="<?= base_url() ?>Direktur/Settings"><i class="icon-settings"></i>Settings</a></li>
                            <?php } elseif ($_SESSION['role'] == 'Direktur') { ?>
                                <li><a href="<?= base_url() ?>HRD/My_Profile"><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="<?= base_url() ?>HRD/Settings"><i class="icon-settings"></i>Settings</a></li>
                            <?php } else { ?>
                                <li><a href="<?= base_url() ?>Kaur/My_Profile"><i class="icon-user"></i>My Profile</a></li>
                                <li><a href="<?= base_url() ?>Kaur/Settings"><i class="icon-settings"></i>Settings</a></li>
                            <?php } ?>

                            <li class="divider"></li>
                            <li><a href="<?= base_url(); ?>Auth/logout"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content padding-0">
                    <div class="tab-pane active" id="menu">
                        <nav id="left-sidebar-nav" class="sidebar-nav">
                            <ul id="main-menu" class="metismenu li_animation_delay">

                                <!-- MENU ADMIN -->
                                <?php if ($_SESSION['role'] == 'Admin') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'User' || $this->uri->segment(2) == 'Departement' || $this->uri->segment(2) == 'Jabatan' || $this->uri->segment(2) == 'Data_Lowongan' ? 'class="active"' : '' ?>>
                                        <a href="#App" class="has-arrow"><i class="fa fa-cogs"></i><span>Master Data</span></a>
                                        <ul>
                                            <li><a href="<?= base_url() ?>Admin/User">User</a></li>
                                            <li><a href="<?= base_url() ?>Admin/Departement">Departement</a></li>
                                            <li><a href="<?= base_url() ?>Admin/Jabatan">Jabatan</a></li>
                                            <li><a href="<?= base_url() ?>Admin/Data_Lowongan">Data Lowongan</a></li>
                                        </ul>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Calon_Pelamar' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Admin/Calon_Pelamar"><i class="fa fa-male"></i><span>Calon Pelamar</span></a>
                                    </li>
                                <?php } ?>

                                 <!-- MENU HRD -->
                                <?php if ($_SESSION['role'] == 'HRD') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>HRD"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'Data_Lowongan' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>HRD/Data_Lowongan"><i class="fa fa-folder-open"></i><span>Lowongan</span></a>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'User' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>HRD/User"><i class="fa fa-user"></i><span>Data User</span></a>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'Departement' || 'Jabatan' ? 'class="deactive"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-id-badge"></i><span>Departmen & Jabatan</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Departement' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Departement"><span>Departmen</span></a>
                                            </li>

                                            <li <?= $this->uri->segment(2) == 'Jabatan' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Jabatan"><span>Jabatan</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'Pelamar' || 'Pelamar_Diterima' || 'Pelamar_Tidak_Diterima' ? 'class="deactive"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-user-circle-o"></i><span>Menu Pelamar</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Pelamar' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Calon_Pelamar"><span>Pelamar</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Pelamar_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Pelamar_Diterima"><span>Pelamar Diterima</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Pelamar_Tidak_Diterima"><span>Pelamar Tidak Diterima</span></a>
                                            </li>
                                        </ul>
                                    </li>                                                                      
                                <?php } ?>

                                <!-- MENU DIREKTUR -->
                                <?php if ($_SESSION['role'] == 'Direktur') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Direktur"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Pelamar_Diterima' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Direktur/Pelamar_Diterima"><i class="fa fa-folder-open"></i><span>Laporan Pelamar</span></a>
                                    </li>
                                <?php } ?>

                                <!-- MENU Kaur -->
                                <?php if ($_SESSION['role'] == 'Kaur') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Kaur"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Pelamar' || 'Pelamar_Diterima' || 'Pelamar_Tidak_Diterima' ? 'class="deactive"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-user-circle-o"></i><span>Menu Pelamar</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Pelamar' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Kaur/Calon_Pelamar"><span>Pelamar</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Pelamar_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Kaur/Pelamar_Diterima"><span>Pelamar Diterima</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Kaur/Pelamar_Tidak_Diterima"><span>Pelamar Tidak Diterima</span></a>
                                            </li>
                                        </ul>
                                    </li> 

                                    <!-- <li <?= $this->uri->segment(2) == 'Pengalaman' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Kaur/Pengalaman"><i class="fa fa-suitcase"></i><span>Pengalaman</span></a>
                                    </li> -->

                                    <!-- <li <?= $this->uri->segment(2) == 'Laporan_Pelamar_Diterima' || 'Laporan_Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Laporan</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Laporan_Pelamar_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Kaur/Laporan_Pelamar_Diterima"><span>Pelamar Diterima</span></a>
                                            </li>

                                            <li <?= $this->uri->segment(2) == 'Laporan_Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Kaur/Laporan_Pelamar_Tidak_Diterima"><span>Pelamar Tidak Diterima</span></a>
                                            </li>
                                        </ul>
                                    </li> -->
                                <?php } ?>

                                <!-- MENU USER -->
                                <?php if ($_SESSION['role'] == 'User') { ?>
                                    <?php if ($this->uri->segment(2) != 'Data_Pelamar') { ?>
                                        <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Personal_Data' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Personal_Data"><i class="fa fa-user"></i><span>Data Diri</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Pendidikan' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Pendidikan"><i class="fa fa-university"></i><span>Pendidikan</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Pengalaman' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Pengalaman"><i class="fa fa-suitcase"></i><span>Pengalaman</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Keahlian' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Keahlian"><i class="fa fa-bolt"></i><span>Keahlian</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Training' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Training"><i class="fa fa-file-code-o"></i><span>Sertifikat</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Cari_Lowongan_Kerja' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Cari_Lowongan_Kerja"><i class="fa fa-search"></i><span>Cari Lowongan Kerja</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Lowongan_Anda' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>User/Lowongan_Anda"><i class="fa fa-child"></i><span>Lowongan Anda</span></a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>

                                <!-- MENU PELAMAR -->
                                <?php if ($_SESSION['role'] == 'Pelamar') { ?>
                                    <?php if ($this->uri->segment(2) != 'Data_Pelamar') { ?>
                                        <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Pelamar"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Personal_Data' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Pelamar/Personal_Data"><i class="fa fa-user"></i><span>Data Diri</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Pendidikan' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Pelamar/Pendidikan"><i class="fa fa-university"></i><span>Pendidikan</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Pengalaman' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Pelamar/Pengalaman"><i class="fa fa-suitcase"></i><span>Pengalaman</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Keahlian' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Pelamar/Keahlian"><i class="fa fa-bolt"></i><span>Keahlian</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Training' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Pelamar/Training"><i class="fa fa-file-code-o"></i><span>Sertifikat</span></a>
                                        </li>

                                        <li <?= $this->uri->segment(2) == 'Cari_Lowongan_Kerja' || 'Lowongan_Anda'  ? 'class="deactive"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-user-circle-o"></i><span>Menu Pelamar</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Cari_Lowongan_Kerja' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Pelamar/Cari_Lowongan_Kerja"><span>Lowongan Kerja</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Lowongan_Anda' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Pelamar/Lowongan_Anda"><span>Status Lamaran</span></a>
                                            </li>
                                            
                                        </ul>
                                        </li> 

                                    <?php } ?>
                                <?php } ?>


                                <!-- MENU MANAGER -->
                                <?php if ($_SESSION['role'] == 'Manager') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Manager"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Calon_Pelamar' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Manager/Calon_Pelamar"><i class="fa fa-users"></i><span>Calon Pelamar</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Pelamar_Diterima' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Manager/Pelamar_Diterima"><i class="fa fa-thumbs-up"></i><span>Pelamar Diterima</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Manager/Pelamar_Tidak_Diterima"><i class="fa fa-thumbs-down"></i><span>Pelamar Tidak Diterima</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Laporan_Pelamar_Diterima' || 'Laporan_Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-bar-chart"></i><span>Laporan</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Laporan_Pelamar_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Manager/Laporan_Pelamar_Diterima"><span>Pelamar Diterima</span></a>
                                            </li>

                                            <li <?= $this->uri->segment(2) == 'Laporan_Pelamar_Tidak_Diterima' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>Manager/Laporan_Pelamar_Tidak_Diterima"><span>Pelamar Tidak Diterima</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">
                <?= $contents; ?>
            </div>
        </div>
    </div>
<footer class="footer">
        <div class="footer_top">
            <div class="container">
                
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="map-frame">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9161842305584!2d106.97399307398967!3d-6.274750761421974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d967a9abb43%3A0x41a0222ee595dcf2!2sRumah%20Sakit%20Anna!5e0!3m2!1sid!2sid!4v1716978630843!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false" tabindex="0" style="border: 0;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Tentang Kami
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam itaque aperiam enim reiciendis totam nostrum aut sed ex assumenda!
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Dashboard
                            </h3>
                            <ul>
                            <li><a href="<?php echo base_url('');?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                            <li><a href="<?php echo site_url('auth');?>">Karir</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Kontak Kami
                            </h3>
                            
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="flaticon-placeholder"></i></span>
                            <div class="media-body">
                                <p> Jl. Raya Pekayon No.36, Jaka Setia, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17147 </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <p>082258222234</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <p>http://rumahsakit-anna.com/</p>
                            </div>
                        </div>
                    
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>Copyright &copy;2024</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <!-- footer end  -->
    <!-- page vendor js file -->
    <script src="<?= base_url(); ?>assets/vendor/toastr/toastr.js"></script>
    <script src="<?= base_url(); ?>assets/bundles/c3.bundle.js"></script>

    <!-- page js file -->
    <script src="<?= base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?= base_url(); ?>assets/js/index.js"></script>

    <script src="<?= base_url(); ?>assets/alert.js"></script>
    <!-- JS here -->
    <script src="<?php echo base_url('');?>style/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/popper.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/ajax-form.js"></script>
    <script src="<?php echo base_url('');?>style/js/waypoints.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/scrollIt.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/wow.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/nice-select.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/plugins.js"></script>
    <script src="<?php echo base_url('');?>style/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?php echo base_url('');?>style/js/contact.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.form.js"></script>
    <script src="<?php echo base_url('');?>style/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('');?>style/js/mail-script.js"></script>
    <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
    <script type="text/javascript">
    function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
        console.log(document.getElementById("uploadPreview").src);

      };
    }
  </script>
    <script>
        $(document).ready(function() {
        $('#display').DataTable();
              });
    </script>
    <script src="<?php echo base_url('');?>style/js/main.js"></script>

</body>

</html>
