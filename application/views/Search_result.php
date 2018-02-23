<!-- select data -->
	<div id="select">
		<div class="container">
			<div class="row">
				<table class="table table-hover table-bordered">
					<caption>Rute Penerbangan</caption>
					<thead>
						<tr>
							<th>No</th>
							<th>Depart Time</th>
							<th>Arrival Time</th>
							<th>Rute From</th>
							<th>Rute To</th>
							<th>Price</th>
						</tr>
					</thead>
					<?php foreach ($data as $d) { ?>
					<tbody>
						<tr>
							<td><?php echo $d['id']; ?></td>
							<td><?php echo $d['depart_time']; ?></td>
							<td><?php echo $d['arrival_time']; ?></td>
							<td><?php echo $d['rute_from']; ?></td>
							<td><?php echo $d['rute_to']; ?></td>
							<td><?php echo $d['price']; ?></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
<!-- end select data -->