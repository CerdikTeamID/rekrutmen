<!doctype html>
<html class="no-js" lang="zxx">


<head>
</style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E3V31RTY3S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E3V31RTY3S');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P5HP6R2C');
    </script>
    <!-- End Google Tag Manager --><link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://mitrakeluarga.jobseeker.software/public/template/assets/css/register.css?v=1.1">

<style>
    html,
    body {
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    .reg-fieldset {
        border: 1px solid #EBEBEB;
        border-radius: .25rem;
        padding: 15px 20px;
        margin-bottom: 2rem;
    }

    .reg-fieldset legend {
        width: unset !important;
        margin-left: 10px;
        padding-left: 5px;
        padding-right: 5px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #888;
        line-height: 28px;
    }

    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
        width: 100% !important;
    }

    .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 36px !important;
    }
</style>

<style>
    .head-title {
        color: #33A4FF;
        margin-bottom: 1rem;
    }

    .required {
        color: red;
    }

    .wizard-content-left {
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.45);
        background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");
        background-position: center center;
        background-size: cover;
        height: 100vh;
        padding: 30px;
    }

    .wizard-content-left h1 {
        color: #ffffff;
        font-size: 38px;
        font-weight: 600;
        padding: 12px 20px;
        text-align: center;
    }

    .form-wizard {
        color: #888888;
        /* padding: 30px; */
    }

    .form-wizard .wizard-form-radio {
        display: inline-block;
        margin-left: 5px;
        position: relative;
    }

    .form-wizard .wizard-form-radio input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-color: #dddddd;
        height: 25px;
        width: 25px;
        display: inline-block;
        vertical-align: middle;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:focus {
        outline: 0;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked {
        background-color: #33A4FF;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        display: inline-block;
        background-color: #ffffff;
        border-radius: 50%;
        left: 1px;
        right: 0;
        margin: 0 auto;
        top: 8px;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
        content: "";
        display: inline-block;
        webkit-animation: click-radio-wave 0.65s;
        -moz-animation: click-radio-wave 0.65s;
        animation: click-radio-wave 0.65s;
        background: #000000;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
        border-radius: 50%;
    }

    .form-wizard .wizard-form-radio input[type="radio"]~label {
        padding-left: 10px;
        cursor: pointer;
    }

    .form-wizard .form-wizard-header {
        text-align: center;
    }

    .form-wizard .form-wizard-next-btn,
    .form-wizard .form-wizard-previous-btn,
    .form-wizard .form-wizard-submit {
        background-color: #33A4FF;
        color: #ffffff;
        display: inline-block;
        min-width: 200px;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
    }

    .form-wizard .form-wizard-next-btn:hover,
    .form-wizard .form-wizard-next-btn:focus,
    .form-wizard .form-wizard-previous-btn:hover,
    .form-wizard .form-wizard-previous-btn:focus,
    .form-wizard .form-wizard-submit:hover,
    .form-wizard .form-wizard-submit:focus {
        color: #ffffff !important;
        background-color: #1194ff;
        opacity: 0.6;
        text-decoration: none;
    }

    .form-wizard .wizard-fieldset {
        display: none;
    }

    .form-wizard .wizard-fieldset.show {
        display: block;
    }

    .form-wizard .wizard-form-error {
        display: none;
        background-color: #fff;
        position: relative;
        left: 0;
        right: 0;
        bottom: 0;
        /* height: auto; */
        width: 100%;
        border-top: 2px solid #f00;
    }

    .form-wizard .form-wizard-previous-btn {
        background-color: #33A4FF;
    }

    .form-wizard .form-control {
        font-weight: 300;
        height: 40px !important;
        padding: .35rem .25rem;
        color: #888888;
        background-color: #fff;
        border: 1px solid #ced4da;
        /* border: none; */
    }

    .form-wizard .form-control:focus {
        box-shadow: none;
    }

    .form-wizard .form-group {
        position: relative;
        margin-top: .5rem;
        margin-bottom: 1.5rem;
    }

    .form-wizard .wizard-form-text-label {
        position: absolute;
        left: 10px;
        top: 9px;
        transition: 0.2s linear all;
    }

    .form-wizard .focus-input .wizard-form-text-label {
        color: #33A4FF;
        left: 0px;
        top: -18px;
        transition: 0.2s linear all;
        font-size: 12px;
    }

    .form-wizard .form-wizard-steps {
        margin: 30px 0;
    }

    .form-wizard .form-wizard-steps li {
        width: 20%;
        float: left;
        position: relative;
    }

    .form-wizard .form-wizard-steps li::after {
        background-color: #f3f3f3;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        border-bottom: 1px solid #dddddd;
        border-top: 1px solid #dddddd;
    }

    .form-wizard .form-wizard-steps li span {
        background-color: #dddddd;
        border-radius: 50%;
        display: inline-block;
        height: 40px;
        line-height: 40px;
        position: relative;
        text-align: center;
        width: 40px;
        z-index: 1;
    }

    .form-wizard .form-wizard-steps li:last-child::after {
        width: 50%;
    }

    .form-wizard .form-wizard-steps li.active span,
    .form-wizard .form-wizard-steps li.activated span {
        background-color: #33A4FF;
        color: #ffffff;
    }

    .form-wizard .form-wizard-steps li.active::after,
    .form-wizard .form-wizard-steps li.activated::after {
        background-color: #33A4FF;
        left: 50%;
        width: 50%;
        border-color: #33A4FF;
    }

    .form-wizard .form-wizard-steps li.activated::after {
        width: 100%;
        border-color: #33A4FF;
    }

    .form-wizard .form-wizard-steps li:last-child::after {
        left: 0;
    }

    .form-wizard .wizard-password-eye {
        position: absolute;
        right: 32px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .btn-tambah-data {
        padding: 6px;
        cursor: pointer;
        background-color: #fff;
        color: #1194ff;
        border: 1px solid #1194ff;
        border-radius: 5px;
    }

    .btn-hapus-data {
        padding: 6px;
        cursor: pointer;
        background-color: #fff;
        color: #FF0000;
        border: 1px solid #FF0000;
        border-radius: 5px;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border-color: #ced4da;
        color: #666 !important;
        padding: 5px 5px 4px 0px !important;
        margin: 0px !important;
        height: 40px !important;
        border-radius: .25rem !important;
        font-size: 14px !important;
    }

    @keyframes click-radio-wave {
        0% {
            width: 25px;
            height: 25px;
            opacity: 0.35;
            position: relative;
        }

        100% {
            width: 60px;
            height: 60px;
            margin-left: -15px;
            margin-top: -15px;
            opacity: 0.0;
        }
    }

    @media screen and (max-width: 767px) {
        .wizard-content-left {
            height: auto;
        }
    }
</style>
<style>
    :required {
        background: red;
    }

    .input-group-text {
        background-color: #fff;
        border-left: 0px !important;
    }
</style>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5HP6R2C" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  <main>
        
<style>
    .header-area .slicknav_btn {
        top: -35px !important;
    }

</style>
</head>

<body onload=addOption_list1();>
    <!-- Google Tag Manager (noscript) -->


<section class="wizard-section">
    <div class="container py-md-3 h-100 p-md-5">
            <div class="row no-gutters">
            <div class="col-12">
            <div class="card shadow-2-strong" style="border-radius:0px;">
                <div class="card-body p-3">
                <div class="form-wizard px-md-3 py-md-2">
                    <form id="drop_list" name="drop_list" method="POST" enctype="multipart/form-data">
                        <div class="form-wizard-header">
                            <h3>Form Registrasi</h5>
                            <p>Silahkan lengkapi data di bawah ini</p>       
                        </div>
                    <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div id="form-foto-box" class="mb-3" align="center">
                        <div id="form-foto-box-image">
                            <input type="hidden" name="foto_cam" id="foto_cam">
                            <input type="hidden" name="socmed_photo" id="socmed_photo">
                        <div class="form-group" style="margin: 0px; width: 300px;">
                            <input class="p0 m0 file-photo wizard-required" type="file" name="photo" id="photo" value="" accept="image/png, image/jpg, image/jpeg">
                            <p id="errpic" class="raleway center f12 black6" style="margin-top:-40px;">Pilih foto portrait terbaru Anda! <span class="required">*</span></p>
                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>       
                            <button type="button" class="btn btn-primary btn-lg btn-block upl btn_upload" style="background-color: #33A4FF !important;" id="form-foto-button">Pilih Foto</button>
                        </div>
                            <hr>
                            <h5 class="head-title">
                                CV/Resume <span class="required">*</span>
                            </h5>
                        <div class="form-group">
                            <input type="file" id="resume" name="resume" class="form-control wizard-required" required />
                                <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: Tipe file yang diijinkan: docx,pdf,jpg/png, Maksimum 2mb)</span>
                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                        </div>
                        </div>
                        <div class="col-md-8 col-sm-12 pl-md-3">
                            <h5 class="head-title">Data Pribadi</h5>
                        <div class="form-group">
                            <input type="text" name="full_name" id="full_name" class="form-control wizard-required" maxlength="35" onkeypress="return /[a-z .]/gi.test(event.key)" />
                            <label for="full_name" class="wizard-form-text-label">Nama Lengkap <span class="required">*</span></label>
                            <small>*Isikan nama lengkap sesuai KTP, tanpa gelar, dan tidak menggunakan huruf kapital</small>
                        <div class="wizard-form-error">
                            <small style="color: #f00">* Wajib Diisi</small></div>
                                </div>
                        <div class="form-group">
                            <input type="number" name="id_number" id="id_number" class="form-control wizard-required" onchange="checkNIK(this.value)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return /[0-9]/i.test(event.key)" maxLength="16" minLength="16" autocomplete="false" />
                                <label for="id_number" class="wizard-form-text-label">Nomor KTP (NIK) <span class="required">*</span></label>
                                <small id="id_number-err" style="color: red;"></small>
                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                        </div>

                                                    <div class="form-group">
                                                        <input name="phone" id="phone" type="text" minlength="10" maxlength="16" class="form-control wizard-required" onkeypress="return /[0-9]/i.test(event.key)" />
                                                        <label for="phone" class="wizard-form-text-label">No. Handphone (WhatsApp) <span class="required">*</span></label>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" onchange="checkemail(this.value)" class="form-control wizard-required" autocomplete="off" maxlength="35" />
                                                        <label for="email" class="wizard-form-text-label">Email Pribadi Aktif <span class="required">*</span></label>
                                                        <small id="email-err" style="color: red;"></small>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>

                                                    <!-- <div class="form-group">
                                                        <input type="password" name="password" id="password" class="form-control wizard-required" />
                                                        <label for="password" class="wizard-form-text-label">Kata Sandi <span class="required">*</span></label>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div> -->

                                                    <div class="row">
                                                        <div class="col-md-6 mb-3 mt-3">
                                                            <div class="input-group">
                                                                <input style="border-right: 0px !important" autocomplete="OFF" name="password" id="password" type="password" class="form-control wizard-required" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2" onclick="showPassword()">
                                                                        <i class="bi bi-eye" id="pshow" style="display: block;"></i>
                                                                        <i class="bi bi-eye-slash" id="phide" style="display: none;"></i>
                                                                        <!-- <input type="checkbox" onclick="showPassword()"> -->
                                                                    </span>
                                                                </div>
                                                                <label for="password" class="wizard-form-text-label">Password <span class="required">*</span></label>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                <!-- <input type="checkbox" onclick="showPassword()"> Lihat Password -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3 mt-3">
                                                            <div class="input-group">
                                                                <input style="border-right: 0px !important" onchange="checkPassSama(this.value)" autocomplete="OFF" name="konfirmasi_password" id="konfirmasi_password" type="password" class="form-control wizard-required" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2" onclick="showPasswordKonfirmasi()">
                                                                        <i class="bi bi-eye" id="pshow2" style="display: block;"></i>
                                                                        <i class="bi bi-eye-slash" id="phide2" style="display: none;"></i>
                                                                        <!-- <input type="checkbox" onclick="showPassword()"> -->
                                                                    </span>
                                                                </div>
                                                                <label for="konfirmasi_password" class="wizard-form-text-label"">Konfirmasi Password <span class=" required">*</span></label>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                <!-- <input type="checkbox" onclick="showPasswordKonfirmasi()"> Lihat Konfirmasi Password -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline form-group mb-1">
                                                            <label class="form-label">Jenis Kelamin <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                                            </div>
                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input name="height" id="height" type="text" class="form-control wizard-required" maxlength="3" onkeypress="return /[0-9]/i.test(event.key)" />
                                                                <label for="height" class="wizard-form-text-label">Tinggi (cm)<span class="required">*</span></label>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input name="weight" id="weight" type="text" class="form-control wizard-required" maxlength="3" onkeypress="return /[0-9]/i.test(event.key)" />
                                                                <label for="weight" class="wizard-form-text-label">Berat (kg)<span class="required">*</span></label>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Tempat dan Tanggal Lahir <span class="required">*</span></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control wizard-required select2" name="pob">
                                                                        <option selected value="" disabled="true">Tempat Lahir</option>
                                                                    </select>    
                                                                    <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row pl-md-0">
                                                                    <div class="col-md-4 mb-md-0 px-md-1">
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control wizard-required" name="dob_tanggal" style="width: 100%" required="true">
                                                                                <option selected value="" disabled="true">Tanggal</option>
                                                                            </select>
                                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-md-0 px-md-1">
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control wizard-required" name="dob_bulan" style="width: 100%" required="true">
                                                                                <option selected value="" disabled="true">Bulan</option>
                                                                            </select>
                                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-md-0 pl-md-1">
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control wizard-required" name="dob_tahun" style="width: 100%" required="true">
                                                                                <option selected value="" disabled="true">Tahun</option>
                                                                            </select>
                                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Status Perkawinan <span class="required">*</span></label>
                                                                <select class="form-control wizard-required mb-3 select2" name="marital_status_id">
                                                                    <option selected value="" disabled="true">Pilih Status Perkawinan</option>
                                                                    <option value='1' >Single</option><option value='3' >Nikah</option><option value='4' >Cerai Hidup</option><option value='5' >Cerai Mati</option>                                                                </select>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Agama <span class="required">*</span></label>
                                                                <select class="form-control wizard-required mb-3 select2" name="religion_id">
                                                                    <option selected value="" disabled="true">Pilih Agama</option>
                                                                    <option value='4' >Budha</option><option value='5' >Hindu</option><option value='3' >Islam</option><option value='2' >Katholik</option><option value='6' >Konghucu</option><option value='1' >Kristen</option>                                                              </select>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Apakah Anda buta warna? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input " type="radio" name="blind" id="blind1" value="0">
                                                                <label class="form-check-label" for="blind1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="blind" id="blind2" value="1">
                                                                <label class="form-check-label" for="blind2">Iya</label>
                                                            </div>
                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <h5 class="head-title">
                                                        Sosial Media
                                                    </h5>
                                                    <div class="row">
                                                        <!-- <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="social_facebook" id="social_facebook" class="form-control" />
                                                                <label for="social_facebook" class="wizard-form-text-label">Alamat Profil Facebook</label>
                                                                <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: URL Profile facebook Anda)</span>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" name="social_instagram" id="social_instagram" class="form-control" />
                                                                <label for="social_instagram" class="wizard-form-text-label">Alamat Profil Instagram</label>
                                                                <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: URL Profile instagram Anda)</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="social_linkedin" id="social_linkedin" class="form-control" />
                                                                <label for="social_linkedin" class="wizard-form-text-label">Alamat Profil LinkedIn</label>
                                                                <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: URL Profile linkedin Anda)</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="social_twitter" id="social_twitter" class="form-control" />
                                                                <label for="social_twitter" class="wizard-form-text-label">Alamat Profil Twitter</label>
                                                                <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: URL Profile twitter Anda)</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="social_tiktok" id="social_tiktok" class="form-control" />
                                                                <label for="social_tiktok" class="wizard-form-text-label">Alamat Profil Tiktok</label>
                                                                <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: URL Profile tiktok Anda)</span>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <h5 class="head-title">
                                                        Surat Tanda Registrasi (STR)
                                                    </h5>
                                                    <div class="dokumen-str">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Apakah memiliki STR (Surat Tanda Registrasi) yang aktif berlaku? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="is_str" id="is_str_false" value="0">
                                                                <label class="form-check-label" for="is_str_false">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="is_str" id="is_str_true" value="1">
                                                                <label class="form-check-label" for="is_str_true">Iya</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_number" id="str_number" hidden="hidden" class="form-control " style="text-transform: uppercase;" maxlength="50" />
                                                                    <label for="str_number" class="wizard-form-text-label" id="str_number_1" hidden="hidden">Nomor STR <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_number_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_publish_location" id="str_publish_location" hidden="hidden" class="form-control " />
                                                                    <label for="str_publish_location" class="wizard-form-text-label" id="str_publish_location_1" hidden="hidden">Lokasi STR Terbit <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_publish_location_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_publish_date" id="str_publish_date" hidden="hidden" class="form-control datepicker" />
                                                                    <label for="str_publish_date" class="wizard-form-text-label" id="str_publish_date_1" hidden="hidden">Tanggal STR Terbit <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_publish_date_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_end_date" id="str_end_date" hidden="hidden" class="form-control datepicker" />
                                                                    <label for="str_end_date" class="wizard-form-text-label" id="str_end_date_1" hidden="hidden">Tanggal STR Habis Berlaku <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_end_date_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="row">
                                                    <div class="mb-3 col-md-9"></div>
                                                    <div class="mb-3 col-md-3">
                                                        <a href="javascript:;" class="w-100 form-wizard-next-btn float-right" onclick="topFunction()">Simpan<i class="fa fa-arrow-right"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- JS here -->
        <style type="text/css">
    .footer-wejed {
        padding-top: 30px;
        padding-bottom: 15px;
    }

    .footer-tittle h4 {
        font-weight: bold !important;
        font-size: 20px !important;
        text-transform: unset !important;
        margin-bottom: 0px !important;
    }

    a {
        text-decoration: none;
    }
