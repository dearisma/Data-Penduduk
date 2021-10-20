<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th,
	td {
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
</style>
<center>
	<h1>Data Penduduk Kabupaten </h1>
</center>
<div style="overflow-x:auto;">
	<table>
		<tr>
			<th>NO</th>
			<th>Kabupaten</th>
			<th>Provinsi</th>
			<th>Jumlah Penduduk</th>
			
		</tr>
		<?php $no = 1;
		foreach ($data_kab as $dt) : ?>
			<tr>
			<td><?= $no ?></td>
			<td><?= $dt->nama_kabupaten ?></td>
			<td><?= $dt->nama_prov ?></td>
			<td><?= $dt->jml_penduduk=number_format($dt->jml_penduduk, 2)  ?></td>
									
			</tr>
		<?php $no++;
		endforeach ?>
	</table>
</div>
