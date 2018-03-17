<section class="content-header">
	<h1>Setting</h1>
	<br>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/admin/dashboard">
				<i class="fa fa-dashboard"></i> Setting</a>
		</li>
		<li class="active">View</li>
	</ol>
</section>
<section class="content">
	<form role="form" action="<?php echo base_url() ?>admin/setting/update" method="POST" enctype="multipart/form-data">
										<!-- <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>"> -->
										<div class="box-body">
                                            <div class="form-group">
												<label for="exampleInputEmail1">Banner Title</label>
												<input name="bannertitle" value="<?php echo $setting['banner_title'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="Banner Title">
                                            </div>
											<div class="form-group">
												<label for="exampleInputEmail1">Banner Description</label>
												<input name="bannerdescription" value="<?php echo $setting['banner_description'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="Banner Description">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Banner Other</label>
												<input name="bannerother" value="<?php echo $setting['banner_other'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Banner Other">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Banner Img</label>
												<input name="bannerimg" type="file" class="form-control" id="exampleInputEmail1" placeholder="Banner Img">
											</div>
											<div style="background-image: url(<?php echo base_url() ?>_assets/banner_bg/<?php echo $setting['banner_img'] ?>)" class="setting-banner">
												
											</div>

										</div>

											<button type="submit" class="btn btn-primary">Update</button>
									</form>
</section>