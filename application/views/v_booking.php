<html>
<head>
	<title>Tampil Jadwal</title>
</head>
<body>
	<center><h1>Tampil Jadwal</h1></center>
	<center><?php echo anchor('welcome/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>id</th>
			<th>depart_date</th>
			<th>depart_time</th>
			<th>rute_from</th>
			<th>rute_to</th>
			<th>price</th>
		</tr>
		<?php 
		$no = 1;
		foreach($jadwal as $j){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $j->depart_date ?></td>
			<td><?php echo $j->depart_time ?></td>
			<td><?php echo $j->rute_from ?></td>
			<td><?php echo $j->rute_to ?></td>
			<td><?php echo $j->price ?></td>
			<td>
			      <?php echo anchor('welcome/edit/'.$j->id,'Edit'); ?>
                              <?php echo anchor('welcome/hapus/'.$j->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>