</style>
<footer>
    <!-- Footer Start-->
    <div class="footer-area border-0" style="background-color: #F5F5F5;">
        <div class="container py-3">
            <div class="row footer-wejed justify-content-between">
                <div class="col-xl-3 col-lg-2 col-md-6 col-sm-12 col-12 mt-3 mb-3">
                    <a href="https://mitrakeluarga.jobseeker.software/">
                        <img src="https://mitrakeluarga.jobseeker.software/public/template/assets/img/logo/logo-mitra-keluarga.png" class="img-fluid" style="width: 200px;" alt="Demo Jobseeker Company - Careersite">
                    </a>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-6 col-sm-12 col-12 mt-3 mb-3 menu-footer">
                    <p style="color: #7E8EA6;">QUICK MENU</p>
                    <a target="_blank" href="https://www.mitrakeluarga.com/janji-temu"><span style="color: #586880;">Buat Janji Temu</span></a><br>
                    <a target="_blank" href="https://www.mitrakeluarga.com/spesialisasi"><span style="color: #586880;">Cari Dokter</span></a><br>
                    <a target="_blank" href="https://www.mitrakeluarga.com/cabang"><span style="color: #586880;">Cari Lokasi</span></a><br>
                    <!-- <a href=""><span style="color: #586880;">Test COVID-19</span></a><br> -->
                    <p style="color: #7E8EA6;" class="mt-3">Download Mitra Keluarga App</p>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.mika.app"><img src="https://mitrakeluarga.jobseeker.software/public/assets/image/gs.png" class="img-fluid" style="width: 150px;" alt="Download Mitra Keluarga di Google Play" title="Download Mitra Keluarga di Google Play"></a>
                    <a target="_blank" href="https://apps.apple.com/id/app/mika-mitra-keluarga/id1662314710"><img src="https://mitrakeluarga.jobseeker.software/public/assets/image/as.png" class="img-fluid" style="width: 150px;" alt="Download Mitra Keluarga App di App Store" title="Download Mitra Keluarga App di App Store"></a>
                    <p style="color: #7E8EA6;" class="mt-3">Download AlteaCare</p>
                    <a target="_blank" href="https://linktr.ee/AlteaCare"><img src="https://mitrakeluarga.jobseeker.software/public/assets/image/alteacare.png" class="img-fluid" style="width: 150px;" alt="Altea Care" title="Altea Care"></a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 mt-3 mb-3 menu-footer">
                    <p style="color: #7E8EA6;">CORPORATE</p>
                    <a href="https://www.mitrakeluarga.com/tentang-kami"><span style="COLOR: #586880;">Tentang Kami</span></a><br>
                    <!-- <a href="#"><span style="COLOR: #586880;">Informasi Tambahan</span></a><br> -->
                    <!-- <a href="#"><span style="COLOR: #586880;">Berita</span></a><br> -->
                    <a href="https://www.mitrakeluarga.com/corporate"><span style="COLOR: #586880;">Investor</span></a><br>
                    <!-- <a href="#"><span style="COLOR: #586880;">Keberlanjutan</span></a><br> -->
                    <!-- <a href="#"><span style="COLOR: #586880;">Kontak Kami</span></a><br> -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 mt-3 mb-3 menu-footer">
                    <p style="color: #7E8EA6;">HUBUNGI KAMI</p>
                    <a target="_blank" href="https://www.instagram.com/mitrakeluarga/"><i style="color: #33A4FF;" class="bi bi-instagram"></i>&ensp;<span style="color: #586880;">Instagram</span></a><br>
                    <a target="_blank" href="https://www.tiktok.com/@mitrakeluargaofficial"><i style="color: #33A4FF;" class="bi bi-tiktok"></i>&ensp;<span style="color: #586880;">Tiktok</span></a><br>
                    <a target="_blank" href="https://www.youtube.com/channel/UC0kcFbtKTaC3JYnvPR5LI8w"><i style="color: #33A4FF;" class="bi bi-youtube"></i>&ensp;<span style="color: #586880;">Youtube</span></a><br>
                    <a target="_blank" href="https://www.linkedin.com/company/mitra-keluarga"><i style="color: #33A4FF;" class="bi bi-linkedin"></i>&ensp;<span style="color: #586880;">LinkedIn</span></a><br>
                    <a target="_blank" href="https://www.facebook.com/MitraKeluargaKaryaSehat/"><i style="color: #33A4FF;" class="bi bi-facebook"></i>&ensp;<span style="color: #586880;">Facebook</span></a><br>
                    <a target="_blank" href="/cdn-cgi/l/email-protection#b4c3d1d6f4d9ddc0c6d5dfd1d8c1d5c6d3d59ad7dbd9"><i style="color: #33A4FF;" class="bi bi-envelope-fill"></i>&ensp;<span style="color: #586880;">Email</span></a><br>
                    <a target="_blank" href="https://open.spotify.com/show/4R0Nx2cXK5PIESlvb7HmlJ?si=Jdv77IrPQ6ug-gs0tahuDw&nd=1"><i style="color: #33A4FF;" class="bi bi-spotify"></i>&ensp;<span style="color: #586880;">Podcast</span></a><br>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area -->
    <div class="footer-bottom-area border-0" style="background-color: #F5F5F5;">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center pb-3">
                <div class="col-xl-8 col-lg-8 ">
                    <div class="footer-copy-right">
                        Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                            document.write(new Date().getFullYear());
                        </script> Web Karir Rumah Sakit Mitra Keluarga. Development by <a style="color: #586880;" href="https://jobseeker.software" target="_blank">Jobseeker Software</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="footer-social f-right" style="color: #33A4FF !important;">
                        <a href="#" style="margin-right: 25px; color: #33A4FF !important;">Privacy Policy</a>
                        <a href="#" style="color: #33A4FF !important;">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
