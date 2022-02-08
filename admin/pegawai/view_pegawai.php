<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from mahasiswa WHERE nrp='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Siswa</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NRP</b>
							</td>
							<td>:
								<?php echo $data_cek['nrp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>email</b>
							</td>
							<td>:
								<?php echo $data_cek['email']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jurusan</b>
							</td>
							<td>:
								<?php echo $data_cek['jurusan']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

					<a href="report/cetak-pegawai.php?nrp=<?php echo $data_cek['nrp']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto siswa
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
				<img src="img/<?= $data_cek["gambar"]; ?>" width="250px">
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nrp']; ?>
					-
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>






