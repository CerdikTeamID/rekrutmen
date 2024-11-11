<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-info" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Data Calon Pelamar</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Direktur"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item active">Data Calon Pelamar</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>
<div id="doc_print">
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Data Calon Pelamar </h2>
                <hr>
                <p>Jika data calon pelamar yang belum direspon bertanda warna merah <span style="color: red;">*</span></p>
                <br>
                <div class="pull-right">
                    <a href="<?= base_url() ?>Direktur/laporan" title="Cetak" class="btn btn-secondary">
                    <i class="fa fa-print"></i> Print Laporan </a>
                </div>
                <div class="clearfix"></div>
                <hr>                
            </div>
            
                <div class="table-responsive">
                    <table id="lowongan" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lowongan</th>
                                <th>Nama Pelamar</th>
                                <th>Email</th>
                                <th>Hp</th>
                                <th>Status Lamaran</th>
                                <th>Tanggal Apply</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($apply as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama_lowongan ?></td>
                                    <td><?= $row->nama_pelamar ?></td>
                                    <td><?= $row->email ?></td>
                                    <td><?= $row->hp ?></td>
                                    <td <?= $row->status_hasil == 'Lolos Seleksi' ?   : '' ?>><?= $row->status_hasil ?></td>
                                    <td><?= date('d, M Y', strtotime($row->tgl_lamar)) ?></td>
                                    <td style="text-align: center;">
                                        <a href="<?= base_url() ?>Direktur/Detail_Calon_Pelamar/<?= $row->id_apply_job ?>"> <button class="btn btn-primary"><i class="fa fa-search"></i> Detail</button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- DATATABLE -->
<script src="<?= base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<!-- SWEETALERT -->
<script src="<?= base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('#lowongan').DataTable()    
</script>
<script >
    $(document).ready(function() {
        $('#lowongan').DataTable()
        var table_print = document.getElementById("table_print")
        table_print.style.display = "none"
        var no_print = document.getElementById("no_print");
        no_print.style.display = "block";

        $("#print").click(function() {
            no_print.style.display = "none";
            table_print.style.display = "block";
            print();
        });
    });

    function print() {
        var divToPrint = document.getElementById('doc_print');

        var newWin = window.open('', 'Print-Window');

        newWin.document.open();

        newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

        newWin.document.close();

        setTimeout(function() {
            newWin.close();
        }, 10);
        no_print.style.display = "block";
        table_print.style.display = "none";
    }
</script>