<!doctype html>
<html class="no-js" lang="zxx">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web Karir - RS Anna Pekayon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('');?>style/img/logo-anna.jpg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
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
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>style/css/flaticon.css">


    <!-- VENDOR JS -->
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54e246b5a.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
    
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


    
</head>


<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
    <div class="header-area ">
    <?php $this->load->view('theme/header'); ?>
    <?php $this->load->view('theme/navigation'); ?>
    </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <?php $this->load->view($main_view); ?>
    <!-- recent_news_area_end  -->

    <!-- footer start -->
    <?php $this->load->view('theme/footer'); ?>