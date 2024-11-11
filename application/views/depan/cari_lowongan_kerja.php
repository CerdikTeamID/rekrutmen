<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>


<div class="row clearfix" style="margin-top: 3rem; margin-bottom: 5rem; margin-left: 3rem; margin-right: 3rem;">

    <div class="col-lg-12 col-md-12">
        <table id="lowongan" class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 90%; margin-left: 100px;">
            <thead>
                <tr>
                    <th style="text-align: center; font-size:20px;">Lowongan Kerja</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($lowongan as $row) { ?>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="preview col-lg-3 col-md-12">
                                        <div class="preview-pic">
                                            <div><img src="<?= base_url() ?>assets/icon/lowongan.png" class="img-fluid" /></div>
                                        </div>
                                    </div>
                                    <div class="details col-lg-9 col-md-12">
                                        <h3 class="product-title mb-0" style="font-weight: bold;"><?= $row->nama_lowongan ?></h3>
                                        <hr>
                                        <p class="product-description">
                                            <?php if (strlen($row->deskripsi) > 20) { ?>
                                                <?= substr($row->deskripsi, 0, 20) . " ..." ?>
                                            <?php } else { ?> <?= $row->deskripsi ?> <?php } ?>
                                        </p>
                                        <h5 class="sizes">Departement:
                                            <span class="size" title="small"><?= $row->nama_departement ?></span>
                                        </h5>
                                        <p class="price m-t-0">Salary: Rp. <span class="text-warning"><?= number_format($row->salary, 0, ',', ',') ?></span></p>
                                        <hr>
                                        <div class="action" style="float: right;">
                                            <a href="<?php echo site_url('auth');?>"><button class="btn btn-warning" type="button">Lamar Sekarang</button></a>
                                            <!-- <a href="<?= base_url() ?>Lowongan/Detail_Lowongan/<?= $row->id_lowongan ?>"><button class="btn btn-default" type="button">Read More..</button></a> -->
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?= base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script>
    $('#lowongan').DataTable()
</script>