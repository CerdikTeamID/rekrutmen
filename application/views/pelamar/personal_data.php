<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Diri</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Pelamar"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Data Diri</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <form action="<?= base_url() ?>Pelamar/updateDataPelamar" method="POST" enctype="multipart/form-data" id="form-data-diri">
                <div class="body">
                    <h6>Foto Pelamar</h6>
                    <div class="media">
                        <div class="media-left m-r-15" style="width: 15%;">
                            <img src="<?= base_url() ?>assets/data_pelamar/<?= $personal_data['foto_pelamar'] ?>" class="user-photo media-object" width="70%" alt="User">
                        </div>
                        <div class="media-body">
                            <p>Perbaharui Foto kamu.
                                <!-- <br> <em>Image should be at least 500kb</em> -->
                            </p>
                            <button type="button" class="btn btn-default" id="btn-upload-photo">Unggah Foto</button>
                            <input type="file" id="filePhoto" name="foto_pelamar" accept=".jpg, .png, .jpeg" class="sr-only">
                        </div>
                    </div>
                </div>

                <div class="body">
                    <h6 style="font-weight: bold;">Basic Information</h6>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">No KTP</label>
                                <input type="hidden" name="id" value="<?= $personal_data['id_pelamar'] ?>">
                                <input type="hidden" name="old_foto_pelamar" value="<?= $personal_data['foto_pelamar'] ?>">
                                <input type="hidden" name="old_cv" value="<?= $personal_data['cv'] ?>">
                                <input type="text" class="form-control" placeholder="No KTP *" id="no_ktp" value="<?= $personal_data['no_ktp'] ?>" name="no_ktp" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap *" id="nama_lengkap" name="nama_lengkap" value="<?= $personal_data['nama_pelamar'] ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir *" name="tempat_lahir" value="<?= $personal_data['tempat_lahir'] ?>" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Pendidikan</label>
                                <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" required>
                                    <option value=""></option>
                                        <option value="SMA" <?= $personal_data['pendidikan_terakhir'] == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                        <option value="D3" <?= $personal_data['pendidikan_terakhir'] == 'Diploma Tiga (D3)' ? 'selected' : '' ?>>Diploma Tiga (D3)</option>
                                        <option value="Strata Satu (S1)" <?= $personal_data['pendidikan_terakhir'] == 'Strata Satu (S1)' ? 'selected' : '' ?>>Strata Satu (S1)</option>
                                        <option value="Strata Dua (S2)" <?= $personal_data['pendidikan_terakhir'] == 'Strata Dua (S2)' ? 'selected' : '' ?>>Strata Dua (S2)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" class="form-control" placeholder="Jurusan *" name="jurusan" value="<?= $personal_data['jurusan'] ?>" required>
                            </div> -->
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-control" required>
                                    <option value=""></option>
                                    <option value="Laki-Laki" <?= $personal_data['jk'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= $personal_data['jk'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" id="agama" class="form-control" required style="width: 100%;">
                                    <option value=""></option>
                                    <option value="Islam" <?= $personal_data['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Khatolik" <?= $personal_data['agama'] == 'Khatolik' ? 'selected' : '' ?>>Khatolik</option>
                                    <option value="Protestan" <?= $personal_data['agama'] == 'Protestan' ? 'selected' : '' ?>>Protestan</option>
                                    <option value="Buddha" <?= $personal_data['agama'] == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                                    <option value="Hindu" <?= $personal_data['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                    <option value="Khonghucu" <?= $personal_data['agama'] == 'Khonghucu' ? 'selected' : '' ?>>Khonghucu</option>
                                    
                                </select>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="Tempat Lahir *" name="tgl_lahir" value="<?= $personal_data['tgl_lahir'] ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">CV</label>
                                <div class="row">
                                    <a href="<?= base_url() ?>assets/data_pelamar/<?= $personal_data['cv'] ?>" target="_blank"><button type="button" class="btn btn-primary" style="margin-left: 15px;">Lihat CV</button></a>
                                    <button type="button" class="btn btn-secondary" style="margin-left: 15px;" id="btn-upload-cv">Unggah CV</button>
                                    <input type="file" id="fileCv" name="cv" class="sr-only" accept=".doc, .docx, .pdf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body">
                    <h6 style="font-weight: bold;">General Information</h6>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Email *" name="email" required value="<?= $personal_data['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Domisili</label>
                                <textarea name="alamat_domisili" id="alamat" class="form-control"><?= $personal_data['alamat_domisili'] ?></textarea>
                            </div>
                            
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" class="form-control" placeholder="No Hp *" name="hp" id="phone" required value="<?= $personal_data['hp'] ?>">
                            </div>
                            <!-- <div class="form-group">
                                <label for="">No NPWP</label>
                                <input type="text" class="form-control" placeholder="No NPWP *" name="no_npwp" value="<?= $personal_data['no_npwp'] ?>" required>
                            </div> -->
                            
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>


<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Jquery Validation -->
<script src="<?= base_url() ?>assets/js/jquery-validation.js"></script>


<script>

    $('#jk').select2({
        placeholder: 'Select a Jenis Kelamin'
    });
    $('#pendidikan_terakhir').select2({
        placeholder: 'Select a Pendidikan'
    });
    $('#jurusan').select2({
        placeholder: 'Select a Jurusan'
    });
    $('#agama').select2({
        placeholder: 'Select a Agama'
    });
    $('#kewarganegaraan').select2({
        placeholder: 'Select a Kewarganegaraan'
    });
    $('#sim').select2({
        placeholder: 'Select a Jenis SIM'
    });
    $('#status_tempat_tinggal').select2({
        placeholder: 'Select a Status Tempat Tinggal'
    });

    $('#btn-upload-photo').on('click', function() {
        $(this).siblings('#filePhoto').trigger('click');
    });

    $('#btn-upload-cv').on('click', function() {
        $(this).siblings('#fileCv').trigger('click');
    });
</script>
<script>
$(document).ready(function(){
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Silakan masukan huruf saja");
    jQuery.validator.addMethod("maxfilesize", function(value, element, param) {
        return this.optional(element) || (element.files[0].size <= param);
    }, "File size must be under 500KB");

    $("#form-data-diri").validate({
        rules: {
            no_ktp: {
                
                number: true,
                maxlength: 16,
                minlength: 16
            },
            hp: {
                
                number: true,
                maxlength: 15
                
            },
            nama_lengkap: {
                
                lettersonly: true
            },
            tempat_lahir: {
                
                lettersonly: true
            },
            foto_pelamar: {
                required: true,
                maxfilesize: 500000 // 500KB
            }
            
        },
        messages: {
            no_ktp: {
                number: "Silakan masukan angka saja",
                maxlength: "Silakan masukan Maksimal 16 digit angka saja",
                minlength: "Silakan masukan Minimal 16 digit angka saja"
            },
            hp: {
                maxlength: "Silakan masukan Maksimal 15 digit angka saja"
            },
            nama_lengkap: {
                lettersonly: "Silakan masukan huruf saja"
            },
            foto_pelamar: {
                required: "Silakan Pilih Foto Anda",
                maxfilesize: "File gambar harus kurang dari 500KB"
            }
        },
        submitHandler: function(form) {
            console.log('Form submitted');
            form.submit(); // Submit the form if it's valid
        }
    });
});
</script>