</footer>
        <!-- JS here -->
        <!-- All JS Custom Plugins Link Here here -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/popper.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/owl.carousel.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/slick.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/price_rangs.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/wow.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/animated.headline.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.scrollUp.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/contact.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.form.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.validate.min.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/mail-script.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/plugins.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/main.js"></script>
<script src="https://mitrakeluarga.jobseeker.software/public/template/assets/js/loading.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

<script>
    function swalWarning(message, title = "Warning") {
        Swal.fire({
            heightAuto: false,
            icon: 'warning',
            title: title,
            text: message,
        });

    }

    function swalError(message, title = "Error") {
        Swal.fire({
            heightAuto: false,
            icon: 'error',
            title: title,
            text: message,
        });
    }

    function swalSuccess(message, title = "Success") {
        Swal.fire({
            heightAuto: false,
            icon: 'success',
            title: title,
            text: message,
        });
    }

    function swalInfo(message, title = "Info") {
        Swal.fire({
            heightAuto: false,
            icon: 'info',
            title: title,
            text: message,
        });
    }

    function loadingStart() {
        $.LoadingOverlay("show", {
            image: "",
            size: "5",
            fontawesome: "fas fa-circle-notch fa-spin"
        });
    }

    function loadingEnd() {
        setTimeout(function() {
            $.LoadingOverlay("hide");
        }, 10);
    }

    function contentLoadingStart(divSelector) {
        $(divSelector).LoadingOverlay("show", {
            image: "",
            size: "5",
            fontawesome: "fas fa-circle-notch fa-spin"
        });
    }

    function contentLoadingEnd(divSelector) {
        $(divSelector).LoadingOverlay("hide", true);
    }
