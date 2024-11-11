<!doctype html>
<html lang="en">
 
<head>
    <title>Halaman Masuk Akun | Rekrutmen Karyawan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Rekrutmen">
    <meta name="author" content="Sistem Informasi Rekrutmen Karyawan">
    <link rel="icon" href="<?= base_url(); ?>assets/logo-anna.jpg" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/sweetalert/sweetalert.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
    
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
</head>

<body data-theme="light" class="font-nunito">
    <!-- NAVIGATION -->
    <div id="sticky-header" class="main-header-area">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="header_wrap d-flex justify-content-between align-items-center">
                    <div class="header_left">
                        <div class="logo">
                            <a href="<?php echo base_url('');?>">
                                <img src="<?php echo base_url('');?>assets/logo-anna.jpg" alt="logo" alt="logo" style="max-width: 304px; max-height: 63px;">
                            </a>
                            <a href="<?php echo base_url('');?>" class="logo-text"style="padding: 10px 10px 10px 5px;letter-spacing: 0px;text-transform: none; color: #00000; font-weight: bold;font-size: 30px;">Rumah Sakit Anna
                            </a>
                        </div>
                    </div>
 
                    <div class="header_right d-flex align-items-center">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a  href="<?php echo base_url('');?>">Beranda</a></li>
                                     <li><a href="<?php echo site_url('lowongan');?>">Lowongan</a></li>
                                    <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                                    <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">
                            <a href="<?php echo site_url('auth');?>" style="padding: 10px 50px; background-image: linear-gradient(146.22deg, #FE7835 20%, #FE35AE 100%); border-radius: 30px; border:none;" class="head-btn1"><span style="color: #fff;font-weight: 500; font-size: 16px;">Masuk</span></a>
                        </div>                                  
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- END NAVIGATION -->

    <!-- WRAPPER -->
    <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
    <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
    <div id="wrapper" class="theme-cyan">
        <div class="container">
            
            <div class="row justify-content-center auth-main">
                <div class="auth-box">
                    <!-- <div class="top">
                        <img src="<?= base_url(); ?>assets/logo2.png" alt="PT Gading Megah Perkasa">
                        <h3 class="text-light" style="font-weight:bold;">PT Gading Megah Perkasa</h3>
                    </div> -->
                    <div class="card">
                        <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
                        <div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
                        <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="header">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>assets/logo-anna.jpg" alt="" style="width: 120px;">
                                <h3>Halaman Masuk Akun</h3>
                                <p>Silakan Masukan Akun Anda</p>
                            </div>
                        </div> 
                        <div class="body">
                            <form class="form-auth-small" action="<?= base_url(); ?>Auth/prosesLogin" method="POST">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Kata Sandi</label>
                                    <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk Akun</button>
                                <div class="bottom">
                                    <!-- <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span> -->
                                    <span>Belum Punya Akun? <a href="<?= base_url() ?>Auth/Register">Daftar Akun</a></span>
                                </div>
                            </form>
							

                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- FOOTER -->
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
                                Terwujudnya Pelayanan Rumah Sakit Yang Bermutu Sesuai Dengan Standar pelayanan kesehatan dan tercapainya kepuasan yang sangat tinggi bagi pasien, masyarakat, dan keluarga.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Halaman Utama
                            </h3>
                            <ul>
                            <li><a href="<?php echo base_url('');?>">Beranda</a></li>
                            <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                            <li><a href="<?php echo site_url('auth');?>">Masuk Akun</a></li>
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
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;2024</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- Javascript -->
    <script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!-- SWEETALERT -->
    <script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
    <!-- page vendor js file -->
    <script src="<?= base_url(); ?>assets/vendor/toastr/toastr.js"></script>
    <script src="<?= base_url(); ?>assets/bundles/c3.bundle.js"></script>

    <!-- page js file -->
    <script src="<?= base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/js/index.js"></script> -->
    <script src="<?= base_url(); ?>assets/sweet.js"></script>

    <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
</body>

</html>
