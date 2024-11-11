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




    table, td, th {
    padding: 3px 5px 3px 5px;
    border: 1px solid;
    text-align: center;
    }

    table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 4cm;
    }
		h1 {
			text-align: center;
			font-size:18px;
			text-transform: uppercase;
		}
		.letter {
  width: 80%;
  max-width: 600px;
  background-color: white;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.letter-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.letter-header img {
  width: 10%;
  height: 10%;
}
.letter-text {
  display: flex;
  flex-direction: column;
}
.letter-text h1 {
align-items: center;
  margin-left: 15px;
  font-size: 18px;
  font-weight: bold;
}
.letter-text h2 {
	align-items: center;
  margin-left: 15px;
  font-size: 16px;
  font-weight: bold;
}

.letter-content {
  display: block;
  margin-bottom: 20px;
  align-items: end;
  margin-left: 500px;
}

.letter-footer {
  display: block;
  justify-content: flex-end;
  align-items: flex-end;
  font-size: 14px;
  color: #666;
  margin-left: 500px;
}

.letter-footer span {
  margin-left: 10px;
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
        <br>
        <hr>  

        <h1>Laporan Data Pelamar</h1>
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
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="letter-content" style="align-items: flex-end;">
                        <p style="margin-bottom: 100px;">Bekasi, 28 Mei 2024</p>
                        <p>Direktur SDM,</p>

                    </div>
                    <hr>
                    <div class="letter-footer" style="padding-top: 10px;">

                        <p>Rumah Sakit Anna Pekayon 
                        <br>Jl. Raya Pekayon No. 36
                        <br>Bekasi Selatan - Kota Bekasi
                        <br>Telp: 082258222234
                        </p>
                        
                    </div>
		
	</div>
</body>
<footer>
  
</footer>
</html>