<!doctype html>
<html lang="en">

<head>
    <title><?php if ($_SESSION['role'] == 'Admin') { ?>
            Halaman Admin | Rekrutmen Karyawan
        <?php } elseif ($_SESSION['role'] == 'Pelamar') { ?>
            Halaman Pelamar | Rekrutmen Karyawan
        <?php } elseif ($_SESSION['role'] == 'Kaur') { ?>
            Halaman Kepala Urusan | Rekrutmen Karyawan
        <?php } elseif ($_SESSION['role'] == 'HRD') { ?>
            Halaman HRD | Rekrutmen Karyawan
        <?php } elseif ($_SESSION['role'] == 'Direktur') { ?>
            Halaman Direktur | Rekrutmen Karyawan
        <?php } ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Rekrutmen Karyawan">
    <meta name="author" content="Sistem Informasi Rekrutmen Karyawan">
    <link rel="icon" href="<?= base_url(); ?>assets/logo-anna.jpg" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts-c3/plugin.css" />

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
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>style/css/style.css"> -->
</head>

<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">

        <!-- Page Loader -->
        <!-- <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="<?= base_url(); ?>assets/logo-anna.jpg" width="48" height="48" alt="Iconic"></div>
                <p>Tunggu Sebentar....</p>
            </div>
        </div> -->

        <!-- Top navbar div start -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                    <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                    <a href="<?= base_url() ?>Admin"> Penerimaan Karyawan | RS Anna Pekayon</a>
                </div>

                <div class="navbar-right">

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?= base_url(); ?>Auth/logout" class="icon-menu"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main left menu -->
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="<?= base_url(); ?>assets/profile/<?= $_SESSION['foto'] ?>" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Selamat Datang,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= $_SESSION['nama_user'] ?></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <?php if ($_SESSION['role'] == 'Admin') { ?>
                                <li><a href="<?= base_url() ?>Admin/My_Profile"><i class="icon-user"></i>Profil Saya</a></li>
                                <li><a href="<?= base_url() ?>Admin/Settings"><i class="icon-settings"></i>Pengaturan</a></li>
                            <?php } elseif ($_SESSION['role'] == 'User') { ?>
                                <li><a href="<?= base_url() ?>User/My_Profile"><i class="icon-user"></i>Profil Saya</a></li>
                                <li><a href="<?= base_url() ?>User/Settings"><i class="icon-settings"></i>Pengaturan</a></li>
                            <?php } elseif ($_SESSION['role'] == 'Direktur') { ?>
                                <li><a href="<?= base_url() ?>Direktur/My_Profile"><i class="icon-user"></i>Profil Saya</a></li>
                                <li><a href="<?= base_url() ?>Direktur/Settings"><i class="icon-settings"></i>Pengaturan</a></li>
                            <?php } elseif ($_SESSION['role'] == 'HRD') { ?>
                                <li><a href="<?= base_url() ?>HRD/My_Profile"><i class="icon-user"></i>Profil Saya</a></li>
                                <li><a href="<?= base_url() ?>HRD/Settings"><i class="icon-settings"></i>Pengaturan</a></li>
                            <?php } else { ?>
                                <li><a href="<?= base_url() ?>Kaur/My_Profile"><i class="icon-user"></i>Profil Saya</a></li>
                                <li><a href="<?= base_url() ?>Kaur/Settings"><i class="icon-settings"></i>Pengaturan</a></li>
                            <?php } ?>

                            <li class="divider"></li>
                            <li><a href="<?= base_url(); ?>Auth/logout"><i class="icon-power"></i>Keluar Akun</a></li>
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
                                        <a href="<?= base_url() ?>Admin"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
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
                                        <a href="<?= base_url() ?>HRD"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'Calon_Pelamar' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>HRD/Calon_Pelamar"><i class="fa fa-folder-open"></i><span>Pelamar</span></a>
                                    </li> 
                                    <li <?= $this->uri->segment(2) == 'User' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>HRD/User"><i class="fa fa-user"></i><span>Data User</span></a>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'Departement' || 'Jabatan'|| 'Lowongan' ? 'class="deactive"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-id-badge"></i><span>Lowongan</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Departement' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Departement"><span>Departmen</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Jabatan' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Jabatan"><span>Jabatan</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Lowongan' ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>HRD/Data_Lowongan"><span>Lowongan</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li <?= $this->uri->segment(2) == 'Pelamar' || 'Pelamar_Diterima' || 'Pelamar_Tidak_Diterima' ? 'class="deactive"' : '' ?>>
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
                                    </li>  -->                                   

                                    <!-- <li <?= $this->uri->segment(2) == 'Soal' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Admin/tampilSoal"><i class="fa fa-user"></i><span>Soal</span></a>
                                    </li> -->

                                    
                                <?php } ?>

                                <!-- MENU DIREKTUR -->
                                <?php if ($_SESSION['role'] == 'Direktur') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Direktur"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
                                    </li>

                                    <li <?= $this->uri->segment(2) == 'Calon_Pelamar' ? 'class="active"' : '' ?>>
                                            <a href="<?= base_url() ?>Direktur/Calon_Pelamar"><i class="fa fa-folder-open"></i><span>Laporan Pelamar</span></a>
                                    </li> 
                                <?php } ?>

                                <!-- MENU Kaur -->
                                <?php if ($_SESSION['role'] == 'Kaur') { ?>
                                    <li <?= $this->uri->segment(2) == 'Kaur' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Kaur"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
                                    </li>
                                    <li <?= $this->uri->segment(2) == 'Calon_Pelamar' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Kaur/Calon_Pelamar"><i class="fa fa-user-circle-o"></i><span>Pelamar</span></a>
                                    </li>
                                    <!-- <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Laporan/print"><i class="fa fa-bar-chart"></i><span>Laporan</span></a>
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
                                            <a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
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
                                            <a href="<?= base_url() ?>Pelamar"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
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

                                        <li <?= $this->uri->segment(2) == 'Lowongan_Kerja' || 'Lowongan_Anda'  ? 'class="deactive"' : '' ?>>
                                        <a href="#forms" class="has-arrow"><i class="fa fa-user-circle-o"></i><span>Menu Pelamar</span></a>
                                        <ul>
                                            <li <?= $this->uri->segment(2) == 'Lowongan_Kerja' ? 'class="deactive"' : '' ?>>
                                                <a href="<?= base_url() ?>Pelamar/Cari_Lowongan_Kerja"><span>Lowongan Kerja</span></a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'Lowongan_Anda' ? 'class="deactive"' : '' ?>>
                                                <a href="<?= base_url() ?>Pelamar/Lowongan_Anda"><span>Status Lamaran</span></a>
                                            </li>
                                            
                                        </ul>
                                        </li> 

                                    <?php } ?>
                                <?php } ?>


                                <!-- MENU MANAGER -->
                                <?php if ($_SESSION['role'] == 'Manager') { ?>
                                    <li <?= $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Manager"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a>
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

    <!-- page vendor js file -->
    <script src="<?= base_url(); ?>assets/vendor/toastr/toastr.js"></script>
    <script src="<?= base_url(); ?>assets/bundles/c3.bundle.js"></script>

    <!-- page js file -->
    <script src="<?= base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?= base_url(); ?>assets/js/index.js"></script>

    <script src="<?= base_url(); ?>assets/alert.js"></script>
</body>

</html>
