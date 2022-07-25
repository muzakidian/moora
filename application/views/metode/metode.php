<!-- Begin Page Content -->
<body class="sidebar-dark">
<div class="main-wrapper">

<!-- partial:partials/_sidebar.html -->

<!-- partial -->

<div class="page-wrapper">
	<!-- partial:partials/_navbar.html -->

	<!-- partial -->


	<div class="page-content">
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menentukan Nilai Alternatif</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table1" width="100%" cellspacing="0">
					<thead>
						<tr>
							<?php foreach ($kriteria as $val) : ?>
								<th>C<?php echo $val->id_kriteria ?></th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($alternatif as $alt) : ?>
							<tr>
								<?php foreach ($kriteria as $val) :  ?>
									<td>
										<?php $data_perhitungan_nilai = $this->MetodeModel->get_niai_setiap_alternatif($alt->id_alternatif, $val->id_kriteria);
										echo $data_perhitungan_nilai['poin']; ?>
									</td>
								<?php endforeach ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Melakukan SQRT</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table2" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Alternatif</th>
							<th>Hasil Nilai SQRT</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($sqrt as $key => $value) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo "C" . $key; ?></td>
								<td><?php echo $value; ?></td>

							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Melakukan Normalisasi Matriks</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table2" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Kriteria</th>
							<?php foreach ($alternatif as $val) : ?>
							<?php endforeach ?>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($normalisasi as $key => $value) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo "C" . $key; ?></td>
								<?php foreach ($value as $k => $v) : ?>
									<td><?php echo $value[$k]; ?></td>
								<?php endforeach ?>

							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menghitung Nilai Matriks Ternormalisasi</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table2" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<?php foreach ($kriteria as $val) : ?>
								<th>C<?php echo $val->id_kriteria ?></th>
							<?php endforeach ?>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($ternormalisasi as $key => $value) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo "A" . $key; ?></td>
								<?php foreach ($value as $k => $v) : ?>
									<td><?php echo $value[$k]; ?></td>
								<?php endforeach ?>

							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Melakukan Nilai Optimasi Setiap Alternatif </h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table3" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Alternatif</th>
							<th>Nilai Maximum</th>
							<th>Nilai Minimum</th>
							<th>Nilai Yi = (Max - Min)</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($tabel_yi as $key => $value) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo "A" . $key; ?></td>
								<td><?php echo $max[$key]; ?></td>
								<td><?php echo $min[$key]; ?></td>
								<td><?php echo $value; ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menentukan Ranking Setiap Alternatif</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped table-sm display" id="table4" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Alternatif</th>
							<th>Nilai Optimasi</th>
							<th>Ranking</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php $key = 1; ?>
						<?php foreach ($sorted_rank_data as $key => $value) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo "A" . $key; ?></td>
								<td><?php echo $value['value']; ?></td>
								<td><?php echo $value['rank']; ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
</div>
</div>
</div>

</body>
<!-- End of Main Content -->