<div class="fh5co-hero">
<!-- <div class="fh5co-cover" data-stellar-background-ratio="0.5"> -->
<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-color: #f6f6f6">
		<div class="desc">
			<div class="container">
				<div class="row">
				<div class="desc2 animate-box">
						<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
							<!-- <p>Jondes<a href="" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p> -->
							<h2><i class="fa fa-paper-plane"></i> Air-Ticket</h2>
							<h3>Kami melayani Anda dengan sepenuh hati</h3>
							<p>Menyediakan jasa pembelian tiket pesawat online dengan harga terjangkau tanpa takut ribet, dimana pun Anda berada kami siap. Mengutamakan kepuasan pembeli dalam setiap transaksi. <b>Cepat, mudah, dan pasti aman</b></p>
							<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
							<!-- <input type="datetime-local"> -->
						</div>
					</div>
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<form action="<?php echo base_url() ?>search" method="GET">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
												<section>
													<label for="class">From:</label>
													<select name="rute_from" class="cs-select cs-skin-border">
														<option value="">Select</option>
														<?php foreach ($rute_all as $value) : ?>
															<option value="<?php echo $value['rute_from'] ?>"><?php echo $value['rute_from'] ?></option>
														<?php endforeach; ?>
													</select>
												</section>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
												<section>
													<label for="class">To:</label>
													<select name="rute_to" class="cs-select cs-skin-border">
													<option value="">Select</option>
														<?php foreach ($rute_all as $value) : ?>
															<option value="<?php echo $value['rute_to'] ?>"><?php echo $value['rute_to'] ?></option>
														<?php endforeach; ?>
													</select>
												</section>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In:</label>
													<input name="depart_date" type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class:</label>
													<select name="flight_class" class="cs-select cs-skin-border">
														<option value="Economy">Economy</option>
														<option value="First">First</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Passengers:</label>
													<select name="passengers" class="cs-select cs-skin-border">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input name="submit" type="submit" class="btn btn-default btn-block" value="Search Flight">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