</script>       <script type="text/javascript">
    var sel_instName = $(".institute-js-select2");
    var sel_majorName = $(".major-js-select2");
    var edu_startYear = $("#edu_start_year");
    var edu_endYear = $("#edu_end_year");
    var edu_gpa = $("#edu_gpa");

    
    // var val_eduType0 = $("#edu_ins-0").val();
    
    var dt_obj = new Date();
    var today_date = dt_obj.getDate();
    var current_month = dt_obj.getMonth() + 1;
    
    var current_year = 2009;
    
    $(document).ready(function() {
        
        $('.select2').select2();

        var selectInstitusiSMA = "<input type='text' id='edu_ins-0' class='form-control' name='education[edu_ins][0]' />";

        var selectInstitusiSarjana = "<select class='form-control wizard-required mb-3 select2' name='education[edu_ins][0]' id='edu_ins-0'></select>";

        $("#edu_type-0").on('change', function() {
            let thisVal = $(this).find(":selected").val();

            if (thisVal == '12') {
                $(".elemen-institusi-pendidikan").html(selectInstitusiSMA);
            } else {
                $(".elemen-institusi-pendidikan").html(selectInstitusiSarjana);

                $("#edu_ins-0").select2({
                    ajax: {
                        url: "https://mitrakeluarga.jobseeker.software/main/mikainstituts",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                educ_type: $("#edu_type-0").children("option:selected").val(),
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function(data, params) {
                            params.page = params.page || 1;

                            return {
                                results: data,
                                pagination: {
                                    // more: (params.page * 30) < 999999
                                }
                            };
                        },
                        cache: true
                    },
                    placeholder: 'Pilih Institusi Pendidikan',
                    minimumInputLength: 5,
                    templateResult: mika_select2,
                    templateSelection: mika_select2Selection
                });

            }
        });

        $(".datepicker").datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
            })
            .on('hide', function(e) {
                $(this).parent().addClass('focus-input');
            });

        $(".datepicker-thnbln").datepicker({
            format: "mm-yyyy",
            startView: "months",
            minViewMode: "months",
            autoclose: true,
        }).on('hide', function(e) {
            $(this).parent().addClass('focus-input');
        });
        $(".datepicker-thn").datepicker({
            format: "yyyy",
            startView: "years",
            minViewMode: "years",
            autoclose: true,
        }).on('hide', function(e) {
            $(this).parent().addClass('focus-input');
        });

        $('#btnSubmitData').on('click', function() {
            $("#btnSubmitData").html("<i class='fa fa-spinner fa-spin '></i> Loading...");
            $('#btnSubmitData').attr("disabled", true);
            var form = $("#drop_list");
            var formData = new FormData(form[0]);
            var resume = $("#resume").val();

            if (resume == "") {
                Swal.fire({
                    title: "Warning",
                    text: "CV / Resume tidak boleh kosong!.",
                    type: "warning"
                });
                $("#btnSubmitData").html("Daftar Sekarang");
                $('#btnSubmitData').attr("disabled", false);
            } else {
                $.ajax({
                    type: "POST",
                    url: "https://mitrakeluarga.jobseeker.software/user/do_signup",
                    data: formData,
                    dataType: "JSON",
                    tryCount: 0,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        loadingStart();
                    },
                    success: function(resp) {
                        // loadingEnd();
                        $("#btnSubmitData").html("Daftar Sekarang");
                        $('#btnSubmitData').attr("disabled", false);

                        if (resp.error == false) {
                            // $.ajax({
                            //  type: "POST",
                            //  url: "https://mitrakeluarga.jobseeker.software/user/upload_resume",
                            //  data: formData,
                            //  dataType: "JSON",
                            //  tryCount: 0,
                            //  retryLimit: 3,
                            //  contentType: false,
                            //  processData: false,
                            //  beforeSend: function() {
                            //      loadingStart();
                            //  },
                            //  success: function(resp) {
                                    loadingEnd();

                            //      if (resp.error == false) {
                            swalSuccess("Pendaftaran Berhasil", "Berhasil");
                            window.location = "https://mitrakeluarga.jobseeker.software//profile";
                        } else if (resp.error == 'apply') {
                            swalSuccess("Berhasil Mendaftar dan Melamar Pekerjaan", "Berhasil");
                            window.location = resp.message;
                                    // } else {
                                    //  swalWarning(resp.message)
                                    // }
                                // }
                            // });
                        } else {
                            loadingEnd();
                            swalWarning(resp.message)
                        }
                    },
                    error: function(xhr, textstatus, errorthrown) {
                        loadingEnd();

                        $("#btnSubmitData").html("Daftar Sekarang");
                        $('#btnSubmitData').attr("disabled", false);
                        if (textstatus == "timeout") {
                            this.tryCount++;
                            if (this.tryCount <= this.retryLimit) {
                                $.ajax(this);
                            }
                        // } else {
                            // loadingEnd();
                            // swalError('Terjadi kesalahan di sistem. Mohon hubungi Adminstrator')

                        }
                    }
                });
            }
            return false;
        });

        $("#photo").change(function() {
            var photo = document.getElementById('photo').files[0];

            if (photo != undefined) {
                if (hasExtension('photo', ['.png', '.jpg', '.jpeg']) === false) {
                    Swal.fire({
                        title: "Register Gagal!",
                        text: "Pilih foto profesional terbaru Anda, dalam format JPG / PNG",
                        imageUrl: "https://mitrakeluarga.jobseeker.software/assets/img/icon_failed.svg",
                        confirmButtonColor: "#F90000"
                    });
                    document.getElementById('photo_img').style.backgroundImage = '';
                } else {
                    if (photo.size > 8192000) {
                        Swal.fire({
                            title: "Register Gagal!",
                            text: "Pilih foto profesional terbaru Anda, maksimal 8 MB",
                            imageUrl: "https://mitrakeluarga.jobseeker.software/assets/img/icon_failed.svg",
                            confirmButtonColor: "#F90000"
                        });
                        document.getElementById('photo_img').style.backgroundImage = '';
                    } else {
                        var file = $(this).val();
                        readURL(this);
                        $('#photo-error').remove();
                    }
                }
            } else {
                document.getElementById('photo_img').style.backgroundImage = '';
            }
        });


        $('#form-foto-box-image').on('click', function() {
            $('#form-foto-button').click();
        });

        $(".upl").on('click', function() {
            $("#photo").trigger("click");
        })

        $("#photo").on('change', function() {
            var photo = document.getElementById('photo').files[0];
            if (photo != undefined) {
                if (hasExtension('photo', ['.png', '.jpg', '.jpeg']) === false) {
                    Swal.fire({
                        title: "Registration Failed!",
                        text: "Choose your latest professional photo in JPG/PNG format.",
                        imageUrl: "https://mitrakeluarga.jobseeker.software/assets/img/icon_failed.svg",
                        confirmButtonColor: "#F90000"
                    });
                    document.getElementById('form-foto-box-image').style.backgroundImage = '';
                } else {
                    if (photo.size > 8192000) {
                        Swal.fire({
                            title: "Registration Failed!",
                            text: "Choose your latest professional photo at least 8 MB",
                            imageUrl: "https://mitrakeluarga.jobseeker.software/assets/img/icon_failed.svg",
                            confirmButtonColor: "#F90000"
                        });
                        document.getElementById('form-foto-box-image').style.backgroundImage = '';
                    } else {
                        var file = $(this).val();
                        // $('#photo_name').html(file);
                        readURL(this);
                        $('#photo-error').remove();
                    }
                }
            } else {
                document.getElementById('form-foto-box-image').style.backgroundImage = '';
            }
        });

        $('input[type=radio][name=is_sim]').change(function() {
            if (this.value == 1) {
                $("#id_type").prop('hidden', false);
            } else if (this.value == 0) {
                $("#id_type").prop('hidden', 'hidden');
                $("#id_type").val('').change();
            }
        });

        $('input[type=radio][name=is_str]').change(function() {
            if (this.value == 1) {
                $("#str_number").prop('hidden', false);
                $("#str_publish_location").prop('hidden', false);
                $("#str_publish_date").prop('hidden', false);
                $("#str_end_date").prop('hidden', false);
                $("#str_number_1").prop('hidden', false);
                $("#str_publish_location_1").prop('hidden', false);
                $("#str_publish_date_1").prop('hidden', false);
                $("#str_end_date_1").prop('hidden', false);
                $("#str_number_2").prop('hidden', false);
                $("#str_publish_location_2").prop('hidden', false);
                $("#str_publish_date_2").prop('hidden', false);
                $("#str_end_date_2").prop('hidden', false);
            } else if (this.value == 0) {
                $("#str_number").prop('hidden', 'hidden');
                $("#str_number").val('').change();
                $("#str_publish_location").prop('hidden', 'hidden');
                $("#str_publish_location").val('').change();
                $("#str_publish_date").prop('hidden', 'hidden');
                $("#str_publish_date").val('').change();
                $("#str_end_date").prop('hidden', 'hidden');
                $("#str_end_date").val('').change();
                $("#str_number_1").prop('hidden', 'hidden');
                $("#str_number_1").val('').change();
                $("#str_publish_location_1").prop('hidden', 'hidden');
                $("#str_publish_location_1").val('').change();
                $("#str_publish_date_1").prop('hidden', 'hidden');
                $("#str_publish_date_1").val('').change();
                $("#str_end_date_1").prop('hidden', 'hidden');
                $("#str_end_date_1").val('').change();
                $("#str_number_2").prop('hidden', 'hidden');
                $("#str_number_2").val('').change();
                $("#str_publish_location_2").prop('hidden', 'hidden');
                $("#str_publish_location_2").val('').change();
                $("#str_publish_date_2").prop('hidden', 'hidden');
                $("#str_publish_date_2").val('').change();
                $("#str_end_date_2").prop('hidden', 'hidden');
                $("#str_end_date_2").val('').change();
            }
        });

        $('input[type=radio][name=domisili_sama]').change(function() {
            if (this.value == 0) {
                $("#domisi_ilang").prop('hidden', false);
                $(".wajib").addClass("wizard-required");
                // $("#home_address").val($("#ktp_address").val());
                // $("#rtrw").val($("#ktp_rtrw").val());
                // $("#postal_code").val($("#ktp_postal_code").val());
                // $("#city_id").val($("#ktp_city_id").val());
                // $("#district_id").val($("#ktp_district_id").val());
                // $("#province_id").val($("#ktp_province_id").val());
                // $("#country").val($("#ktp_country").val());
            } else if (this.value == 1) {
                $("#domisi_ilang").prop('hidden', 'hidden');
                $("#domisi_ilang").val('').change();
                $(".wajib").removeClass("wizard-required");
                // $("#home_address").val('');
                // $("#rtrw").val('').change('');
                // $("#postal_code").val('').change('');
                // $("#city_id").val('').change('');
                // $("#district_id").val('').change('');
                // $("#province_id").val('').change('');
                // $("#country").val('').change('');
            }
        });

        $('input[type=radio][name=is_relate]').change(function() {
            if (this.value == 1) {
                $("#relation_detail").prop('hidden', false);
            } else if (this.value == 0) {
                $("#relation_detail").prop('hidden', 'hidden');
                $("#relation_detail").val('').change();
            }
        });

        $('input[type=radio][name=is_exp]').change(function() {
            if (this.value == 1) {
                $(".fresh_gred").prop('hidden', false);
                $(".exp_wajib").addClass("wizard-required");
            } else if (this.value == 0) {
                $(".exp_wajib").removeClass("wizard-required");
                $(".fresh_gred").prop('hidden', 'hidden');
                $(".fresh_gred").val('').change();
            }
        });

        $('input[type=radio][name=brevet]').change(function() {
            if (this.value == 1) {
                $("#brevet_file_1").prop('hidden', false);
            } else if (this.value == 0) {
                $("#brevet_file_1").prop('hidden', 'hidden');
                $("#brevet_file_1").val('').change();
            }
        });

        $('input[type=radio][name=btcls]').change(function() {
            if (this.value == 1) {
                $("#btcls_file_1").prop('hidden', false);
            } else if (this.value == 0) {
                $("#btcls_file_1").prop('hidden', 'hidden');
                $("#btcls_file_1").val('').change();
            }
        });

        $('input[type=radio][name=ppgdon]').change(function() {
            if (this.value == 1) {
                $("#ppgdon_file_1").prop('hidden', false);
            } else if (this.value == 0) {
                $("#ppgdon_file_1").prop('hidden', 'hidden');
                $("#ppgdon_file_1").val('').change();
            }
        });

        $('input[type=radio][name=iso]').change(function() {
            if (this.value == 1) {
                $("#iso_file_1").prop('hidden', false);
            } else if (this.value == 0) {
                $("#iso_file_1").prop('hidden', 'hidden');
                $("#iso_file_1").val('').change();
            }
        });

        $('input[type=radio][name=cert]').change(function() {
            if (this.value == 1) {
                $("#cert_file_1").prop('hidden', false);
            } else if (this.value == 0) {
                $("#cert_file_1").prop('hidden', 'hidden');
                $("#cert_file_1").val('').change();
            }
        });

        $("#currently_work1").change(function(e) {
            e.preventDefault();
            $('#end_year1').prop('disabled', false);
            if ($(this).prop('checked') == true) {
                $('#end_year1').prop('disabled', true);
            }
        });

        $(".uang").keyup(function(event) {
            // skip for arrow keys
            if (event.which >= 37 && event.which <= 40) return;

            // format number
            $(this).val(function(index, value) {
                return "Rp. " + value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            });
        });

        $("#edu_ins-0").select2({
            ajax: {
                url: "https://mitrakeluarga.jobseeker.software/main/mikainstituts",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        educ_type: $("#edu_type-0").children("option:selected").val(),
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;

                    return {
                        results: data,
                        pagination: {
                            // more: (params.page * 30) < 999999
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Pilih Institusi Pendidikan',
            minimumInputLength: 5,
            templateResult: mika_select2,
            templateSelection: mika_select2Selection
        });

        $("#edu_major-0").select2({
            ajax: {
                url: "https://mitrakeluarga.jobseeker.software/main/mikamajors",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        educ_type: $("#edu_type-0").children("option:selected").val(),

                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;

                    return {
                        results: data,
                        pagination: {
                            // more: (params.page * 30) < 999999
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Pilih Jurusan Pendidikan',
            minimumInputLength: 5,
            templateResult: mika_select2,
            templateSelection: mika_select2Selection
        });

        $(".ktp_country-js-select2").select2()
        $(".ktp_province_id-js-select2").select2()
        $(".ktp_city_id-js-select2").select2()
        $(".ktp_district_id-js-select2").select2()

        $(".country-js-select2").select2()
        $(".province_id-js-select2").select2()
        $(".city_id-js-select2").select2()
        $(".district_id-js-select2").select2()

        $(".ktp_province_id-js-select2").on('change', function() {
            let country = $(".ktp_country-js-select2").val()
            let province = $(".ktp_province_id-js-select2").val()

            getKotaKabDomisili(country, province, "ktp")
        });

        $(".ktp_city_id-js-select2").on('change', function() {
            let country = $(".ktp_country-js-select2").val();
            let province = $(".ktp_province_id-js-select2").val();
            let city = $(".ktp_city_id-js-select2").val();

            getKecamatanDomisili(country, province, city, "ktp")
        });

        $(".province_id-js-select2").on('change', function() {
            let country = $(".country-js-select2").val()
            let province = $(".province_id-js-select2").val()

            getKotaKabDomisili(country, province, "dom")
        });

        $(".city_id-js-select2").on('change', function() {
            let country = $(".country-js-select2").val();
            let province = $(".province_id-js-select2").val();
            let city = $(".city_id-js-select2").val();

            getKecamatanDomisili(country, province, city, "dom")
        });

        // click on next button
        jQuery('.form-wizard-next-btn').click(function() {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();
                // alert( $('.dob_tanggal').val() );

                if (thisValue == "" || thisValue == null) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if (nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show", "400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active', "400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                jQuery(document).find('.wizard-fieldset').each(function() {
                    if (jQuery(this).hasClass('show')) {
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function() {
                            if (jQuery(this).attr('data-attr') == formAtrr) {
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({
                                    "left": position.left,
                                    "width": innerWidth
                                });
                            } else {
                                jQuery(this).removeClass('active');
                            }
                        });
                    }
                });
            }
        });
        //click on previous button
        jQuery('.form-wizard-previous-btn').click(function() {
            var counter = parseInt(jQuery(".wizard-counter").text());;
            var prev = jQuery(this);
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show", "400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active', "400");
            jQuery(document).find('.wizard-fieldset').each(function() {
                if (jQuery(this).hasClass('show')) {
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function() {
                        if (jQuery(this).attr('data-attr') == formAtrr) {
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({
                                "left": position.left,
                                "width": innerWidth
                            });
                        } else {
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        });
        //click on form submit button
        jQuery(document).on("click", ".form-wizard .form-wizard-submit", function() {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();

                if (thisValue == "" || thisValue == null) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });
        // focus on input field check empty or not
        jQuery(".form-control").on('focus', function() {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().addClass("focus-input");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function() {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
    });

    function addOption(selectbox, text, value) {
        var optn = document.createElement("OPTION");
        optn.text = text;
        optn.value = value;
        selectbox.options.add(optn);
    }

    function addOption_list1() {
        for (var i = 1; i < 32; ++i) {
            addOption(document.drop_list.dob_tanggal, i, i);
        }
        addOption_list2();
    }

    function addOption_list2() {
        var month = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        for (var i = 0; i < month.length; ++i) {
            addOption(document.drop_list.dob_bulan, month[i], month[i]);
        }
        addOption_list3();

    }

    function addOption_list3() {
        for (var i = 0; i < 57; ++i) {
            var j = current_year - i - 2;
            match_year = current_year - i;
            addOption(document.drop_list.dob_tahun, j, j);
        }

    }

    function hasExtension(inputName, exts) {
        var fileName = $('input[name=' + inputName + ']').val().toLowerCase();
        return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                let urlString = "url(" + e.target.result + ")";

                document.getElementById('form-foto-box-image').style.backgroundImage = urlString;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function mika_select2(repo) {
        if (repo.loading) {
            return repo.text;
        }

        var $container = $(
            "<div class='select2-result-repository clearfix'>" +
            "<div class='select2-result-repository__meta'>" +
            "<div class='select2-result-repository__title'></div>" +
            "</div>" +
            "</div>"
        );

        $container.find(".select2-result-repository__title").text(repo.text);

        return $container;
    }

    function mika_select2Selection(repo) {
        return repo.text || repo.id;
    }

    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

<script type="text/javascript">
    var nEdu = 0;
    var nCert = 0;
    var nKers = 0;

    function renderDataEducation() {
        nEdu++;
        var renderDataEducation = `

            <div class="education-detail education-data-` + nEdu + ` mt-1 mb-4" style="padding: 8px 16px; border: 1px solid #c9c9c9; border-radius: 8px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group text-left">
                            <label class="form-label" for="edu_type-` + nEdu + `">Strata Pendidikan <span class="required">*</span></label>
                            <select class="form-control mb-3 wizard-required" name="education[edu_type][` + nEdu + `]" id="edu_type-` + nEdu + `">
                                <option selected value="">Pilih Strata Pendidikan.</option>
                                <option value='12' >SMU/SMK/Sederajat</option><option value='21' >D1</option><option value='22' >D2</option><option value='23' >D3</option><option value='24' >D4</option><option value='31' >S1</option><option value='41' >Profesi</option><option value='42' >S2</option><option value='43' >S3</option><option value='44' >Spesialis</option>                           </select>
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-left">
                            <label class="form-label" for="edu_ins-` + nEdu + `">Nama Institusi Pendidikan <span class="required">*</span></label>
                            <span class="elemen-institusi-pendidikan-` + nEdu + `">
                                <select class="form-control mb-3 select2 wizard-required" name="education[edu_ins][` + nEdu + `]" id="edu_ins-` + nEdu + `"></select>
                            </span>
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-left">
                            <label class="form-label" for="edu_major-` + nEdu + `">Jurusan Pendidikan <span class="required">*</span></label>
                            <select class="form-control mb-3 select2 wizard-required" name="education[edu_major][` + nEdu + `]" id="edu_major-` + nEdu + `"></select>
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group text-left">
                            <label class="form-label" for="edu_start_year-` + nEdu + `">Tahun Mulai <span class="required">*</span></label>
                            <input type="text" name="education[edu_start_year][` + nEdu + `]" id="edu_start_year-` + nEdu + `" class="datepicker-thn form-control wizard-required" />
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-left">
                            <label class="form-label" for="edu_end_year-` + nEdu + `">Tahun Lulus <span class="required">*</span></label>
                            <input type="text" name="education[edu_end_year][` + nEdu + `]" id="edu_end_year-` + nEdu + `" class="datepicker-thn form-control wizard-required" />
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-left">
                            <label class="form-label" for="edu_gpa-` + nEdu + `">IPK <span class="required">*</span></label>
                            <input type="text" name="education[edu_gpa][` + nEdu + `]" id="edu_gpa-` + nEdu + `" class="form-control wizard-required" onkeypress="return /[0-9.,'-/\s]/i.test(event.key)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="5" />
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="button" class="btn-hapus-data mt-3 mb-3" onclick="removeDataEdu(this)"><i class="fa fa-trash"></i> Hapus Data</button>
                    </div>
                </div>
            </div>`;

        var selectInstitusiSMA__ = "<input type='text' id='edu_ins-" + nEdu + "' class='form-control' name='education[edu_ins][" + nEdu + "]' />";

        var selectInstitusiSarjana__ = "<select class='form-control wizard-required mb-3 select2' name='education[edu_ins][" + nEdu + "]' id='edu_ins-" + nEdu + "'></select>";


        $("#expDataEducationList").append(renderDataEducation);

        $("#edu_type-" + nEdu).on('change', function() {
            let thisVal = $(this).find(":selected").val();

            if (thisVal == '12') {
                $(".elemen-institusi-pendidikan-" + nEdu).html(selectInstitusiSMA__);
            } else {
                $(".elemen-institusi-pendidikan-" + nEdu).html(selectInstitusiSarjana__);
                $("#edu_ins-" + nEdu).select2({
                    ajax: {
                        url: "https://mitrakeluarga.jobseeker.software/main/mikainstituts",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                educ_type: $("#edu_type-" + nEdu).children("option:selected").val(),
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function(data, params) {
                            params.page = params.page || 1;

                            return {
                                results: data,
                                pagination: {
                                    // more: (params.page * 30) < 999999
                                }
                            };
                        },
                        cache: true
                    },
                    placeholder: 'Pilih Institusi Pendidikan',
                    minimumInputLength: 5,
                    templateResult: mika_select2,
                    templateSelection: mika_select2Selection
                });
            }
        });


        $("#edu_type-" + nEdu).select2();

        $("#edu_ins-" + nEdu).select2({
            ajax: {
                url: "https://mitrakeluarga.jobseeker.software/main/mikainstituts",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        educ_type: $("#edu_type-" + nEdu).children("option:selected").val(),
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;

                    return {
                        results: data,
                        pagination: {
                            // more: (params.page * 30) < 999999
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Pilih Institusi Pendidikan',
            minimumInputLength: 5,
            templateResult: mika_select2,
            templateSelection: mika_select2Selection
        });


        $("#edu_major-" + nEdu).select2({
            ajax: {
                url: "https://mitrakeluarga.jobseeker.software/main/mikamajors",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        educ_type: $("#edu_type-" + nEdu).children("option:selected").val(),
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;

                    return {
                        results: data,
                        pagination: {
                            // more: (params.page * 30) < 999999
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Pilih Jurusan Pendidikan',
            minimumInputLength: 5,
            templateResult: mika_select2,
            templateSelection: mika_select2Selection
        });
    }

    function renderDataCertificate() {
        nCert++;
        var renderDataCertificate = `
        <div class="cert-detail certificate-data-` + nCert + ` mt-1 mb-4" style="padding: 8px 16px; border: 1px solid #c9c9c9; border-radius: 8px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group text-left">
                        <label for="topic-` + nCert + `" class="form-label">Nama Pelatihan / Sertifikasi</label>
                        <input type="text" id="topic-` + nCert + `" class="form-control" name="pelatihan[topic][` + nCert + `]" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group text-left">
                        <label for="organized_by-` + nCert + `" class="form-label">Penyelenggara</label>
                        <input type="text" id="organized_by-` + nCert + `" class="form-control" name="pelatihan[organized_by][` + nCert + `]" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group text-left">
                        <label for="cert_start_year-` + nCert + `" class="form-label">Tahun Pelaksanaan</label>
                        <input type="text" id="cert_start_year-` + nCert + `" class="datepicker-thnbln form-control" name="pelatihan[cert_start_year][` + nCert + `]" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group text-left">
                        <label for="cert_end_year-` + nCert + `" class="form-label">Berakhir Pada</label>
                        <input type="text" id="cert_end_year-` + nCert + `" class="datepicker-thnbln form-control" name="pelatihan[cert_end_year][` + nCert + `]" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn-hapus-data mt-3 mb-3" onclick="removeDataCert(this)"><i class="fa fa-trash"></i> Hapus Data</button>
                </div>
            </div>
        </div>`;

        $("#dataCertificateList").append(renderDataCertificate);
    }

    function renderDataKerja() {
        nKers++;
        
        var renderDataKerja = `
        <div class="kerja-detail kerja-data`+ nKers +` mt-1 mb-4 " style="padding: 8px 16px; border: 1px solid #c9c9c9; border-radius: 8px;">
            <div class="experience-section">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_name-`+ nKers +`" class="">Nama Perusahaan <span class="required">*</span></label>
                            <input type="text" name="kerja[company_name][`+ nKers +`]" id="company_name-`+ nKers +`" class="exp_wajib form-control wizard-required" />
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_address-`+ nKers +`" clas-text-label">Lokasi Perusahaan <span class="required">*</span></label>
                            <input type="text" name="kerja[company_address][`+ nKers +`]" id="company_address-`+ nKers +`" class="exp_wajib form-control wizard-required" />
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="company_industry-`+ nKers +`">Industri Perusahaan <span class="required">*</span></label>
                        <select class="exp_wajib form-control wizard-required mb-3" name="kerja[company_industry][`+ nKers +`]" id="company_industry-`+ nKers +`">
                            <option selected value="" disabled="true">Pilih Industri Perusahaan</option>
                            <option value='1001' >Agribisnis</option><option value='1002' >Akuntan / Auditor</option><option value='1003' >Alas Kaki</option><option value='1004' >Asuransi</option><option value='1005' >Bioteknologi&Biologi</option><option value='1006' >Biro Perjalanan</option><option value='1007' >Bubur Kertas/Kertas</option><option value='1008' >Des. Interior/Grafis</option><option value='1009' >E-Commerce</option><option value='1010' >Ekspedisi/Agen Kargo</option><option value='1011' >Elektronika/Semikond</option><option value='1012' >Energi</option><option value='1013' >Farmasi</option><option value='1014' >Furnitur</option><option value='1015' >Garmen / Tekstil</option><option value='1016' >Hiburan / Rekreasi</option><option value='1017' >Hotel</option><option value='1018' >Hukum</option><option value='1019' >Internet</option><option value='1020' >Jasa Pemindahan</option><option value='1021' >Jasa Pengamanan</option><option value='1022' >Kehutanan/Perkayuan</option><option value='1023' >Kelautan/Aquakultur</option><option value='1024' >Keramik&Alat Bersih</option><option value='1025' >Kesehatan</option><option value='1026' >Keuangan / Bank</option><option value='1027' >Kimia</option><option value='1028' >Komputer / IT</option><option value='1029' >Konglomerasi</option><option value='1030' >Konstruksi</option><option value='1031' >Konsultan</option><option value='1032' >Kosmetik</option><option value='1033' >Kulit</option><option value='1034' >Kurir</option><option value='1035' >Logam</option><option value='1036' >Logistik / Transport</option><option value='1037' >Mainan</option><option value='1038' >Makanan dan Minuman</option><option value='1039' >Manajemen Fasilitas</option><option value='1040' >Mgmt Lingk./Limbah</option><option value='1041' >Media</option><option value='1042' >Mekanik / Listrik</option><option value='1043' >Mesin / Peralatan</option><option value='1044' >Minyak dan Gas</option><option value='1045' >Otomotif</option><option value='1046' >Pemerintahan</option><option value='1047' >Pemrosesan Makanan</option><option value='1048' >Pendidikan</option><option value='1049' >Penerbangan</option><option value='1050' >Pengapalan</option><option value='1051' >Pengolahan SDA</option><option value='1052' >Perawatan Kesehatan</option><option value='1053' >Percetakan & Kemasan</option><option value='1054' >Perniagaan Komoditas</option><option value='1055' >Perdagangan Umum</option><option value='1056' >Pergudangan</option><option value='1057' >Perikanan</option><option value='1058' >Periklanan/Cetak</option><option value='1059' >Permata & Perhiasan</option><option value='1060' >Permen / Biskuit</option><option value='1061' >Pertambangan/Mineral</option><option value='1062' >Polimer/Plastk/Karet</option><option value='1063' >Properti</option><option value='1064' >Pupuk & Pestisida</option><option value='1065' >Rancang Bangun Pswt</option><option value='1066' >Rekayasa&Konstruksi</option><option value='1067' >Rekrutmen / KPO</option><option value='1068' >Restoran</option><option value='1069' >Ritel</option><option value='1070' >Sektor Nirlaba</option><option value='1071' >Semen</option><option value='1072' >Seni/Desain/Fashion</option><option value='1073' >Servis</option><option value='1074' >SumberDaya Alam Lain</option><option value='1075' >Telekomunikasi</option><option value='1076' >Wisata/Agen Travel</option><option value='1999' >Lain-lain</option>                     </select>
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="job_type_id-`+ nKers +`">Status Kepegawaian <span class="required">*</span></label>
                        <select class="exp_wajib form-control wizard-required mb-3" name="kerja[job_type_id][`+ nKers +`]" id="job_type_id-`+ nKers +`">
                            <option selected value="" disabled="true">Pilih Status Kepegawaian</option>
                            <option value='6' >Tetap</option><option value='7' >Masa Percobaan</option><option value='8' >PKWT</option><option value='14' >Sub Kontraktor</option><option value='15' >Trainee</option><option value='16' >Magang</option><option value='17' >Harian Lepas</option><option value='18' >Borongan</option><option value='19' >Lain-lain</option>                       </select>
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="position-`+ nKers +`" class="">Posisi Kerja <span class="required">*</span></label>
                        <input type="text" name="kerja[position][`+ nKers +`]" id="position-`+ nKers +`" class="exp_wajib form-control wizard-required" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="work_start_year-`+ nKers +`" class="">Mulai Bekerja dari <span class="required">*</span></label>
                        <input type="text" name="kerja[work_start_year][`+ nKers +`]" id="work_start_year-`+ nKers +`" class="exp_wajib form-control wizard-required" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="word_end_year-`+ nKers +`" class="">Sampai dengan <span class="required">*</span></label>
                        <input type="text" name="kerja[work_end_year][`+ nKers +`]" id="word_end_year-`+ nKers +`" class="exp_wajib form-control wizard-required" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="job_level-`+ nKers +`">Tingkat Posisi <span class="required">*</span></label>
                        <select class="exp_wajib form-control wizard-required mb-3" name="kerja[job_level][`+ nKers +`]" id="job_level-`+ nKers +`">
                            <option selected value="" disabled="true">Pilih Tingkat Posisi</option>
                            <option value='1' >Staf/Pelaksana</option><option value='2' >Kepala Seksi</option><option value='3' >Kepala Bagian/Supervisor</option><option value='4' >Asisten Manager</option><option value='5' >Manager</option><option value='6' >General Manager</option><option value='7' >Board of Director</option><option value='8' >Owner</option><option value='9' >Konsultan</option><option value='10' >Freelancer</option><option value='11' >Lain-lain</option>                     </select>
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="country-`+ nKers +`">Negara <span class="required">*</span></label>
                        <select class="exp_wajib form-control wizard-required mb-3" name="kerja[exp_country][`+ nKers +`]" id="exp_country-`+ nKers +`">
                            <option selected value="" disabled="true">Pilih Negara</option>
                            <option value='AF' >Afghanistan</option><option value='AL' >Albania</option><option value='DZ' >Algeria</option><option value='AS' >American Samoa</option><option value='AD' >Andorra</option><option value='AO' >Angola</option><option value='AI' >Anguilla</option><option value='AQ' >Antarctica</option><option value='AG' >Antigua and Barbuda</option><option value='AR' >Argentina</option><option value='AM' >Armenia</option><option value='AW' >Aruba</option><option value='AU' >Australia</option><option value='AT' >Austria</option><option value='AZ' >Azerbaijan</option><option value='BS' >Bahamas</option><option value='BH' >Bahrain</option><option value='BD' >Bangladesh</option><option value='BB' >Barbados</option><option value='BY' >Belarus</option><option value='BE' >Belgium</option><option value='BZ' >Belize</option><option value='BJ' >Benin</option><option value='BM' >Bermuda</option><option value='BT' >Bhutan</option><option value='BL' >Blue</option><option value='BO' >Bolivia</option><option value='BQ' >Bonaire, Sint Eustatius and Saba</option><option value='BA' >Bosnia and Herzegovina</option><option value='BW' >Botswana</option><option value='BV' >Bouvet Islands</option><option value='BR' >Brazil</option><option value='IO' >British Indian Ocean Territory</option><option value='VG' >British Virgin Islands</option><option value='BN' >Brunei Darussalam</option><option value='BG' >Bulgaria</option><option value='BF' >Burkina Faso</option><option value='MM' >Burma</option><option value='BI' >Burundi</option><option value='KH' >Cambodia</option><option value='CM' >Cameroon</option><option value='CA' >Canada</option><option value='CV' >Cape Verde</option><option value='KY' >Cayman Islands</option><option value='CF' >Central African Republic</option><option value='TD' >Chad</option><option value='CL' >Chile</option><option value='CN' >China</option><option value='CX' >Christmas Islnd</option><option value='CC' >Cocos (Keeling) Islands</option><option value='CO' >Colombia</option><option value='KM' >Comoros</option><option value='CK' >Cook Islands</option><option value='CR' >Costa Rica</option><option value='CI' >Cote d'Ivoire</option><option value='HR' >Croatia</option><option value='CU' >Cuba</option><option value='CW' >Curacao</option><option value='CY' >Cyprus</option><option value='CZ' >Czech Republic</option><option value='CD' >Democratic Republic of the Congo</option><option value='DK' >Denmark</option><option value='DJ' >Djibouti</option><option value='DM' >Dominica</option><option value='DO' >Dominican Republic</option><option value='TL' >East Timor</option><option value='TP' >East Timor</option><option value='EC' >Ecuador</option><option value='EG' >Egypt</option><option value='SV' >El Salvador</option><option value='GQ' >Equatorial Guinea</option><option value='ER' >Eritrea</option><option value='EE' >Estonia</option><option value='ET' >Ethiopia</option><option value='EU' >European Union</option><option value='FK' >Falkland Islands</option><option value='FO' >Faroe Islands</option><option value='FJ' >Fiji</option><option value='FI' >Finland</option><option value='FR' >France</option><option value='GF' >French Guyana</option><option value='PF' >French Polynesia</option><option value='TF' >French Southern and Antarctic Lands</option><option value='GA' >Gabon</option><option value='GM' >Gambia</option><option value='GE' >Georgia</option><option value='DE' >Germany</option><option value='GH' >Ghana</option><option value='GI' >Gibraltar</option><option value='GR' >Greece</option><option value='GL' >Greenland</option><option value='GD' >Grenada</option><option value='GP' >Guadeloupe</option><option value='GU' >Guam</option><option value='GT' >Guatemala</option><option value='GG' >Guernsey (Channel Islands)</option><option value='GN' >Guinea</option><option value='GW' >Guinea-Bissau</option><option value='GY' >Guyana</option><option value='HT' >Haiti</option><option value='HM' >Heard and McDonald Islands</option><option value='HN' >Honduras</option><option value='HK' >Hong Kong</option><option value='HU' >Hungary</option><option value='IS' >Iceland</option><option value='IN' >India</option><option value='ID' >Indonesia</option><option value='IR' >Iran</option><option value='IQ' >Iraq</option><option value='IE' >Ireland</option><option value='IM' >Isle of Man</option><option value='IL' >Israel</option><option value='IT' >Italy</option><option value='JM' >Jamaica</option><option value='JP' >Japan</option><option value='JE' >Jersey</option><option value='JO' >Jordan</option><option value='KZ' >Kazakhstan</option><option value='KE' >Kenya</option><option value='KI' >Kiribati</option><option value='KW' >Kuwait</option><option value='KG' >Kyrgyzstan</option><option value='LA' >Laos</option><option value='LV' >Latvia</option><option value='LB' >Lebanon</option><option value='LS' >Lesotho</option><option value='LR' >Liberia</option><option value='LY' >Libya</option><option value='LI' >Liechtenstein</option><option value='LT' >Lithuania</option><option value='LU' >Luxembourg</option><option value='MO' >Macau</option><option value='MK' >Macedonia</option><option value='MG' >Madagascar</option><option value='MW' >Malawi</option><option value='MY' >Malaysia</option><option value='MV' >Maldives</option><option value='ML' >Mali</option><option value='MT' >Malta</option><option value='MH' >Marshall Islands</option><option value='MQ' >Martinique</option><option value='MR' >Mauritania</option><option value='MU' >Mauritius</option><option value='YT' >Mayotte</option><option value='MX' >Mexico</option><option value='FM' >Micronesia</option><option value='MD' >Moldova</option><option value='MC' >Monaco</option><option value='MN' >Mongolia</option><option value='MS' >Montserrat</option><option value='MA' >Morocco</option><option value='MZ' >Mozambique</option><option value='NA' >Namibia</option><option value='NT' >NATO</option><option value='NR' >Nauru</option><option value='NP' >Nepal</option><option value='NL' >Netherlands</option><option value='NC' >New Caledonia</option><option value='NZ' >New Zealand</option><option value='NI' >Nicaragua</option><option value='NE' >Niger</option><option value='NG' >Nigeria</option><option value='NU' >Niue</option><option value='NF' >Norfolk Islands</option><option value='KP' >North Korea</option><option value='MP' >North Mariana Islands</option><option value='NO' >Norway</option><option value='OM' >Oman</option><option value='OR' >Orange</option><option value='PK' >Pakistan</option><option value='PW' >Palau</option><option value='PS' >Palestine</option><option value='PA' >Panama</option><option value='PG' >Papua New Guinea</option><option value='PY' >Paraguay</option><option value='PE' >Peru</option><option value='PH' >Philippines</option><option value='PN' >Pitcairn Islands</option><option value='PL' >Poland</option><option value='PT' >Portugal</option><option value='PR' >Puerto Rico</option><option value='QA' >Qatar</option><option value='CG' >Republic of the Congo</option><option value='RE' >Reunion</option><option value='RO' >Romania</option><option value='RU' >Russian Federation</option><option value='RW' >Rwanda</option><option value='SH' >Saint Helena</option><option value='KN' >Saint Kitts and Nevis</option><option value='WS' >Samoa</option><option value='SM' >San Marino</option><option value='ST' >Sao Tome and Principe</option><option value='SA' >Saudi Arabia</option><option value='SN' >Senegal</option><option value='CS' >Serbia and Montenegro</option><option value='SC' >Seychelles</option><option value='SL' >Sierra Leone</option><option value='SG' >Singapore</option><option value='SX' >Sint Maarten (Dutch part)</option><option value='SK' >Slovakia</option><option value='SI' >Slovenia</option><option value='SB' >Solomon Islands</option><option value='SO' >Somalia</option><option value='ZA' >South Africa</option><option value='GS' >South Georgia and the Southern Sandwich Islands</option><option value='KR' >South Korea</option><option value='SS' >South Sudan</option><option value='ES' >Spain</option><option value='LK' >Sri Lanka</option><option value='LC' >St. Lucia</option><option value='PM' >St. Pierre and Miquelon</option><option value='VC' >St. Vincent and the Grenadines</option><option value='SD' >Sudan</option><option value='SR' >Suriname</option><option value='SJ' >Svalbard</option><option value='SZ' >Swaziland</option><option value='SE' >Sweden</option><option value='CH' >Switzerland</option><option value='SY' >Syria</option><option value='TW' >Taiwan</option><option value='TJ' >Tajikistan</option><option value='TZ' >Tanzania</option><option value='TH' >Thailand</option><option value='TG' >Togo</option><option value='TK' >Tokelau Islands</option><option value='TO' >Tonga</option><option value='TT' >Trinidad and Tobago</option><option value='TN' >Tunisia</option><option value='TR' >Turkey</option><option value='TM' >Turkmenistan</option><option value='TC' >Turks and Caicos Islands</option><option value='TV' >Tuvalu</option><option value='UG' >Uganda</option><option value='UA' >Ukraine</option><option value='AE' >United Arab Emirates</option><option value='GB' >United Kingdom</option><option value='UN' >United Nations</option><option value='UM' >United States Minor Outlying Islands</option><option value='VI' >United States Virgin Islands</option><option value='UY' >Uruguay</option><option value='US' >USA</option><option value='UZ' >Uzbekistan</option><option value='VU' >Vanuatu</option><option value='VA' >Vatican City</option><option value='VE' >Venezuela</option><option value='VN' >Vietnam</option><option value='WF' >Wallis and Futuna Islands</option><option value='EH' >Western Sahara</option><option value='YE' >Yemen</option><option value='ZM' >Zambia</option><option value='ZW' >Zimbabwe</option>                      </select>
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="last_drawn_salary-`+ nKers +`" class="">Gaji Terakhir <span class="required">*</span></label>
                        <input type="text" name="kerja[last_drawn_salary][`+ nKers +`]" id="last_drawn_salary-`+ nKers +`" class="exp_wajib uang form-control wizard-required" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="reason_for_leaving-`+ nKers +`" class="">Alasan Keluar <span class="required">*</span></label>
                        <input type="text" name="kerja[reason_for_leaving][`+ nKers +`]" id="reason_for_leaving-`+ nKers +`" class="exp_wajib form-control wizard-required" />
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn-hapus-data mt-3 mb-3" onclick="removeDataKer(this)"><i class="fa fa-trash"></i> Hapus Data</button>
                </div>
            </div>
        </div>
        `;

        $("#dataKerjaList").append(renderDataKerja);

        $("#company_industry-" + nKers).select2();
        $("#job_type_id-" + nKers).select2();
        $("#job_level-" + nKers).select2();
        $("#exp_country-" + nKers).select2();
        
        $("#work_start_year-" + nKers).datepicker({
            format: "dd-mm-yyyy",
            startView: "days",
            minViewMode: "days",
            autoclose: true,
        }).on('hide', function(e) {
            $(this).parent().addClass('focus-input');
        });
        
        $("#word_end_year-" + nKers).datepicker({
            format: "dd-mm-yyyy",
            startView: "days",
            minViewMode: "days",
            autoclose: true,
        }).on('hide', function(e) {
            $(this).parent().addClass('focus-input');
        });
        
    }
    

    function removeDataEdu(el) {
        let elParent = $(el).parent().parent().parent();
        $(elParent).fadeOut("normal", function() {
            elParent.remove();
        });
    }

    function removeDataCert(el) {
        let elParent = $(el).parent().parent().parent();
        $(elParent).fadeOut("normal", function() {
            elParent.remove();
        });
    }

    function removeDataKer(el) {
        let elParent = $(el).parent().parent().parent();
        $(elParent).fadeOut("normal", function() {
            elParent.remove();
        });
    }

    function checkNIK(q) {
        var jsondata = {
            "q": q
        };
        $.ajax({
            url: "https://mitrakeluarga.jobseeker.software/main/checknik",
            dataType: 'json',
            delay: 250,
            data: {
                q: q
            },
            cache: true,
        }).done(function(resp) {
            if (resp.error == false) {
                Swal.fire({
                    icon: 'success',
                    title: 'Pemeriksaan Nomor KTP',
                    text: resp.output,
                });
                document.getElementById("id_number-err").innerHTML = '';

            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Pemeriksaan Nomor KTP',
                    text: resp.message,
                });
                document.getElementById("id_number-err").innerHTML = resp.message;
                document.getElementById("id_number").value = '';
            }
        });
    }

    function checkemail(q) {

        var jsondata = {
            "q": q,
        };
        $.ajax({
            url: "https://mitrakeluarga.jobseeker.software/main/checkemail",
            dataType: 'json',
            delay: 250,
            data: {
                q: q
            },
            cache: true,
        }).done(function(resp) {
            if (resp.error == false) {
                Swal.fire({
                    icon: 'success',
                    title: 'Pemeriksaan Email',
                    text: resp.output,
                });
                document.getElementById("email-err").innerHTML = '';

            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Pemeriksaan Email',
                    text: resp.message,
                });
                document.getElementById("email-err").innerHTML = resp.message;
                document.getElementById("email").value = '';

            }
        });
    }

    function loadingStart() {
        $.LoadingOverlay("show", {
            image: "",
            size: "5",
            fontawesome: "fas fa-circle-notch fa-spin"
        });
    }

    function loadingEnd() {
        setTimeout(function() {
            $.LoadingOverlay("hide");
        }, 10);
    }

    function contentLoadingStart(divSelector) {
        $(divSelector).LoadingOverlay("show", {
            image: "",
            size: "5",
            fontawesome: "fas fa-circle-notch fa-spin"
        });
    }

    function contentLoadingEnd(divSelector) {
        $(divSelector).LoadingOverlay("hide", true);
    }


    function getKotaKabDomisili(country, province, type) {
        loadingStart();

        $.ajax({
            type: "GET",
            url: "https://mitrakeluarga.jobseeker.software/main/mikaktp_city_id",
            data: {
                country: country,
                province: province
            },
            dataType: "json",
            success: function(response) {
                loadingEnd()
                let newOpt = ``

                $.each(response, function(key, value) {
                    newOpt += `<option value="${value.id}">${value.text}</option>`
                });

                if (type == "ktp") {
                    $("#ktp_city_id")
                        .html(`<option selected value="" disabled="true">Pilih Kota</option>`)
                        .append(newOpt);
                } else if (type == "dom") {
                    $("#city_id")
                        .html(`<option selected value="" disabled="true">Pilih Kota</option>`)
                        .append(newOpt);
                }
            }
        });
    }

    function getKecamatanDomisili(country, province, city, type) {
        loadingStart();

        $.ajax({
            type: "GET",
            url: "https://mitrakeluarga.jobseeker.software/main/mikaktp_district_id",
            data: {
                country: country,
                province: province,
                city: city,
            },
            dataType: "json",
            success: function(response) {
                loadingEnd()
                let newOpt = ``

                $.each(response, function(key, value) {
                    newOpt += `<option value="${value.id}">${value.text}</option>`
                });

                if (type == "ktp") {
                    $("#ktp_district_id")
                        .html(`<option selected value="" disabled="true">Pilih Kecamatan</option>`)
                        .append(newOpt);
                } else if (type == "dom") {
                    $("#district_id")
                        .html(`<option selected value="" disabled="true">Pilih Kecamatan</option>`)
                        .append(newOpt);
                }
            }
        });
    }

    function showPassword() {
        var x = document.getElementById("password");

        if (x.type === "password") {
            x.type = "text";
            $("#pshow").hide();
            $("#phide").show();
        } else {
            x.type = "password";
            $("#pshow").show();
            $("#phide").hide();
        }
    }

    function showPasswordKonfirmasi() {
        var y = document.getElementById("konfirmasi_password");

        if (y.type === "password") {
            y.type = "text";
            $("#pshow2").hide();
            $("#phide2").show();
        } else {
            y.type = "password";
            $("#pshow2").show();
            $("#phide2").hide();
        }
    }

    function empty(string) {
        return (string == undefined || string == "" || string == null);
    }

    function checkPassSama(e){
        var q = document.getElementById("password").value;
        if(e != q){
            document.getElementById("konfirmasi_password").value = '';
        }
    }

</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"85264e61ebd640d9","r":1,"version":"2024.2.0","token":"d5bc3e2a41a749829a23f91f8e681b74"}' crossorigin="anonymous"></script>
