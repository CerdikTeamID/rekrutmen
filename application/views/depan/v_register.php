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




<section class="wizard-section">
    <div class="container py-md-3 h-100 p-md-5">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="card shadow-2-strong" style="border-radius:0px;">
                    <div class="card-body p-3">
                        <div class="form-wizard px-md-3 py-md-2">
                            <form id="drop_list" name="drop_list" method="POST" enctype="multipart/form-data">
                                <div class="form-wizard-header">
                                    <h3>Form Registrasi</h3>
                                    <p>Silahkan lengkapi data di bawah ini</p>
                                    <ul class="list-unstyled form-wizard-steps clearfix text-center">
                                        
                                    </ul>
                                </div>

                                <fieldset class="wizard-fieldset show">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 text-center">
                                            <div id="form-foto-box" class="mb-3" align="center">
                                                <div id="form-foto-box-image"></div>
                                                    <input type="hidden" name="foto_cam" id="foto_cam">
                                                    <input type="hidden" name="socmed_photo" id="socmed_photo">
                                                <div class="form-group" style="margin: 0px; width: 300px;">
                                                            <input class="p0 m0 file-photo wizard-required" type="file" name="photo" id="photo" value="" accept="image/png, image/jpg, image/jpeg">
                                                            <p id="errpic" class="raleway center f12 black6" style="margin-top:-40px;">Pilih foto portrait terbaru Anda! <span class="required">*</span></p>
                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                        <button type="button" class="btn btn-primary btn-lg btn-block upl btn_upload" style="background-color: #33A4FF !important;" id="form-foto-button">Pilih Foto</button>
                                                    </div>
                                                    <hr>
                                                    <h5 class="head-title">
                                                        CV/Resume <span class="required">*</span>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input type="file" id="resume" name="resume" class="form-control wizard-required" required="">
                                                        <span class="mb-2 text-muted small" style="display: block;">(Petunjuk: Tipe file yang diijinkan: docx,pdf,jpg/png, Maksimum 2mb)</span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-12 pl-md-3">
                                                    <h5 class="head-title">
                                                        Data Pribadi
                                                    </h5>
                                                    <div class="form-group">
                                                        <input type="text" name="full_name" id="full_name" class="form-control wizard-required" maxlength="35" onkeypress="return /[a-z .]/gi.test(event.key)">
                                                        <label for="full_name" class="wizard-form-text-label">Nama Lengkap <span class="required">*</span></label>
                                                        <small>*Isikan nama lengkap sesuai KTP, tanpa gelar, dan tidak menggunakan huruf kapital</small>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" name="id_number" id="id_number" class="form-control wizard-required" onchange="checkNIK(this.value)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return /[0-9]/i.test(event.key)" maxlength="16" minlength="16" autocomplete="false">
                                                        <label for="id_number" class="wizard-form-text-label">Nomor KTP (NIK) <span class="required">*</span></label>
                                                        <small id="id_number-err" style="color: red;"></small>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="ktp_publish_date" id="ktp_publish_date" class="form-control datepicker wizard-required">
                                                        <label for="ktp_publish_date" class="wizard-form-text-label" id="ktp_publish_date_1">Tanggal KTP Terbit <span class="required">*</span></label>
                                                        <div class="wizard-form-error" id="ktp_publish_date_2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="ktp_publish_location" id="ktp_publish_location" class="form-control wizard-required" onkeypress="return /[a-z .]/gi.test(event.key)">
                                                        <label for="ktp_publish_location" class="wizard-form-text-label" id="ktp_publish_location_1">Lokasi KTP Terbit <span class="required">*</span></label>
                                                        <div class="wizard-form-error" id="ktp_publish_location_2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="phone" id="phone" type="text" minlength="10" maxlength="16" class="form-control wizard-required" onkeypress="return /[0-9]/i.test(event.key)">
                                                        <label for="phone" class="wizard-form-text-label">No. Handphone (WhatsApp) <span class="required">*</span></label>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" onchange="checkemail(this.value)" class="form-control wizard-required" autocomplete="off" maxlength="35">
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
                                                                <input style="border-right: 0px !important" autocomplete="OFF" name="password" id="password" type="password" class="form-control wizard-required">
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
                                                                <input style="border-right: 0px !important" onchange="checkPassSama(this.value)" autocomplete="OFF" name="konfirmasi_password" id="konfirmasi_password" type="password" class="form-control wizard-required">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2" onclick="showPasswordKonfirmasi()">
                                                                        <i class="bi bi-eye" id="pshow2" style="display: block;"></i>
                                                                        <i class="bi bi-eye-slash" id="phide2" style="display: none;"></i>
                                                                        <!-- <input type="checkbox" onclick="showPassword()"> -->
                                                                    </span>
                                                                </div>
                                                                <label for="konfirmasi_password" class="wizard-form-text-label" "="">Konfirmasi Password <span class=" required">*</span></label>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                <!-- <input type="checkbox" onclick="showPasswordKonfirmasi()"> Lihat Konfirmasi Password -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline form-group mb-1">
                                                            <label class="form-label">Jenis Kelamin <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required="">
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
                                                                <input name="height" id="height" type="text" class="form-control wizard-required" maxlength="3" onkeypress="return /[0-9]/i.test(event.key)">
                                                                <label for="height" class="wizard-form-text-label">Tinggi (cm)<span class="required">*</span></label>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input name="weight" id="weight" type="text" class="form-control wizard-required" maxlength="3" onkeypress="return /[0-9]/i.test(event.key)">
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
                                                                    <select class="form-control wizard-required select2 select2-hidden-accessible" name="pob" data-select2-id="select2-data-1-7oww" tabindex="-1" aria-hidden="true">
                                                                        <option selected="" value="" disabled="true" data-select2-id="select2-data-3-sstm">Tempat Lahir</option>
                                                                        <option value="Aceh Barat">Aceh Barat</option><option value="Aceh Barat Daya">Aceh Barat Daya</option><option value="Aceh Besar">Aceh Besar</option><option value="Aceh Jaya">Aceh Jaya</option><option value="Aceh Selatan">Aceh Selatan</option><option value="Aceh Singkil">Aceh Singkil</option><option value="Aceh Tamiang">Aceh Tamiang</option><option value="Aceh Tengah">Aceh Tengah</option><option value="Aceh Tenggara">Aceh Tenggara</option><option value="Aceh Timur">Aceh Timur</option><option value="Aceh Utara">Aceh Utara</option><option value="Agam">Agam</option><option value="Alor">Alor</option><option value="Ambon">Ambon</option><option value="Asahan">Asahan</option><option value="Asmat">Asmat</option><option value="Badung">Badung</option><option value="Balangan">Balangan</option><option value="Bali">Bali</option><option value="Balikpapan">Balikpapan</option><option value="Banda Aceh">Banda Aceh</option><option value="Bandar Lampung">Bandar Lampung</option><option value="Bandung Barat">Bandung Barat</option><option value="Banggai">Banggai</option><option value="Banggai Kepulauan">Banggai Kepulauan</option><option value="Banggai Laut">Banggai Laut</option><option value="Bangka">Bangka</option><option value="Bangka Barat">Bangka Barat</option><option value="Bangka Selatan">Bangka Selatan</option><option value="Bangka Tengah">Bangka Tengah</option><option value="Bangkalan">Bangkalan</option><option value="Bangli">Bangli</option><option value="Banjar">Banjar</option><option value="Banjar Baru">Banjar Baru</option><option value="Banjarmasin">Banjarmasin</option><option value="Banjarnegara">Banjarnegara</option><option value="Bantaeng">Bantaeng</option><option value="Bantul">Bantul</option><option value="Banyu Asin">Banyu Asin</option><option value="Banyumas">Banyumas</option><option value="Banyuwangi">Banyuwangi</option><option value="Barito Kuala">Barito Kuala</option><option value="Barito Selatan">Barito Selatan</option><option value="Barito Timur">Barito Timur</option><option value="Barito Utara">Barito Utara</option><option value="Barru">Barru</option><option value="Batam">Batam</option><option value="Batang">Batang</option><option value="Batang Hari">Batang Hari</option><option value="Batu">Batu</option><option value="Batu Bara">Batu Bara</option><option value="Batulicin">Batulicin</option><option value="Bau-bau">Bau-bau</option><option value="Belitung">Belitung</option><option value="Belu">Belu</option><option value="Bener Meriah">Bener Meriah</option><option value="Bengkalis">Bengkalis</option><option value="Bengkayang">Bengkayang</option><option value="Bengkulu">Bengkulu</option><option value="Bengkulu Selatan">Bengkulu Selatan</option><option value="Bengkulu Tengah">Bengkulu Tengah</option><option value="Bengkulu Utara">Bengkulu Utara</option><option value="Berau">Berau</option><option value="Biak Numfor">Biak Numfor</option><option value="Binjai">Binjai</option><option value="Bireuen">Bireuen</option><option value="Bitung">Bitung</option><option value="Blitar">Blitar</option><option value="Blora">Blora</option><option value="Boalemo">Boalemo</option><option value="Bojonegoro">Bojonegoro</option><option value="Bolaang Mongondow">Bolaang Mongondow</option><option value="Bolaang Mongondow Selatan">Bolaang Mongondow Selatan</option><option value="Bolaang Mongondow Timur">Bolaang Mongondow Timur</option><option value="Bolaang Mongondow Utara">Bolaang Mongondow Utara</option><option value="Bombana">Bombana</option><option value="Bondowoso">Bondowoso</option><option value="Bone">Bone</option><option value="Bone Bolango">Bone Bolango</option><option value="Bontang">Bontang</option><option value="Boven Digoel">Boven Digoel</option><option value="Boyolali">Boyolali</option><option value="Brebes">Brebes</option><option value="Bukittinggi">Bukittinggi</option><option value="Buleleng">Buleleng</option><option value="Bulukumba">Bulukumba</option><option value="Bulungan">Bulungan</option><option value="Bungo">Bungo</option><option value="Buol">Buol</option><option value="Buru">Buru</option><option value="Buru Selatan">Buru Selatan</option><option value="Buton">Buton</option><option value="Buton Selatan">Buton Selatan</option><option value="Buton Tengah">Buton Tengah</option><option value="Buton Utara">Buton Utara</option><option value="Central Singapore">Central Singapore</option><option value="Ciamis">Ciamis</option><option value="Cianjur">Cianjur</option><option value="Cibubur">Cibubur</option><option value="Cikampek">Cikampek</option><option value="Cikarang">Cikarang</option><option value="Cikarang Barat">Cikarang Barat</option><option value="Cilacap">Cilacap</option><option value="Cilegon">Cilegon</option><option value="Cimahi">Cimahi</option><option value="Dairi">Dairi</option><option value="Deiyai">Deiyai</option><option value="Deli Serdang">Deli Serdang</option><option value="Demak">Demak</option><option value="Denpasar">Denpasar</option><option value="Depok">Depok</option><option value="Dharmasraya">Dharmasraya</option><option value="Dogiyai">Dogiyai</option><option value="Dompu">Dompu</option><option value="Donggala">Donggala</option><option value="Dumai">Dumai</option><option value="East Singapore">East Singapore</option><option value="Empat Lawang">Empat Lawang</option><option value="Ende">Ende</option><option value="Enrekang">Enrekang</option><option value="Fakfak">Fakfak</option><option value="Flores Timur">Flores Timur</option><option value="Garut">Garut</option><option value="Gayo Lues">Gayo Lues</option><option value="Gianyar">Gianyar</option><option value="Gorontalo Utara">Gorontalo Utara</option><option value="Gowa">Gowa</option><option value="Gresik">Gresik</option><option value="Grobogan">Grobogan</option><option value="Gunung Kidul">Gunung Kidul</option><option value="Gunung Mas">Gunung Mas</option><option value="Gunung Sitoli">Gunung Sitoli</option><option value="Halmahera Barat">Halmahera Barat</option><option value="Halmahera Selatan">Halmahera Selatan</option><option value="Halmahera Tengah">Halmahera Tengah</option><option value="Halmahera Timur">Halmahera Timur</option><option value="Halmahera Utara">Halmahera Utara</option><option value="Hulu Sungai Selatan">Hulu Sungai Selatan</option><option value="Hulu Sungai Tengah">Hulu Sungai Tengah</option><option value="Hulu Sungai Utara">Hulu Sungai Utara</option><option value="Humbang Hasundutan">Humbang Hasundutan</option><option value="India">India</option><option value="Indragiri Hilir">Indragiri Hilir</option><option value="Indragiri Hulu">Indragiri Hulu</option><option value="Indramayu">Indramayu</option><option value="Intan Jaya">Intan Jaya</option><option value="Jakarta">Jakarta</option><option value="Jakarta Barat">Jakarta Barat</option><option value="Jakarta Pusat">Jakarta Pusat</option><option value="Jakarta Selatan">Jakarta Selatan</option><option value="Jakarta Timur">Jakarta Timur</option><option value="Jakarta Utara">Jakarta Utara</option><option value="Jambi">Jambi</option><option value="Jayawijaya">Jayawijaya</option><option value="Jember">Jember</option><option value="Jembrana">Jembrana</option><option value="Jeneponto">Jeneponto</option><option value="Jepara">Jepara</option><option value="Jombang">Jombang</option><option value="Kabupaten Bandung">Kabupaten Bandung</option><option value="Kabupaten Banjar">Kabupaten Banjar</option><option value="Kabupaten Bekasi">Kabupaten Bekasi</option><option value="Kabupaten Belitung Timur">Kabupaten Belitung Timur</option><option value="Kabupaten Bima">Kabupaten Bima</option><option value="Kabupaten Bintan">Kabupaten Bintan</option><option value="Kabupaten Bogor">Kabupaten Bogor</option><option value="Kabupaten Cirebon">Kabupaten Cirebon</option><option value="Kabupaten Gorontalo">Kabupaten Gorontalo</option><option value="Kabupaten Jayapura">Kabupaten Jayapura</option><option value="Kabupaten Karimun">Kabupaten Karimun</option><option value="Kabupaten Kupang">Kabupaten Kupang</option><option value="Kabupaten Madiun">Kabupaten Madiun</option><option value="Kabupaten Magelang">Kabupaten Magelang</option><option value="Kabupaten Mojokerto">Kabupaten Mojokerto</option><option value="Kabupaten Natuna">Kabupaten Natuna</option><option value="Kabupaten Pasuruan">Kabupaten Pasuruan</option><option value="Kabupaten Pekalongan">Kabupaten Pekalongan</option><option value="Kabupaten Semarang">Kabupaten Semarang</option><option value="Kabupaten Serang">Kabupaten Serang</option><option value="Kabupaten Solok">Kabupaten Solok</option><option value="Kabupaten Sorong">Kabupaten Sorong</option><option value="Kabupaten Sukabumi">Kabupaten Sukabumi</option><option value="Kabupaten Tangerang">Kabupaten Tangerang</option><option value="Kabupaten Tasikmalaya">Kabupaten Tasikmalaya</option><option value="Kabupaten Tegal">Kabupaten Tegal</option><option value="Kaimana">Kaimana</option><option value="Kampar">Kampar</option><option value="Kapuas">Kapuas</option><option value="Kapuas Hulu">Kapuas Hulu</option><option value="Karang Asem">Karang Asem</option><option value="Karanganyar">Karanganyar</option><option value="Karawang">Karawang</option><option value="Karo">Karo</option><option value="Katingan">Katingan</option><option value="Kaur">Kaur</option><option value="Kayong Utara">Kayong Utara</option><option value="Kebumen">Kebumen</option><option value="Kediri">Kediri</option><option value="Keerom">Keerom</option><option value="Kendal">Kendal</option><option value="Kendari">Kendari</option><option value="Kepahiang">Kepahiang</option><option value="Kepulauan Anambas">Kepulauan Anambas</option><option value="Kepulauan Aru">Kepulauan Aru</option><option value="Kepulauan Mentawai">Kepulauan Mentawai</option><option value="Kepulauan Meranti">Kepulauan Meranti</option><option value="Kepulauan Selayar">Kepulauan Selayar</option><option value="Kepulauan Seribu">Kepulauan Seribu</option><option value="Kepulauan Sula">Kepulauan Sula</option><option value="Kepulauan Talaud">Kepulauan Talaud</option><option value="Kepulauan Yapen">Kepulauan Yapen</option><option value="Kerinci">Kerinci</option><option value="Ketapang">Ketapang</option><option value="Klaten">Klaten</option><option value="Klungkung">Klungkung</option><option value="Kolaka">Kolaka</option><option value="Kolaka Timur">Kolaka Timur</option><option value="Kolaka Utara">Kolaka Utara</option><option value="Konawe">Konawe</option><option value="Konawe Kepulauan">Konawe Kepulauan</option><option value="Konawe Selatan">Konawe Selatan</option><option value="Konawe Utara">Konawe Utara</option><option value="Kota Bandung">Kota Bandung</option><option value="Kota Baru">Kota Baru</option><option value="Kota Bekasi">Kota Bekasi</option><option value="Kota Bima">Kota Bima</option><option value="Kota Blitar">Kota Blitar</option><option value="Kota Bogor">Kota Bogor</option><option value="Kota Cirebon">Kota Cirebon</option><option value="Kota Gorontalo">Kota Gorontalo</option><option value="Kota Jayapura">Kota Jayapura</option><option value="Kota Kediri">Kota Kediri</option><option value="Kota Kupang">Kota Kupang</option><option value="Kota Madiun">Kota Madiun</option><option value="Kota Magelang">Kota Magelang</option><option value="Kota Malang">Kota Malang</option><option value="Kota Mojokerto">Kota Mojokerto</option><option value="Kota Padang">Kota Padang</option><option value="Kota Padang Panjang">Kota Padang Panjang</option><option value="Kota Pasuruan">Kota Pasuruan</option><option value="Kota Pekalongan">Kota Pekalongan</option><option value="Kota Probolinggo">Kota Probolinggo</option><option value="Kota Sawah Lunto">Kota Sawah Lunto</option><option value="Kota Semarang">Kota Semarang</option><option value="Kota Serang">Kota Serang</option><option value="Kota Solok">Kota Solok</option><option value="Kota Sorong">Kota Sorong</option><option value="Kota Sukabumi">Kota Sukabumi</option><option value="Kota Tangerang">Kota Tangerang</option><option value="Kota Tasikmalaya">Kota Tasikmalaya</option><option value="Kota Tegal">Kota Tegal</option><option value="Kotamobagu">Kotamobagu</option><option value="Kotawaringin Barat">Kotawaringin Barat</option><option value="Kotawaringin Timur">Kotawaringin Timur</option><option value="Kuantan Singingi">Kuantan Singingi</option><option value="Kubu Raya">Kubu Raya</option><option value="Kudus">Kudus</option><option value="Kulon Progo">Kulon Progo</option><option value="Kuningan">Kuningan</option><option value="Kutai Barat">Kutai Barat</option><option value="Kutai Kartanegara">Kutai Kartanegara</option><option value="Kutai Timur">Kutai Timur</option><option value="Labuhan Batu">Labuhan Batu</option><option value="Labuhan Batu Selatan">Labuhan Batu Selatan</option><option value="Labuhan Batu Utara">Labuhan Batu Utara</option><option value="Lahat">Lahat</option><option value="Lainnya">Lainnya</option><option value="Lamandau">Lamandau</option><option value="Lamongan">Lamongan</option><option value="Lampung Barat">Lampung Barat</option><option value="Lampung Selatan">Lampung Selatan</option><option value="Lampung Tengah">Lampung Tengah</option><option value="Lampung Timur">Lampung Timur</option><option value="Lampung Utara">Lampung Utara</option><option value="Landak">Landak</option><option value="Langkat">Langkat</option><option value="Langsa">Langsa</option><option value="Lanny Jaya">Lanny Jaya</option><option value="Lebak">Lebak</option><option value="Lebong">Lebong</option><option value="Lembata">Lembata</option><option value="Lhokseumawe">Lhokseumawe</option><option value="Lima Puluh Kota">Lima Puluh Kota</option><option value="Lingga">Lingga</option><option value="Lombok Barat">Lombok Barat</option><option value="Lombok Tengah">Lombok Tengah</option><option value="Lombok Timur">Lombok Timur</option><option value="Lombok Utara">Lombok Utara</option><option value="Lubuk Linggau">Lubuk Linggau</option><option value="Lumajang">Lumajang</option><option value="Luwu">Luwu</option><option value="Luwu Timur">Luwu Timur</option><option value="Luwu Utara">Luwu Utara</option><option value="Magetan">Magetan</option><option value="Mahakam Hulu">Mahakam Hulu</option><option value="Majalengka">Majalengka</option><option value="Majene">Majene</option><option value="Makassar">Makassar</option><option value="Malaka">Malaka</option><option value="Malang">Malang</option><option value="Malinau">Malinau</option><option value="Maluku Barat Daya">Maluku Barat Daya</option><option value="Maluku Tengah">Maluku Tengah</option><option value="Maluku Tenggara">Maluku Tenggara</option><option value="Maluku Tenggara Barat">Maluku Tenggara Barat</option><option value="Mamasa">Mamasa</option><option value="Mamberamo Raya">Mamberamo Raya</option><option value="Mamberamo Tengah">Mamberamo Tengah</option><option value="Mamuju">Mamuju</option><option value="Mamuju Tengah">Mamuju Tengah</option><option value="Mamuju Utara">Mamuju Utara</option><option value="Manado">Manado</option><option value="Mandailing Natal">Mandailing Natal</option><option value="Manggarai">Manggarai</option><option value="Manggarai Barat">Manggarai Barat</option><option value="Manggarai Timur">Manggarai Timur</option><option value="Manokwari">Manokwari</option><option value="Manokwari Selatan">Manokwari Selatan</option><option value="Mappi">Mappi</option><option value="Maros">Maros</option><option value="Mataram">Mataram</option><option value="Maybrat">Maybrat</option><option value="Medan">Medan</option><option value="Melawi">Melawi</option><option value="Mempawah">Mempawah</option><option value="Merak">Merak</option><option value="Merangin">Merangin</option><option value="Merauke">Merauke</option><option value="Mesuji">Mesuji</option><option value="Metro">Metro</option><option value="Mimika">Mimika</option><option value="Minahasa">Minahasa</option><option value="Minahasa Selatan">Minahasa Selatan</option><option value="Minahasa Tenggara">Minahasa Tenggara</option><option value="Minahasa Utara">Minahasa Utara</option><option value="Morowali">Morowali</option><option value="Morowali Utara">Morowali Utara</option><option value="Muara Enim">Muara Enim</option><option value="Muaro Jambi">Muaro Jambi</option><option value="Mukomuko">Mukomuko</option><option value="Muna">Muna</option><option value="Muna Barat">Muna Barat</option><option value="Murung Raya">Murung Raya</option><option value="Musi Banyuasin">Musi Banyuasin</option><option value="Musi Rawas">Musi Rawas</option><option value="Musi Rawas Utara">Musi Rawas Utara</option><option value="Myanmar">Myanmar</option><option value="Nabire">Nabire</option><option value="Nagan Raya">Nagan Raya</option><option value="Nagekeo">Nagekeo</option><option value="Nduga">Nduga</option><option value="Ngada">Ngada</option><option value="Nganjuk">Nganjuk</option><option value="Ngawi">Ngawi</option><option value="Nias">Nias</option><option value="Nias Barat">Nias Barat</option><option value="Nias Selatan">Nias Selatan</option><option value="Nias Utara">Nias Utara</option><option value="North Singapore">North Singapore</option><option value="Nunukan">Nunukan</option><option value="Ogan Ilir">Ogan Ilir</option><option value="Ogan Komering Ilir">Ogan Komering Ilir</option><option value="Ogan Komering Ulu">Ogan Komering Ulu</option><option value="Ogan Komering Ulu Selatan">Ogan Komering Ulu Selatan</option><option value="Ogan Komering Ulu Timur">Ogan Komering Ulu Timur</option><option value="Overseas">Overseas</option><option value="Pacitan">Pacitan</option><option value="Padang">Padang</option><option value="Padang Lawas">Padang Lawas</option><option value="Padang Lawas Utara">Padang Lawas Utara</option><option value="Padang Panjang">Padang Panjang</option><option value="Padang Pariaman">Padang Pariaman</option><option value="Padang Sidempuan">Padang Sidempuan</option><option value="Pagar Alam">Pagar Alam</option><option value="Pakpak Bharat">Pakpak Bharat</option><option value="Palangka Raya">Palangka Raya</option><option value="Palembang">Palembang</option><option value="Palopo">Palopo</option><option value="Palu">Palu</option><option value="Pamekasan">Pamekasan</option><option value="Pandeglang">Pandeglang</option><option value="Pangandaran">Pangandaran</option><option value="Pangkajene Dan Kepulauan">Pangkajene Dan Kepulauan</option><option value="Pangkal Pinang">Pangkal Pinang</option><option value="Paniai">Paniai</option><option value="Parepare">Parepare</option><option value="Pariaman">Pariaman</option><option value="Parigi Moutong">Parigi Moutong</option><option value="Pasaman">Pasaman</option><option value="Pasaman Barat">Pasaman Barat</option><option value="Paser">Paser</option><option value="Pati">Pati</option><option value="Payakumbuh">Payakumbuh</option><option value="Pegunungan Arfak">Pegunungan Arfak</option><option value="Pegunungan Bintang">Pegunungan Bintang</option><option value="Pekanbaru">Pekanbaru</option><option value="Pelalawan">Pelalawan</option><option value="Pemalang">Pemalang</option><option value="Pematangsiantar">Pematangsiantar</option><option value="Penajam Paser Utara">Penajam Paser Utara</option><option value="Penukal Abab Lematang Ilir">Penukal Abab Lematang Ilir</option><option value="Pesawaran">Pesawaran</option><option value="Pesisir Barat">Pesisir Barat</option><option value="Pesisir Selatan">Pesisir Selatan</option><option value="Philippines">Philippines</option><option value="Pidie">Pidie</option><option value="Pidie Jaya">Pidie Jaya</option><option value="Pinrang">Pinrang</option><option value="Plered">Plered</option><option value="Pohuwato">Pohuwato</option><option value="Polewali Mandar">Polewali Mandar</option><option value="Ponorogo">Ponorogo</option><option value="Pontianak">Pontianak</option><option value="Poso">Poso</option><option value="Prabumulih">Prabumulih</option><option value="Pringsewu">Pringsewu</option><option value="Probolinggo">Probolinggo</option><option value="Pulang Pisau">Pulang Pisau</option><option value="Pulau Morotai">Pulau Morotai</option><option value="Pulau Taliabu">Pulau Taliabu</option><option value="Puncak">Puncak</option><option value="Puncak Jaya">Puncak Jaya</option><option value="Purbalingga">Purbalingga</option><option value="Purwakarta">Purwakarta</option><option value="Purworejo">Purworejo</option><option value="Raja Ampat">Raja Ampat</option><option value="Rejang Lebong">Rejang Lebong</option><option value="Rembang">Rembang</option><option value="Rokan Hilir">Rokan Hilir</option><option value="Rokan Hulu">Rokan Hulu</option><option value="Rote Ndao">Rote Ndao</option><option value="Saban">Saban</option><option value="Sabang">Sabang</option><option value="Sabu Raijua">Sabu Raijua</option><option value="Salatiga">Salatiga</option><option value="Samarinda">Samarinda</option><option value="Sambas">Sambas</option><option value="Samosir">Samosir</option><option value="Sampang">Sampang</option><option value="Sampit">Sampit</option><option value="Sanggau">Sanggau</option><option value="Sangihe">Sangihe</option><option value="Sarmi">Sarmi</option><option value="Sarolangun">Sarolangun</option><option value="Sawah Lunto">Sawah Lunto</option><option value="Sekadau">Sekadau</option><option value="Seluma">Seluma</option><option value="Seram Bagian Barat">Seram Bagian Barat</option><option value="Seram Bagian Timur">Seram Bagian Timur</option><option value="Serdang Bedagai">Serdang Bedagai</option><option value="Seruyan">Seruyan</option><option value="Siak">Siak</option><option value="Siau Tagulandang Biaro">Siau Tagulandang Biaro</option><option value="Sibolga">Sibolga</option><option value="Sidenreng Rappang">Sidenreng Rappang</option><option value="Sidoarjo">Sidoarjo</option><option value="Sigi">Sigi</option><option value="Sijunjung">Sijunjung</option><option value="Sikka">Sikka</option><option value="Simalungun">Simalungun</option><option value="Simeulue">Simeulue</option><option value="Singkawang">Singkawang</option><option value="Sinjai">Sinjai</option><option value="Sintang">Sintang</option><option value="Situbondo">Situbondo</option><option value="Sleman">Sleman</option><option value="Solo">Solo</option><option value="Solok Selatan">Solok Selatan</option><option value="Soppeng">Soppeng</option><option value="Sorong Selatan">Sorong Selatan</option><option value="South Singapore">South Singapore</option><option value="Sragen">Sragen</option><option value="Subang">Subang</option><option value="Subulussalam">Subulussalam</option><option value="Sukamara">Sukamara</option><option value="Sukoharjo">Sukoharjo</option><option value="Sumba Barat">Sumba Barat</option><option value="Sumba Barat Daya">Sumba Barat Daya</option><option value="Sumba Tengah">Sumba Tengah</option><option value="Sumba Timur">Sumba Timur</option><option value="Sumbawa">Sumbawa</option><option value="Sumbawa Barat">Sumbawa Barat</option><option value="Sumedang">Sumedang</option><option value="Sumenep">Sumenep</option><option value="Sungai Penuh">Sungai Penuh</option><option value="Supiori">Supiori</option><option value="Surabaya">Surabaya</option><option value="Surakarta">Surakarta</option><option value="Tabalong">Tabalong</option><option value="Tabanan">Tabanan</option><option value="Takalar">Takalar</option><option value="Tambrauw">Tambrauw</option><option value="Tana Tidung">Tana Tidung</option><option value="Tana Toraja">Tana Toraja</option><option value="Tanah Bumbu">Tanah Bumbu</option><option value="Tanah Datar">Tanah Datar</option><option value="Tanah Laut">Tanah Laut</option><option value="Tangerang Selatan">Tangerang Selatan</option><option value="Tanggamus">Tanggamus</option><option value="Tanjung Balai">Tanjung Balai</option><option value="Tanjung Balai Karimun">Tanjung Balai Karimun</option><option value="Tanjung Jabung Barat">Tanjung Jabung Barat</option><option value="Tanjung Jabung Timur">Tanjung Jabung Timur</option><option value="Tanjung Pinang">Tanjung Pinang</option><option value="Tanjung Selor">Tanjung Selor</option><option value="Tanjungpandan">Tanjungpandan</option><option value="Tapanuli Selatan">Tapanuli Selatan</option><option value="Tapanuli Tengah">Tapanuli Tengah</option><option value="Tapanuli Utara">Tapanuli Utara</option><option value="Tapin">Tapin</option><option value="Tarakan">Tarakan</option><option value="Tebing Tinggi">Tebing Tinggi</option><option value="Tebo">Tebo</option><option value="Teluk Bintuni">Teluk Bintuni</option><option value="Teluk Wondama">Teluk Wondama</option><option value="Temanggung">Temanggung</option><option value="Ternate">Ternate</option><option value="Thailand">Thailand</option><option value="Tidore Kepulauan">Tidore Kepulauan</option><option value="Timika">Timika</option><option value="Timor Tengah Selatan">Timor Tengah Selatan</option><option value="Timor Tengah Utara">Timor Tengah Utara</option><option value="Toba Samosir">Toba Samosir</option><option value="Tojo Una-una">Tojo Una-una</option><option value="Toli-toli">Toli-toli</option><option value="Tolikara">Tolikara</option><option value="Tomohon">Tomohon</option><option value="Toraja Utara">Toraja Utara</option><option value="Trenggalek">Trenggalek</option><option value="Tual">Tual</option><option value="Tuban">Tuban</option><option value="Tulang Bawang Barat">Tulang Bawang Barat</option><option value="Tulangbawang">Tulangbawang</option><option value="Tulungagung">Tulungagung</option><option value="United States (USA)">United States (USA)</option><option value="Vietnam">Vietnam</option><option value="Wajo">Wajo</option><option value="Wakatobi">Wakatobi</option><option value="Waropen">Waropen</option><option value="Way Kanan">Way Kanan</option><option value="West Singapore">West Singapore</option><option value="Wonogiri">Wonogiri</option><option value="Wonosobo">Wonosobo</option><option value="Yahukimo">Yahukimo</option><option value="Yalimo">Yalimo</option><option value="Yogyakarta">Yogyakarta</option>                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-fh9n" style="width: 207px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pob-r8-container" aria-controls="select2-pob-r8-container"><span class="select2-selection__rendered" id="select2-pob-r8-container" role="textbox" aria-readonly="true" title="Tempat Lahir">Tempat Lahir</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                    <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row pl-md-0">
                                                                    <div class="col-md-4 mb-md-0 px-md-1">
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control wizard-required select2-hidden-accessible" name="dob_tanggal" style="width: 100%" required="true" data-select2-id="select2-data-4-wnyv" tabindex="-1" aria-hidden="true">
                                                                                <option selected="" value="" disabled="true" data-select2-id="select2-data-6-fh9t">Tanggal</option>
                                                                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-l0mg" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dob_tanggal-u0-container" aria-controls="select2-dob_tanggal-u0-container"><span class="select2-selection__rendered" id="select2-dob_tanggal-u0-container" role="textbox" aria-readonly="true" title="Tanggal">Tanggal</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-md-0 px-md-1">
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control wizard-required select2-hidden-accessible" name="dob_bulan" style="width: 100%" required="true" data-select2-id="select2-data-7-wbii" tabindex="-1" aria-hidden="true">
                                                                                <option selected="" value="" disabled="true" data-select2-id="select2-data-9-whjz">Bulan</option>
                                                                            <option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-09im" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dob_bulan-qy-container" aria-controls="select2-dob_bulan-qy-container"><span class="select2-selection__rendered" id="select2-dob_bulan-qy-container" role="textbox" aria-readonly="true" title="Bulan">Bulan</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                            <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-md-0 pl-md-1">
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control wizard-required select2-hidden-accessible" name="dob_tahun" style="width: 100%" required="true" data-select2-id="select2-data-10-0jw0" tabindex="-1" aria-hidden="true">
                                                                                <option selected="" value="" disabled="true" data-select2-id="select2-data-12-j8p8">Tahun</option>
                                                                            <option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-zmz8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dob_tahun-aj-container" aria-controls="select2-dob_tahun-aj-container"><span class="select2-selection__rendered" id="select2-dob_tahun-aj-container" role="textbox" aria-readonly="true" title="Tahun">Tahun</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                                <select class="form-control wizard-required mb-3 select2 select2-hidden-accessible" name="marital_status_id" data-select2-id="select2-data-13-mh7j" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" disabled="true" data-select2-id="select2-data-15-fgot">Pilih Status Perkawinan</option>
                                                                    <option value="1">Single</option><option value="3">Nikah</option><option value="4">Cerai Hidup</option><option value="5">Cerai Mati</option>                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-3yv9" style="width: 326px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-marital_status_id-sn-container" aria-controls="select2-marital_status_id-sn-container"><span class="select2-selection__rendered" id="select2-marital_status_id-sn-container" role="textbox" aria-readonly="true" title="Pilih Status Perkawinan">Pilih Status Perkawinan</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Agama <span class="required">*</span></label>
                                                                <select class="form-control wizard-required mb-3 select2 select2-hidden-accessible" name="religion_id" data-select2-id="select2-data-16-coz3" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" disabled="true" data-select2-id="select2-data-18-7bkd">Pilih Agama</option>
                                                                    <option value="4">Budha</option><option value="5">Hindu</option><option value="3">Islam</option><option value="2">Katholik</option><option value="6">Konghucu</option><option value="1">Kristen</option>                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-yl4b" style="width: 326px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-religion_id-tn-container" aria-controls="select2-religion_id-tn-container"><span class="select2-selection__rendered" id="select2-religion_id-tn-container" role="textbox" aria-readonly="true" title="Pilih Agama">Pilih Agama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                                <input type="text" name="social_instagram" id="social_instagram" class="form-control">
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
                                                                    <input type="text" name="str_number" id="str_number" class="form-control " style="text-transform: uppercase;" maxlength="50" hidden="hidden">
                                                                    <label for="str_number" class="wizard-form-text-label" id="str_number_1" hidden="hidden">Nomor STR <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_number_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_publish_location" id="str_publish_location" class="form-control " hidden="hidden">
                                                                    <label for="str_publish_location" class="wizard-form-text-label" id="str_publish_location_1" hidden="hidden">Lokasi STR Terbit <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_publish_location_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_publish_date" id="str_publish_date" class="form-control datepicker" hidden="hidden">
                                                                    <label for="str_publish_date" class="wizard-form-text-label" id="str_publish_date_1" hidden="hidden">Tanggal STR Terbit <span class="required">*</span></label>
                                                                    <div class="wizard-form-error" id="str_publish_date_2" hidden="hidden"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="str_end_date" id="str_end_date" class="form-control datepicker" hidden="hidden">
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
                                                        <a href="javascript:;" class="w-100 form-wizard-next-btn float-right" onclick="topFunction()">Berikutnya <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="wizard-fieldset">
                                            <h5 class="head-title">
                                                Alamat Sesuai KTP
                                            </h5>
                                            <div class="form-group">
                                                <textarea class="form-control wizard-required" style="height: unset!important;" id="ktp_address" rows="3" name="ktp_address"></textarea>
                                                <label for="ktp_address" class="wizard-form-text-label">Alamat Lengkap (Nama Jalan, No. Rumah, Kelurahan) <span class="required">*</span></label>
                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ktp_country">Negara <span class="required">*</span></label><br>
                                                        <select class="ktp_country-js-select2 w-100 select2-hidden-accessible" name="ktp_country" id="ktp_country" data-select2-id="select2-data-ktp_country" tabindex="-1" aria-hidden="true">
                                                            <option selected="" value="" disabled="true" data-select2-id="select2-data-36-7ckd">Pilih Negara</option>
                                                            <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Blue">Blue</option><option value="Bolivia">Bolivia</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Islands">Bouvet Islands</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Islnd">Christmas Islnd</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d" ivoire'="">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="European Union">European Union</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guyana">French Guyana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey (Channel Islands)">Guernsey (Channel Islands)</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="NATO">NATO</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Islands">Norfolk Islands</option><option value="North Korea">North Korea</option><option value="North Mariana Islands">North Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Orange">Orange</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the Southern Sandwich Islands">South Georgia and the Southern Sandwich Islands</option><option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Lucia">St. Lucia</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau Islands">Tokelau Islands</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United Nations">United Nations</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="United States Virgin Islands">United States Virgin Islands</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-35-3o1t" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ktp_country-container" aria-controls="select2-ktp_country-container"><span class="select2-selection__rendered" id="select2-ktp_country-container" role="textbox" aria-readonly="true" title="Pilih Negara">Pilih Negara</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ktp_province_id">Provinsi <span class="required">*</span></label><br>
                                                        <select class="ktp_province_id-js-select2 w-100 select2-hidden-accessible" name="ktp_province_id" id="ktp_province_id" data-select2-id="select2-data-ktp_province_id" tabindex="-1" aria-hidden="true">
                                                            <option selected="" value="" disabled="true" data-select2-id="select2-data-38-em4z">Pilih Provinsi</option>
                                                            <option value="01">BALI</option><option value="02">BANGKA BELITUNG</option><option value="03">BANTEN</option><option value="04">BENGKULU</option><option value="05">DI YOGYAKARTA</option><option value="06">DKI JAKARTA</option><option value="07">GORONTALO</option><option value="08">JAMBI</option><option value="09">JAWA BARAT</option><option value="10">JAWA TENGAH</option><option value="11">JAWA TIMUR</option><option value="12">KALIMANTAN BARAT</option><option value="13">KALIMANTAN SELATAN</option><option value="14">KALIMANTAN TENGAH</option><option value="15">KALIMANTAN TIMUR</option><option value="16">KALIMANTAN UTARA</option><option value="17">KEPULAUAN RIAU</option><option value="18">LAMPUNG</option><option value="19">MALUKU</option><option value="20">MALUKU UTARA</option><option value="21">NANGGROE ACEH DARUSS</option><option value="22">NUSA TENGGARA BARAT</option><option value="23">NUSA TENGGARA TIMUR</option><option value="24">PAPUA</option><option value="25">PAPUA BARAT</option><option value="26">RIAU</option><option value="27">SULAWESI BARAT</option><option value="28">SULAWESI SELATAN</option><option value="29">SULAWESI TENGAH</option><option value="30">SULAWESI TENGGARA</option><option value="31">SULAWESI UTARA</option><option value="32">SUMATERA BARAT</option><option value="33">SUMATERA SELATAN</option><option value="34">SUMATERA UTARA</option>                                                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-37-b9ck" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ktp_province_id-container" aria-controls="select2-ktp_province_id-container"><span class="select2-selection__rendered" id="select2-ktp_province_id-container" role="textbox" aria-readonly="true" title="Pilih Provinsi">Pilih Provinsi</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ktp_city_id">Kota/Kabupaten <span class="required">*</span></label><br>
                                                        <select class="ktp_city_id-js-select2 w-100 select2-hidden-accessible" name="ktp_city_id" id="ktp_city_id" data-select2-id="select2-data-ktp_city_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-39-pdf4" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ktp_city_id-container" aria-controls="select2-ktp_city_id-container"><span class="select2-selection__rendered" id="select2-ktp_city_id-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ktp_district_id">Kecamatan <span class="required">*</span></label><br>
                                                        <select class="ktp_district_id-js-select2 w-100 select2-hidden-accessible" name="ktp_district_id" id="ktp_district_id" data-select2-id="select2-data-ktp_district_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-40-phob" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ktp_district_id-container" aria-controls="select2-ktp_district_id-container"><span class="select2-selection__rendered" id="select2-ktp_district_id-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ktp_rtrw">RT/RW <span class="required">*</span></label><br>
                                                        <input type="text" name="ktp_rtrw" id="ktp_rtrw" class="form-control wizard-required" oninput="this.value = this.value.replace(/[^0-9. ^/]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ktp_postal_code">Kodepos <span class="required">*</span></label><br>
                                                        <input type="text" name="ktp_postal_code" id="ktp_postal_code" minlength="5" maxlength="5" class="form-control wizard-required" oninput="this.value = this.value.replace(/[^0-9. ^/]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h5 class="head-title mt-5">
                                                Alamat Domisili
                                            </h5>
                                            <div class="form-group">
                                                <div class="wizard-form-radio form-outline mb-1">
                                                    <label class="form-label">Apakah alamat domisili sama dengan alamat KTP ? <span class="required">*</span></label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="domisili_sama" id="domisili_sama1" value="1">
                                                        <label class="form-check-label" for="domisili_sama1">Iya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="domisili_sama" id="domisili_sama2" value="0">
                                                        <label class="form-check-label" for="domisili_sama2">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="domisi_ilang" hidden="hidden">
                                                <div class="form-group">
                                                    <label class="form-label" id="home_address1" for="home_address1">Alamat Lengkap (No. Rumah, Nama Jalan, Kelurahan) <span class="required">*</span></label><br>
                                                    <textarea class="form-control wajib wizard-required" style="height: unset!important;" id="home_address" rows="3" name="home_address"></textarea>
                                                    <div class="wizard-form-error" id="home_address2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="country" id="country1">Negara <span class="required">*</span></label><br>
                                                            <select class="country-js-select2 w-100 select2-hidden-accessible" name="country" id="country" data-select2-id="select2-data-country" tabindex="-1" aria-hidden="true">
                                                                <option selected="" value="" disabled="true" data-select2-id="select2-data-42-sxn5">Pilih Negara</option>
                                                                <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Blue">Blue</option><option value="Bolivia">Bolivia</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Islands">Bouvet Islands</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Islnd">Christmas Islnd</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d" ivoire'="">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="European Union">European Union</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guyana">French Guyana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey (Channel Islands)">Guernsey (Channel Islands)</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="NATO">NATO</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Islands">Norfolk Islands</option><option value="North Korea">North Korea</option><option value="North Mariana Islands">North Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Orange">Orange</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the Southern Sandwich Islands">South Georgia and the Southern Sandwich Islands</option><option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St. Lucia">St. Lucia</option><option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau Islands">Tokelau Islands</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United Nations">United Nations</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="United States Virgin Islands">United States Virgin Islands</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-41-bknn" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container" aria-controls="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true" title="Pilih Negara">Pilih Negara</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            <div class="wizard-form-error" id="country2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="province_id" id="province_id1">Provinsi <span class="required">*</span></label><br>
                                                            <select class="province_id-js-select2 w-100 select2-hidden-accessible" name="province_id" id="province_id" data-select2-id="select2-data-province_id" tabindex="-1" aria-hidden="true">
                                                                <option selected="" value="" disabled="true" data-select2-id="select2-data-44-ugrw">Pilih Provinsi</option>
                                                                <option value="01">BALI</option><option value="02">BANGKA BELITUNG</option><option value="03">BANTEN</option><option value="04">BENGKULU</option><option value="05">DI YOGYAKARTA</option><option value="06">DKI JAKARTA</option><option value="07">GORONTALO</option><option value="08">JAMBI</option><option value="09">JAWA BARAT</option><option value="10">JAWA TENGAH</option><option value="11">JAWA TIMUR</option><option value="12">KALIMANTAN BARAT</option><option value="13">KALIMANTAN SELATAN</option><option value="14">KALIMANTAN TENGAH</option><option value="15">KALIMANTAN TIMUR</option><option value="16">KALIMANTAN UTARA</option><option value="17">KEPULAUAN RIAU</option><option value="18">LAMPUNG</option><option value="19">MALUKU</option><option value="20">MALUKU UTARA</option><option value="21">NANGGROE ACEH DARUSS</option><option value="22">NUSA TENGGARA BARAT</option><option value="23">NUSA TENGGARA TIMUR</option><option value="24">PAPUA</option><option value="25">PAPUA BARAT</option><option value="26">RIAU</option><option value="27">SULAWESI BARAT</option><option value="28">SULAWESI SELATAN</option><option value="29">SULAWESI TENGAH</option><option value="30">SULAWESI TENGGARA</option><option value="31">SULAWESI UTARA</option><option value="32">SUMATERA BARAT</option><option value="33">SUMATERA SELATAN</option><option value="34">SUMATERA UTARA</option>                                                          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-43-rjne" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-province_id-container" aria-controls="select2-province_id-container"><span class="select2-selection__rendered" id="select2-province_id-container" role="textbox" aria-readonly="true" title="Pilih Provinsi">Pilih Provinsi</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            <div class="wizard-form-error" id="province_id2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="city_id" id="city_id1">Kota/Kabupaten <span class="required">*</span></label><br>
                                                            <select class="city_id-js-select2 w-100 select2-hidden-accessible" name="city_id" id="city_id" data-select2-id="select2-data-city_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-45-vpa3" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city_id-container" aria-controls="select2-city_id-container"><span class="select2-selection__rendered" id="select2-city_id-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            <div class="wizard-form-error" id="city_id2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="district_id" id="district_id1">Kecamatan <span class="required">*</span></label><br>
                                                            <select class="district_id-js-select2 w-100 select2-hidden-accessible" name="district_id" id="district_id" data-select2-id="select2-data-district_id" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-46-qpf6" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-district_id-container" aria-controls="select2-district_id-container"><span class="select2-selection__rendered" id="select2-district_id-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            <div class="wizard-form-error" id="district_id2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" id="rtrw1" for="rtrw">RT/RW <span class="required">*</span></label><br>
                                                            <input type="text" name="rtrw" id="rtrw" class="form-control wajib wizard-required" oninput="this.value = this.value.replace(/[^0-9. ^/]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                            <div class="wizard-form-error" id="rtrw2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="postal_code" id="postal_code1">Kodepos <span class="required">*</span></label><br>
                                                            <input type="text" name="postal_code" id="postal_code" minlength="5" maxlength="5" class="form-control wajib wizard-required" oninput="this.value = this.value.replace(/[^0-9. ^/]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                            <div class="wizard-form-error" id="postal_code2"><small style="color: #f00">* Wajib Diisi</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <div class="row">
                                                    <div class="mb-3 col-md-3">
                                                        <a href="javascript:;" class="w-100 form-wizard-previous-btn float-left">Sebelumnya</a>
                                                    </div>
                                                    <div class="col-md-6"></div>
                                                    <div class="mb-3 col-md-3">
                                                        <a href="javascript:;" class="w-100 form-wizard-next-btn float-right" onclick="topFunction()">Berikutnya <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="wizard-fieldset">
                                            <h5 class="head-title">
                                                Data Pendidikan (Education)
                                            </h5>
                                            <div class="education-group">
                                                <div class="education-detail mt-1 mb-4 education-data-0" style="padding: 8px 16px; border: 1px solid #c9c9c9; border-radius: 8px;">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label class="form-label" for="edu_type">Strata Pendidikan <span class="required">*</span></label>
                                                                <select class="form-control wizard-required mb-3 select2 select2-hidden-accessible" name="education[edu_type][0]" id="edu_type-0" data-select2-id="select2-data-edu_type-0" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" data-select2-id="select2-data-20-56ms">Pilih Strata Pendidikan</option>
                                                                    <option value="12">SMU/SMK/Sederajat</option><option value="21">D1</option><option value="22">D2</option><option value="23">D3</option><option value="24">D4</option><option value="31">S1</option><option value="41">Profesi</option><option value="42">S2</option><option value="43">S3</option><option value="44">Spesialis</option>                                                             </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-19-37mm" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-edu_type-0-container" aria-controls="select2-edu_type-0-container"><span class="select2-selection__rendered" id="select2-edu_type-0-container" role="textbox" aria-readonly="true" title="Pilih Strata Pendidikan">Pilih Strata Pendidikan</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label class="form-label" for="edu_ins-0">Nama Institusi Pendidikan <span class="required">*</span></label>
                                                                <span class="elemen-institusi-pendidikan">
                                                                    <select class="form-control wizard-required mb-3 select2 select2-hidden-accessible" name="education[edu_ins][0]" id="edu_ins-0" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-edu_ins-0"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-33-a9y6" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-edu_ins-0-container" aria-controls="select2-edu_ins-0-container"><span class="select2-selection__rendered" id="select2-edu_ins-0-container" role="textbox" aria-readonly="true" title="Pilih Institusi Pendidikan"><span class="select2-selection__placeholder">Pilih Institusi Pendidikan</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                </span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label class="form-label" for="edu_major">Jurusan Pendidikan <span class="required">*</span></label>
                                                                <select class="form-control wizard-required mb-3 select2 select2-hidden-accessible" name="education[edu_major][0]" id="edu_major-0" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-edu_major-0"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-34-iaom" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-edu_major-0-container" aria-controls="select2-edu_major-0-container"><span class="select2-selection__rendered" id="select2-edu_major-0-container" role="textbox" aria-readonly="true" title="Pilih Jurusan Pendidikan"><span class="select2-selection__placeholder">Pilih Jurusan Pendidikan</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label class="form-label" for="edu_start_year-0">Tahun Mulai <span class="required">*</span></label>
                                                                <input type="text" name="education[edu_start_year][0]" id="edu_start_year-0" class="datepicker-thn form-control wizard-required">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label class="form-label" for="edu_end_year-0">Tahun Lulus <span class="required">*</span></label>
                                                                <input type="text" name="education[edu_end_year][0]" id="edu_end_year-0" class="datepicker-thn form-control wizard-required">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label class="form-label" for="edu_gpa-0">Nilai/IPK <span class="required">*</span></label>
                                                                <input type="text" name="education[edu_gpa][0]" id="edu_gpa-0" class="form-control wizard-required" oninput="this.value = this.value.replace(/[^0-9. ^.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="5">
                                                                <small>*Masukkan nilai dengan format xx.xx, <b>Contoh: 3.25 </b></small>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="expDataEducationList"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <button type="button" class="btn-tambah-data mt-3 mb-3" onclick="renderDataEducation()"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
                                                </div>
                                            </div>


                                            <h5 class="head-title mt-5">
                                                Data Pelatihan &amp; Sertifikasi
                                            </h5>
                                            <div class="certificate-group">
                                                <div class="cert-detail certificate-data-0 mt-1 mb-4 " style="padding: 8px 16px; border: 1px solid #c9c9c9; border-radius: 8px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group text-left">
                                                                <label for="topic-0" class="form-label">Nama Pelatihan/Sertifikasi</label>
                                                                <input type="text" id="topic-0" class="form-control" name="pelatihan[topic][0]">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label for="organized_by-0" class="form-label">Penyelenggara</label>
                                                                <input type="text" id="organized_by-0" class="form-control" name="pelatihan[organized_by][0]">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label for="cert_start_year-0" class="form-label">Tahun Pelaksanaan</label>
                                                                <input type="text" id="cert_start_year-0" class="datepicker-thnbln form-control" name="pelatihan[cert_start_year][0]">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group text-left">
                                                                <label for="cert_end_year-0" class="form-label">Berakhir Pada</label>
                                                                <input type="text" id="cert_end_year-0" class="datepicker-thnbln form-control" name="pelatihan[cert_end_year][0]">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="dataCertificateList"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <button type="button" class="btn-tambah-data mt-3 mb-3" onclick="renderDataCertificate()"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <div class="row">
                                                    <div class="mb-3 col-md-3"><a href="javascript:;" class="w-100 form-wizard-previous-btn float-left">Sebelumnya</a></div>
                                                    <div class="col-md-6"></div>
                                                    <div class="mb-3 col-md-3"><a href="javascript:;" class="w-100 form-wizard-next-btn float-right" onclick="topFunction()">Berikutnya <i class="fa fa-arrow-right" aria-hidden="true"></i> </a></div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="wizard-fieldset">
                                            <h5 class="head-title">
                                                Pengalaman Kerja Terakhir
                                            </h5>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="wizard-form-radio form-outline mb-1">
                                                        <label class="form-label">Apakah Anda memiliki pengalaman kerja? <span class="required">*</span></label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="is_exp" id="es_exp_false" value="1">
                                                            <label class="form-check-label" for="es_exp_false">Iya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="is_exp" id="is_exp_true" value="0">
                                                            <label class="form-check-label" for="is_exp_true">Tidak <i>(Fresh Graduate)</i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="" class="fresh_gred" hidden="hidden">
                                                <div class="kerja-detail kerja-data-0 mt-1 mb-4 " style="padding: 8px 16px; border: 1px solid #c9c9c9; border-radius: 8px;">
                                                    <div class="experience-section">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="company_name-0" class="">Nama Perusahaan <span class="required">*</span></label>
                                                                    <input type="text" name="kerja[company_name][0]" id="company_name-0" class="exp_wajib form-control wizard-required">
                                                                    <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="company_address-0" class="">Lokasi Perusahaan <span class="required">*</span></label>
                                                                    <input type="text" name="kerja[company_address][0]" id="company_address-0" class="exp_wajib form-control wizard-required">
                                                                    <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="company_industry-0">Industri Perusahaan <span class="required">*</span></label>
                                                                <select class="exp_wajib form-control wizard-required mb-3 select2 select2-hidden-accessible" name="kerja[company_industry][0]" id="company_industry-0" data-select2-id="select2-data-company_industry-0" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" disabled="true" data-select2-id="select2-data-24-vj9f">Pilih Industri Perusahaan</option>
                                                                    <option value="1001">Agribisnis</option><option value="1002">Akuntan / Auditor</option><option value="1003">Alas Kaki</option><option value="1004">Asuransi</option><option value="1005">Bioteknologi&amp;Biologi</option><option value="1006">Biro Perjalanan</option><option value="1007">Bubur Kertas/Kertas</option><option value="1008">Des. Interior/Grafis</option><option value="1009">E-Commerce</option><option value="1010">Ekspedisi/Agen Kargo</option><option value="1011">Elektronika/Semikond</option><option value="1012">Energi</option><option value="1013">Farmasi</option><option value="1014">Furnitur</option><option value="1015">Garmen / Tekstil</option><option value="1016">Hiburan / Rekreasi</option><option value="1017">Hotel</option><option value="1018">Hukum</option><option value="1019">Internet</option><option value="1020">Jasa Pemindahan</option><option value="1021">Jasa Pengamanan</option><option value="1022">Kehutanan/Perkayuan</option><option value="1023">Kelautan/Aquakultur</option><option value="1024">Keramik&amp;Alat Bersih</option><option value="1025">Kesehatan</option><option value="1026">Keuangan / Bank</option><option value="1027">Kimia</option><option value="1028">Komputer / IT</option><option value="1029">Konglomerasi</option><option value="1030">Konstruksi</option><option value="1031">Konsultan</option><option value="1032">Kosmetik</option><option value="1033">Kulit</option><option value="1034">Kurir</option><option value="1035">Logam</option><option value="1036">Logistik / Transport</option><option value="1037">Mainan</option><option value="1038">Makanan dan Minuman</option><option value="1039">Manajemen Fasilitas</option><option value="1040">Mgmt Lingk./Limbah</option><option value="1041">Media</option><option value="1042">Mekanik / Listrik</option><option value="1043">Mesin / Peralatan</option><option value="1044">Minyak dan Gas</option><option value="1045">Otomotif</option><option value="1046">Pemerintahan</option><option value="1047">Pemrosesan Makanan</option><option value="1048">Pendidikan</option><option value="1049">Penerbangan</option><option value="1050">Pengapalan</option><option value="1051">Pengolahan SDA</option><option value="1052">Perawatan Kesehatan</option><option value="1053">Percetakan &amp; Kemasan</option><option value="1054">Perniagaan Komoditas</option><option value="1055">Perdagangan Umum</option><option value="1056">Pergudangan</option><option value="1057">Perikanan</option><option value="1058">Periklanan/Cetak</option><option value="1059">Permata &amp; Perhiasan</option><option value="1060">Permen / Biskuit</option><option value="1061">Pertambangan/Mineral</option><option value="1062">Polimer/Plastk/Karet</option><option value="1063">Properti</option><option value="1064">Pupuk &amp; Pestisida</option><option value="1065">Rancang Bangun Pswt</option><option value="1066">Rekayasa&amp;Konstruksi</option><option value="1067">Rekrutmen / KPO</option><option value="1068">Restoran</option><option value="1069">Ritel</option><option value="1070">Sektor Nirlaba</option><option value="1071">Semen</option><option value="1072">Seni/Desain/Fashion</option><option value="1073">Servis</option><option value="1074">SumberDaya Alam Lain</option><option value="1075">Telekomunikasi</option><option value="1076">Wisata/Agen Travel</option><option value="1999">Lain-lain</option>                                                              </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-23-vjjq" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-company_industry-0-container" aria-controls="select2-company_industry-0-container"><span class="select2-selection__rendered" id="select2-company_industry-0-container" role="textbox" aria-readonly="true" title="Pilih Industri Perusahaan">Pilih Industri Perusahaan</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="job_type_id-0">Status Kepegawaian <span class="required">*</span></label>
                                                                <select class="exp_wajib form-control wizard-required mb-3 select2 select2-hidden-accessible" name="kerja[job_type_id][0]" id="job_type_id-0" data-select2-id="select2-data-job_type_id-0" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" disabled="true" data-select2-id="select2-data-26-wo89">Pilih Status Kepegawaian</option>
                                                                    <option value="6">Tetap</option><option value="7">Masa Percobaan</option><option value="8">PKWT</option><option value="14">Sub Kontraktor</option><option value="15">Trainee</option><option value="16">Magang</option><option value="17">Harian Lepas</option><option value="18">Borongan</option><option value="19">Lain-lain</option>                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-25-d2tn" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-job_type_id-0-container" aria-controls="select2-job_type_id-0-container"><span class="select2-selection__rendered" id="select2-job_type_id-0-container" role="textbox" aria-readonly="true" title="Pilih Status Kepegawaian">Pilih Status Kepegawaian</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="position-0" class="">Posisi Kerja <span class="required">*</span></label>
                                                                <input type="text" name="kerja[position][0]" id="position-0" class="exp_wajib form-control wizard-required">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="work_start_year-0" class="">Mulai Bekerja dari <span class="required">*</span></label>
                                                                <input type="text" name="kerja[work_start_year][0]" id="work_start_year-0" class="exp_wajib form-control wizard-required datepicker">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="word_end_year-0" class="">Sampai dengan <span class="required">*</span></label>
                                                                <input type="text" name="kerja[work_end_year][0]" id="word_end_year-0" class="exp_wajib form-control wizard-required datepicker">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="job_level-0">Tingkat Posisi <span class="required">*</span></label>
                                                                <select class="exp_wajib form-control wizard-required mb-3 select2 select2-hidden-accessible" name="kerja[job_level][0]" id="job_level-0" data-select2-id="select2-data-job_level-0" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" disabled="true" data-select2-id="select2-data-28-cn5n">Pilih Tingkat Posisi</option>
                                                                    <option value="1">Staf/Pelaksana</option><option value="2">Kepala Seksi</option><option value="3">Kepala Bagian/Supervisor</option><option value="4">Asisten Manager</option><option value="5">Manager</option><option value="6">General Manager</option><option value="7">Board of Director</option><option value="8">Owner</option><option value="9">Konsultan</option><option value="10">Freelancer</option><option value="11">Lain-lain</option>                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-27-hr8r" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-job_level-0-container" aria-controls="select2-job_level-0-container"><span class="select2-selection__rendered" id="select2-job_level-0-container" role="textbox" aria-readonly="true" title="Pilih Tingkat Posisi">Pilih Tingkat Posisi</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="country-0">Negara <span class="required">*</span></label>
                                                                <select class="exp_wajib form-control wizard-required mb-3 select2 select2-hidden-accessible" name="kerja[exp_country][0]" id="exp_country-0" data-select2-id="select2-data-exp_country-0" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" disabled="true" data-select2-id="select2-data-30-qr1s">Pilih Negara</option>
                                                                    <option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BL">Blue</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Sint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Islands</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="MM">Burma</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Islnd</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CD">Democratic Republic of the Congo</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TL">East Timor</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="EU">European Union</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guyana</option><option value="PF">French Polynesia</option><option value="TF">French Southern and Antarctic Lands</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey (Channel Islands)</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NT">NATO</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Islands</option><option value="KP">North Korea</option><option value="MP">North Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="OR">Orange</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="CG">Republic of the Congo</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="CS">Serbia and Montenegro</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten (Dutch part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the Southern Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="LC">St. Lucia</option><option value="PM">St. Pierre and Miquelon</option><option value="VC">St. Vincent and the Grenadines</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau Islands</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UN">United Nations</option><option value="UM">United States Minor Outlying Islands</option><option value="VI">United States Virgin Islands</option><option value="UY">Uruguay</option><option value="US">USA</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>                                                             </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-29-wogy" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-exp_country-0-container" aria-controls="select2-exp_country-0-container"><span class="select2-selection__rendered" id="select2-exp_country-0-container" role="textbox" aria-readonly="true" title="Pilih Negara">Pilih Negara</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="last_drawn_salary-0" class="">Gaji Terakhir <span class="required">*</span></label>
                                                                <input type="text" name="kerja[last_drawn_salary][0]" id="last_drawn_salary-0" class="exp_wajib uang form-control wizard-required">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="reason_for_leaving-0" class="">Alasan Keluar <span class="required">*</span></label>
                                                                <input type="text" name="kerja[reason_for_leaving][0]" id="reason_for_leaving-0" class="exp_wajib form-control wizard-required">
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="dataKerjaList"></div>
                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <button type="button" class="btn-tambah-data mt-3 mb-3" onclick="renderDataKerja()"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <div class="row">
                                                    <div class="mb-3 col-md-3"><a href="javascript:;" class="w-100 form-wizard-previous-btn float-left">Sebelumnya</a></div>
                                                    <div class="col-md-6"></div>
                                                    <div class="mb-3 col-md-3"><a href="javascript:;" class="w-100 form-wizard-next-btn float-right" onclick="topFunction()">Berikutnya <i class="fa fa-arrow-right" aria-hidden="true"></i> </a></div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="wizard-fieldset">
                                            <h5 class="head-title">
                                                Lainnya
                                            </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="wizard-form-radio form-outline mb-1">
                                                        <label class="form-label">Memiliki hubungan dengan karyawan Mitra Keluarga ? <span class="required">*</span></label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="is_relate" id="is_relate_false" value="0">
                                                            <label class="form-check-label" for="is_relate_false">Tidak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="is_relate" id="is_relate_true" value="1">
                                                            <label class="form-check-label" for="is_relate_true">Iya</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="relation_detail" hidden="hidden">
                                                <div class="lainnya-section">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="referral_relation">Jika Ya, apakah hubungan Anda dengan karyawan tsb ? <span class="required">*</span></label>
                                                                <select class="form-control wizard-required mb-3 select2 select2-hidden-accessible" name="referral_relation" id="referral_relation" data-select2-id="select2-data-referral_relation" tabindex="-1" aria-hidden="true">
                                                                    <option selected="" value="" data-select2-id="select2-data-32-hktj">Pilih hubungan</option>
                                                                    <option value="1">Teman</option>
                                                                    <option value="2">Saudara Kandung</option>
                                                                    <option value="3">Saudara dari Ayah</option>
                                                                    <option value="4">Saudara dari Ibu</option>
                                                                    <option value="5">Orang Tua</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-31-82t4" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-referral_relation-container" aria-controls="select2-referral_relation-container"><span class="select2-selection__rendered" id="select2-referral_relation-container" role="textbox" aria-readonly="true" title="Pilih hubungan">Pilih hubungan</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="referral_name" id="referral_name" class="form-control" maxlength="35" onkeypress="return /[a-z .]/gi.test(event.key)">
                                                                <label for="referral_name" class="wizard-form-text-label">Nama Lengkap</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="referral_division" id="referral_division" class="form-control" maxlength="35" onkeypress="return /[a-z .]/gi.test(event.key)">
                                                                <label for="referral_division" class="wizard-form-text-label">Bagian</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="referral_position" id="referral_position" class="form-control" maxlength="35" onkeypress="return /[a-z .]/gi.test(event.key)">
                                                                <label for="referral_position" class="wizard-form-text-label">Jabatan ? </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="referral_location" id="referral_location" class="form-control" maxlength="35" onkeypress="return /[a-z .]/gi.test(event.key)">
                                                                <label for="referral_location" class="wizard-form-text-label">Lokasi Mitra Keluarga</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Bersedia kerja lembur ? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="working_overtime" id="working_overtime1" value="0">
                                                                <label class="form-check-label" for="working_overtime1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="working_overtime" id="working_overtime2" value="1">
                                                                <label class="form-check-label" for="working_overtime2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Bersedia bekerja di hari Minggu/Libur Nasional/Hari Besar? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="working_holiday" id="working_holiday1" value="0">
                                                                <label class="form-check-label" for="working_holiday1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="working_holiday" id="working_holiday2" value="1">
                                                                <label class="form-check-label" for="working_holiday2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Bersedia bekerja shift ? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="working_shift" id="working_shift1" value="0">
                                                                <label class="form-check-label" for="working_shift1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="working_shift" id="working_shift2" value="1">
                                                                <label class="form-check-label" for="working_shift2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Bersedia ditempatkan di seluruh cabang Mitra Keluarga ? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="all_branch" id="all_branch1" value="0">
                                                                <label class="form-check-label" for="all_branch1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="all_branch" id="all_branch2" value="1">
                                                                <label class="form-check-label" for="all_branch2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="expected_salary" id="expected_salary" class="form-control uang">
                                                <label for="expected_salary" class="wizard-form-text-label">Gaji yang diharapkan (GROSS) </label>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="join_date" id="join_date" class="form-control datepicker">
                                                <label for="join_date" class="wizard-form-text-label">Kapan Anda siap bergabung ? </label>
                                            </div>
                                            <h5 class="head-title mt-5">
                                                Data File Sertifikat
                                            </h5>

                                            <div class="row border-bottom">
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-0">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Memiliki <b>Sertifikat Brevet</b> yang masih berlaku ? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="brevet" id="brevet1" value="0">
                                                                <label class="form-check-label" for="brevet1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="brevet" id="brevet2" value="1">
                                                                <label class="form-check-label" for="brevet2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-3 mt-0" id="brevet_file_1" hidden="hidden">
                                                        <span class="mt-2 mb-2">Upload Sertifikat Brevet</span>
                                                        <input type="file" id="brevet_file" name="brevet_file" class="form-control wizard-required" required="">
                                                        <span class="mt-1 small">
                                                            (Petunjuk: File type harus .docx, .pdf,. jpg/png, Ukuran Maksimum 2MB)
                                                        </span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border-bottom">
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-0">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Memiliki <b>Sertifikat Pelatihan BTCLS</b> yang masih berlaku? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="btcls" id="btcls1" value="0">
                                                                <label class="form-check-label" for="btcls1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="btcls" id="btcls2" value="1">
                                                                <label class="form-check-label" for="btcls2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-3 mt-0" id="btcls_file_1" hidden="hidden">
                                                        <span class="mt-2 mb-2">Upload Sertifikat Pelatihan BTCLS</span>
                                                        <input type="file" name="btcls_file" class="form-control wizard-required" required="">
                                                        <span class="mt-1 small">
                                                            (Petunjuk: File type harus .docx, .pdf,. jpg/png, Ukuran Maksimum 2MB)
                                                        </span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border-bottom">
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-0">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Memiliki <b>Sertifikat PPGDON</b> yang masih berlaku? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="ppgdon" id="ppgdon1" value="0">
                                                                <label class="form-check-label" for="ppgdon1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="ppgdon" id="ppgdon2" value="1">
                                                                <label class="form-check-label" for="ppgdon2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-3 mt-0" id="ppgdon_file_1" hidden="hidden">
                                                        <span class="mt-2 mb-2">Upload Sertifikat PPGDON</span>
                                                        <input type="file" name="ppgdon_file" class="form-control wizard-required" required="">
                                                        <span class="mt-1 small">
                                                            (Petunjuk: File type harus .docx, .pdf,. jpg/png, Ukuran Maksimum 2MB)
                                                        </span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border-bottom">
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-0">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Memiliki <b>Sertifikat ISO</b> yang masih berlaku ? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="iso" id="iso1" value="0">
                                                                <label class="form-check-label" for="iso1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="iso" id="iso2" value="1">
                                                                <label class="form-check-label" for="iso2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-3 mt-0" id="iso_file_1" hidden="hidden">
                                                        <span class="mt-2 mb-2">Upload Sertifikat ISO</span>
                                                        <input type="file" name="iso_file" class="form-control wizard-required" required="">
                                                        <span class="mt-1 small">
                                                            (Petunjuk: File type harus .docx, .pdf,. jpg/png, Ukuran Maksimum 2MB)
                                                        </span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border-bottom">
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-0">
                                                        <div class="wizard-form-radio form-outline mb-1">
                                                            <label class="form-label">Memiliki <b>Sertifikat Ruang Khusus</b> yang masih berlaku ? <span class="required">*</span></label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="cert" id="cert1" value="0">
                                                                <label class="form-check-label" for="cert1">Tidak</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="cert" id="cert2" value="1">
                                                                <label class="form-check-label" for="cert2">Ya</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 py-md-2">
                                                    <div class="form-group mb-3 mt-0" id="cert_file_1" hidden="hidden">
                                                        <span class="mt-2 mb-2">Upload Sertifikat Sertifikat Ruang Khusus</span>
                                                        <input type="file" name="cert_file" class="form-control wizard-required" required="">
                                                        <span class="mt-1 small">
                                                            (Petunjuk: File type harus .docx, .pdf,. jpg/png, Ukuran Maksimum 2MB)
                                                        </span>
                                                        <div class="wizard-form-error"><small style="color: #f00">* Wajib Diisi</small></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" id="lat" name="lat">
                                            <input type="hidden" id="lng" name="lng">

                                            <div class="form-group clearfix mt-3">
                                                <div class="row">
                                                    <div class="mb-3 col-md-3"><a href="javascript:;" class="w-100 form-wizard-previous-btn float-left">Sebelumnya</a></div>
                                                    <div class="col-md-6"></div>
                                                    <div class="mb-3 col-md-3"><a href="#!" id="btnSubmitData" class="w-100 float-right text-center" style="padding: 10px 50px; background-image: linear-gradient(146.22deg, #FE7835 20%, #FE35AE 100%); border-radius: 8px; border:none; color:#FFF;" type="submit">Daftar Sekarang</a></div>
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

<script type="text/javascript">
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
</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon="{&quot;rayId&quot;:&quot;85266470af255fa9&quot;,&quot;r&quot;:1,&quot;version&quot;:&quot;2024.2.0&quot;,&quot;token&quot;:&quot;d5bc3e2a41a749829a23f91f8e681b74&quot;}" crossorigin="anonymous">
</script>

