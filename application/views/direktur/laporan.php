<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
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
        <link  type="text/css" media="print">
	<style>
		body{
			font-family: Arial;
			font-size: 12px;
		}
		.cetak{
			width: 19cm;
			height: 27cm;
			padding: 1cm;
		}
		td {
		padding: 3px 5px 3px 5px;
		border-right: 1px solid #666666;
		border-bottom: 1px solid #666666;
		}

		.head td {
		font-weight: bold;
		font-size: 12px;
		background: #b7f0ff; 
		}

		table .main tbody tr td {
		font-size: 12px;
		}

		table, table .main {
		width: 100%;
		border-top: 1px solid #666;
		border-left: 1px solid #666;
		border-collapse: collapse;
		background: #fff;
		}

		h1 {
			text-align: center;
			font-size:18px;
			text-transform: uppercase;
		}
	</style>
</head>
<body onload="print()">
	<div class="cetak">
		<div class="letter-header">
            <img src="<?= base_url(); ?>assets/logo-anna.jpg">
            <div class="letter-text">
                <h1>PT. NUR AMANAH</h1>
                <h2>Rumah Sakit ANNA</h2>
            </div>
        </div>
        <hr>  
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
		<h1>Laporan Data Lowongan</h1>
	</div>
</body>
</html>